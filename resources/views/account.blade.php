<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="icon" href="images/icons8-electric-67 (1).png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</head>
<body style="background: radial-gradient(#fff, #404142);">

    
<div class="container">

    <div class="navbar">
        <div class="logo">
            <a href="index.html">
            <img src="images/logoelectro.png" width="125px">
        </a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Produits</a></li>
                <li><a href="">A Propos</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.html">Compte</a></li>
                
            </ul>
        </nav>
        <a href="cart.html">
        <img src="images/cart.png" width="30px" height="30px">
        </a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div> 

</div>


<!--------------------Account-page----------------------->



    <div class="container">
        <div class="row">
            <div class="col-2">
            <!--    <img src="images/clipart4812648.png" width="100%">  -->
            <h1 class="head" style="color: black;">Nouveau Client ? <br> Rejoins-nous en quelque secondes</h1>
            </div>
            <div class="col-2">
                <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">S'identifier</span>
                            <span onclick="register()">S'enregistrer</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm">
                            <input type="text" placeholder="Nom D'utilisateur">
                            <input type="password" placeholder="Mot de passe">
                            <button type="submit" class="btn">Connexion</button>
                            <a href="">Mot De Passe Oublié ?</a>
                        </form>

                        <form id="RegisterForm">
                            <input type="text" placeholder="Nom D'utilisateur">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Mot de passe">
                            <button type="submit" class="btn">S'enregistrer</button>
                        </form>

                </div>
            </div>
        </div>
    </div>



<!--------------------footer----------------------->

    
<!-------------------Footer------------------------------------>


<footer class="footer-distributed">

    <div class="footer-left">

        <img src="images/logoeelectrowhite.png" width="125px">

        <p class="footer-links">
            <a href="#">Home</a>
            ·
            <a href="#">Blog</a>
            ·
            <a href="#">Pricing</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">ElectroNet © 2022</p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

    <div class="footer-right">

        <p>Contactez-Nous</p>

        <form action="#" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <textarea name="message" placeholder="Message"></textarea>
            <button>Envoyer</button>

        </form>

    </div>

</footer>

    <!---------------------------JS FOR TOGGLE MENU-------------->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
             if(MenuItems.style.maxHeight == "0px")
             {
                 MenuItems.style.maxHeight = "200px";
             }
        else
             {
                 MenuItems.style.maxHeight = "0px";
             }
        }
    </script>

<!---------------------------JS FOR TOGGLE FORM-------------->

<script>

    var LoginForm = document.getElementById("LoginForm");
    var RegisterForm = document.getElementById("RegisterForm");
    var Indicator = document.getElementById("Indicator");

    function register(){

        RegisterForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){

        RegisterForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

</script>
</body>
</html>