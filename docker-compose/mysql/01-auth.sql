-- Set default authentication plugin to mysql_native_password for compatibility
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
ALTER USER 'admin'@'%' IDENTIFIED WITH mysql_native_password BY 'admin';
FLUSH PRIVILEGES;
