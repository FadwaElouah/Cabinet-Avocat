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
        <h2>Inscription</h2>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

             <div class="form-group">
                <label for="role">Rôle</label>
                <select name="role" id="role" required>
                    <option value="client">Client</option>
                    <option value="avocat">Avocat</option>
                </select>
                </div>

                <button type="submit">S'inscrire</button>
        </form>
      </div>
 </section>

<script src="app.js"></script>
</body>

</html>