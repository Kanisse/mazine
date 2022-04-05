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


<!----------------Single product details----------->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
            
                <img src="images/samsungearbuds.jpg" width="100%" id="ProductImg">
                <br><br><br>
            
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/samsungearbuds.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/samsungearbuds1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/samsungearbuds3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/samsungearbuds4.jpg" width="100%" class="small-img">
                    </div>
                </div>
                


            </div>
            <div class="col-2">
                <p>Home</p>
                <h1>Produit</h1>
                <h4>Prix $</h4>
                <select>
                    <option>Produit</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>

                </select>
                <input type="number" value="1">
                <a href="" class="btn">Ajouter Au Panier</a>
                <h3>Detail de produit <i class="fa fa-indent"></i></h3><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magni consequatur hic similique error officiis iure est neque sed possimus inventore voluptates quibusdam nihil, ipsum unde itaque dolorum exercitationem sint.</p>
            </div>
        </div>
    </div>

<!--------------------title----------------------->

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View more</p>
        </div>
    </div>


<!--------------------products----------------------->

    <div class="small-container">


          <div class="row">
                <div class="col-4">
                    <img src="images/INSERT-IMAGE" >
                    <h4>Produit</h4>
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
                    <img src="images/INSERT-IMAGE" >
                    <h4>Produit</h4>
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
                    <img src="images/INSERT-IMAGE" >
                    <h4>Produit</h4>
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
                    <img src="images/INSERT-IMAGE" >
                    <h4>Produit</h4>
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

<!------------------------JS for product gallery------->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg =  document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function(){
                
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function(){
                
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function(){
                
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function(){
                
                ProductImg.src = SmallImg[3].src;
            }

    </script>


</body>
</html>