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

    <?php include "/home/jenorris/public_html/part5/templates/header.php"; ?>

    <ul>
    
        <li>
            <a href="users/user.php"><strong>Users Table</strong></a> - Users Table Options
        </li>
        <li>
            <a href="developer/developer.php"><strong>Developers Table</strong></a> - Developer Table Options
        </li>
        <li>
            <a href="VRExperience/VRExperience.php"><strong>VRExperience Table</strong></a> - VRExperience Table Options
        </li>
        <li>
            <a href="work/work.php"><strong>Work Table</strong></a> - Work Table Options
        </li>
        <li>
            <a href="developmentTeam/developmentTeam.php"><strong>developmentTeam Table</strong></a> - developmentTeam Table Options
</li>
        
    </ul>

    <?php include "/home/jenorris/public_html/part5/templates/footer.php"; ?>
  </body>
</html>