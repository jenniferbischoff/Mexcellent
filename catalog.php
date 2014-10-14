<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Catalog- Stephanie Garay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    
<!--Header-->
	<div id="header">
    	<div id="site-container" class="grid">
        	<header class="row">
            	<a href="home.php" class="c2" id="title" >Mexcellent</a>
                <a href="catalog.php" class="c3" id="menuButton">View our Menu</a>
                <form id="searchbar"  class="c3" method="get" action="http://www.google.com">
                        <input type="text" class="searchinput" name="search" size="19" maxlength="120"><input type="submit" value="search" class="tfbutton">
                </form>
                <a class="c2" id="myAccount" href="client.php">My Account</a>
                <a class="c1" id="shoppingBag" href="cart.php">Bag(3)</a>
            </header>
       	</div>
	</div>

<!--Content-->	
    <div id="site-content">      
		<div id="menuBg">
       	  <img src="img/menu.jpg" alt="menu"> 
          <h2 class="sectionHeading">Menu</h2>
        </div>
        <div id="menu" class="grid">
        	<div class="productSection">	
                <div class="row">
                    <div class="c6">
                        <h3 class="subheadings">BEVERAGES</h3>
                        <p class="descriptions">Choose from a diverse selection of beverages that everyone in the family can enjoy. From the fruity Jarritos sodas that's appropriate for children to a more adult Margarita or Corona for the adults. We also have a wide range of flavors to choose from so whichever one you pick, you won't be disappointed. </p> 
                        <div class="productImages" >
                            <div class="c4">
                                <div class="productThumb">	
                                    <a href="#news"><img src="img/jarritos.jpg" alt="juice"></a>
                                    <a href="jarritosProduct.php"><h3 class="productTitle">Jarrito</h3></a>
                                    <p>$1.95</p>
                                </div>
                            </div>
                            <div class="c4">
                                <div class="productThumb">	
                                    <img src="img/corona.jpeg" alt="beer">
                                    <a href="coronaProduct.php"><h3 class="productTitle">Corona (Contains Alcohol)</h3></a>
                                    <p>$2.49</p>
                                </div>  
                            </div>              
                            <div class="c4">
                                <div class="productThumb">
                                    <img src="img/margarita.jpg" alt="margarita">
                                    <a href="margaritaProduct.php"><h3 class="productTitle">Margarita (Contains Alcohol)</h3></a>
                                    <p>$5.95</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="c6 end">
                        <h3 class="subheadings">APPETIZERS</h3>
                        <p class="descriptions">Need something to start you off? Choose one of our delectable appetizers that everyone in the family can share and enjoy. Whether it would be a cheesy explosion from our Cheesy Nachos to nibbling on Taquitos before your main course.</p> 
                        <div class="productImages" >
                            <div class="c4">
                                <div class="productThumb">	
                                    <img src="img/nachos.jpg" alt="nachos">
                                    <a href="nachosProduct.php"><h3 class="productTitle">Cheesy Nachos</h3></a>
                                    <p>$8.95</p>
                                </div>
                            </div>
                            <div class="c4">	
                                <div class="productThumb">
                                    <img src="img/quesadilla.jpg" alt="nachos">
                                    <a href="quesadillaProduct.php"><h3 class="productTitle">Quesadilla</h3></a>
                                    <p>$8.95</p>
                                </div>  
                            </div>              
                            <div class="c4">	
                                <div class="productThumb">
                                    <img src="img/taquitos.jpg" alt="nachos">
                                    <a href="taquitosProduct.php"><h3 class="productTitle">Taquitos</h3></a>
                                    <p>$8.95</p>
                                </div>
                            </div>
                        </div>                
                    </div>
                 </div> 
          	</div> 
            <div class="productSection">
                <div class="row">
                    <div class="c6">
                        <h3 class="subheadings" id="mainCourse">MAIN COURSES</h3>
                        <p class="descriptions">We offer various kinds of dishes so everyone can find something they enjoy, from the fiery hot Locos Tacos to the delightfully crunchy Tostados. You can also pick chicken or beef with any of our courses to further customize your meal. </p> 
                        <div class="productImages" >
                            <div class="c4">
                                <div class="productThumb">	
                                    <img src="img/locosTacos.jpg" alt="taco">
                                    <a href="locostacosProduct.php"><h3 class="productTitle">Locos Tacos</h3></a>
                                    <p>$7.95</p>
                                </div>
                            </div>
                            <div class="c4">
                                <div class="productThumb">	
                                    <img src="img/burrito.jpg" alt="burrito">
                                    <a href="burritoProduct.php"><h3 class="productTitle">Burrito</h3></a>
                                    <p>$8.95</p>
                                </div> 
                            </div>               
                            <div class="c4">
                                <div class="productThumb">	
                                    <img src="img/fajitas.jpg" alt="fajitas">
                                    <a href="fajitasProduct.php"><h3 class="productTitle">Fajitas</h3></a>
                                    <p>$7.95</p>
                                </div>
                            </div>
                            <div class="c4">	
                                <div class="productThumb">
                                    <img src="img/tostadas.jpg" alt="tostadas">
                                    <a href="tostadosProduct.php"><h3 class="productTitle">Tostados</h3></a>
                                    <p>$7.95</p>
                                </div> 
                            </div>
                        </div>
                    </div>                    
          		</div>
          </div>                 
	</div>
        
<!-- Footer-->        
	<div id="footerBg">
    	<div class="grid">
        	<footer class="row">
            	<p class="c2">@Mexcellent 2014</p>
              	<p class="c7">This site is not official and is an assignment for a UCF Digital Media course</p>
                <p class="c3">Designed by Stephanie Garay</p>
            </footer>
        </div>
	</div> 
  </div>   
</body>
</html>