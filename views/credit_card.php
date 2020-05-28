<head>
  <link rel="stylesheet" type="text/css" href="../styles/card.css">
</head>
<div class='container'>
  <div class='window'>
    <div class='order-info'>
        <?PHP
      	    include "../core/LivraisonC.php";
            $Commande1C=new CommandeC();
            $listeCommande=$Commande1C->afficherCommandeC();
            foreach($listeCommande as $row){
        ?>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
                <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
                <td><?PHP echo $row['nom_produit'];?></td>
            </tr>
          </tbody>
        </table>

        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
                <td><?PHP echo $row['prix_total']; echo " DT";?></td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>

            <div class='thin dense'>Delivery</div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'>15 DT</div>
            <td><?PHP echo $row['prix_total']; echo " DT";?></td>
          </span>
        </div>
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <table class='half-input-table'>
              <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                <ul>
                  <li>Master Card</li>
                  <li>American Express</li>
                  <li>E-dinar</li>
                  </ul></div>
                </div>
               </td></tr>
            </table>
            <img src='../images/visa_logo%20(1).png' height='80' class='credit-card-image' id='credit-card-image'></img>
            Card Number
            <input maxlength="16" class='input-field'></input>
            Card Holder
            <input class='input-field'></input>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input type="date" class='input-field'></input>
                </td>
                <td>CVC
                  <input maxlength="3" class='input-field'></input>
                </td>
              </tr>
            </table>
            <button class='pay-btn' onClick="window.location.href='../product.html'">Checkout</button>


          </div>
         <?PHP
         }
         ?>
        </div>
      </div>
</div>
<script src="../js/card.js"></script>
