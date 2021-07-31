<?php 
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
include "connect.php";       

    date_default_timezone_set('Africa/Douala');
    setlocale(LC_TIME, 'fra_fra');
    echo ucfirst(strftime('%A %d %B %Y, %H:%M'));
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css_js/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css_js/local/css/interface_requete.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info_requete</title>
</head>
<body>
    <table class="table-responsive">
        <tr class="entete">
            <td class="entete">
                <label for="">Requête ISETAG</label>
            </td>
            <td class="entete">
                <img src="" alt="">
            </td>
            <td class="entete">
                <a href="deconnexion.php">Deconnexion</a>
            </td>
        </tr>
    </table>
    <form action="matiere.php" method="POST" onClick='control_note()' class="form">
    <div class="alert alert-primary">
        <h1>Bienvenue <?= $_SESSION['user']; ?></h1>
    </div>
        <label class="titre">
            Information de l'émetteur
        </label>
        <br>
        <label for="">Date d'examen:</label>
        <input type="date" name="date_exam" value="" max="<?php echo gmdate("Y-m-d",strtotime('-1 month')); ?>" required><br><br>
        <label for="" class="mat_lb">Filière:</label>
        <select name="specialite" required>
            <option value="igl">IGL</option>
            <option value="res">RES</option>
        </select><br><br>
        <label for="">Semestre:</label>
        <select name="sem" required>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br><br>
        <label for="">Note reçu:</label>
        <input type="number" id="note_recu" name="note_recu" step="0.25" min="0" max="20" required><br><br>
        <label for="">Note effective:</label>
        <input type="number" id="note_effec" name="note_effec" step="0.25" min="0" max="20" required><br><br>
        <input type="submit" disabled value="suivant" name="envoyer" class="btn btn-outline-success"><br>
        <script src="css_js/local/js/inter_requete.js"></script>
    </form>
</body>
</html>