<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>test boite cookie</title>
</head>
<body>
  
<h2> test cookie rgpd  </h2>
<?php
require_once('cookieview.php')
?>

 <?php
if(isset($error))
{
    echo '<font color="red">'.$error.'</font>';
}
 ?>

    </div>




</body>
</html>