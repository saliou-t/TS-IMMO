<?php
session_start();

error_reporting(-1);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <th scope="col">Adresse</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
  </tbody>
</table>

<?php   
    $datas = $_SESSION['liste'];

    
    foreach ($datas as $item => $value) {
        echo $datas[$item]->getPrenom();
    }
    // echo $datas[0]->getPrenom();
?>
    
</body>
</html>