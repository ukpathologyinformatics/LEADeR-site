IF NOT EXISTS(SELECT * FROM sys.databases WHERE name = 'myDB')
  BEGIN
    CREATE DATABASE [myDB]


    END
    GO
       USE [myDB]
    GO
--You need to check if the table exists
IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='users' and xtype='U')
BEGIN
    CREATE TABLE users(id VARCHAR(36) NOT NULL CONSTRAINT user_pk PRIMARY KEY NONCLUSTERED, linkblue VARCHAR(36) NOT NULL, role INT DEFAULT 1 NOT NULL, CONSTRAINT user_role_id_fk FOREIGN KEY (role) REFERENCES user_roles (id) ON DELETE CASCADE ON UPDATE CASCADE)
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='user_sessions' and xtype='U')
BEGIN
    CREATE TABLE user_sessions(session_id VARCHAR(36) NOT NULL CONSTRAINT user_sessions_pk PRIMARY KEY NONCLUSTERED, user_id VARCHAR(36) NOT NULL CONSTRAINT user_sessions_users_id_fk REFERENCES users ON DELETE CASCADE, last_seen   DATETIME DEFAULT getdate() NOT NULL, remember_me BIT DEFAULT 0 NOT NULL)
END

IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='user_roles' and xtype='U')
BEGIN
    CREATE TABLE user_roles(id INT NOT NULL CONSTRAINT user_roles_pk PRIMARY KEY NONCLUSTERED, role_name VARCHAR(64) NOT NULL)
END

BEGIN
    CREATE UNIQUE INDEX user_linkblue_uindex ON users (linkblue)
END