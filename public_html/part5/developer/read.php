<?php include "../templates/header.php"; 
   
   if (isset($_POST['submit'])) {
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "SELECT *
      FROM developer
      WHERE fName = :fName";
  
      $fName = $_POST['fName'];
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':fName', $fName, PDO::PARAM_STR);
      $statement->execute();
  
      $result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
    }
  }
?>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
      <thead>
<tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>DateOfBirth</th>
  <th>StartDate</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["fName"]); ?></td>
<td><?php echo escape($row["lName"]); ?></td>
<td><?php echo escape($row["dateOfBirth"]); ?></td>
<td><?php echo escape($row["startDate"]); ?></td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['fName']); ?>.
  <?php }
} ?>

    <h2>Find developer based on First Name</h2>

    <form method="post">
    	<label for="fName">First Name</label>
    	<input type="text" id="fName" required name="fName">
    	<input type="submit" name="submit" value="View Results">
        
    </form>

    <a href="../home.php">Back to home</a>

    <?php include "../templates/footer.php"; ?>
    