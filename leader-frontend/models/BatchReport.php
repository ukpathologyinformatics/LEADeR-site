<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class BatchReport implements JsonSerializable {
    protected $id;
    protected $filename;
    protected $content;
    protected $notes;
    protected $signed;
    protected $start_status;
    protected $signed_out_by;
    protected $signed_out_timestamp;
    protected $file_timestamp;
    protected $total_exceptions;
    protected $md5;

    public function __construct() { }

    public static function withId( $id ): ?BatchReport {
        try {
            $instance = new self();
            $instance->loadById($id);
            return $instance;
        } catch (PDOException $e) {
            return null;
        }
    }

    public static function withRow( $row ): BatchReport {
        $instance = new self();
        $instance->fill( $row );
        return $instance;
    }

    protected function loadById( $id ): void {
        $stmt = DB::run(
            "SELECT * FROM batch_reports WHERE batchID = :id ORDER BY batchID OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY",
            ['id' => $id]
        );
        $row = $stmt->fetch(PDO::FETCH_LAZY);
        if ($row <> null)
            $this->fill( $row );
        else
            throw new PDOException("BatchReport with id [{$id}] not found");
    }

    protected function fill( $row ): void {
        $this->id = $row['batchID'];
        $this->filename = $row['batch_filename'];
        $this->content = $row['batch_content'];
        $this->notes = $row['notes'];
        $this->signed = $row['signed'];
        $this->start_status = $row['start_status'];
        $this->signed_out_by = User::withLinkblue($row['personID']);
        try {
            if (!empty($row['signed_timestamp']))
                $this->signed_out_timestamp = new DateTime($row['signed_timestamp']);
        } catch (Exception $e) {
            $this->signed_out_timestamp = null;
        }
        try {
            if (!empty($row['file_timestamp']))
                $this->file_timestamp = new DateTime($row['file_timestamp']);
        } catch (Exception $e) {
            $this->file_timestamp = null;
        }
        $this->total_exceptions = $row['total_exceptions'];
        $this->md5 = $row['md5'];
    }

    /**
     * @return mixed
     */
    public function getExceptions()
    {
        $exceptions = [];
        $stmt = DB::run("
            SELECT
                be.exception AS 'exception',
                   be.exceptionUUID as 'Exception_UUID',
                   rn.notes as 'notes',
                   rn.personID as 'personID',
                   rn.timestamp as 'timestamp'
            FROM
                batch_exceptions be,
                 batch_reports br,
                 report_notes rn
            WHERE
                be.batchID = br.batchID AND
                  be.exceptionUUID = rn.exceptionUUID AND
                  br.batchID = '" . $this->getId() . "'
        ");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            $timestamp = null;
            try {
                if (!empty($row['timestamp']))
                    $timestamp = new DateTime($row['timestamp']);
            } catch (Exception $e) {
                $timestamp = null;
            }
            $exceptions[$row['Exception_UUID']] = [
                "exception" => $row['exception'],
                "notes" => $row['notes'],
                "person" => User::withLinkblue($row['personID']),
                "timestamp" => $timestamp,
            ];
        }
        return $exceptions;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
    public function getContentAsJson()
    {
        return json_decode($this->content);
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return mixed
     */
    public function getSigned()
    {
        return $this->signed;
    }

    /**
     * @return mixed
     */
    public function getStartStatus()
    {
        return $this->start_status;
    }

    /**
     * @return ?User
     */
    public function getSignedOutBy(): ?User
    {
        return $this->signed_out_by;
    }

    /**
     * @return mixed
     */
    public function getSignedOutTimestamp(): ?DateTime
    {
        return $this->signed_out_timestamp;
    }

    /**
     * @return mixed
     */
    public function getFileTimestamp()
    {
        return $this->file_timestamp;
    }

    /**
     * @return mixed
     */
    public function getTotalExceptions()
    {
        return $this->total_exceptions;
    }

    /**
     * @return mixed
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize(): array {
        return [
            'id'                    => $this->getId(),
            'filename'              => $this->getFilename(),
            'content'               => $this->getContentAsJson(),
            'notes'                 => $this->getNotes(),
            'signed'                => $this->getSigned(),
            'start_status'          => $this->getStartStatus(),
            'signed_out_by'         => $this->getSignedOutBy(),
            'signed_out_timestamp'  => $this->getSignedOutTimestamp(),
            'file_timestamp'        => $this->getFileTimestamp(),
            'total_exceptions'      => $this->getTotalExceptions(),
            'md5'                   => $this->getMd5(),
        ];
    }
}