<?php
/**
  * Use an HTML form to edit an entry in the
  * user table.
  *
  */
  require_once("/home/jenorris/public_html/connection.php");
  require "/home/jenorris/public_html/part5/common.php";
if (isset($_POST['submit'])) {
  try {
    $user =[
        "fName" => $_POST['fName'],
        "lName"  => $_POST['lName'],
        "dateOfBirth"  => $_POST['dateOfBirth'],
        "email"     => $_POST['email'],
        "streetAddr"  => $_POST['streetAddr'],
        "city"     => $_POST['city'],
        "state"     => $_POST['state'],
        "country"     => $_POST['country'],
        "zip"     => $_POST['zip']
    ];

    $sql = "UPDATE user
            SET fName = :fName, 
            lName = :lName, 
            dateOfBirth = :dateOfBirth, 
            email = :email, 
            streetAddr = :streetAddr, 
            city = :city, 
            state = :state, 
            zip = :zip
            WHERE email = :email";

  $statement = $connection->prepare($sql);
  $statement->execute($user);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}

if (isset($_GET['email'])) {
  try {

    $email = $_GET['email'];
    $sql = "SELECT * FROM user WHERE email = :email";
    $statement = $connection->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);
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

<h2>Edit a user</h2>

<form method="post">
    <?php foreach ($user as $key => $value) : ?>
      <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
      <input type="text" name="<?php echo $key; ?>" email="<?php echo $key; ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'email' ? 'readonly' : null); ?>>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="../home.php">Back to home</a>

<?php require "../templates/footer.php"; ?>