<?php

/**
  * List all user with a link to edit
  */

try {
  require_once("/home/jenorris/public_html/connection.php");
  require "/home/jenorris/public_html/part5/common.php";


  $sql = "SELECT * FROM developmentTeam";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();

} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "../templates/header.php"; ?>

<h2>Update developmentTeam</h2>

<table>
  <thead>
    <tr>
  <th>TeamID</th>
  <th>Type</th>
  <th>Description</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) : ?>
    <tr>
    <td><?php echo escape($row["teamID"]); ?></td>
    <td><?php echo escape($row["type"]); ?></td>
    <td><?php echo escape($row["description"]); ?></td>
    <td><a href="update-single.php?teamID=<?php echo escape($row["teamID"]); ?>">Edit</a></td>
      </tr>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="../home.php">Back to home</a>