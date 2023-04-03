<?php include "../templates/header.php"; 
    require_once("/home/jenorris/public_html/connection.php"); //database access details
    if (isset($_POST['submit'])) {
        $new_user = array(
            "fName" => $_POST['fName'],
            "lName"  => $_POST['lName'],
            "dateOfBirth"  => $_POST['dateOfBirth'],
            "startDate"     => $_POST['startDate']
          );
          
          $sql = sprintf(
              "INSERT INTO %s (%s) values (%s)",
              "developer",
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
        <label for="startDate">startDate</label>
    	<input type="date" name="startDate" required id="startDate">
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="../home.php">Back to home</a>    
<?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>