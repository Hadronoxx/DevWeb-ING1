
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sucrerie Royale</title>
    </head>
    <body>
       <link rel="stylesheet" type="text/css" href="accueil.css?v=<?php echo time();?>" />
       <script type="text/javascript" src="accueil.js">

       </script>

       <?php include "haut.php"?>
       <div class="droite">
         <div id="mms" >
           <h1>Les  MMS</h1>
           <table class="Tableau">
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
                <td><img src="src/mmsnormal.png" onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"></td>
                <td>MMS1</td>
                <td>D'irrésistibles billes de chocolat pleines de couleurs aussi fun à manger qu'à partager. L'alliance unique entre une cacahuète croquante et un délicieux chocolat au lait.</td>
                <td>2.99€</td>
                <td class="stock">50</td>
                <td>
                  <input type="button" value="-" onclick="enlever1(this)">
                  <input type="number" style="width: 40%;" id="numero" value=0> 
                  <input type="button" value="+" onclick="ajouter1(this)">
                  <input type="button" value="Valider Panier" onclick="verifierpanier(this)">
                </td>
                <td>0</td>
        
              </tr>
              <tr>
                <td><img src="src/mmscrispy.png" onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"> </td>
                <td>MMS2</td>
                <td>D'irrésistibles billes de chocolat pleines de couleurs aussi fun à manger qu'à partager. Un cœur de riz soufflé croustillant enrobé de chocolat au lait pour une explosion de saveurs.</td>
                <td>2.50€</td>
                <td class="stock">30</td>
                <td><input type="button" value="-" onclick="enlever1(this)">
                  <input type="number" style="width: 40%;" id="numero" value=0>
                  <input type="button" value="+" onclick="ajouter1(this)">
                  <input type="button" value="Valider Panier" onclick="verifierpanier(this)">
                </td>
                <td>0</td>
        
              </tr>
              <tr>
                <td><img src="src/mmspeanutbutter.png" onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"></td>
                <td>MMS3</td>
                <td>Une idée simple, mais terriblement efficace : remplacer la cacahuète par du Beurre de Cacahuètes ! Chocolat croquant et Peanut Butter fondant, c'est parfait, culte, inédit en France ! </td>
                <td>3.99€</td>
                <td class="stock">60</td>
                <td><input type="button" value="-" onclick="enlever1(this)">
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
