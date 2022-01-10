<?php
  // Connect database
  $pdo = new PDO("sqlite:sql/employee.db");

  // Create SQL request
  $req = $pdo->query("SELECT * FROM workers");

  // Execute SQL statement
  $result = $req->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Liste des employés</title>
</head>
<body>
  <header>
    <nav>

    </nav>
  </header>
  <section class="container">
    <h1 class="w-25 text-primary text-center mx-auto mb-5">Liste des employés</h1>
    <div class="row gap-4">
    <?php
         foreach($result as $value){

          echo "
            <div class='card' style='width: 18rem;'>
              <div class='card-body'>
                <h2 class='card-title'>" .$value->lastName. " " .$value->firstName. "</h2>
              </div>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item'><strong>Le Email: </strong>" .$value->email. "</li>
                  <li class='list-group-item'><strong>Adresse: </strong>" .$value->address. " min</li>
                  <li class='list-group-item'><strong>Téléphone: </strong>" .$value->phone. "</li>
                  <li class='list-group-item'><strong>Numéo de sécurité social: </strong>" .$value->secu. "</li>

                </ul>
            </div>
          ";
        }
      ?>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>