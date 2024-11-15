CREATE DATABASE website;
USE website;

CREATE TABLE certificates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255)
);
INSERT INTO certificates (title, description, image) VALUES 
('شهادة علمية', 'هذه شهادة في المجال العلمي.', 'certificate1.jpg'),
('شهادة رياضية', 'هذه شهادة في المجال الرياضي.', 'certificate2.jpg'),
('شهادة مجتمعية', 'هذه شهادة في المجال المجتمعي.', 'certificate3.jpg');
