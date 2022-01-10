<?php
  require_once "./Class/Employee.php";

  $employe1 = new Employee(
    "Dupont",
    "Jean-Claude",
    "jc33@dupont.fr",
    "2 rue des ponts 33000 Bordeaux",
    "+33601020304",
    1331545235245
  );

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employés</title>
</head>
<body>
  <header>
    <nav>

    </nav>
  </header>
  <h1>L'employé du mois</h1>
  <?php
    $employe1->displayInfosWorker();
  ?>
  
</body>
</html>