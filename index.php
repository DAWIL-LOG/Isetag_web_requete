<?php
    require ("connect.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css_js/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isetag_Connexion</title>
</head>
<body>
    <div class="login-form">
        <?php 
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);
                switch($err)
                {
                    case 'password':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe incorrect
                        </div>
                    <?php
                    break;

                    case 'matricule':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> Matricule Inexistant
                        </div>
                    <?php
                    break;

                    case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte non existant
                        </div>
                    <?php
                    break;
                }
            }
        ?> 
    </div>
    <form action="connexion.php" method="POST" class="form-check-label">
        <h2 class="text-center">Connexion</h2>       
            <div class="form-group">
                <input type="text" name="matricule" class="form-control" placeholder="Matricule" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>   
    </form>
</body>
</html>