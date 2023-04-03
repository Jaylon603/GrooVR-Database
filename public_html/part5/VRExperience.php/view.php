<?php include "../templates/header.php"; 
   
   
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "SELECT *
      FROM VRExperience";
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':expID', $expID, PDO::PARAM_STR);
      $statement->execute();
  
      $result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
    }
?>

<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>VRExperiences Table</h2>

    <table>
      <thead>
<tr>
  <th>expID</th>
  <th>maintainerFName	</th>
  <th>maintainerLName</th>
  <th>maintainerDOB</th>
  <th>name</th> 
  <th>type</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["expID"]); ?></td>
<td><?php echo escape($row["maintainerFName"]); ?></td>
<td><?php echo escape($row["maintainerLName"]); ?></td>
<td><?php echo escape($row["maintainerDOB"]); ?></td>
<td><?php echo escape($row["name"]); ?></td>
<td><?php echo escape($row["type"]); ?></td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['expID']); ?>.
  <?php }
 ?>

    


    <a href="../home.php">Back to home</a>

    <?php include "../templates/footer.php"; ?>
    