<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sucrerie Royale</title>
    </head>
    <body>
       <link rel="stylesheet" type="text/css" href="accueil.css" />
       <script type="text/javascript" src="accueil.js">

       </script>

  
    <?php include "haut.php"?>
       <div class="droite">
         <div id="haribo"  >
          <h1>Les Haribo</h1>
          <table class="Tableau" id=tab>
            <thead>
              <tr>
                <th>Photo</th>
                <th>Référence</th>
                <th>Description</th>
                <th>Prix</th>
                <th class="stock">Stock</th>
                <th>Commande</th>
                <th>Quantité commandée</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="src/Haribo_original.png"  onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"></td>
                <td><?php echo $ref1Haribo=HRB1;?></td>
                <td>Une réputation bien méritée. L’inimitable bonbon fait depuis 1922 la joie des petits et des grands, comme celle des jeunes et des moins jeunes. Les Ours d’or multicolores existent en six délicieuses saveurs fuitées et offrent une joie savoureuse que l’on a envie de partager.</td>
                <td>2.99€</td>
                <td class="stock">50</td>
                <td>
                  <input type="button" value="-" id="skittle1-" onclick="enlever1(this)">
                  <input type="number" style="width: 40%;" id="numero" value=0>
                  <input type="button" value="+" id="skittle1+" onclick="ajouter1(this)">
                  <input type="button" value="Valider Panier" onclick="verifierpanier(this)">
        
        
                </td>
                <td>0</td>
        
              </tr>
              <tr>
                <td><img src="src/haribo_pitufo.png"  onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)" ></td>
                <td>HRB2</td>
                <td>Depuis plus de trente ans, leur couleur et leur goût inimitables font des Schtroumpfs l’un des bonbons préférés des Français. Dans chaque sachet retrouvez vos Schtroumpfs préférés ! Schtroumpf alors ! Ils sont sans colorant artificiel !</td>
                <td>3.25€</td>
                <td class="stock">40</td>
                <td>
                  <input type="button" value="-" onclick="enlever1(this)">
                  <input type="number" style="width: 40%;" id="numero" value=0>
                  <input type="button" value="+" onclick="ajouter1(this)">
                  <input type="button" value="Valider Panier" onclick="verifierpanier(this)">        
                </td>
                <td>0</td>
        
        
              </tr>
              <tr>
                <td><img src="src/haribo_Chamallows.png" id="Skittlebleu" onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"></td>
                <td>HRB3</td>
                <td>Comment résister à leur saveur, leur douceur, leur moelleux ? Les délicieuses guimauves Chamallows font fondre de plaisir petits et grands, depuis près de 50 ans. Elles animent soirées au coin du feu, BBQ, anniversaires ... Sans gluten, sans colorant artificiel.</td>
                <td>3.99€</td>
                <td class="stock">20</td>
                <td>
                  <input type="button" value="-" onclick="enlever1(this)">
                  <input type="number" style="width: 40%;" id="numero" value=0>
                  <input type="button" value="+" onclick="ajouter1(this)">
                  <input type="button" value="Valider Panier" onclick="verifierpanier(this)">
                  </td>
                  <td>0</td>
              </tr>
            </tbody>
          </table>
          <input id="BoutonStock"
               type="button"
               value="Cacher Stock" onclick="cacherStock()">
          
         </div>
        


       </div>





    </body>
</html>

