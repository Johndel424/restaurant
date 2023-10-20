<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Johndel Cafe</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   --}}
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="log">
                            <img src="assets/images/JOHNDELlogo.png" >
                        </a>
                        <style>
                            .log img{
                                height: 70px;
                                width: 70px;
                                margin-top: 5px;
                            }
                        </style>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Drinks</a></li> 
                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            
                            
                          

                            
                                @auth
                                <li class="scroll-to-section">
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    <div class="circle">
                                    <i class="fas fa-solid fa-cart-shopping"></i>
                                    <span class="badge" id="cart-badge">({{$count}})</span>
                                    </div>
                                </a>
                                 </i>
                                 @endauth
                               
                               
                             @guest

                            {{-- <li class="scroll-to-section">Cart[0]</li> --}}

                            @endguest 


                            </a>
                            <li>
                                @if (Route::has('login'))
                             <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <li><x-app-layout>

                                    </x-app-layout></li>
                                @else
                            <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </li>
                        </ul>        

                        {{-- <a class='menu-trigger'>
                            <span></span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    

        <!-- Assistive Touch Navbar -->
        <div class="assistive-touch" id="assistiveTouch">
            @auth
            <a href="{{url('/showcart',Auth::user()->id)}}">
                <div class="circle">
                  <i class="fas fa-solid fa-cart-shopping"></i>
                  <span class="badge" id="cart-badge">{{$count}}</span>
                </div>
            </a>
            @endauth
            @guest
            {{-- Cart[0] --}}
            @endguest
            <div class="circle" draggable="false" ontouchstart="handleTouchStart(event)" ontouchmove="handleTouchMove(event)" onclick="handleClick()">
              <i class="fas fa-thin fa-gears icon"></i> <!-- Replace this with the desired Font Awesome icon --><i class="fa-solid "></i>
            </div>
            
            <div class="menu" id="menu">
                <ul>
                  @if (Route::has('login'))
                    @auth
                      {{-- <li><i class="fas fa-thin fa-gears icon"></i></li> --}}
                      <li><x-app-layout></x-app-layout></li>
                    @else
                      <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                      
                      @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" >Register</a></li>
                      @endif
                    @endauth
                  @endif
                  
                </ul>
              </div>
          </div>
  
 <style>
        @media (min-width: 600px){
            .assistive-touch {
                display: none;
            }
            .log{
                display: none;
            }
        }
        @media (max-width: 500px) {
            @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
            }

            .badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red; /* Pula na kulay */
            color: white;
            border-radius: 50%;
            padding: 4px 6px;
            font-size: 12px;
            }

            .icon {
            animation: rotate 2s linear infinite;
            }
            .nav{
                display: none;
            }
            .logoo{
                display: none;
            }
            /* Customize the appearance of the assistive touch button */
            .assistive-touch {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            }

            .circle {
            width: 50px;
            height: 50px;
            background-color: #353c42; /* Change this to your desired button color */
            border-radius: 50%;
            cursor: grab;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            color: #fff;
            }

            /* Customize the appearance of the menu */
            .menu {
            display: none;
            position: absolute;
            bottom: 65px;
            right: 20px;
            background-color: #943a3a;
            border-radius: 5px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.3);
            padding: 10px;
            }

            .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            }

            .menu li {
            margin: 10px;
            }

            .menu a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.2s;
            }

            .menu a:hover {
            background-color: #ddd;
            }
            }
 </style>


    <script>
    let touchStartX, touchStartY, touchEndX, touchEndY;
    let assistiveTouch = document.getElementById("assistiveTouch");

    function handleTouchStart(event) {
    touchStartX = event.touches[0].clientX;
    touchStartY = event.touches[0].clientY;
    }

    function handleTouchMove(event) {
    event.preventDefault();
    touchEndX = event.touches[0].clientX;
    touchEndY = event.touches[0].clientY;
    const offsetX = touchEndX - touchStartX;
    const offsetY = touchEndY - touchStartY;
    const newX = assistiveTouch.offsetLeft + offsetX;
    const newY = assistiveTouch.offsetTop + offsetY;

    // Ensure the button doesn't go out of the screen boundaries
    const maxX = window.innerWidth - assistiveTouch.offsetWidth;
    const maxY = window.innerHeight - assistiveTouch.offsetHeight;
    assistiveTouch.style.left = Math.max(0, Math.min(maxX, newX)) + "px";
    assistiveTouch.style.top = Math.max(0, Math.min(maxY, newY)) + "px";

    touchStartX = touchEndX;
    touchStartY = touchEndY;
    }

    function handleClick() {
    // Add your desired click functionality here
    const menu = document.getElementById("menu");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
    }
</script>



    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logoo">
                            <img src="assets/images/JOHNDELlogo.png" >
                        </a>
                        <style>
                            .logoo img{
                                height: 250px;
                                width: 250px;
                                margin-top: -200px;

                            }
                        </style>
                        <!-- ***** Logo End ***** -->
                            <h4 style="color: black">Crave it, Pick it!</h4>
                            <h6 style="color: black">Sweet cravings? We got u.</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img  src="assets/images/front.jpg" alt="Chef">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img  src="assets/images/front.jpg" alt="Chef">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          {{-- <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div> --}}
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>The Story of Crave It, Pick It</h2>
                        </div>
                        <p>Welcome to "Crave It, Pick It" - your ultimate destination for delightful breads and refreshing drinks! Our journey began with a passion for crafting the finest,
                             handcrafted delicacies that leave our customers craving for more. <br>
                             At "Crave It, Pick It," we take pride in offering a unique and memorable cafe experience like no other.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            {{-- <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a> --}}
                            <img src="assets/images/cake.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    @include("food")

    @include("foodchef")

    @include("reservation")

    

   
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-truck-fast"></i></a></li>
                            </ul>
                    </div>
                    <div class="credit">
                        <p>© 2023 JohndelWorks.</p>
                    </div>
                   
                 
                </div>
                <div class="work">
                    <p>© 2023 JohndelWorks.</p>
                </div>
                
            </div>
        </div>
    </footer>
    <style>
        .credit {
            position: relative;
            margin-right: 0;
            padding: 20px;
            width: auto;
            text-align: center;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: none;
        }
        .work {
            text-align: center;
            padding: 20px;
            
            max-width: 400px; /* Add a maximum width for larger screens */
            width: 90%; /* Set a default width */
        }
        @media (max-width: 480px) {
            .credit {
                padding: 10px;
                bottom: 0;
                position: relative;
                width: auto;
                text-align: center;
                display: block;
            }
            .work{
                display: none;
            }
        }
        .logodown img
        {
            height: 100px;
            width: 100px:
           
        }
    </style>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>