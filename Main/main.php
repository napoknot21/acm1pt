<?php
session_start();
require_once'../config.php';

if (!isset($_SESSION['user'])) {
    header('Location:../index.php');
}

$title = "ACM1PT";
$style = "../Styles/Bienvenu.css";
$logo = "../Styles/Images/Bananero_logo.png";

require '../Parties/head.php';
?>
<body>
  <?php
    require_once('../Parties/barre_navigation.php');
  ?> 
  <br><br><br>

  <section>
    <div class="container">
      <main class="block_m">
        <div class="redact">
            <div class="title-redact"><label> Publier du contenu </label></div>        
            <form method="post" action="traitement_publications.php">
              <div class="input-group">
                <textarea type="text" name="publication" placeholder="Quoi de neuf, <?php echo $_SESSION['user'];?> ?"></textarea>
              </div>
              <div class="actions"> 
                <input type="file" name="photo"/>
                <button type="submit" name="publier" class="btn">Publier</button>
              </div>
          </form>
        </div>
        
        <br>
        <div class="pubs">

        </div>  
      </main>
      <aside block_a">
        <div class="title-redact"> Derniers arrivés ! </div>
      </aside>
    </div>
  </section>   
  
  <footer>  </footer>

</body>
</html>
