<?php
session_start();
if(!isset($_SESSION['user']))
    header('Location:index.php');
include 'connect.php';
date_default_timezone_set('Africa/Douala');
setlocale(LC_TIME, 'fra_fra');
echo ucfirst(strftime('%A %d %B %Y, %H:%M') );
$_SESSION['sem']=$_POST['sem'];
$_SESSION['specialite']=$_POST['specialite'];
$_SESSION['note_recu']=$_POST['note_recu'];
$_SESSION['note_effec']=$_POST['note_effec'];
// require ('dossier.php');
function varfil($valeur)
{
    if (is_array($valeur)) {
        return implode(', ', array_map('varfil', $valeur));
    }
    return '`' . str_replace(array('`', '.'), array('`` ', '`.``'), $valeur) . '`';
}

function create($spe)
{
    include 'connect.php';
    $sem = $_SESSION['sem'];
    switch ($sem) {
        case '1':
            $result = $conn->query('SELECT * FROM ' . varfil($spe) . ' WHERE semestre="1"');
            break;
        case '2':
            $result = $conn->query('SELECT * FROM ' . varfil($spe) . ' WHERE semestre="2"');
            break;
    }
    return $result;
}

$result = create($_SESSION['specialite']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css_js/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css_js/local/css/interface_requete.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<form action="upload.php" method="POST" class="form" enctype="multipart/form-data" onClick="control_matiere()">
    <label><u> Matiere du Semestre <?php echo $_SESSION['sem'];?></u> </label><br>
    <table class="table td">
        <?php
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <input type="checkbox" id="matiere" name="matieres[]" value="<?php echo htmlspecialchars($row['matiere']);?>">
            <?php echo htmlspecialchars($row['matiere']);?><br>
            <input type="file" id="fichier" name="fichiers[]"><br>
            <br>
        <?php } ?>
        <input type="submit" id="suivant" value="suivant" name="suivant" class="btn btn-outline-success">
    </table>
</form>
</body>
</html>
