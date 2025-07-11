
<form action="traitement.php" method="POST" id="contact">
    <div class="container-form1">
        <h1 style="text-align: start; font-size: 1.5rem;">Contactez nous et lancez votre site maintenant</h1>
        <img src="image/boost.svg" alt="boost">
    </div>

    <label for="prenom">Prenom</label>
    <div class="form-input-1">
        <input type="text" name="prenom" id="prenom" placeholder="Prenom">
    </div>
    <p id="error-nom"></p>

    <label for="numero">Numero de tel</label>
    <div class="form-input-2">
        <input type="text" name="numero" id="numero" placeholder="+237 697705835">
    </div>
    <p id="error-numero"></p>

    <label for="ville">Ville</label>
    <div class="form-input-3">
        <input type="text" name="ville" id="ville" placeholder="Douala">
    </div>
    <p id="error-ville"></p>

    <label for="pack">Sélectionnez votre pack</label>
     <div class="form-input-4">
       <select name="pack" id="pack">
        <option value="">Veuillez sélectionner un pack</option>
        <option value="levelup1">LEVEL UP 1</option>
        <option value="levelup2">LEVEL UP 2</option>
        <option value="levelupmax">LEVEL UP MAX</option>
       </select>
    </div>

    <label for="e-mail">Addresse e-mail (Facultatif)</label>
    <div class="form-input-5">
        <input type="email" name="email" id="e-mail" placeholder="rogerbihem@gmail.com">
    </div>

    <label htmlFor="text-area"> Ajouter un commentaire</label>
    <div class="form-input-6">
    <textarea className="w-full outline-none"id="text-area"name="text_area"rows="5"cols="33"placeholder="Ajoutez un commentaire ou une préoccupation"></textarea>
    </div>

    <button type="submit"> Envoyer</button>

     <?php if(isset($_SESSION['status'])){
           echo "<p>".$_SESSION['status']."</p>";
           unset($_SESSION['status']);
        } 
           ?>

</form>

<div class="testimony" id="formulaire">
    <p style="font-weight: 600;">Consultez notre derniere réalisation</p>
    <div>
        <img src="image/logo.png" alt="1963-store" width="70px" height="70px" loading="lazy">
        <a href="https://www.1963-store.com/category/mode/montres" traget="_blank" style="text-decoration: underline;">cliquez ici pour consulter le site</a>
    </div>
</div>

<div class="faq">
    <p class="faq-text">F.A.Q</p>

    <div class="faq-div-1">
        <p>Quel sont les délai de livraison des sites internet chez vous ?</p>
        <img src="image/down.svg" alt="icon" width="20px" height="20px" loading="lazy" id="up-1">
    </div>

    <p class="response-1" style="display: none;">Nous vous livrons votre site e-commerce, page de vente ou blog en seulement 7 jours si vous nous fournissez à temps tous les éléments requis</p>
</div>