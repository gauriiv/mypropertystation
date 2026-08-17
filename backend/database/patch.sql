-- ============================================================
--  MyPropertyStation — PATCH SQL (Run this WITHOUT dropping DB)
--  Run inside phpMyAdmin after selecting mypropertystation_db
-- ============================================================

USE mypropertystation_db;

-- Step 1: Fix the users table updated_at column (TIMESTAMP -> DATETIME)
ALTER TABLE users
    MODIFY COLUMN updated_at DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

-- Step 2: Create user_sessions table (with DATETIME instead of TIMESTAMP for expires_at)
CREATE TABLE IF NOT EXISTS user_sessions (
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id     INT UNSIGNED NOT NULL,
    token       VARCHAR(255) NOT NULL UNIQUE,
    ip_address  VARCHAR(45)  NULL DEFAULT NULL,
    user_agent  TEXT         NULL DEFAULT NULL,
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    expires_at  DATETIME     NULL DEFAULT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Done! Both tables are now ready.
