<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du hast dich erfolgreich angemeldet</title>
</head>
<body>
    <?php
      include ('../inc/dbconnect.php');
      $username = $_POST['username'];
      $password = $_POST['password'];

      try {
        $query = "INSERT INTO logindata
      SET
        username='$username',
        password='$password';";
        // use exec() because no results are returned
        $conn->exec($query);
        echo "Du hast dich erfolgreich angemeldet";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    ?>
    
</body>
</html>
