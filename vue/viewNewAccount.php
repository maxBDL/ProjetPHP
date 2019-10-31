<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <img src="logo.png" alt="logo" >
    <meta charset="utf-8">
    <link rel="stylesheet" href="NewAccount.css">
    <title>Création compte</title>
  </head>

  <body>
    <h1>Créer un compte H2O</h1>
    <form class="" action="index.html" method="post">
      <input type="text" name="pseudo" placeholder="Pseudo" required autofocus><br>
      <input type="email" name="mail" placeholder="Adresse E-mail" required><br>
      <input type="password" name="motDePasse" placeholder="Mot de passe" required><br>
      <input type="password" name="motDePasse2" placeholder="Retaper le mot de passe" required><br>
      <a href="../controleur/ctrlhomepage.php"><input type="button" value="Annuler"></a>
      <input type="reset" value="Recommencer">
      <input type="submit" value="Continuer"><br>
      <a href="../controleur/ctrlconnexionpage.php"><input type="button" value="Déjà membre ? Identifiez-vous"></a>
    </form>
  </body>

  <footer>
    <p>Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
  </footer>

</html>