<?php
    include_once __DIR__ . '/function.php';

    session_start();

    $passwordLength = $_GET["number"] ?? '';

    if (isset($_GET["number"])) {
        $_SESSION["passwordLength"] = $passwordLength;
        $_SESSION["generatePassword"] = generateRandomPassword($passwordLength);
        
        header ('Location: password.php');
    }

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
            <h1>Strong Password Generator</h1>
        </div>
    </header>

    <main>
        <h3 class="text-center">Genera una password sicura</h3>

        <div class="container bg-light my-5 pb-3">
            <form action="" method="GET">
                <div class="row g-3 align-items-center py-4">
                    <div class="col-6">
                        <label class="form-label">Lunghezza password:</label>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" placeholder="Inserisci un numero" name="number">
                    </div>
                </div>  
            
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="refresh" class="btn btn-secondary">Annulla</button>
            </form>
        </div>

        <!-- <section class="container py-3 <?php echo ($passwordLength === "") ? 'd-none' : 'd-block'?>">
            <div class="py-2"><?php echo "Lunghezza password:" . " " . $passwordLength?></div>
            <div class="alert alert-success"><?php echo "Password generata:" . " " . generateRandomPassword($passwordLength)?></div>
        </section> -->
        
    </main>
    
</body>
</html>