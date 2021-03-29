<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="site.php" method="get">
    name: <input type="text" name="Username">
    <br>
    Age: <input type="number" name="Age">
    <input type="submit">
    </form>

    <br>
    Your name is <?php echo $_GET["Username"] ?>
    <br>
    Your Age is <?php echo $_GET["Age"] ?>

  </body>
</html>
