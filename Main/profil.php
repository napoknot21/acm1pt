<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['user'])) {
    header('Location:../index.php');
}

$title = $_SESSION['user'] . " | Profil";
$style = "../Styles/profil.css";
$logo = "../Styles/Images/Bananero_logo.png";

$id = $_SESSION['info'];

require_once '../Parties/head.php';

?>
<body>
  <?php require_once('../Parties/barre_navigation.php'); ?>
  <section>
  <br><br><br><br>

  <section>
    <div class="corps">
      <br>
      <div="info">
        <aside>
          <img id="photo" src="<?php echo $id[10] ?>" alt="photo de profil">
        </aside>
        <header>
          <h1> <?php echo $_SESSION['user']; ?></h1>
          <?php if ($id[1] == 1) { ?>
            <p class="box"> <?php echo "ADMIN";?> </p>
          <?php } ?>    
        </header>
      </div>
      <br>
      <div class="info-complete">
        <div class="biography">
          <header class="block-title">
            Informations personnelles
          </header>
          <main class="block-content">
            <p>Prénom: <?php echo $id[2] ?></p>
            <p>Nom: <?php echo $id[3] ?></p>
            <p>Adresse mail: <?php echo $id[5] ?></p>
            <p>Anniversaire: <?php echo $id[7] ?></p>
            <p>Sexe: <?php echo $id[8] ?></p>
            <p>Membre depuis: <?php echo $id[9] ?></p>
          </main>    
        </div>
        <div class="relationship">
          <header class="block-title">
            Ami.e.s
          </header>
          <main class="block-content">
            
          </main>  
        </div>
      </div>
    </div> 
  </section>
  <footer>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>hola</p>
  </footer>
</body>
</html>
