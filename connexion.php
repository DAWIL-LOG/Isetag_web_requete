<?php 
    session_start(); // Démarrage de la session
    require_once 'connect.php'; // On inclut la connexion à la base de données

    if(isset($_POST['matricule']) && isset($_POST['password'])) // Si il existe les champs matricule, password et qu'il sont pas vident
    {
        $matricule = htmlspecialchars($_POST['matricule']); 
        $password = htmlspecialchars($_POST['password']);
        
        $matricule = strtoupper($matricule); // matricule transformé en minuscule

        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $conn->prepare('SELECT matricule,nom, password FROM utilisateurs WHERE matricule = ?');
        $check->execute(array($matricule));
        $data = $check->fetch();
        $row = $check->rowCount();
        if ($row==1) {
            // if($matricule== 8){
                if ($data['password']===$password) {
                    $_SESSION['user'] = $data['nom'];
                    header('Location:interface_requete.php');
                }else header('Location:index.php?login_err=password');
            // }else header('Location:index.php?login_err=matricule');
        }else header('Location:index.php?login_err=already');
    }else header('Location:index.php');
