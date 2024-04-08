-- USE MYSQL

CREATE TABLE IF NOT EXISTS day28_citizens (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name TEXT NOT NULL,
  age INT NOT NULL,
  address TEXT NOT NULL,
  job TEXT NOT NULL
);

INSERT INTO day28_citizens (name, age, address, job)
VALUES ('Vasily Bruchev', 24, 'Terminal 9 East', 'Taxi Driver'),
       ('Sinta', 23, 'Gloria 12 South', 'Student'),
       ('Marin Zhakaev', 31, 'Gloria 2 East', 'Employee'),
       ('Udin Muhammad', 68, 'Marhaba 13 North', 'Engineer'),
       ('Pablo Shiva', 26, 'Terminal 7 South', 'Taxi Driver'),
       ('Ushev Sunarto', 15, 'Terminal 7 North', 'Student'),
       ('Mahmud Abbas', 20, 'Gloria 5 North', 'Student'),
       ('Aprilia Svetlana', 21, 'Terminal 7 East', 'Artist'),
       ('Kurosuke Bhay', 44, 'Gloria 8 North', 'Lawyer'),
       ('Bambang Nagasaki', 26, 'Gloria 1 North', 'Artist'),
       ('Friedrich Engkols', 56, 'Terminal 13 East', 'Unemployed'),
       ('Bashi Nakamura', 27, 'Terminal 13 North', 'Taxi Driver'),
       ('Farhan Fadillah Harahap', 41, 'Terminal 7 West', 'Netrunner');

