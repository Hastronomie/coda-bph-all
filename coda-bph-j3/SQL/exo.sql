-- Exercice 1

SELECT username FROM users;

SELECT * FROM users WHERE id  = 3;

SELECT username FROM users WHERE id  = 2;

SELECT username, id FROM users ORDER BY id DESC;

SELECT username, id FROM users ORDER BY id ASC LIMIT 3 OFFSET 3;

-- Exercice 2

INSERT INTO users (id, username, email, job) VALUES 
("7", "Spiderman", "peter.parker@daily-bugle.com", "1");

INSERT INTO jobs (id, name) VALUES 
("5", "Lycéen");

-- Exercice 3

SELECT users.email, jobs.name
FROM users JOIN jobs
ON users.job = jobs.id
WHERE users.username = "Spiderman";

SELECT  users.username, users.email, jobs.name
FROM users JOIN jobs
ON users.job = jobs.id;

SELECT  users.email, jobs.name
FROM users JOIN jobs
ON users.job = jobs.id
WHERE jobs.name = "Journaliste";

-- Exercice 4

UPDATE users
SET job = 5
WHERE users.id = 7;

-- Exercice 5

DELETE FROM users
WHERE users.id = 6;