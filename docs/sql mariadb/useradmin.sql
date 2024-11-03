CREATE USER 'name_user'@'localhost' IDENTIFIED BY 'password';
-- Privileges in all of databases, only I will use it, I know it is not very good practice, but only I will use it
GRANT ALL PRIVILEGES ON *.* TO 'name_user'@'localhost' WITH GRANT OPTION;
-- Apply changes
FLUSH PRIVILEGES;
