<?php

session_start() 

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
<?php
    echo $_SESSION['liste'][0]
?>
    
</body>
</html>