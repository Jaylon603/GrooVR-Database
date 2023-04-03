<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Simple Database App</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <h1>Simple Database App</h1>

    <?php include "/home/jenorris/public_html/part5/templates/header.php"; 
    ?>

    <ul>
        <li>
            <a href="create.php"><strong>Create</strong></a> - add a developmentTeam
        </li>
        <li>
            <a href="read.php"><strong>Read</strong></a> - find a developmentTeam
        </li>
        <li>
            <a href="view.php"><strong>View</strong></a> - View all developmentTeam
        </li>
        <li>
            <a href="update.php"><strong>Update</strong></a> - update developmentTeam
        </li>
        <li>
            <a href="delete.php"><strong>Delete</strong></a> - delete developmentTeam
        </li>
        <li>
            <a href="../home.php"><strong>Home</strong></a> - Home
        </li>
        
    </ul>

    <?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>
  </body>
</html>