<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESTAURANT X</title>
</head>
<body>
  <div id="navbar">
    <ul>
      <li>Main</li>
      <li>New Booking</li>
      <li>View Bookings</li>
      <li>Admin</li>
    </ul>
  </div>
<?PHP  
  $name = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  
  //check SQL 'user' table if user exist and then if the password matches.
  // if user then cookie (user & random number tag)

  $testUser = "SELECT 'Username','Password' FROM Users WHERE Username=" . $name . "AND Password='" . $password;
  if ($testUser > 0){
      $value = "" . $name . "," . $password .""; // I know cookies should not contain this info. so I would not make it functional. 
    //I recomend using another SQL table with a random nr generator with cookie information about user and password valid for 1 hour.
      setcookie ("restX", $value, time()+3600); //cookie stored with username ID for one hour.
      echo "Welcome " . $name . " to RestaurantX booking";
    }
  
  
  // todo: navbar | userstories! first analysis | prepare to document journey.
?>

</body>
