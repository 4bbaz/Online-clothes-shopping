<!DOCTYPE html>
<html>

<head>
    <title> ordernow </title>
    <script src="https://kit.fontawesome.com/4113e921c4.js" crossorigin="anonymous"></script>
    <link rel="icon"  type="image/png" href="../img/moon-satellite.ico">
    <link rel="stylesheet" href="./ordernow.css">
    <?php 
        if(isset($_POST["continue"]))
        {
            $name = $_POST["fullname"];
            $email = $_POST["emailaddess"];
            $address1 = $_POST["address1"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $pincode = $_POST["pincode"];
            $country = $_POST["country"];
            $phone = $_POST["phonenumber"];
        }
     ?>
</head>


<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
        <div class="topnav">
            <a id="logo" href="../home.html">MOON DROID</a>
            <div class="icons">
                <a href="#"><i class="far fa-user"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>

            <div class="search">
                <input type="text" placeholder="search...">
                <button type="submit"> <i class="fa fa-search"></i></button>
            </div>
        </div>

        <div id="inform">
            <div id="php"> You are awesome <?php echo "$name"; ?> ! </div>
            <div id="ordered">Thank you, Your order has been received </div>
        </div>
        
        <div id="inform1">
                <div id="heread">Here is your address <i class="fas fa-chevron-circle-down"></i> </div>
                <div id="hereaddress">
        
                    <?php  echo "$name"; ?> <br>
                    <?php echo "$address1"; ?> <br>
                    <?php echo "$pincode"; ?> <br>
                    <?php echo "$city"; ?> <br>
                    <?php echo "Phone number: $phone"; ?> <br>
                    <?php echo "$state , $country";
                    ?>
                </div>
        
        </div>
        <div id="checkmail">
        <div> <i class="far fa-envelope"></i> An email comfrimation has been sent to you </div>
        <div> <i class="fas fa-shipping-fast"></i> the product will be arrive few days soon </div>
    </div>
    <section class="relatedproducts">
            <div class="relatedtitle">
                <h1> Realted products</h1>
            </div>
            <div class="relatedimgs">

                <div class="column1">
                    <div class="card">
                        <a href="../men/buy1.html"> <img src="../dress/tshirt1.jpg">
                    </div>
                    <div class="productsnames">
                        <p> Men Striped Short Sleeve Tee <br>
                            $55 </p>
                    </div>
                </div>

                <div class="column1">
                    <div class="card">
                        <a href="../men/buy2.html"> <img src="../dress/tshirt31.jpg">
                    </div>
                    <div class="productsnames">
                        <p> Men Letter Graphic Tunic Tee <br>
                            $65 </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column1">
                <div class="card">
                    <a href="../men/buy4.html"> <img src="../dress/tshirt71.jpg">
                </div>
                <div class="productsnames">
                    <p> Adidas t-shirt <br>
                        $80 </p>
                    </a>
                </div>
            </div>

            <div class="column1">
                <div class="card">
                    <a href="../men/buy6.html"> <img src="../dress/tshirt81.jpg">
                </div>
                <div class="productsnames">
                    <p> Men Print Sweatshirt hoodie <br>
                        $67 </p>
                    </a>
                </div>
            </div>

            <div class="column1">
                <div class="card">
                    <a href="../men/buy8.html"> <img src="../dress/tshirt21.jpg">
                </div>
                <div class="productsnames">
                    <p> Adidas t-shirt <br>
                        $85 </p>
                    </a>
                </div>
            </div>



        </section>

        <div id="foot">
            <div class="footdetails">
                <div class="footlists">
                    <h3> Get to Know Us</h3>
                    <p> About Us </p>
                    <p>careers </p>
                    <p> moondroid cares</p>
                    <p>Gift a Smile</p>
                </div>

                <div class="footlists">
                    <h3> Help & Support </h3>
                    <p> Shipping info </p>
                    <p>Return </p>
                    <p> How to order </p>
                    <p>How to track </p>
                </div>

                <div class="footlists">
                    <h3> Customer Care</h3>
                    <p> Contact Us </p>
                    <p> Payment method</p>
                    <p> Bouse Point</p>
                    <p> Cash on Delivery</p>
                </div>
            </div>
            <div class="conact">
                <div class="conacttitle"> FIND US ON
                    <div class="apptitle"> APP
                    </div>
                </div>

                <div class="socialmediaicons">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <div class="apps">
                        <i class="fab fa-apple"></i>
                        <i class="fab fa-android"></i>
                    </div>
                </div>


                <div class="email">
                    <p>SIGN UP FOR MOONDROID NEWS </p>
                    <input type="email" placeholder="Enter Your Email" required>

                    <div class="button">
                        <a href="#">SUBSCRIBE</a>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 1500);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
</body>

</html>