-- Active: 1667515266047@@127.0.0.1@3306
CREATE DATABASE IF NOT EXISTS foodDB;
USE foodDB;

Drop table if exists FOOD;
CREATE table FOOD(
    Restaurant varchar(20),
    Food_type varchar (20),
    Street_address varchar (69),
    Cost varchar (10)
);

INSERT INTO FOOD(Restaurant, Food_type, Street_address, Cost)
VALUES
/* write shit here */
/*bbq*/
('Craft by Smoke & Fire', 'Barbeque', '195 W Center St Promenade Anaheim, CA 92805', '$$'),
('King Chang', 'Barbeque', '5350 Beach Blv Buena Park, CA 90621', '$$$'),
('bb.q chicken', 'Barbeque', '2323 E Chapman Ave Unit C, Fullerton, CA 92831', '$$'),
('L&L Hawaiian Barbeque', 'Barbeque', '339 N State College Blvd, Fullerton, CA 92831', '$'),
/*noodles*/
('Noodle St', 'Noodles', '2323 E Chapman Ave Ste B, Fullerton, CA 92831', '$$'),
('Pho Amie', 'Noodles', '737 N Placentia Ave, Fullerton, CA 92831', '$$'),
('Pho Ly Bun Bo Hue', 'Noodles', '634 E Whittier Blvd, La Habra, CA 90631','$'),
/*european*/
('Nick the Greek', 'European', '501 N State College Blvd Suite C, Fullerton, CA 92831', '$$'),
('The Cellar Restaurant', 'European', '305 N Harbor Blvd Ste 001 Fullerton, CA 92832', '$$$'),
('France Cafe', 'European', '3436 A Foothill Blvd La Crescenta, CA 91214', '$'),
/*japanese*/
('Roll and Grill', 'Japanese', '1308 E Chapman Ave, Fullerton, CA 92831', '$'),
('Waba Grill', 'Japanese', '565 N Commonwealth Ave, Fullerton, CA 92831', '$'),
('Teriyaki House Grill', 'Japanese', '15544 La Mirada Blvd La Mirada, CA 90638', '$$'),
('Benihana', 'Japanese', '2100 E Ball Rd, Anaheim, CA 92806', '$$$'),
('Izakaya Takasei', 'Japanese', '2980 Yorba Linda Blvd Fullerton, CA 92831', '$$'),
/*Middle Eastern*/
('Ikram grill', 'Middle Eastern', '9895 Warner Ave ste f, Fountain Valley, CA 92708', '$$'),
('Adana Grill', 'Middle Eastern', '1105 S Euclid St Ste F Fullerton, CA 92832', '$$'),
('Forn Al Hara', 'Middle Eastern', '512 S Brookhurst St Ste 5 Anaheim, CA 92804', '$'),
/*American*/
('The Hat', 'American', '1210 E Imperial Hwy, Brea, CA 92821', '$$'),
('Summit House Restaurant', 'American', '2000 E Bastanchury Rd, Fullerton, CA 92835', '$$$'),
/*Thai*/
('Thai Basil', 'Thai', '2431 E Chapman Ave, Fullerton, CA 92831', '$$'),
('Munch Thai Food & Sweet Tea', 'Thai', '880 W Lincoln Ave Anaheim, CA 92805', '$$'),
('E-San Rod-Sap', 'Thai', '1719 W La Palma Ave Anaheim, CA 92801', '$'),
/*Korean*/
('Flame Broiler', 'Korean', '2720 Nutwood Ave #103, Fullerton, CA 92831', '$'),
/*Mexican*/
('Taqueria De Anda', 'Mexican', '602 W Chapman Ave, Placentia, CA 92870', '$'),
('Rigobertos', 'Mexican', '1974 N Placentia Ave, Fullerton, CA 92831', '$'),
/*Sandwiches*/
('Mr Katsu', 'Sandwiches', '3165 Yorba Linda Blvd, Fullerton, CA 92831', '$$'),
('Lees Sandwiches', 'Sandwiches', '211 E. Orangethorpe Ave, Fullerton, CA 92832', '$'),
/*Seafood*/
('TAPS Fish House & Brewery', 'Seafood', '101 E Imperial Hwy, Brea, CA 92821', '$$$'),
/*Pizza*/
('Brooklynz Pizza', 'Pizza', '2720 Nutwood Ave, Fullerton, CA 92831', '$');


DROP TABLE IF EXISTS FOOD_Backup;
CREATE TABLE FOOD_Backup AS SELECT * FROM FOOD;