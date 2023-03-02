<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP random number generator</title>
</head>
<body>
    <form action="rng.php" method="get">
       Number of dice: <input type="number" name="number-of-dice">
       <br>
       Type of dice: <select name="type-of-dice" id="type-of-dice">
        <option value="">Please choose the type of dice</option>
        <option value="d6">D6</option>
        <option value="d8">D8</option>
        <option value="d10">d10</option>
        <option value="d12">D12</option>
        <option value="d20">D20</option>
</select>
    </form>
    <?php require "rng.php";?>
</body>
</html>