<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Weather Calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Weather Calculator</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Weather Calculator</h1>";
echo "<h3>Please enter the tempurature outside</h3>";
?>

<!-- form to get the tempurature from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="degrees"> Please Entre the Tempurature Outside:</label>
      <input type="number" id="degrees" placeholder="Ex. 3°" step="1" name="degrees"><br><br>
      <input type="submit" value="Calculate"> 
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
  </body>
</html>