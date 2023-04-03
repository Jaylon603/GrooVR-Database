<?php
/**
  * Use an HTML form to edit an entry in the
  * developer table.
  *
  */
  require_once("/home/jenorris/public_html/connection.php");
  require "/home/jenorris/public_html/part5/common.php";
if (isset($_POST['submit'])) {
  try {
    $developer =[
        "fName" => $_POST['fName'],
        "lName"  => $_POST['lName'],
        "dateOfBirth"  => $_POST['dateOfBirth'],
        "startDate"     => $_POST['startDate']
    ];

    $sql = "UPDATE developer
            SET fName = :fName, 
            lName = :lName, 
            dateOfBirth = :dateOfBirth, 
            startDate = :startDate";

  $statement = $connection->prepare($sql);
  $statement->execute($developer);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}

if (isset($_GET['fName'])) {
  try {

    $fName = $_GET['fName'];
    $sql = "SELECT * FROM developer WHERE fName = :fName";
    $statement = $connection->prepare($sql);
    $statement->bindValue(':fName', $fName);
    $statement->execute();

    $developer = $statement->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
} else {
    echo "Something went wrong!";
    exit;
}
?>

<?php require "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
  <?php echo escape($_POST['fName']); ?> successfully updated.
<?php endif; ?>

<h2>Edit a developer</h2>

<form method="post">
    <?php foreach ($developer as $key => $value) : ?>
      <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
      <input type="text" name="<?php echo $key; ?>" fName="<?php echo $key; ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'fName' ? 'readonly' : null); ?>>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="../home.php">Back to home</a>

<?php require "../templates/footer.php"; ?>