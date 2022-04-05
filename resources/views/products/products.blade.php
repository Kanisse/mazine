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
<body>
    <div class="line" id="scrollIndicator"></div>

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



    <div class="small-container">

        <div class="row row-2">
            <h2>Liste de Produits</h2>
            <select>
                <option>Trie Par Défaut</option>
                <option>Trie Par Prix</option>
                <option>Trie Par Popularité</option>
                <option>Trie Par Evaluation</option>
                <option>Trie Par Vente</option>
            </select>
        </div>


        <div class="row">
            <div class="col-4">
                <img src="images/headphones1.jpeg" >
                <h4>JBL Headphones</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <br><p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/hppavilion.jpg">
                <h4>HP EliteBook</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <br><p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/lenovothinkpad.jpg">
                <h4>Lenovo ThinkPad</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <br><p>$45.00</p>
            </div>
            <div class="col-4">
                <img src="images/iphone11.jpg">
                <h4>iPhone 11 Purple 64GB</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <br><p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/macbook2.jpeg" >
                <h4>MacBook Pro TouchBar</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <br><p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/macbook3.jpeg">
                <h4>MacBook Pro 2020 Grey</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <br><p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/iphone12.jpeg" >
                <h4>iPhone 12 Dark Blue 128</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <br><p>$45.00</p>
            </div>
            <div class="col-4">
                <img src="images/hp.jpeg" >
                <h4>MacBook Air 12.5</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <br><p>$50.00</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/lenovoideapadgaming.jpg">
                    <h4>Acer Portable Screen</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
    
                    </div>
                    <br><p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/hpvictus.jpg">
                    <h4>Asus VivoBook Grey</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
    
                    </div>
                    <br><p>$65.00</p>
                </div>
                <div class="col-4">
                    <img src="images/macbook4.png" >
                    <h4>MacBook Air 12.5</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
    
                    </div>
                    <br><p>$45.00</p>
                </div>
                <div class="col-4">
                    <img src="images/macbook5.jpeg" >
                    <h4>MacBook Air 12.5</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
    
                    </div>
                    <br><p>$50.00</p>
                </div>
        </div>
        
    </div>
    <div class="page-btn">
    
        <span>1</span>
        <a href="products2.html"><span>2</span></a>
        <a href="products3.html"><span>3</span></a>
        <a href="products4.html"><span>4</span></a>
        <a href="products5.html"><span>5</span></a>
        <span>&#8594;</span>

    </div>

    </div>
    
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