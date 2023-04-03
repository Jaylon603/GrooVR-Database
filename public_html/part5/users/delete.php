<?php include "../templates/header.php"; 
   
   if (isset($_POST['submit'])) {
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "DELETE
      FROM user
      WHERE email = :email";
  
      $email = $_POST['email'];
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':email', $email, PDO::PARAM_STR);
      $statement->execute();
  
      //$result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
      ?>
    > Deleted <?php echo escape($_POST['email']); ?>.
  <?php
    }
  }
?>



    <h2>Delete user based on Email</h2>

    <form method="post">
    	<label for="email">Email</label>
    	<input type="email" id="email" required name="email">
    	<input type="submit" name="submit" value="View Results">
        
    </form>

    <a href="../home.php">Back to home</a>

    <?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>
    