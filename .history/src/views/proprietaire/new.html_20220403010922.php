<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter Proprietaire</title>

</head>
<body>
    
<div class="container jumbotron">
    <h3 class="text-center my-5">TS-Immo : ajouter un prprietaire</h3> 
    <div class="row">
        <form action="">
            <div class="row my-3">
                <div class="col">
                    <input class="form-control" name ="prenom" type="text" placeholder="Prénom">
                </div>
                <div class="col">
                    <input class="form-control" name="nom" type="text" placeholder="Nom">
                </div>    
            </div>
            <div class="row my-3">
                <div class="col">
                    <label for="telephone"></label>
                    <input class="form-control" name="telephone" type="text" placeholder="Numéro de téléphone">
                </div>
                <div class="col">
                    <input class="form-control" name="email" type="text" placeholder="Adresse email">
                </div>    
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control" name="CNI" type="text" placeholder="Numéro d'identité">
                </div>
                <div class="col">
                    <input class="form-control" name="adresse" type="text" placeholder="Adresse">
                </div>    
            </div>
        </form>
    </div>
</div>
</body>
</html>