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
        <fieldset style="width: 300px; margin: auto; height: 200px">

           <h2>  Gender :</b> <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female" > Female<br><br>


        <b>DOB: <input type="date" name="date" value="" required> <br><br>
            <br>
            <input type="submit" value="Next" style="width: 100px; height: 30px; background-color: grey; color: white;">
        </fieldset>
        
    </form>
</body>
</html>
