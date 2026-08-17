-- ============================================================
--  MyPropertyStation Database Schema
--  WAMP Compatible | MySQL 5.7+
--  Run this in phpMyAdmin or MySQL CLI
-- ============================================================

CREATE DATABASE IF NOT EXISTS mypropertystation_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE mypropertystation_db;

-- Users Table (Signup / Login)
CREATE TABLE IF NOT EXISTS users (
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name   VARCHAR(100)  NOT NULL,
    email       VARCHAR(150)  NOT NULL UNIQUE,
    phone       VARCHAR(15)   NOT NULL,
    password    VARCHAR(255)  NOT NULL,                 -- bcrypt hashed
    role        ENUM('user', 'admin') DEFAULT 'user',
    is_verified TINYINT(1)    DEFAULT 0,
    created_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME      NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Sessions Table (for server-side session token tracking)
CREATE TABLE IF NOT EXISTS user_sessions (
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id     INT UNSIGNED NOT NULL,
    token       VARCHAR(191) NOT NULL UNIQUE,
    ip_address  VARCHAR(45)  NULL DEFAULT NULL,
    user_agent  TEXT         NULL DEFAULT NULL,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    expires_at  DATETIME     NULL DEFAULT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;
