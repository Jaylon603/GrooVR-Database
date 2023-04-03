<?php require "templates/header.php"; ?>

    <h2>Find user based on location</h2>
    <style>
        h1 {color:red;}
        p {color:blue;}
    </style>

    <form method="post"  >
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <label for="location">Location</label>
        <input type="text" name="location" id="location">
    </form>

    <a href="index.php">Back to home</a>

    <?php require "templates/footer.php"; ?>