<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header>
        <a href="#" class="logo">
        <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         
        
      ?>
      <h3>WELCOME : <?php echo $fetch['name']; ?></h3>
        </a>
        <i class="bx bx-menu" id="menu-icon"></i>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#customers">Customers</a></li>
            <li><a href="update_profile.php">Edit Profile</a></li>
            <li><a href="home.php?logout=<?php echo $user_id; ?>"  onclick="return confirm('Are you sure want to logout?');">logout</a></li>
            

        </ul>
        

        <div class="header-icon">
            <i class='bx bx-cart-alt'><span></i>
            
            <i class='bx bx-search-alt' id="search-id"></i>

            
            
            
        </div>

        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here...">
        </div>

        

        

 
        
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <h1>Start Your Day <br> With Coffee</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae dolorem dolores eaque iusto aut maiores iste ullam ratione sapiente magni neque voluptas, nesciunt excepturi ex sequi tempore sunt, inventore facere?</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="home-img">
            <img src="" alt="">
        </div>


    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="top-view-coffee-accessories-table.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aut nisi tempora quis sit sapiente omnis, officiis provident voluptatum autem sint commodi, quas quae quibusdam suscipit! Ad eos magnam amet!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aut nisi tempora quis sit sapiente omnis, officiis provident voluptatum autem sint commodi, quas quae quibusdam suscipit! Ad eos magnam amet!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, vel dolor! Mollitia, esse id.</p>
            <a href="#" class="btn">Learn More</a>
        </div>

    </section>
    <section class="products" id="products">
        <div class="heading">
            <h2>Best Sellers</h2>

        <div class="products-container">
            <div class="box">
                <img src="aromatic-frappuccino-table.jpg" alt="">
                <h3>Java Chip Frappuccino</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="cappuccino-served-blue-cup.jpg" alt="">
                <h3>Java Chip Frappuccino</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="cup-three-layered-coffee-dark.jpg" alt="">
                <h3>Java Chip Frappuccino</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="Starbucks_SBU_Signature Chocolate Recipes 2022_Website Recipe_KV_Toasted Almond_LS.webp" alt="">
                <h3>Caramel Hot Chocolate Delight</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
            
            <div class="box">
                <img src="SBX20190607_IcedCaffeMocha.avif" alt="">
                <h3>Iced Caffe Mocha</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
            <div class="box">
                <img src="Espresso-Frappuccino_0.jpeg" alt="">
                <h3>Espresso Frappuccino</h3>
                <div class="content">
                    <span>$25</span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
    
        </div>



        
    </section>

    <section class="customer" id="customers">
        <div class="heading">
            <h2>Our Customer</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi omnis numquam, doloremque quas nesciunt eum maiores tempore, minima voluptatibus dolorum, suscipit necessitatibus. Excepturi soluta quam vero, numquam reiciendis nihil laborum.</p>
                <h2>Dipti Pal</h2>
                <img src="Snapchat-272182309.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi omnis numquam, doloremque quas nesciunt eum maiores tempore, minima voluptatibus dolorum, suscipit necessitatibus. Excepturi soluta quam vero, numquam reiciendis nihil laborum.</p>
                <h2>Pratik Pal</h2>
                <img src="Snapchat-330410348.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi omnis numquam, doloremque quas nesciunt eum maiores tempore, minima voluptatibus dolorum, suscipit necessitatibus. Excepturi soluta quam vero, numquam reiciendis nihil laborum.</p>
                <h2>Pratik Pal</h2>
                <img src="IMG_20230820_222644_183.jpg" alt="">
            </div>
        </div>


    </section>
    
    <section class="footer">
        <div class="footer-box">
            <h2>Coffee House</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus consequuntur laudantium explicabo ipsa praesentium nostrum? In deleniti ipsam architecto.</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Product</a></li>
        </div>
        <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog Posts</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bxs-map'></i>Bay Village Zuarinagar, GOA 403726</span>
                <span><i class='bx bxs-phone'></i>+91 9064671540</span>
                <span><i class='bx bxs-envelope'></i>pratik2002pal@gmail.com</span>
            </div>

        </div>
    </section>


    <div class="copyright">
        <p>&copy; Copyrights CoffeeHouse - All Rights Reserved.</p>

    </div>

    <script src="home.js"></script>
    
    
</body>
</html>

	


