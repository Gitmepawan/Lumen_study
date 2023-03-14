CREATE DATABASE IF NOT EXISTS bookstore;
USE bookstore;

CREATE TABLE IF NOT EXISTS authors (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS books (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  author_id INT(11) NOT NULL,
  published_date DATE NOT NULL,
  PRIMARY KEY (id)
);

-- Dummy data for authors table
INSERT INTO authors (name, email) VALUES 
  ('John Smith', 'john.smith@example.com'),
  ('Jane Doe', 'jane.doe@example.com'),
  ('Bob Johnson', 'bob.johnson@example.com'),
  ('Lisa Davis', 'lisa.davis@example.com'),
  ('Mike Brown', 'mike.brown@example.com'),
  ('Karen Lee', 'karen.lee@example.com'),
  ('David Kim', 'david.kim@example.com'),
  ('Amy Nguyen', 'amy.nguyen@example.com'),
  ('Chris Hernandez', 'chris.hernandez@example.com'),
  ('Melissa Martinez', 'melissa.martinez@example.com');

-- Dummy data for books table
INSERT INTO books (title, author_id, published_date) VALUES 
  ('The Great Gatsby', 1, '1925-04-10'),
  ('To Kill a Mockingbird', 2, '1960-07-11'),
  ('1984', 3, '1949-06-08'),
  ('Pride and Prejudice', 4, '1813-01-28'),
  ('The Catcher in the Rye', 5, '1951-07-16'),
  ('The Hobbit', 6, '1937-09-21'),
  ('The Lord of the Rings', 6, '1954-07-29'),
  ('Animal Farm', 3, '1945-08-17'),
  ('Fahrenheit 451', 7, '1953-10-19'),
  ('Brave New World', 3, '1932-01-01');

INSERT INTO books (title, author_id, published_date) VALUES 
  ('One Hundred Years of Solitude', 8, '1967-05-30'),
  ('The Sound and the Fury', 1, '1929-10-07'),
  ('The Sun Also Rises', 1, '1926-10-22'),
  ('Moby-Dick', 9, '1851-10-18'),
  ('The Adventures of Huckleberry Finn', 10, '1884-12-10'),
  ('The Grapes of Wrath', 11, '1939-04-14'),
  ('The Picture of Dorian Gray', 12, '1890-07-01'),
  ('The Scarlet Letter', 4, '1850-03-16'),
  ('The Odyssey', 10, '800 BC'),
  ('The Iliad', 10, '760 BC');