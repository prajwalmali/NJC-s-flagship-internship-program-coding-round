# NJC’s flagship internship program coding round

## Table of contents
* [Introduction](#Introduction)
* [MOVIES Table](#Table-stored-in-the-database)
* [Queries](#Queries)
* [1st Query](#1-Retrieve-all-the-attributes-in-table)
* [2nd Query](#2-Retrieve-actor-names)
* [3rd Query](#3-Retrieve-actress-names)
* [4th Query](#4-Retrieve-Movie-name-and-director-name-of-movies-with-actor-name-as-Darshan-thoogudeepa)
* [5h Query](#5-Retrieve-details-of-movies-released-after-year-2020)
* [6th Query](#6-Retrieve-details-of-movie-named-as-Free-Guy)
* [7th Query](#7-Retrieve-the-number-of-movies-released-in-the-year-2019)
* [8th Query](#8-Retrieve-movie-name-director-name-and-year-of-release-which-is-arranged-with-respect-to-directors-name-in-ascending-order)
* [9th Query](#9-Retrieve-details-of-movies-released-in-between-the-year-2015-and-2020-in-descending-order)
* [10th Query](#10-Retrieve-movie-name-and-year-of-release-of-movies-which-are-not-released-in-the-year-2021-arranged-with-respect-to-year-of-release-in-ascending-order)

## Introduction
This repository is created as a part of NJC's MuleSoft flagship Internship program. It contains a movie table with name, actor, actress, director, year of release as its attributes. Data is retrieved from the table by using queries, with the help of SQL.

1. Created "movie_db" database with table name "MOVIES" and stored details of movies.
2. File '_dbconnect.php' is used to connect to XAMPP server.
3. File 'queries.php' is used to execute queries and display the output table in website.
4. File 'movies.sql' contains all the SQL queries used in this test.

## Table stored in the database
![Movies_Table](https://user-images.githubusercontent.com/72367112/136655781-85da4c94-2f8e-4433-be57-7d24ce99bf3a.jpg)

## Queries
### 1. Retrieve all the attributes in table.
SELECT * FROM MOVIES;
![All_Movie_Details](https://user-images.githubusercontent.com/72367112/136655806-e1ab6a4b-8e1a-4aa3-9fb7-b2ae3bc8ff12.jpg)

### 2. Retrieve actor names.
SELECT DISTINCT actor FROM `movies` ORDER BY actor;
![Actor_Names](https://user-images.githubusercontent.com/72367112/136655844-a31cb324-5908-4887-862a-895bc9e459f9.jpg)

### 3. Retrieve actress names.
SELECT DISTINCT actress FROM `movies` ORDER BY actress;
![Actress_Names](https://user-images.githubusercontent.com/72367112/136655861-09abb74f-b142-44c5-a2e3-f00c0b29c8d6.jpg)

### 4. Retrieve Movie name and director name of movies with actor name as Darshan thoogudeepa.
SELECT name, director FROM `movies` WHERE actor = 'darshan thoogudeepa';
![Movies_By_Darshan](https://user-images.githubusercontent.com/72367112/136655951-eedfdd0b-d4ba-4b07-b31e-fd8377ee59b1.jpg)

### 5. Retrieve details of movies released after year 2020.
SELECT name, actor, actress, director FROM `movies` WHERE year_of_release > 2020;
![Movies_Released_After_2020](https://user-images.githubusercontent.com/72367112/136655992-7273a3da-d72c-4570-b3bc-65cd41224c9d.jpg)

### 6. Retrieve details of movie named as Free Guy.
SELECT * FROM `movies` WHERE name = 'FREE GUY';
![Details_Of_Movie_FreeGuy](https://user-images.githubusercontent.com/72367112/136656048-56fddcb6-8164-411d-ae2f-d6a92bee4f64.jpg)

### 7. Retrieve the number of movies released in the year 2019.
SELECT count(*) AS Movies_2019 FROM `movies` WHERE year_of_release = 2019;
![Number_Of_Movies_Released_In_2019](https://user-images.githubusercontent.com/72367112/136656074-a68901c0-68b1-4643-9ee8-c2204e146d59.jpg)

### 8. Retrieve movie name, director name and year of release which is arranged with respect to director's name in ascending order.
SELECT name, director, year_of_release FROM `movies` ORDER BY director;
![Movies_Arranged_With_Respect_To_Directors_Name](https://user-images.githubusercontent.com/72367112/136656118-e57e9466-1d84-4435-b532-42fc8b6429ae.jpg)

### 9. Retrieve details of movies released in between the year 2015 and 2020 in descending order.
SELECT name, actor, actress, year_of_release FROM `movies` WHERE year_of_release BETWEEN 2015 AND 2020 ORDER BY year_of_release DESC;
![Movies_Released_Between_2015_and_2020_In_Descending_Order](https://user-images.githubusercontent.com/72367112/136656168-3452c833-67c5-4e09-9e99-6f6b23e24772.jpg)

### 10. Retrieve movie name and year of release of movies which are not released in the year 2021, arranged with respect to year of release in ascending order.
SELECT name, year_of_release FROM `movies` WHERE year_of_release <> 2021 ORDER BY year_of_release;
![Movies_Whose_Release_Year_Is_Not_2021](https://user-images.githubusercontent.com/72367112/136656235-373b94e2-f061-4afd-b138-42797387cbc4.jpg)
