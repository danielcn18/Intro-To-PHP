<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
    echo "<h2>Your Input:</h2>";
    echo $name;
?>

</body>
</html>