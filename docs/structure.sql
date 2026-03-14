/** todo:
 * At a glance, these seem to be "markup heavy" and not as "row heavy" or "relationship heavy"
 * As in, if we only have 100 or so of these, there's not necessarily a great reason to store them in the database.
 * Searching may be an exception.
 *
 * todo:
 * When we finalize this structure, we will need data entry into a spreadsheet that I can mass-import.
 * Maybe use AI?
 */

CREATE DATABASE moose_echoesbible;

CREATE TABLE user (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_Name VARCHAR(100) NOT NULL,
    about_me TEXT NOT NULL,
    created_timestamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE echo_group (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL DEFAULT 'Untitled',
    commentary TEXT NOT NULL,
    created_timestamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE echo_sub_group (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title_left VARCHAR(255) NOT NULL DEFAULT 'Untitled',
    title_right VARCHAR(255) NOT NULL DEFAULT 'Untitled',
    body_left TEXT NOT NULL,
    body_right TEXT NOT NULL,
    commentary TEXT NOT NULL,
    created_timestamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE echo (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title_left VARCHAR(255) NOT NULL DEFAULT 'Untitled',
    title_left VARCHAR(255) NOT NULL DEFAULT 'Untitled',
    fragment_left TEXT NOT NULL,
    fragment_right TEXT NOT NULL,
    translation_hebrew VARCHAR(255) NOT NULL DEFAULT '', /** todo: each translation has 3 parts..."symbols", native language, English */
    translation_lxx VARCHAR(255) NOT NULL DEFAULT '',
    translation_greek VARCHAR(255) NOT NULL DEFAULT '',
    commentary TEXT NOT NULL,
    created_timestamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
