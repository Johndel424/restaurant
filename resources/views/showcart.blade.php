<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Johndel Cafe</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    </head>
    
    <body>
    
   
    
    
    < <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="log">
                            <img src="assets/images/1-removebg-preview.png" >
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
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}" >Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">About</a></li>
                           	
                        
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Drinks</a></li> 
                            
                           
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Contact Us</a></li>
                                @auth
                                <li class="scroll-to-section">
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    <div class="circle">
                                    <i class="fas fa-solid fa-cart-shopping "></i>
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
    
   
    <style>
        /* Center the cartdata div using flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .cartdata {
            /* Add your cartdata styles here */
            padding: 5px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
        }
        table {
            width: 100%;
        }
        
        
    </style>
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
        <a href="{{url('/redirects')}}">
            <div class="circle">
                <i class="fa-solid fa-house"></i>
            </div>
        </a>
        {{-- @guest
        Cart[0]
        @endguest --}}
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



    <div class="cartdata">
            <table >
                <tr>
                    <th style="padding: 3px;">Food Name</th>
                    <th style="padding: 3px;">Price</th>
                    <th style="padding: 3px;">Quantity</th>
                    <th style="padding: 3px;">Action</th>
                </tr>
                <form action="{{url('orderconfirm')}}" method="POST">
                @csrf
                @foreach($data as $data)
                            <tr align="center">
                                <td style="top: 10px;">

                                    <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                                    {{$data->title}}
                                </td>
                                
                                <td style="top: 10px;">
                                    <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                                    {{$data->price}}
                                </td>

                                <td style="top: 10px;">
                                    <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                                    {{$data->quantity}}
                                </td>
                                

                            </tr>
                    @endforeach


                    @foreach($data2 as $data2)
                    <tr >
                    <td style="right: -235px; position:relative; top: auto; "><a href="{{url('/remove',$data2->id)}}" ><i class="fa-solid fa-trash"></i></td>
                    </tr>
                    @endforeach



            </table>

                    <div align="center" style="padding: 10px;">
                        <button class="btn " type="button" id="order">Order Now</button>
                    </div>

                    <div id="appear" align="center" style="padding: 10px; display: none;">
                        <div style="padding: 10px;">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name">
                        </div>

                        <div style="padding: 10px;">
                            <label>Phone</label>
                            <input type="number" name="phone" placeholder="Phone">
                        </div>

                        <div style="padding: 10px;">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address">
                        </div>

                        <div style="padding: 10px;">
                        
                            <input class="btn btn-success" type="submit" value="Order Confirm">

                            <button id="close" type="button" class="btn btn-danger">Close</button>
                        </div>
                    </div>
             </form>
         
    </div>




    <script type="text/javascript">
        $("#order").click(

            function()
            {
                $("#appear").show();
            }
            );

        $("#close").click(

            function()
            {
                $("#appear").hide();
            }
            );



    </script>






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