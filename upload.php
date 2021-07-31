<?php
session_start();
// echo count($matiere);
if (isset($_POST["suivant"])) {
    $matiere=$_POST["matieres"];
    if (count($matiere)!=0) {
        $taille_max = 300000;
        $nomfichier = $_FILES['fichiers']['name'];
        $nomtemporaire = $_FILES['fichiers']['tmp_name'];
        $typefichier = $_FILES['fichiers']['type'];
        $taillefichier = $_FILES['fichiers']['size'];
        $extensions = array(".jpg", ".png", ".jpeg", ".gif");
        $matiere=$_POST["matieres"];
        $erreur='';
        $nbrefichier = count($nomtemporaire);
        for ($i = 0; $i < $nbrefichier; $i++) {
            
            
            if (!empty($nomfichier[$i])) {
                $destination = "upload/".$nomfichier[$i];
                $extension = strrchr($nomfichier[$i], ".");
                if (!in_array($extension, $extensions)) {
                    $erreur = "Fichiers images demandés!!";
                }
                if ($taillefichier[$i] > $taille_max) {
                    $erreur = "Fichier volumineux !!";
                }
                if (empty($erreur)) {
                    $info = getimagesize($nomtemporaire[$i]);
                    $mime = $info['mime'];
                    switch ($mime) {
                        case 'image/jpeg':
                            $New_image = 'imagecreatefromjpeg';
                            $save = 'imagejpeg';
                            break;
                        case 'image/jpg':
                            $New_image = 'imagecreatefromjpg';
                            $save = 'imagejpg';
                            break;
                        case 'image/png':
                            $New_image = 'imagecreatefrompng';
                            $save = 'imagepng';
                            break;
                        case 'image/gif':
                            $New_image = 'imagecreatefromgif';
                            $save = 'imagegif';
                            break;
                        default:
                            throw new Exception('Type de fichiers inconnu');
                    }
                    list($width, $height) = getimagesize($nomtemporaire[$i]);
                    $new_width = 500;
                    $diff = $width / $new_width;
                    $new_height = $height / $diff;
                    $new_dimension = imagecreatetruecolor($new_width, $new_height);
                    $image = $New_image($nomtemporaire[$i]);
                    imagecopyresampled($new_dimension , $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    // $save($new_dimension, $destination);
                    // $new_name=rename($destination,"upload/".$matiere[$i].$extension);  
                    // if (move_uploaded_file($nomtemporaire[$i],"upload/".$matiere[$i].$extension)) {
                    //     $erreur = "Upload(s) effectué(s) avec succès!!";
                    // } else {
                    //     $erreur = "Echec de l'Upload!!";
                    // }
                    if ($save($new_dimension, $destination)) {
                        $erreur = "Upload(s) effectué(s) avec succès!!";
                    } else {
                        $erreur = "Echec de l'Upload!!";
                    }
                }
            }
        }
        echo $erreur;
    }header('LOCATION: matiere.php');
}
