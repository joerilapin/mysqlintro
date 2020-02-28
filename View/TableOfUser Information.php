
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYSQL</title>
</head>
<body>

<table>
    <?php
    $pdo = openConnection();
    $statement = $pdo->query("SELECT ID, first_name, last_name, email, preferred_language FROM student");
    foreach ($statement as $storedInformation):
        ?>

        <tr>
            <td><h3>Information</h3></td>
        </tr>
        <tr>
            <td>First name: </td>
            <td><?php echo $storedInformation['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last name: </td>
            <td><?php echo $storedInformation['last_name'] ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo $storedInformation['email'] ?></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo 'Assets/Images/' . $storedInformation['preferred_language'] . '.png' ?>" alt="flag">
            </td>
        </tr>
        <tr>
            <td><a href="http://mysql.local/profile.php/?user=<?php echo $storedInformation['ID']?>">Profile: </a></td>
        </tr>

    <?php endforeach; ?>
</table>

</body>
</html>