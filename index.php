<?php
    require __DIR__.'/functions.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Password Generator</h1>
                    <div class="content bg-primary p-5 mt-3">
                        <?php
                            if(isset($_GET['password']) && $_GET['password'] != '' && is_numeric($_GET['password']) == true  && $_GET['password'] < 30) {?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo "Password generata: ".randomPassword() ?>
                                </div>
                        <?php } else if(isset($_GET['password'])) { ?>
                                    <div class="alert alert-danger">
                                        INSERIRE SOLO NUMERI SUPERIORI A ZERO E MINORI DI 30
                                    </div>
                                    <?php } ?>
                        <form action="index.php" method="GET" class="form-group">
                            <label for="password">Inserisci la lungezza della password</label>
                            <input type="text" class="form-control w-25" placeholder="" name="password" id="password">
                            <button type="submit" class="btn btn-success mt-3">Invia</button>
                            <button class="btn btn-secondary mt-3">Annulla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>