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
    <title>COSI 127b</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">COSI 127b</h1><br>
        <h3 style="text-align:center">Connecting Front-End to MySQL DB</h3><br>
    </div>
    <div class="container">
        <form id="likeMovieForm" method="post" action="index.php">
            <input type="text" name="user_id" placeholder="Your ID">
            <input type="text" name="movie_id" placeholder="Movie ID">
            <button type="submit" name="like_movie">Like this movie</button>
        </form>
        <form action="index.php" method="post">
            <br>
            <button type="submit" name="viewMovies" value="viewMovies">View All Movies</button>
            <button type="submit" name="viewActors" value="viewActors">View All Actors</button>
        </form>
        <br>
        <form id="likeMovieForm" method="post" action="index.php">
            <h6 >Write your own query</h6>
            <textarea id="freeform" name="freeform" rows="4" cols="80">
            </textarea>
            <button type="submit" name="own_query">run your query</button>
        </form>
    </div>
    
    <div class="container">
        <h1>Result</h1>
        <?php
        if(isset($_POST['like_movie'])){
           $liked_movie = TRUE;
           $user_id = $_POST["user_id"]; 
           $movie_id = $_POST["movie_id"]; 
        }else{
            $liked_movie = FALSE;
        }

        if (isset($_POST['viewMovies'])) {
            $query = "SELECT * FROM Movie JOIN MotionPicture ON Movie.mpid = MotionPicture.id;";
        } elseif (($_POST['viewActors'])) {
            $query = "SELECT * FROM Role r JOIN MotionPicture mp ON r.mpid = mp.id JOIN People p ON r.pid = p.id ";
        } else {
            $query = null;
        }

        // we will now create a table from PHP side 
        echo "<table class='table table-md table-bordered'>";
        echo "<thead class='thead-dark' style='text-align: center'>";

        // initialize table headers
        // YOU WILL NEED TO CHANGE THIS DEPENDING ON TABLE YOU QUERY OR THE COLUMNS YOU RETURN
        //echo "<tr><th class='col-md-2'>Firstname</th><th class='col-md-2'>Lastname</th></tr></thead>";

        // generic table builder. It will automatically build table data rows irrespective of result
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

        // SQL CONNECTIONS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "COSI127b";

        try {
            // We will use PDO to connect to MySQL DB. This part need not be 
            // replicated if we are having multiple queries. 
            // initialize connection and set attributes for errors/exceptions
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare statement for executions. This part needs to change for every query
            $stmt = $conn->prepare($query);

            // execute statement
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
                
            // set the resulting array to associative. 
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // for each row that we fetched, use the iterator to build a table row on front-end
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo $v;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        echo "</table>";
        // destroy our connection
        $conn = null;
    
    ?>

    </div>
</body>
</html>

