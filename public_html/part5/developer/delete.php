<?php include "../templates/header.php"; 
   
   if (isset($_POST['submit'])) {
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "DELETE
      FROM developer
      WHERE fName = :fName";
  
      $fName = $_POST['fName'];
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':fName', $fName, PDO::PARAM_STR);
      $statement->execute();
  
      //$result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
      ?>
    > Deleted <?php echo escape($_POST['fName']); ?>.
  <?php
    }
  }
?>



    <h2>Delete user based on First Name</h2>

    <form method="post">
    	<label for="fName">First Name</label>
    	<input type="fName" id="fName" required name="fName">
    	<input type="submit" name="submit" value="View Results">
        
    </form>

    <a href="../home.php">Back to home</a>

    <?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>
    