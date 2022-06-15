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

BEGIN
    CREATE UNIQUE INDEX user_linkblue_uindex ON users (linkblue)
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='Patient' and xtype='U')
BEGIN
CREATE TABLE Patient (patient_id INT IDENTITY(1,1), 
	last_updated_date DATE default NULL, file_status VARCHAR(15) default '', 
	gender VARCHAR(10) default '', race VARCHAR(41) default '', ethnicity VARCHAR(20) default '', 
	dob DATE default NULL, entry NVARCHAR(MAX), constraint patient_PK PRIMARY KEY (patient_id))
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='Surgery' and xtype='U')
BEGIN
CREATE TABLE Surgery (patient_id INT, surgery_name VARCHAR(2) default'', surgery_date DATE default NULL, 
	surgery_notes VARCHAR(250) default '', attending_surgeon VARCHAR(40) default '', age FLOAT default NULL,
	CONSTRAINT patient_FK FOREIGN KEY (patient_id) REFERENCES dbo.Patient (patient_ID))
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='icd' and xtype='U')
BEGIN
CREATE TABLE icd (patient_id INT, icd VARCHAR(8) NOT NULL DEFAULT '', 
	CONSTRAINT patient_icd_FK FOREIGN KEY (patient_id) REFERENCES dbo.Patient (patient_ID))
END