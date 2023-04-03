<?php include "../templates/header.php"; 
    require_once("/home/jenorris/public_html/connection.php"); //database access details
    if (isset($_POST['submit'])) {
        $new_user = array(
            "fName" => $_POST['fName'],
            "lName"  => $_POST['lName'],
            "dateOfBirth"  => $_POST['dateOfBirth'],
            "email"     => $_POST['email'],
            "streetAddr"  => $_POST['streetAddr'],
            "city"     => $_POST['city'],
            "state"     => $_POST['state'],
            "country"     => $_POST['country'],
            "zip"     => $_POST['zip']

          );
          
          $sql = sprintf(
              "INSERT INTO %s (%s) values (%s)",
              "user",
              implode(", ", array_keys($new_user)),
              ":" . implode(", :", array_keys($new_user))
          );
          
          $statement = $connection->prepare($sql);
          $statement->execute($new_user);
    }
?>

<?php require "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  > <?php echo $_POST['fName']; ?> successfully added.
<?php } ?>

<form method="post">
    
    	<label for="firstname">First Name</label>
    	<input type="text" name="fName" required id="fName">
    	<br> 
        <label for="lastname">Last Name</label>
    	<input type="text" name="lName" required id="lName">
    	<br> 
        <label for="dateOfBirth">dateOfBirth</label>
    	<input type="date" name="dateOfBirth" required id="dateOfBirth">
        <br> 
        <label for="email">Email Address</label>
    	<input type="email" name="email" required placeholder="Enter a valid email address">
    	<br> 
        <label for="streetAddr">streetAddr</label>
    	<input type="text" name="streetAddr" required id="streetAddr">
    	<br> 
        <label for="city">city</label>
    	<input type="text" name="city" required id="city">
    	<br> 
        <label for="state">state</label>
    	<input type="text" name="state" required id="state">
    	<br> 
        <label for="country">country</label>
    	<input type="text" name="country" required id="country">
    	<br> 
        <label for="zip">zip</label>
    	<input type="number"  size = "6"    min = "0" max="99999"pattern="\b\d{5}\b" name="zip" required id="zip">
    	<br> 
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="../home.php">Back to home</a>    
<?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>