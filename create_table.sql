CREATE TABLE IF NOT EXISTS login_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    login_date DATETIME NOT NULL
); 