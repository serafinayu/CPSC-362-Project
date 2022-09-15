CREATE DATABASE IF NOT EXISTS foodDB;
USE foodDB;

Drop table if exists FOOD;
CREATE table FOOD(
    Restaurant varchar(20),
    Food_type varchar (20),
    Street_address varchar (69),
    Cost varchar (10),
    PRIMARY KEY(Food_type)
)

INSERT INTO FOOD(Restaurant, Food_type, Street_address, Cost)
VALUES
/* write shit here */
('In-n-Out', 'Fast Food', '1180 S Harbor Blvd, Fullerton, CA 92832', '$'),
('Roll and Grill', 'Teriyaki', '1308 E Chapman Ave, Fullerton, CA 92831', '$'),
('Ikram grill', 'Middle eastern', '9895 Warner Ave ste f, Fountain Valley, CA 92708', '$$'),
('bb.q chicken', 'Chicken', '2323 E Chapman Ave Unit C, Fullerton, CA 92831', '$$'),
('Noodle St', 'Noodle', '2323 E Chapman Ave Ste B, Fullerton, CA 92831', '$$'),
('Nick the Greek', 'Greek', '501 N State College Blvd Suite C, Fullerton, CA 92831', '$$'),
('The Hat', 'American', '1210 E Imperial Hwy, Brea, CA 92821', '$$'),
('Thai Basil', 'Thai', '2431 E Chapman Ave, Fullerton, CA 92831', '$$'),
('Waba grill', 'Teriyaki', '565 N Commonwealth Ave, Fullerton, CA 92831', '$'),
('L&L Hawaiian Barbeque', 'Hawaiian', '339 N State College Blvd, Fullerton, CA 92831', '$'),
('Flame Broiler', 'Korean', '2720 Nutwood Ave #103, Fullerton, CA 92831', '$'),
('Benihana', 'Japanese', '2100 E Ball Rd, Anaheim, CA 92806', '$$$'),
('TAPS Fish House & Brewery', 'Seafood', '101 E Imperial Hwy, Brea, CA 92821', '$$$'),
('Summit House Restaurant', 'American', '2000 E Bastanchury Rd, Fullerton, CA 92835', '$$$')

DROP TABLE IF EXISTS FOOD_Backup;
CREATE TABLE FOOD_Backup AS SELECT * FROM FOOD;