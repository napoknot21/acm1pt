<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['user'])) {
    header('Location:main.php');
} 

if (isset($_POST['publier'])) {

    $publ = mysqli_real_escape_string($connexion, $_POST['publication']);

    $result = mysqli_query($connexion,"SHOW TABLE STATUS WHERE Name = 'publications'");
    $data = mysqli_fetch_assoc($result);

    $nextIncrement = $data['Auto_increment'];

    $alea = substr(strtoupper(md5(microtime(true))),0,12);
    $code = $nextIncrement.$alea;

    $type = 'jpg';
    $adressePhoto = $_FILES['photo']['tmp_name'];

    $nom = $code.".".$type;

    if (is_uploaded_file($adressePhoto)) {
        $destination = "../Publications/".$nom;
        $nom_img = $nom;
        copy($adressePhoto,$destination);
    
    } else {
        $nom_img = '';
    }    
    

    $poster = mysqli_query($connexion,"INSER INTO publications (user,date,contenu,image,commentaires) VALUES ('$_SESSION['id']',now(),'$publ','1')");

    if ($poster) {
        header('Location:Main/main.php');
    } else  {
        die("pb de connexion final");
    }

} else {
    die ("prob de conexxion");
}    
?>