<?php include "../templates/header.php"; 
    require_once("/home/jenorris/public_html/connection.php"); //database access details
    if (isset($_POST['submit'])) {
        $new_user = array(
            "maintainerFName" => $_POST['maintainerFName'],
            "maintainerLName"  => $_POST['maintainerLName'],
            "maintainerDOB"  => $_POST['maintainerDOB'],
            "name"     => $_POST['name'],
            "type"  => $_POST['type']
          );
          
          $sql = sprintf(
              "INSERT INTO %s (%s) values (%s)",
              "VRExperience",
              implode(", ", array_keys($new_user)),
              ":" . implode(", :", array_keys($new_user))
          );
          
          $statement = $connection->prepare($sql);
          $statement->execute($new_user);
    }
?>

<?php require "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  > <?php echo $_POST['maintainerFName']; ?> successfully added.
<?php } ?>

<form method="post">
    
    	<label for="firstname">First Name</label>
    	<input type="text" name="maintainerFName" required id="maintainerFName">
    	<br> 
        <label for="lastname">Last Name</label>
    	<input type="text" name="maintainerLName" required id="maintainerLName">
    	<br> 
        <label for="maintainerDOB">maintainerDOB</label>
    	<input type="date" name="maintainerDOB" required id="maintainerDOB">
        <br> 
        <label for="name">name Address</label>
    	<input type="text" name="name" required placeholder="Enter a valid name">
    	<br> 
        <label for="type">type</label>
    	<input type="text" name="type" required id="type">
    	<br> 
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="../home.php">Back to home</a>    
<?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>