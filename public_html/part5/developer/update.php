<?php

/**
  * List all developer with a link to edit
  */

try {
  require_once("/home/jenorris/public_html/connection.php");
  require "/home/jenorris/public_html/part5/common.php";


  $sql = "SELECT * FROM developer";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();

} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "../templates/header.php"; ?>

<h2>Update developer</h2>

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
  <?php foreach ($result as $row) : ?>
    <tr>
    <td><?php echo escape($row["fName"]); ?></td>
    <td><?php echo escape($row["lName"]); ?></td>
    <td><?php echo escape($row["dateOfBirth"]); ?></td>
    <td><?php echo escape($row["startDate"]); ?></td>
    <td><a href="update-single.php?fName=<?php echo escape($row["fName"]); ?>">Edit</a></td>
      </tr>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="../home.php">Back to home</a>