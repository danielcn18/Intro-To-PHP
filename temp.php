<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation</title>
</head>
<body>
    <?php 
        $value = 0;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["tempValue"];
        }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Value: <input type="number" name="tempValue">
        <input type="submit">
    </form>

    <?php 
        echo "<h1>Value: $value </h1>"
    ?>
</body>
</html>