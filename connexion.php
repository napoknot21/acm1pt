<?php
session_start();
require_once 'config.php';

if (isset($_POST['pseudo']) && isset($_POST['password'])) {
    $pseudo = mysqli_real_escape_string($connexion, $_POST['pseudo']);
    $pwd = htmlspecialchars(hash('sha256', $_POST['password']));

    $req_1 = "SELECT * FROM users WHERE pseudo = '$pseudo'";

    $select = mysqli_query($connexion, $req_1);

    if ($select) {
        if (mysqli_num_rows($select) == 1) {
            $req_2 = "SELECT * FROM users WHERE pseudo = '$pseudo' AND password = '$pwd'";

            $select = mysqli_query($connexion, $req_2);

            if ($select) {

                $data = mysqli_fetch_row($select);

                if (mysqli_num_rows($select) == 1) {

                    //$data = mysqli_fetch_array

                    $_SESSION['user'] = $pseudo;
                    $_SESSION['info'] = $data;
                    $_SESSION['id'] = intval($data[0]);

                    header('Location:Main/main.php');

                } else {
                    header('Location:index.php?log_err=password');
                }
            } else {
                die(mysqli_error($connexion));
            }
        } else {
            header('Location:index.php?log_err=empty');
        }
    } else {
        die(mysqli_error($connexion));
    }
} else {
    header('Location:index.php');
}

?>
