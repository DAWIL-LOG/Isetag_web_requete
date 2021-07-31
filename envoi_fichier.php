<?php
session_start();
    
        
    include 'upload.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="interface_requete.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="requete.php" method="post" class="form">
        <!-- < ?php
            if ($file['error']==$array_upload_err[UPLOAD_ERR_OK]) {?> -->
                <!-- <div class="alert alert-success">
                    < ?php foreach ($errors as $error) {
                        echo $error;
                    }?> 
                </div>-->
            <!--  < ?php 
            }?>else {
                <div class="alert alert-success">
                    < ?php foreach ($errors as $error) { 
                        echo $error;
                    }?>
                </div>
                < ?php 
            }
        // ?>-->
        <button class="btn btn-outline-dark" style="float:right;width:40%;">Prévisualiser avant Envoi</button>
        <input type="submit" value="ENVOYER"style="width:60%;" class="btn btn-outline-info">
    </form>
</body>
</html>