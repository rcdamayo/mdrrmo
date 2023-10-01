CREATE DATABASE population_data;

USE population_data;

CREATE TABLE Abango (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Amahit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Balire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Balud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Bukid (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Bulod (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Busay (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Cabarasan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Cabolo_an (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Calingcaguing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Can_isak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Canomantag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Cuta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Domogdog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Duka (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Guindaohan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Hiagsam (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Hilaba (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Hinugayan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Ibag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Minuhang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Minuswang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Pikas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Pitogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Poblacion1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Poblacion2 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Poblacion3 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Poblacion4 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Poblacion5 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Poblacion6 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Pongso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Roosevelt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE San_isidro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE San_roque (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Santa_rosa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Santarin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

CREATE TABLE Tutug_an (
    id INT AUTO_INCREMENT PRIMARY KEY,
    population_2015 INT,
    population_2020 INT,
    population_change INT,
    rate INT
);

-- alter

USE population_data;

ALTER TABLE Abango
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Abango
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Amahit
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Amahit
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Balire
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Balire
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Balud
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Balud
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Bukid
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Bukid
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Bulod
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Bulod
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Busay
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Busay
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Cabarasan
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Cabarasan
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Cabolo_an
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Cabolo_an
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Calingcaguing
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Calingcaguing
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Can_isak
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Can_isak
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Canomantag
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Canomantag
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Cuta
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Cuta
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Domogdog
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Domogdog
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Duka
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Duka
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Guindaohan
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Guindaohan
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Hiagsam
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Hiagsam
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Hilaba
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Hilaba
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Hinugayan
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Hinugayan
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Ibag
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Ibag
    MODIFY COLUMN rate DECIMAL(3, 2);

ALTER TABLE Minuhang
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Minuhang
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Minuswang
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Minuswang
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Pikas
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Pikas
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Pitogo
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Pitogo
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Poblacion1
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Poblacion1
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Poblacion2
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Poblacion2
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Poblacion3
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Poblacion3
    MODIFY COLUMN rate DECIMAL(3, 2);

ALTER TABLE Poblacion4
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Poblacion4
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Poblacion5
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Poblacion5
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Poblacion6
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Poblacion6
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Pongso
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Pongso
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Roosevelt
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Roosevelt
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE San_isidro
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE San_isidro
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE San_roque
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE San_roque
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Santa_rosa
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Santa_rosa
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Santarin
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Santarin
    MODIFY COLUMN rate DECIMAL(3, 2);


ALTER TABLE Tutug_an
    MODIFY COLUMN population_change DECIMAL(3, 2);

ALTER TABLE Tutug_an
    MODIFY COLUMN rate DECIMAL(3, 2);












INSERT INTO map_markers (barangay, latitude, longitude, level)
VALUES
    ('Abango', 11.2679, 124.7423, 'Normal'),
    ('Amahit', 11.2754, 124.7492, 'High'),
    ('Balire', 11.2825, 124.7326, 'Normal'),
    ('Balud', 11.3388, 124.7824, 'Medium'),
    ('Bukid', 11.2955, 124.7437, 'Normal'),
    ('Bulod', 11.3153, 124.7768, 'Low'),
    ('Busay', 11.3243, 124.7824, 'Normal'),
    ('Cabarasan', 11.3362, 124.7658, 'Normal'),
    ('Cabolo-an', 11.3290, 124.8017, 'Low'),
    ('Calingcaguing', 11.3107, 124.7625, 'Normal'),
    ('Can-Isak', 11.2676, 124.7713, 'Normal'),
    ('Canomantag', 11.3082, 124.7216, 'High'),
    ('Cuta', 11.3183, 124.7547, 'Normal'),
    ('Domogdog', 11.3302, 124.7460, 'Low'),
    ('Duka', 11.3513, 124.7796, 'Normal'),
    ('Guindaohan', 11.2978, 124.7271, 'Normal'),
    ('Hiagsam', 11.2781, 124.7753, 'Normal'),
    ('Hilaba', 11.3146, 124.7368, 'Normal'),
    ('Hinugayan', 11.3032, 124.7865, 'Normal'),
    ('Ibag', 11.3117, 124.8045, 'Medium'),
    ('Minuhang', 11.3280, 124.7547, 'Normal'),
    ('Minuswang', 11.3204, 124.7250, 'High'),
    ('Pikas', 11.2905, 124.7664 , 'Normal'),
    ('Pitogo', 11.2751, 124.7879, 'Low'),
    ('Poblacion Dist. I', 11.3228, 124.7347, 'Normal'),
    ('Poblacion Dist. II', 11.3204, 124.7364 , 'Normal'),
    ('Poblacion Dist. III', 11.3256, 124.7363, 'Low'),
    ('Poblacion Dist. IV', 11.3230, 124.7404, 'Normal'),
    ('Poblacion Dist. V', 11.3248, 124.7375, 'Normal'),
    ('Poblacion Dist. VI', 11.3206, 124.7448, 'Medium'),
    ('Pongso', 11.2781, 124.7658, 'Normal'),
    ('Roosevelt', 11.2952, 124.7824, 'Normal'),
    ('San Isidro', 11.3102, 124.7340, 'Medium'),
    ('San Roque', 11.3053, 124.7774, 'Normal'),
    ('Santa Rosa', 11.2882, 124.7989, 'Normal'),
    ('Santarin', 11.3226, 124.7313, 'High'),
    ('Tutug-an', 11.3074, 124.7530, 'Normal');



INSERT INTO age_group (age_group, population_2015, age_percentage)
VALUES
    ('15 to 19', 3548, 10.84),
    ('20 to 24', 2960, 9.04),
    ('25 to 29', 2269, 6.93),
    ('30 to 34', 1903, 5.81),
    ('35 to 39', 1735, 5.30),
    ('40 to 44', 1665, 5.08),
    ('45 to 49', 1584, 4.84),
    ('50 to 54', 1431, 4.37),
    ('55 to 59', 1278, 3.90),
    ('60 to 64', 953, 2.91),
    ('65 to 69', 772, 2.36),
    ('70 to 74', 546, 1.67),
    ('75 to 79', 353, 1.08),
    ('80 and over', 432, 1.32);