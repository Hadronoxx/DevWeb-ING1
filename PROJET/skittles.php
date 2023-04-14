<?php 
session_start();

?>
<!DOCTYPE html>
<html>
    <body>
       <link rel="stylesheet" type="text/css" href="accueil.css?v=<?php echo time();?>" />
       <script type="text/javascript" src="accueil.js?">

       </script>
       <?php include "haut.php"?>

  <div class="droite">
         <div id="skittle">
          
           <h1>Les Skittles</h1>

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
        <td><img src="src/skitllestab.png"  onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"></td>
        <td>SKT1</td>
        <td>Des bonbons tendres dragéifiés aux fruits aux couleurs de l'arc-en ciel. Une variété de parfums : fraise, citron, pomme, raisin ou framboise.</td>
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
        <td><img src="src/skittleviolets.png"  onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)" ></td>
        <td>SKT2</td>
        <td>Dragées multicolores à la framboise, à la fraise, à la mûre, à la cerise sauvage et melon-mûre.</td>
        <td>3.25€</td>
        <td class="stock">40</td>
        <td>
          <input type="button" value="-" onclick="enlever1(this)">
          <input type="number" style="width: 40%;" id="numero" value=0>
          <input type="button" value="+"  onclick="ajouter1(this)">
          <input type="button" value="Valider Panier" onclick="verifierpanier(this)">        
        </td>
        <td>0</td>
          


      </tr>
      <tr>
        <td><img src="src/skittlebleu.png" id="Skittlebleu" onmouseout="reduireimage(this)" onmouseover="agrandirimage(this)"></td>
        <td>SKT3</td>
        <td>Skittles au goût fruits tropicaux. Chaque skittle est bi-goût: Banane/Baies, kiwi/Citron, Mangues/Agrumes, Ananas/Fruits de la passion, Fraise/Carambole, une valeur sure qui ne vous décevra pas </td>
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
       value="Afficher Stock" onclick="cacherStock()">
    </body>
</html>
