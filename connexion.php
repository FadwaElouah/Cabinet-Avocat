<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet d'Avocats</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="container">
       <div>
         <i class="fa-solid fa-scale-balanced"></i>
         <span>Justice</span>
       </div>
       <div class="link">
         <a href="index.php">Home</a>
         <a href="inscription.php">Inscription</a>
         <a href="connexion.php">Connexion</a>
       </div>
</header>
<section>
   <div class="form-box">
        <h2>Connexion</h2>
        <form  method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password-login">Mot de passe</label>
                <input type="password" id="password-login" name="password" required>
             </div>
             <button type="submit">Se connecter</button>
                   
            </form>
    </div>
</section>


</body>

</html>