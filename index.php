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
            width: 80%; /* Adjust width as needed */
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

        <form id="likeMovieForm" method="post" action="index.php">
            <input type="text" name="user_email" placeholder="Your email">
            <input type="text" name="movie_id" placeholder="Movie ID">
            <button type="submit" name="like_movie">Like this movie</button>
        </form>

        <form action="index.php" method="post">
            <br>
            <button type="submit" name="viewMovies" value="viewMovies">View All Movies</button>
            <button type="submit" name="viewActors" value="viewActors">View All Actors</button>
        </form><br>
        
        <form id="likeMovieForm" method="post" action="index.php">
            <h6>Write your own query</h6>
            <textarea id="freeform" name="freeform" rows="4" cols="80"></textarea>
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
        } elseif (($_POST['viewActors'])) {
            $query = "SELECT p.*, mp.name as Movie_Name FROM Role r 
                        JOIN MotionPicture mp 
                        ON r.mpid = mp.id 
                        JOIN People p ON r.pid = p.id ";
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

