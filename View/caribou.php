<?php
require_once('../controller/connexion.php');

$request = "SELECT `id`, `nom`, `description`,`nombre_place_total`,`date_debut`,`date_fin`,`prix` FROM `circuit` WHERE `type` = 1 ORDER BY `nom`";
$allcircuit = $connexion->query($request);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARCHIPEL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../Public/css/w3.css">
<link rel="stylesheet" href="../Public/css">
<link rel="stylesheet" href="../Public/css/details.css">
<style>
	body, html,h1{height: 100%;
font-style: italic;
font-family: "Amatic SC", sans-serif;

font-size:25px;}
</style>
</head>
<body>
<nav>
  
     
  <div class="w3-top">
<div class="w3-bar  w3-black w3-xlarge">
<a href="home.php" class="w3-bar-item w3-button"><i>Accueil</i></a>
      <a href="../View/home.php#circuit" class="w3-bar-item w3-button"><i>Circuits</i></a>
      <a href="#about" class="w3-bar-item w3-button"><i>A Propos</i></a>
      <a href="#contact" class="w3-bar-item w3-button"><i>Contact</i></a>
      <div class="w3-dropdown-hover w3-hide-small">
<button class="w3-button" > <i  class="fa fa-user"></i> <i class="fa fa-caret-down"></i></button>     
<div class="w3-dropdown-content w3-card-4 w3-bar-block">
  <a href="#" class="w3-bar-item w3-button">Inscription</a>
  <a href="#" class="w3-bar-item w3-button">Connexion</a>
  <a href="#" class="w3-bar-item w3-button">Reservation</a>
  
</div>
</div>
      <div style="float: right!important;">
  <a class="w3-bar-item "><i> AGENCE DE VOYAGE</i></a>
      </div>
</div>
    
</nav>
<div class="w3-display-container" style="margin-bottom:50px">
<img src="../Public/images/voyage.webp" alt="" class="image">
  <div class="w3-display-bottomleft w3-container w3-amber  w3-hide-small"
   style="bottom:3%;width:100%">
   <h2 class="center">Voyage au pays des caribous</h2>
</div>
</div>
<h2 class="center w3-amber">LES DETAILS</h2>
<?php $connexion= new mysqli("localhost","root","","vitemonvol");
    $i=3;
    ?>
<div class="padding" style="margin-bottom:128px">
<div  class="w3-half">
<img src="../Public/images/caribou(1).jpg" style="width:458px;height:258px;">
</div>
<div class="w3-half">
   <div class="half">
        <?php $requet="SELECT `prix` FROM `circuit` where `id`='".$i."'";
            $Result= $connexion->query($requet);
        ?>
        A partir de : <span class="amber">
        <?php while($colom=$Result->fetch_array(MYSQLI_ASSOC)):?>
                <?php echo $colom['prix'];?></li>
        <?php endwhile?>?? </span>/personne

    </div>
    <div  class="half">
        <?php $requet="SELECT `nombre_place_total` FROM `circuit` where `id`='".$i."'";
          $place= $connexion->query($requet);
        ?>
        Il reste <span class="amber">
        <?php while($colom=$place->fetch_array(MYSQLI_ASSOC)):?>
                    <?php echo $colom['nombre_place_total'];?></li>
        <?php endwhile?></span> disponible <br>
    </div>
    <div  class="half">
        <?php $requet="SELECT `date_debut` FROM `circuit` where `id`='".$i."'";
            $debut= $connexion->query($requet);
        ?>  
        Date du sejour:
        <?php while($colom=$debut->fetch_array(MYSQLI_ASSOC)):?>
                <?php echo $colom['date_debut'];?></li>
        <?php endwhile?> au 
        <?php $requet="SELECT `date_fin` FROM `circuit` where `id`='".$i."'";
            $fin= $connexion->query($requet);
        ?>  
       
        <?php while($colom=$fin->fetch_array(MYSQLI_ASSOC)):?>
                <?php echo $colom['date_fin'];?></li>
        <?php endwhile?>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-amber">RESERVATION</a>
</div> </div>
<div class=" pad half">
  <u> <h1 class="amber">RESUME</h1></u> 
  Remonter la mythique gorge de Samaria, randonner dans les Lefka Ori : les "Montagnes Blanches", fl??ner dans le petit village de p??cheurs de Loutro, se rendre sur le plateau de Lassithy et ses fameux moulins ?? vent, ou encore se baigner ?? la plage paradisiaque de Va?? et sa palmeraie end??mique.</div>
  
<div class="row">
  <div class="columns">
    <div class="card">
      <h3>JOUR 1</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>

  <div class="columns">
    <div class="card">
      <h3>JOUR 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="columns">
    <div class="card">
      <h3>JOUR 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  
</div>
</body>
</html>