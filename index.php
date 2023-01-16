<?php
$personne = [0 =>["Vice","Claude","28","Avesne", "passions"=> ["musique","sport","jeu video"]], 1=> ["Pouf","Jean","32","Maubeuge", "passions"=> ["musique","sport","jeu video"]], 2=> ["Moufle","Valérie","25","Fourmies", "passions"=> ["musique" , "sport"," ,jeu video"]], 3=> ["Loupe","Brice","22","Avesne", "passions"=> ["musique","sport","jeu video"]], 4=> ["Marrais","Vivien","28","Landrecies", "passions"=> ["musique","sport","jeu video"]]];
?>

<ul>
    <li>
        <?php
        echo $personne[0][0] . " " . $personne[0][1] . " <a href='personne1.php?index=0'>plus d'information</a>";
        ?>
    </li>
    <li>
        <?php
        echo $personne[1][0] . " " . $personne[1][1] . " <a href='personne2.php?index=1'>plus d'information</a>";
        ?>
    </li>
    <li>
        <?php
        echo $personne[2][0] . " " . $personne[2][1] . " <a href='personne3.php?index=2'>plus d'information</a>";
        ?>
    </li>
    <li>
        <?php
        echo $personne[3][0] . " " . $personne[3][1] . " <a href='personne4.php?index=3'>plus d'information</a>";
        ?>
    </li>
    <li>
        <?php
        echo $personne[4][0] . " " . $personne[4][1] . " <a href='personne5.php?index=4'>plus d'information</a>";
        ?>
    </li>
</ul>
