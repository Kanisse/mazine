<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Enligne</title>
    <link rel="icon" href="images/icons8-electric-67 (1).png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</head>
<body>
    <div class="line" id="scrollIndicator"></div>
<div class="header">
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
    <div class="row">
        <div class="col-2">
            <h1 class="head">Le Future,<br>est pour toi.</h1>
            <p>Trouvez les meilleurs appareils électroniques, <br> mais l'ordinaire</p>
            <a href="products.html" class="btn">Explorez Notre Catalogue &#8594;</a>
        </div>
        <div class="col-2">
            <img src="images/header1.png">
        </div>

    </div>
</div>

</div>

<!-- ----------Categorie---------------------- -->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category4.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category33.jpg">
                </div>
            </div>
        </div>

    </div>


<!----------Produits----------------------->
    <div class="small-container">
        <h2 class="title">Produit Trending</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/airpodspro.jpeg" >
                <h4>AirPods Pro</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/applewatch.jpeg" >
                <h4>Black Apple Watch Sport</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/sonyheadphone.jpeg" >
                <h4>Black Sony Headphones</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$45.00</p>
            </div>
            <div class="col-4">
                <img src="images/samsungwatch.jpeg">
                <h4>Samsung Watch Sport</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$500.00</p>
            </div>
        </div>

        <!-- ----------Categorie---------------------- -->

        <h2 class="title">Derniers Produits</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/GalaxyWatch4Classic.jpg">
                <h4>Galaxy Watch 4 Classic</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/samsungwatch.jpeg">
                <h4>Samsung Watch Sport</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/samsungearbuds.jpg">
                <h4>Samsung Ear Buds Noir</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$45.00</p>
            </div>
            <div class="col-4">
                <img src="images/INSERT PICTURE HERE">
                <h4>Dark Blue Polo</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/INSERT PICTURE HERE">
                    <h4>Red Printed T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
    
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/INSERT PICTURE HERE">
                    <h4>Black Sport Shoes</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
    
                    </div>
                    <p>$65.00</p>
                </div>
                <div class="col-4">
                    <img src="images/INSERT PICTURE HERE">
                    <h4>Grey Joggins</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
    
                    </div>
                    <p>$45.00</p>
                </div>
                <div class="col-4">
                    <img src="images/INSERT PICTURE HERE">
                    <h4>Dark Blue Polo</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
    
                    </div>
                    <p>$50.00</p>
                </div>
        </div>
            -->
    </div>
    </div>

    

<!----------Offres----------------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusive sur notre site</p>
                    <h1>Smart Band 4</h1>
                    <p>Passez au niveau supérieur
                        Écran couleur et surveillance
                        de la fréquence cardiaque
                    </p><br>
                    <a href="" class="btn">Decouvrir Maintenent &#8594;</a>
                </div>
            </div>
        </div>
    </div>

<!-----------------Testitomal------------->
    <div class="testimonial">
        <div class="small-container">
            <h2 class="title">Commentaires</h2>
            <div class="row">
                 <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                     <p>Merci beaucoup pour votre excellent service. Il n'y a pas beaucoup d'entreprises de nos jours qui se distinguent par un excellent service client comme le vôtre, donc je vous en félicite.</p>
                     <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/user-1.png" alt="">
                    <h3>Amina</h3>
                 </div>
                 <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                     <p>Merci beaucoup pour les combinaisons qu'elles sont présentes, elles n'ont donc pas encore été ouvertes pour examen, mais votre service a été incroyable et je recommanderais à cause de votre service client :)</p>
                     <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/user-2.png" alt="">
                    <h3>Alae</h3>
                 </div>
                 <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                     <p>Merci pour votre excellent service client ! Tout est parfait, j'ai hâte de faire connaître votre entreprise. Je ne manquerai pas de parler à mes amis de mon expérience d'achat. Continuez votre bon travail.</p>
                     <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/user-3.png" alt="">
                    <h3>Soukaina</h3>
                 </div>
            </div>
        </div>
    </div>



    <button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Messagerie</h1>

    <label for="msg"><b>Instantané</b></label>
    <textarea placeholder="Tapez un message..." name="msg" required></textarea>

    <button type="submit" class="btn">Envoyer</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
  </form>
</div>



    
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
    <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>

<script>

	// Added event listener to the scroll
	window.addEventListener('scroll',
			moveScrollIndicator);

	// Getting scrollIndicator element by ID
	const scrollIndicatorElt =
		document.getElementById('scrollIndicator');

	// Height of entire web page - height
	// of viewable portion of browser
	const maxHeight =
		window.document.body.scrollHeight
		- window.innerHeight;

	function moveScrollIndicator(e) {

		// Calculating width of the
		// scrollIndicator element
		const percentage =
			((window.scrollY) / maxHeight) * 100;

		// Pixels scrolled by the user
		// to total scrollable Pixels
		scrollIndicatorElt.style.width
				= percentage + '%';
	}
</script>


</body>
</html>