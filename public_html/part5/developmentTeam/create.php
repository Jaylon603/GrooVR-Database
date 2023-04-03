<?php include "../templates/header.php"; 
    require_once("/home/jenorris/public_html/connection.php"); //database access details
    if (isset($_POST['submit'])) {
        $new_user = array(
            
            "type"  => $_POST['type'],
            "description"  => $_POST['description'],
          );
          
          $sql = sprintf(
              "INSERT INTO %s (%s) values (%s)",
              "developmentTeam",
              implode(", ", array_keys($new_user)),
              ":" . implode(", :", array_keys($new_user))
          );
          
          $statement = $connection->prepare($sql);
          $statement->execute($new_user);
    }
?>

<?php include "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  > <?php echo $_POST['teamID']; ?> successfully added.
<?php } ?>

<h2>Create Team</h2>

<form method="post"> 
    	
        <label for="type">Type</label>
    	<input type="varchar" name="Type" required id="Type"> 
        <label for="description"> Description</label>
    	<input type="text" name="description" required id="description">
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="../home.php">Back to home</a>    
<?php include "../templates/footer.php"; ?>