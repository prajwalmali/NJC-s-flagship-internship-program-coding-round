<?php
include '_dbconnect.php';

$sql = "SELECT * FROM `movies`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$movie_name = $row['name'];
$actor = $row['actor'];
$actress = $row['actress'];
$yor = $row['year_of_release'];
$director = $row['director']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>
        body {
            background-color: #ffcc5c;
        }
        .center {
            background-color: #87bdd8;
            margin-left: auto;
            margin-right:auto;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class = "text-center">Retrieving Data From Movie Table Using Queries</h1>
    <h2 class = "text-center">1. All Movie Details</h2>
    <table class = "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Actor</th>
                <th>Actress</th>
                <th>Director Name</th>
                <th>Year of release</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT * FROM `movies`";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['actor'] . "</td>
                    <td>". $row['actress'] . "</td>
                    <td>". $row['director'] . "</td>
                    <td>". $row['year_of_release'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">2. Actor Names</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Actor</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT DISTINCT actor FROM `movies` ORDER BY actor;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['actor'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">3. Actress Names</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Actress</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT DISTINCT actress FROM `movies` ORDER BY actress;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['actress'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">4. Movies Acted By Darshan Thoogudeepa</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Director Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT name, director FROM `movies` WHERE actor = 'darshan thoogudeepa';";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['director'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">5. Movies Released After The Year 2020</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Actor</th>
                <th>Actress</th>
                <th>Director Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT name, actor, actress, director FROM `movies` WHERE year_of_release > 2020;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['actor'] . "</td>
                    <td>". $row['actress'] . "</td>
                    <td>". $row['director'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">6. Details Of The Movie Named Free Guy</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Actor</th>
                <th>Actress</th>
                <th>Director Name</th>
                <th>Year of release</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT * FROM `movies` WHERE name = 'FREE GUY';";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['actor'] . "</td>
                    <td>". $row['actress'] . "</td>
                    <td>". $row['director'] . "</td>
                    <td>". $row['year_of_release'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">7. Number Of Movies Released in 2019</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movies_2019</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT count(*) AS Movies_2019 FROM `movies` WHERE year_of_release = 2019;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['Movies_2019'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">8. Movies Arranged With Respect To Director's Name</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Director Name</th>
                <th>Year of release</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT name, director, year_of_release FROM `movies` ORDER BY director;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['director'] . "</td>
                    <td>". $row['year_of_release'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">9. Movies Released Between 2015 And 2020 In Descending Order</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Actor</th>
                <th>Actress</th>
                <th>Year of release</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT name, actor, actress, year_of_release FROM `movies` WHERE year_of_release BETWEEN 2015 AND 2020 ORDER BY year_of_release DESC;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['actor'] . "</td>
                    <td>". $row['actress'] . "</td>
                    <td>". $row['year_of_release'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>

        <h2 class = "text-center">10. Movies Whose Year Of Release Is Not 2021</h2>
        <table class= "center" border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Year of release</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT name, year_of_release FROM `movies` WHERE year_of_release <> 2021 ORDER BY year_of_release;";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>". $row['name'] . "</td>
                    <td>". $row['year_of_release'] . "</td>
                </tr>";
              } 
            ?>
        </tbody>
        </table>
        <br><br>
</body>
</html>