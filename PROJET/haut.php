      
      
      <div class="haut">
         <h1 id="Titre">Sucrerie Royale</h1>
         <ul class="menu">
           <li onclick="accueil()"><a >Accueil</a></li>
           <li onclick="skittle()"><a>Skittles</a></li>
           <li onclick="mms()"><a>M&M's</a></li>
           <li onclick="haribo()"><a>Haribo</a></li>
           <li  onclick="Contact()"><a>Contact</a></li>
         </ul>
         <img src="src/panier.png" id="panier" onclick="panier()" onmouseover="console.log('bjr')">
        <div class="btnConnexion">
          <?php
          /*echo "Valeur de la session:";
          print_r($_SESSION);*/
          if($_SESSION["user"]==null){          
          ?>
          <a href="inscription.php">S'inscrire</a>
         <a href="connexion.php">Se connecter</a>
        <?php
          }else{
            ?>
            <a href="deconnexion.php">Se deconnecter</p>
            <?php
          }
        ?>
        </div>
       </div>

       <div class="imagebonbon">
         <img src="src/photoAccueil.png" id="skittles">
         
       </div>
        
       <div class="gauche">
         <h1>Sucrerie Royale</h1>
         <a onclick="accueil()">Accueil</a> <hr>
         <h2 style="text-decoration: underline">Nos produits</h2>
         <a onclick="skittle()">skittles</a> <br> <br>
         <a onclick="mms()">M&M's</a> <br> <br>
         <a onclick="haribo()">Haribo</a>
         
<br>

       </div>

       <div class="bas">
         <p style="text-align:center">Copyright</p>
       </div>