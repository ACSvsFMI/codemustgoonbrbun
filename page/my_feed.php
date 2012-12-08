<?php
require_once 'include/db_config.php';

global $db;


$stmt = "SELECT *
         FROM   posts";
        // ORDER by rand()"; // caterinca
$query = $db->prepare($stmt);
$query -> execute();
while ($row = $query->fetch()){
    echo "<div class=\"box clearfix\">";
    $stmt0 = "SELECT first_name, last_name
              FROM   user
              WHERE  id_u = $row[fk_u]";
   $query0 = $db->prepare($stmt0);
   $query0 -> execute();

   while ($row0 = $query0->fetch()){
       echo "<h3>$row0[first_name] $row0[last_name]</h3>";
   }
    echo "
            $row[contents]
            <div class=\"fr\">"; 
            $stmt2 = "SELECT count(id_l)
                     FROM   likes
                     WHERE  fk_p = $row[id_p] 
                    ";
            $query2 = $db->prepare($stmt2);
            $query2 -> execute();
            while ($row2 = $query2->fetch()){
                echo "<a href=\"include/like.php?post_id=$row[id_p]\">Like</a>";
                echo " | nr de like-uri: $row2[0] ";
                
            }
    
    echo    "</div>    
          </div>";
}
?>