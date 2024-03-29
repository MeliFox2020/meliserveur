<!DOCTYPE html>
<html>
  <head>
    <title>Titre du document</title>
    <style>
      * {
      box-sizing: border-box;
      }
      body {
      font-family: Roboto, Helvetica, sans-serif;
      }
      /* Fixez le bouton sur le côté gauche de la page the button on the left side of the page */
      .open-btn {
      display: flex;
      justify-content: left;
      }
      /* Stylez et fixez le bouton sur la page */
      .open-button {
      background-color: #1c87c9;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      }
      /* Positionnez la forme Popup */
      .login-popup {
      position: relative;
      text-align: center;
      width: 100%;
      }
      /* Masquez la forme Popup */
      .form-popup {
      display: none;
      position: fixed;
      left: 45%;
      top:5%;
      transform: translate(-45%,5%);
      border: 2px solid #666;
      z-index: 9;
      }
      /* Styles pour le conteneur de la forme */
      .form-container {
      max-width: 300px;
      padding: 20px;
      background-color: #fff;
      }
      /* Largeur complète pour les champs de saisie */
      .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 22px 0;
      border: none;
      background: #eee;
      }
      /* Quand les entrées sont concentrées, faites quelque chose */
      .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
      }
      /* Stylez le bouton de connexion */
      .form-container .btn {
      background-color: #8ebf42;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
      }
      /* Stylez le bouton pour annuler */
      .form-container .cancel {
      background-color: #cc0000;
      }
      /* Planez les effets pour les boutons */
      .form-container .btn:hover, .open-button:hover {
      opacity: 1;
      }
    </style>
  </head>
  <body>
    <h2>Forme Popup</h2>
    <p>Cliquez sur le bouton "Ouvrir la forme" pour ouvrir la forme Popup.</p>
    <div class="open-btn">
      <button class="open-button" onclick="openForm()"><strong>Ouvrir la forme</strong></button>
    </div>
    <div class="login-popup">
      <div class="form-popup" id="popupForm">
        <form action="/action_page.php" class="form-container">
          <h2>Veuillez vous connecter</h2>
          <label for="email">
          <strong>E-mail</strong>
          </label>
          <input type="text" id="email" placeholder="Votre Email" name="email" required>
          <label for="psw">
          <strong>Mot de passe</strong>
          </label>
          <input type="password" id="psw" placeholder="Votre Mot de passe" name="psw" required>
          <button type="submit" class="btn">Connecter</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
        </form>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("popupForm").style.display="block";
      }

      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
    </script>
  </body>
</html>
