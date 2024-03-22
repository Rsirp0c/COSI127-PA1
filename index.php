<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            width: 100%; /* Adjust width as needed */
            margin: 0 auto; /* Center the container horizontally */
            text-align: left; /* Align the content inside the container to the right */
        }
    </style>
    <title>COSI 127b</title>
</head>
<body>
    <div class="container">
        <h1>COSI 127b</h1>
        <h3>Connecting Front-End to MySQL DB</h3><br>
    </div>
    <div class="container">
    <h5>View all tables</h5>
        <!-- 1 -->
        <form action="index.php" method="post">
            <button type="submit" name="view_Award_table" value="view_Award_table">Award</button>
            <button type="submit" name="view_Genre_table" value="view_Genre_table">Genre</button>
            <button type="submit" name="view_Likes_table" value="view_Likes_table">Likes</button>
            <button type="submit" name="view_Location_table" value="view_Location_table">Location</button>
            <button type="submit" name="view_MotionPicture_table" value="view_MotionPicture_table">MotionPicture</button>
            <button type="submit" name="view_Movie_table" value="view_Movie_table">Movie</button>
            <button type="submit" name="view_People_table" value="view_People_table">People</button>
            <button type="submit" name="view_Role_table" value="view_Role_table">Role</button>
            <button type="submit" name="view_Series_table" value="view_Series_table">Series</button>
            <button type="submit" name="view_User_table" value="view_User_table">User</button>
        </form>
        <br>
        <h5>Queries</h5>
        <form action="index.php" method="post">
            <button type="submit" name="viewMovies" value="viewMovies">View All Movies</button>
            <button type="submit" name="viewActors" value="viewActors">View All Actors</button>
        </form>
        <br>
        </form>
        <form id="likeMovieForm" method="post" action="index.php">
            <input type="text" name="user_email" placeholder="Your email">
            <input type="text" name="movie_id" placeholder="Movie ID">
            <button type="submit" name="like_movie">Like this movie</button>
        </form>
        <br>
        <!-- 2 -->
        <form action="index.php" method="post">
            <input type="text" name="movie_name" placeholder="Movie name">
            <button type="submit" name="search_movie">Search a movie</button>
        </form>
        <br>
        <!-- 3 -->
        <form action="index.php" method="post">
            <input type="text" name="user_email" placeholder="Your email">
            <button type="submit" name="search_your_likes">Search your liked movies</button>
        </form>
        <br>
        <!-- 4 -->
        <form action="index.php" method="post">
            <input type="text" name="location" placeholder="Shooting Country">
            <button type="submit" name="search_by_location">Search movie by country</button>
        </form>
        <br>
        <!-- 5 -->
        <form action="index.php" method="post">
            <input type="text" name="zip_code" placeholder="Zip code">
            <button type="submit" name="search_directors_by_zip">Search TV directors by zip code</button>
        </form>
        <br>
        <!-- 6 -->
        <form action="index.php" method="post">
            <input type="text" name="awards" placeholder="Number of awards">
            <button type="submit" name="lit_awards">People with multiple awards in one year</button>
        </form>
        <br>
        <!-- 7 -->
        <form action="index.php" method="post">
            <button type="submit" name="youngest_and_oldest">View youngest and oldest actors to win at least one award</button>
        </form>
        <br>
        <!-- 8 -->
        <form action="index.php" method="post">
            <input type="text" name="box_office" placeholder="Box office >=">
            <input type="text" name="budget" placeholder="Budget <=">
            <button type="submit" name="LIM_producer">American producer with certain box office and budget</button>
        </form>
        <br>
        <!-- 9 -->
        <form action="index.php" method="post">
            <input type="text" name="Rating" placeholder="Rating">
            <button type="submit" name="People_with_multiple_roles">People played multiple roles in one M.P. with rating higher than</button>
        </form>
        <br>
        <!-- 10 -->
        <form action="index.php" method="post">
            <button type="submit" name="Top_Boston_thriller">Top 2 rates thriller movies shot in Boston</button>
        </form>
        <br>
        <!-- 11 -->
        <form action="index.php" method="post">
            <input type="text" name="likes" placeholder="Number of likes">
            <input type="text" name="age" placeholder="Age">
            <button type="submit" name="likes_by_age">Movies with more than X likes by users of age less than Y</button>
        </form>
        <br>
        <!-- 12 -->
        <form action="index.php" method="post">
            <button type="submit" name="Marval&WB">actors who have played a role in both “Marvel” and “Warner Bros” productions</button>
        </form>
        <br>
        <!-- 13 -->
        <form action="index.php" method="post">
            <button type="submit" name="MP_above_comedy">Motion pictures that have a higher rating than the average rating of all comedy</button>
        </form>
        <br>
        <!-- 14 -->
        <form action="index.php" method="post">
            <button type="submit" name="top_5_movies">Top 5 movies with the highest number of people playing a role in that movie</button>
        </form>
        <br>
        <!-- 15 -->
        <!-- Find actors who share the same birthday. List the actor names (actor 1, actor 2) and their common birthday. -->
        <form action="index.php" method="post">
            <button type="submit" name="same_birthday">Find actors who share the same birthday</button>
        </form>
        <br>
        
        <form method="post" action="index.php">
            <h5>Write your own query</h5>
            <textarea id="freeform" name="freeform" rows="4" cols="70"></textarea>
            <br>
            <button type="submit" name="own_query">run your query</button>
        </form><br>
    </div>
    
    <div class="container" style='width:100%; text-align:center;'>

        <?php 

        if(isset($_POST['like_movie'])){
            $user_email = $_POST["user_email"]; 
            $movie_id = $_POST['movie_id'];
            $query = "INSERT INTO `Likes` (`uemail`, `mpid`) VALUES ('$user_email', $movie_id)";
        } elseif (isset($_POST['viewMovies'])) {
            $query = "SELECT mp.*, m.boxoffice_collection FROM Movie m
                        JOIN MotionPicture mp
                        ON m.mpid = mp.id;";
        } elseif (isset($_POST['viewActors'])) {
            $query = "SELECT DISTINCT p.*, mp.name as Movie_Name FROM 
                        Role r JOIN MotionPicture mp 
                        ON r.mpid = mp.id 
                        JOIN People p ON r.pid = p.id
                        WHERE r.role_name = 'Actor';";
        } elseif (isset($_POST['search_movie'])) {
            $movie_name = $_POST['movie_name'];
            $query = "SELECT name, rating, product,	budget 
                        FROM  MotionPicture 
                        WHERE name LIKE '%$movie_name%';";
        } elseif (isset($_POST['search_your_likes'])) {
            $user_email = $_POST['user_email'];
            $query = "SELECT mp.name, mp.rating, mp.product, mp.budget 
                        FROM Likes l, MotionPicture mp
                        WHERE l.mpid = mp.id
                        and mp.id >= 200
                        and l.uemail LIKE '%$user_email%';";
        } elseif (isset($_POST['search_by_location'])) {
            $location = $_POST['location'];
            $query = "SELECT DISTINCT mp.name
                        FROM Location l, MotionPicture mp 
                        WHERE l.mpid = mp.id 
                        and l.country LIKE '%$location%';";
        } elseif (isset($_POST['search_directors_by_zip'])) {
            $zip_code = $_POST['zip_code'];
            $query = "SELECT DISTINCT p.name as Directer_name, mp.name as Series_name
                        FROM MotionPicture mp
                        JOIN Series s ON mp.id = s.mpid
                        JOIN Location l ON mp.id = l.mpid
                        JOIN Role r ON mp.id = r.mpid
                        JOIN People p ON p.id = r.pid
                        WHERE l.zip LIKE '%$zip_code%'
                        AND r.role_name = 'Director'";
        } elseif (isset($_POST['lit_awards'])) {
            $awards = $_POST['awards'];
            $query = "SELECT p.name AS Person_name, mp.name AS mp_name, a.award_year, COUNT(a.award_name) AS Award_count
                        FROM People p
                        JOIN Award a ON p.id = a.pid
                        JOIN MotionPicture mp ON mp.id = a.mpid
                        GROUP BY p.id, mp.id, a.award_year
                        HAVING COUNT(a.award_name) >= $awards
                        ORDER BY Award_count DESC;";
        } elseif (isset($_POST['youngest_and_oldest'])) {
            $query = "SELECT 
                p.name AS ActorName, 
                p.dob AS DateOfBirth, 
                a.award_name AS AwardName,
                a.award_year AS AwardYear, 
                (a.award_year - YEAR(p.dob)) AS AgeAtAward
                    FROM 
                        People p
                    JOIN 
                        Role r ON p.id = r.pid
                    JOIN 
                        Award a ON r.mpid = a.mpid AND r.pid = a.pid
                    JOIN 
                        MotionPicture mp ON a.mpid = mp.id
                    WHERE 
                        r.role_name = 'Actor'
                    AND 
                        (a.award_year - YEAR(p.dob)) = (
                            SELECT MIN(a.award_year - YEAR(p.dob)) 
                            FROM People p
                            JOIN Role r ON p.id = r.pid
                            JOIN Award a ON r.mpid = a.mpid AND r.pid = a.pid
                            WHERE r.role_name = 'Actor'
                        )
                    OR 
                        (a.award_year - YEAR(p.dob)) = (
                            SELECT MAX(a.award_year - YEAR(p.dob)) 
                            FROM People p
                            JOIN Role r ON p.id = r.pid
                            JOIN Award a ON r.mpid = a.mpid AND r.pid = a.pid
                            WHERE r.role_name = 'Actor');";
        } elseif (isset($_POST['LIM_producer'])) {
            $box_office = $_POST['box_office'];
            $budget = $_POST['budget'];
            $query = "SELECT p.name AS Producer, mp.name AS Movie_Name, m.boxoffice_collection
                        FROM People p
                        JOIN Role r ON p.id = r.pid
                        JOIN MotionPicture mp ON r.mpid = mp.id
                        JOIN Movie m ON mp.id = m.mpid
                        WHERE p.nationality = 'USA'
                        AND m.boxoffice_collection >= $box_office
                        AND mp.budget <= $budget
                        AND r.role_name = 'Producer';";
        } elseif (isset($_POST['People_with_multiple_roles'])) {
            $rating = $_POST['Rating'];
            $query = "SELECT p.name AS Person_name, mp.name AS Movie_name, COUNT(r.role_name) AS Role_count
                        FROM People p
                        JOIN Role r ON p.id = r.pid
                        JOIN MotionPicture mp ON r.mpid = mp.id
                        WHERE mp.rating >= $rating
                        GROUP BY p.id, mp.id
                        HAVING COUNT(r.role_name) > 1;";
        } elseif (isset($_POST['Top_Boston_thriller'])) {
            $query = "SELECT mp.name AS MovieName, mp.rating AS MovieRating
                        FROM MotionPicture mp
                        JOIN Genre g ON mp.id = g.mpid
                        JOIN Location l ON mp.id = l.mpid
                        WHERE g.genre_name = 'Thriller'
                            AND l.city = 'Boston'
                        GROUP BY mp.id, mp.name, mp.rating
                        ORDER BY mp.rating DESC
                        LIMIT 2;";
        } elseif (isset($_POST['likes_by_age'])) {
            $likes = $_POST['likes'];
            $age = $_POST['age'];
            $query = "SELECT mp.name AS MovieName, COUNT(l.uemail) AS LikeCount
                        FROM Likes l
                        JOIN MotionPicture mp ON l.mpid = mp.id
                        JOIN User u ON l.uemail = u.email
                        WHERE u.age < $age
                        GROUP BY mp.id, mp.name
                        HAVING COUNT(l.uemail) > $likes;";
        } elseif (isset($_POST['Marval&WB'])) {
            $query = "SELECT p.name AS PersonName, mp.name AS MovieName
                        FROM People p
                        JOIN Role r ON p.id = r.pid
                        JOIN MotionPicture mp ON r.mpid = mp.id
                        WHERE mp.product LIKE '%Marvel%' 
                        OR mp.product LIKE '%Warner Bros%'
                        AND r.role_name = 'Actor'
                        GROUP BY p.id
                        HAVING COUNT(DISTINCT mp.product) > 1;";
        } elseif (isset($_POST['MP_above_comedy'])) {
            $query = "SELECT mp.name AS MovieName, mp.rating AS MovieRating
                        FROM MotionPicture mp
                        WHERE mp.rating > (
                            SELECT AVG(mp.rating) 
                            FROM MotionPicture mp
                            JOIN Genre g ON mp.id = g.mpid
                            WHERE g.genre_name = 'Comedy')
                            ORDER BY mp.rating DESC;";
        } elseif (isset($_POST['top_5_movies'])) {
            $query = "SELECT mp.name AS MovieName, COUNT(r.pid) AS PeopleCount, COUNT(r.role_name) AS RoleCount
                        FROM MotionPicture mp
                        JOIN Role r ON mp.id = r.mpid
                        GROUP BY mp.id
                        ORDER BY COUNT(r.pid) DESC
                        LIMIT 5;";
        } elseif (isset($_POST['same_birthday'])) {
            $query = "SELECT p1.name AS Actor1, p2.name AS Actor2, p1.dob AS Birthday
                        FROM People p1
                        JOIN People p2 ON p1.dob = p2.dob
                        WHERE p1.id < p2.id;";
        } elseif (isset($_POST['view_Award_table'])) {
            $query = "SELECT * FROM Award;";
        } elseif (isset($_POST['view_Genre_table'])) {
            $query = "SELECT * FROM Genre;";
        } elseif (isset($_POST['view_Likes_table'])) {
            $query = "SELECT * FROM Likes;";
        } elseif (isset($_POST['view_Location_table'])) {
            $query = "SELECT * FROM Location;";
        } elseif (isset($_POST['view_MotionPicture_table'])) {
            $query = "SELECT * FROM MotionPicture;";
        } elseif (isset($_POST['view_Movie_table'])) {
            $query = "SELECT * FROM Movie;";
        } elseif (isset($_POST['view_People_table'])) {
            $query = "SELECT * FROM People;";
        } elseif (isset($_POST['view_Role_table'])) {
            $query = "SELECT * FROM Role;";
        } elseif (isset($_POST['view_Series_table'])) {
            $query = "SELECT * FROM Series;";
        } elseif (isset($_POST['view_User_table'])) {
            $query = "SELECT * FROM User;";
        } elseif (isset($_POST['own_query'])){
            $query = $_POST["freeform"];
        } else {
            $query = null;
        }
        
        echo "<table class='table table-md table-bordered'>";
        echo "<thead class='thead-dark' style='text-align: center'>";

        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
                return "<td style='text-align:center'>" . parent::current(). "</td>";
            }
        
            function beginChildren() {
                echo "<tr>";
            }
        
            function endChildren() {
                echo "</tr>" . "\n";
            }
        }
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "COSI127b";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $stmt = $conn->prepare($query);
        
            $stmt->execute();
        
            $columnCount = $stmt->columnCount();
            $columnNames = array();
            for ($i = 0; $i < $columnCount; $i++) {
                $meta = $stmt->getColumnMeta($i);
                $columnNames[] = $meta['name'];}
            
            echo "<tr>";
            foreach ($columnNames as $columnName) {
                echo "<th class='col-md-2'>$columnName</th>";
            }
            echo "</tr>";
            echo "</thead>";
             
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo $v;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        echo "</table>";
        $conn = null;       // destroy our connection
        ?>
    </div>
</body>
</html>

