<?php 
 include ('header.php')
?>
    
<?php
if (isSet($_GET['page'])) {
    echo "Tere leht";
    $page=$_GET['page'];
    if ($page="teenused") {
        include ('teenused.php');
    }else if ($page="kontakt"){
        include ($page= "kontakt.php");
    }
} else {

?>
       
    <h1>Avalehe asjad</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, enim!</p>

  <?php
}

    ?>    
       
<?php
  include ('footer.php')
  ?>
    