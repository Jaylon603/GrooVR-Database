<?php include "../templates/header.php"; 
      
   
   
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "SELECT *
      FROM developmentTeam";
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':teamID', $teamID, PDO::PARAM_STR);
      $statement->execute();
  
      $result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
    }
?>

<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>developmentTeam Table</h2>

    <table>
      <thead>
<tr>
  <th>Team ID</th>
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
 ?>

    


    <a href="../home.php">Back to home</a>

    <?php include "../templates/footer.php"; ?>