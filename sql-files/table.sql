CREATE TABLE pv (
  id int(11) NOT NULL AUTO_INCREMENT,
  power int(10) DEFAULT NULL,
  datumuhrzeit datetime DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) 