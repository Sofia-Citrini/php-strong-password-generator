<?php
session_start();

// var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Password generator</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="py-3">
        <div class="container text-center">
            <h1>Password generata</h1>
        </div>
    </header>

    <main>
        <section class="container py-3">
            <div class="py-2"><?php echo "Lunghezza password:" . " " . $_SESSION["passwordLength"]?></div>
            <div class="alert alert-success"><?php echo "Password generata:" . " " . $_SESSION["generatePassword"]?></div>

            <a class="btn btn-success mx-auto" href="index.php">Genera una nuova password</a>
        </section>

       
    </main>
    
</body>
</html>
