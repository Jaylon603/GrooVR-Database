<?php include "../templates/header.php"; 
   
   if (isset($_POST['submit'])) {
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "DELETE
      FROM VRExperience
      WHERE maintainerFName = :maintainerFName";
  
      $maintainerFName = $_POST['maintainerFName'];
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':maintainerFName', $maintainerFName, PDO::PARAM_STR);
      $statement->execute();
  
      //$result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
      ?>
    > Deleted <?php echo escape($_POST['maintainerFName']); ?>.
  <?php
    }
  }
?>



    <h2>Delete user based on maintainerFName</h2>

    <form method="post">
    	<label for="maintainerFName">maintainerFName</label>
    	<input type="maintainerFName" id="maintainerFName" required name="maintainerFName">
    	<input type="submit" name="submit" value="View Results">
        
    </form>

    <a href="../home.php">Back to home</a>

    <?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>
    