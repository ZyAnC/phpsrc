<?php
// Start of PHP Tag

// Layout and Navigation Bar (Assuming you already have a layout to include)
include('layout.php'); // Include your standard layout/header file
echo '<nav>...</nav>'; // Navigation bar code here, add a link to ex4.php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercise 4</title>
</head>
<body>

<h2>Voting Eligibility Check</h2>
<form method="post">
    Name: <input type="text" name="name">
    Age: <input type="number" name="age">
    <input type="submit" name="voteCheck" value="Check Eligibility">
</form>

<?php
if(isset($_POST['voteCheck'])) {
    $age = $_POST['age'];
    $name = $_POST['name'];

    if($age >= 18) {
        echo "<p>$name, you are eligible for voting.</p>";
    } else {
        echo "<p>$name, you are not eligible for voting.</p>";
    }
}

$currentMonth = date('F');
switch ($currentMonth) {
    case 'August':
        echo "<p>It's August, so it's still holiday.</p>";
        break;
    default:
        echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
        break;
}

?>

<h2>Multiplication Table</h2>
<form method="post">
    Enter number: <input type="number" name="number">
    <input type="submit" name="table" value="Generate Table">
</form>

<?php
if(isset($_POST['table'])) {
    $n = $_POST['number'];
    echo "<p>Multiplication table of $n:</p>";
    for($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
}
?>

<h2>Print Numbers</h2>
<form method="post">
    Enter number n: <input type="number" name="n">
    <input type="submit" name="printNumbers" value="Print Numbers">
</form>

<?php
if(isset($_POST['printNumbers'])) {
    $n = $_POST['n'];
    $i = 1;
    while($i <= $n) {
        echo "$i ";
        $i++;
    }
    echo "<br>";
}
?>

<h2>Print Array Elements</h2>
<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");
foreach($myarray as $element) {
    echo "$element<br>";
}
?>

</body>
</html>
