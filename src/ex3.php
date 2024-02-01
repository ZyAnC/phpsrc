<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Site</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="ex3.php">Exercise 3</a>
                </li>
                <!-- Add other links here -->
            </ul>
        </div>
    </nav>

    <!-- Form Creation -->
    <div class="container mt-4">
        <form action="ex3.php" method="post">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
        }
        ?>

        <!-- HTML Table -->
        <table class="table mt-4">
            <!-- Add your table rows here -->
        </table>
    </div>

    <!-- PHP Script for String Variables -->
    <?php
    $str1 = "Hello";
    $str2 = "World";
    $combined = $str1 . " " . $str2;
    echo "Combined String Length: " . strlen($combined);
    ?>

    <!-- PHP Script for Number Addition -->
    <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>Sum: $sum</p>";
    ?>

    <!-- Browser Detection -->
    <?php
    echo "<p>Browser: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
    ?>

    <!-- File Modification Time in Footer -->
    <footer class="footer mt-4 py-3 bg-light">
        <div class="container text-center">
            <?php
            $filename = basename($_SERVER['SCRIPT_FILENAME']);
            $modTime = filemtime($filename);
            echo "<p>Last modified: " . date("F d Y H:i:s.", $modTime) . "</p>";
            ?>
        </div>
    </footer>

    <!-- Optional JavaScript and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

