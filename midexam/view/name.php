<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail Registration</title>
</head>
<body>
    <form action="../controller/namecheck.php" method="post">
    <br><br><br><br>
        <fieldset style="width: 150px; margin: auto; height: 200px">

           <h2> <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <br>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            <br><br>
            <input type="submit" value="Next" style="width: 100px; height: 30px; background-color: grey; color: white;">
        </fieldset>
        
    </form>
</body>
</html>
