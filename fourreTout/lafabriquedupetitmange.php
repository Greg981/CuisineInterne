<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gregbdd;charset=utf8', 'greg981', 'Bushman973');
    //bonne pratrique pour détail des erreurs//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
?>

<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr  = "";
$fname = $lName = $Email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["First Name"])) {
    $firstnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["FirstName"]);
  }
  if (empty($_POST["Last Name"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["LastName"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $Email = test_input($_POST["email"]);
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}
?>


<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
?>

/**


 





           <!-- About Cuisto section end -->  

        </section><p class="quote">"Live your dreams, do not dream your life"</p>
