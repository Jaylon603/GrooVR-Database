<?php include "../templates/header.php"; 
   
   
    try {
      require_once("/home/jenorris/public_html/connection.php");
      require "/home/jenorris/public_html/part5/common.php";
      $sql = "SELECT *
      FROM user";
  
      $statement = $connection->prepare($sql);
      $statement->bindParam(':state', $state, PDO::PARAM_STR);
      $statement->execute();
  
      $result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br> " . $error->getMessage();
    }
?>

<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Users Table</h2>

    <table>
      <thead>
<tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>DateOfBirth</th>
  <th>Email Address</th>
  <th>streetAddr</th> 
  <th>City</th>
  <th>State</th>
  <th>Country</th>
  <th>Zip</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["fName"]); ?></td>
<td><?php echo escape($row["lName"]); ?></td>
<td><?php echo escape($row["dateOfBirth"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["streetAddr"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["state"]); ?> </td>
<td><?php echo escape($row["country"]); ?> </td>
<td><?php echo escape($row["zip"]); ?> </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['state']); ?>.
  <?php }
 ?>

    


    <a href="../home.php">Back to home</a>

    <?php include "../templates/footer.php"; ?>
    