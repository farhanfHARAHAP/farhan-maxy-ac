CREATE TABLE IF NOT EXISTS h2_events (
  id INT PRIMARY KEY,
  title TEXT NOT NULL,
  description TEXT,
  date DATE,
  date_rsvp DATE,
  poster TEXT
);

CREATE TABLE IF NOT EXISTS h2_rsvp (
  id INT PRIMARY KEY AUTO_INCREMENT,
  event_id INT NOT NULL,
  FOREIGN KEY (event_id) REFERENCES h2_events(id),
  email TEXT,
  name TEXT NOT NULL,
  institution TEXT,
  date DATE NOT NULL
);
