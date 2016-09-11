 <nav>
   <?php
  // De her variabler bruges ikke mere
   $menu_item_1 = "forsiden";
   $menu_item_2 = "sortiment";
   $menu_item_3 = "råvare";
   $menu_item_4 = "opskrifter";
   $menu_item_5 = "om os";
   $menu_item_6 = "kontakt";
   
    // Vi trækker elementer fra arrayen i stedet for
   $menu_items = array("Forsiden",  "Sortiment", "Råvare", "opskrifter", "om os", "kontakt");
   
   // Vi looper igennem menu-elementerne(løkke)
   for ($x = 0; $x <= 5; $x++) {
   // echo "The number is: $x <br>";
    echo '<a class="button" href="#">' . $menu_items[$x] . '</a>';
 }
   ?>
        <!-- Denne bruger vi heller ikke mere, erstattet af løkken 
         <a class="button" href="#"><?= $menu_items[0]; ?></a>
         <a class="button" href="#"> <?= $menu_items[1]; ?> </a>
         <a class="button" href="#"> <?= $menu_items[2]; ?> </a>
         <a class="button" href="#"> <?= $menu_items[3]; ?> </a>
         <a class="button" href="#"><?= $menu_items[4]; ?> </a>
         <a class="button" href="#"><?= $menu_items[5]; ?></a>
         -->
      
   </nav>