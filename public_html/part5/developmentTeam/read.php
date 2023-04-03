<?php include "../templates/header.php"; 
   
   if (isset($_POST['submit'])) {
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "SELECT *
      FROM developmentTeam
      WHERE teamID = :teamID";
  
      $teamID = $_POST['teamID'];
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':teamID', $teamID, PDO::PARAM_STR);
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
  <th>TeamID</th>
  <th>Type</th>
  <th>Description</th>

</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["teamID"]); ?></td>
<td><?php echo escape($row["type"]); ?></td>
<td><?php echo escape($row["description"]); ?></td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['teamID']); ?>.
  <?php }
} ?>

    <h2>Find team based on teamID</h2>

    <form method="post">
    	<label for="teamID">teamID</label>
    	<input type="text" id="teamID" required name="teamID">
    	<input type="submit" name="submit" value="View Results">
        
    </form>

    <a href="../home.php">Back to home</a>

    <?php include "../templates/footer.php"; ?>
    