<?php include "connection.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="interface_requete.js">
    
</script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="interface_requete.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info_requete</title>
</head>
<body>
   <table class="entete">
        <tr class="entete">
            <td class="entete">
                <label for="">Requête ISETAG</label>
            </td>
            <td class="entete">
                <img src="" alt="">
            </td>
            <td class="entete">
                <a href="">Deconnexion</a>
            </td>
        </tr>
    </table>
    <form action="" method="post" class="form">
        <?php
        $date=$_POST['date_exam'];
        echo $date;
        ?>
        <label class="titre">
                <center>
                    <u>
                        <b> Information de l'émetteur</b>
                    </u>
                    <input type="text" value="1" class="page">
                </center>
        </label>
        <br>
        <label for="">Date d'examen:</label>
        <input type="date" name="date_exam" id="date_exam" value="<?php echo date('Y-m-d', strtotime(date('Y-m-d')));?>"><br><br>
        <label for="">Semestre:</label>
        <select name="" id="semestre">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br><br>
        <label for="" class="mat_lb">Matière:</label>
        <select name="matiere" id="matiere" class="mat_slt">
            <?php
            while ($row=mysqli_fetch_array($result)) {
               ?>
               <option><?php echo $row[1];?></option>
            <?php } ?>
            <option></option>
        </select><br><br>
        <label for="">Note reçu:</label>
        <input type="number" name="" id=""><br><br>
        <label for="">Note effective:</label>
        <input type="number" name="" id=""><br><br>
        <label for="">Pièce(s) jointe(s):</label>
        <input type="file" name="" id=""><br><br>
        <input name="" class="bd_mat" id="text"></input>   
    </form>
</body>
</html>