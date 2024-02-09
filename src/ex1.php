<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
    <title>Exercise 1: Getting Started with PHP - YourFirstName</title>
</head>
<body>

<h3>PHP Introduction</h3>

<?php
// Outputting a simple message
echo 'Hello world! My name is "David"<br>';

// Using a variable
$title = "PHP is interesting.";
echo "<h4>$title</h4>";

// Defining and displaying variables in a table
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "<table border='1'>
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>$g1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td>$g2</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td>$g3</td>
        </tr>
      </table>";

// Insert your screenshot here. You can use an <img> tag to include it.
// Example: echo '<img src="path_to_your_screenshot.jpg" alt="Development Environment Screenshot">';

?>

</body>
</html>
<?php include 'foot.php'; ?>
