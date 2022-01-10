<?php
  require_once "./Class/Employee.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des employés</title>
</head>
<body>
  <header>
    <nav>

    </nav>
  </header>
  <h1>Liste des employés</h1>
  <?php
    $displayWorkers->listWorkers();
  ?>
  

</body>
</html>