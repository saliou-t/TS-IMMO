<?php
// session_start();

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
    <style>
        input[type=text]{
            width: 122px;
            max-width: 302px,
        
        }
    </style>
</head>
<body>
<div class="container jumbotron">

    <h3 class="text-center my-5">TS-Immo : Liste des proprietaires</h3> 
    
<table class="table table-border">
  <thead class="thead-dark">
    <tr class="bg-dark text-light ">
        <th scope="col text-center">
            N°
        </th>
        <th scope="col">
            <input type="text" placeholder="Prénom">
        </th>
        <th scope="col">
            <input type="text" placeholder="Nom">
        </th>
        <th scope="col">
            <input type="text" placeholder="Téléphone">
        </th>
        <th scope="col">
            Adresse
        </th> 
        <th scope="col text-center">Edite</th> 
        <th scope="col ">Delete</th> 
    </tr>
  </thead>
  <tbody>
      <?php  
        foreach ($datas as $item => $value) { ?>
            <tr>
                <th scope="row"><?php echo $datas[$item]->getId() ?></th>
                <td><?php echo $datas[$item]->getPrenom() ?></td>
                <td><?php echo $datas[$item]->getNom() ?></td>
                <td><?php echo $datas[$item]->getTelephone() ?></td>
                <td><?php echo $datas[$item]->getAdresse() ?></td>
                <td >
                    <a class="btn btn-info" href="">supprimer</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="">delete</a>
                </td>
            </tr>
        <?php  }?>
        
    </tbody>
</table>

</div>
</body>
</html>