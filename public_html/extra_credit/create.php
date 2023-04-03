<?php include "templates/header.php"; 
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

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  > <?php echo $_POST['fName']; ?> successfully added.
<?php } ?>

<form method="post">
    
    	<label for="firstname">First Name</label>
    	<input type="text" name="fName" id="fName">
    	<label for="lastname">Last Name</label>
    	<input type="text" name="lName" id="lName">
    	<label for="dateOfBirth">dateOfBirth</label>
    	<input type="text" name="dateOfBirth" id="dateOfBirth">
        <label for="email">Email Address</label>
    	<input type="text" name="email" id="email">
    	<label for="streetAddr">streetAddr</label>
    	<input type="text" name="streetAddr" id="streetAddr">
    	<label for="city">city</label>
    	<input type="text" name="city" id="city">
    	<label for="state">state</label>
    	<input type="text" name="state" id="state">
    	<label for="country">country</label>
    	<input type="text" name="country" id="country">
    	<label for="zip">zip</label>
    	<input type="text" name="zip" id="zip">
    	
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="extra_credit/index.php">Back to home</a>    
<?php include "/home/jenorris/public_html/extra_credit/templates/footer.php"; ?>