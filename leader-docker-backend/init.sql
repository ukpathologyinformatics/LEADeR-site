IF NOT EXISTS(SELECT * FROM sys.databases WHERE name = 'myDB')
  BEGIN
    CREATE DATABASE [myDB]
    END
    GO
       USE [myDB]
    GO
--You need to check if the table exists

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='user_roles' and xtype='U')
BEGIN
    CREATE TABLE user_roles(id INT NOT NULL CONSTRAINT user_roles_pk PRIMARY KEY NONCLUSTERED, role_name VARCHAR(64) NOT NULL);
	INSERT INTO user_roles VALUES (0, 'Admin'), (1, 'User');
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='users' and xtype='U')
BEGIN
    CREATE TABLE users(id VARCHAR(36) NOT NULL CONSTRAINT user_pk PRIMARY KEY NONCLUSTERED, linkblue VARCHAR(36) NOT NULL, role INT DEFAULT 1 NOT NULL, CONSTRAINT user_role_id_fk FOREIGN KEY (role) REFERENCES user_roles (id) ON DELETE CASCADE ON UPDATE CASCADE)
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='user_sessions' and xtype='U')
BEGIN
    CREATE TABLE user_sessions(session_id VARCHAR(36) NOT NULL CONSTRAINT user_sessions_pk PRIMARY KEY NONCLUSTERED, user_id VARCHAR(36) NOT NULL CONSTRAINT user_sessions_users_id_fk REFERENCES users ON DELETE CASCADE, last_seen   DATETIME DEFAULT getdate() NOT NULL, remember_me BIT DEFAULT 0 NOT NULL)
END

IF NOT EXISTS (SELECT * FROM sys.indexes WHERE object_id = OBJECT_ID('users') AND name='user_linkblue_uindex')
BEGIN
    CREATE UNIQUE INDEX user_linkblue_uindex ON users (linkblue)
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='patient' and xtype='U')
BEGIN
CREATE TABLE patient ( 
    patient_id			BIGINT IDENTITY(1,1) PRIMARY KEY,
    status              VARCHAR(32) NOT NULL,
    subj_id             VARCHAR(32) NOT NULL,
    first_recorded      DATE DEFAULT NULL,
	last_updated_date	DATE DEFAULT NULL, 
	file_status			VARCHAR(15) DEFAULT NULL, 
	gender				VARCHAR(10) DEFAULT NULL, 
	race				VARCHAR(41) DEFAULT NULL, 
	ethnicity			VARCHAR(20) DEFAULT NULL, 
	dob					DATE DEFAULT NULL, 
	entry				NVARCHAR(MAX)
); 
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='icd' and xtype='U')
BEGIN
CREATE TABLE icd (
	icd_code	VARCHAR (7) NOT NULL PRIMARY KEY,
	icd_desc	VARCHAR (100) NOT NULL
);
END

/* Join Table for patient and ICD codes */
IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='patient_icd' and xtype='U')
BEGIN
CREATE TABLE patient_icd (
	patient_id	BIGINT REFERENCES patient(patient_id) ON UPDATE CASCADE ON DELETE CASCADE,
	icd_code	VARCHAR(7) REFERENCES icd(icd_code) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT PK_patient_icd PRIMARY KEY (patient_id, icd_code)
);
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='surgery' and xtype='U')
BEGIN
CREATE TABLE surgery (
	CPT_code		CHAR(5) PRIMARY KEY,
	surgery_name	VARCHAR(64) NOT NULL,
);
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='patient_surgery' and xtype='U')
BEGIN
CREATE TABLE patient_surgery (
	patient_id	BIGINT REFERENCES patient(patient_id) ON UPDATE CASCADE ON DELETE CASCADE,
	surgery_id	CHAR(5) REFERENCES surgery(CPT_code) ON UPDATE CASCADE ON DELETE CASCADE,
	surgery_date DATE default NULL, 
	surgery_notes VARCHAR(250) default '', 
	attending_surgeon VARCHAR(40) default '',
	age FLOAT default NULL,
	CONSTRAINT PK_patient_surgery PRIMARY KEY (patient_id, surgery_id)
);
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='classifications' and xtype='U')
BEGIN
CREATE TABLE classifications (
	code_id		VARCHAR(64) PRIMARY KEY,
	class_name	VARCHAR(64) NOT NULL,
	location	CHAR(2) NOT NULL /* LL, LR, UL, UR */
);
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='patient_class' and xtype='U')
BEGIN
CREATE TABLE patient_class (
	patient_id			BIGINT REFERENCES patient(patient_id) ON UPDATE CASCADE ON DELETE CASCADE,
	code_id				VARCHAR(64) REFERENCES classifications(code_id) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT PK_patient_class PRIMARY KEY (patient_id, code_id)
);
END


/* RETURN ID CREATED BY AUTOINCREMENT BY USING `SELECT SCOPE_IDENTITY()` AFTER THE INSERT*/