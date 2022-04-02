<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

//je récupérer les datas
$datas = $_SESSION['liste'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Proprietaires</title>
</head>
<body>

<h3>Liste des proprietaires</h3> 

<table class="table">
  <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Adresse</th> <%

    </tr>
  </thead>
  <tbody>
      <?php  
        foreach ($datas as $item => $value) { ?>

            <tr>
                <th scope="row"><?php echo $datas[$item]->getId() ?></th>
                <td><?php $datas[$item]->getPrenom() ?></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
        <?php  }?>
        
    </tbody>
</table>
    
</body>
</html>