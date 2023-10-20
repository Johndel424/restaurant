<!-- ***** Menu Area Starts ***** -->
    {{-- <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post">

                        @csrf

                    <div class="item">
                        
                        <div style="background-image: url('/foodimage/{{$data->image}}');" class='card'>


                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>

                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

                        <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                        <input type="submit" value="add cart">


                    </div>
                    </form>

                    @endforeach                                                   
                    
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>We offer the best sweets for you</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel custom">
                    @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post">
                        @csrf
                        <div class="item">
                            <div style="background-image: url('/foodimage/{{$data->image}}');" class='card-with-shadow'>
                                <div class="price"><h6>{{$data->price}}</h6></div>
                                <div class='info'>
                                    <h1 class='title'>{{$data->title}}</h1>
                                    <p class='description'>{{$data->description}}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                            <input type="submit" value="add cart">
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Add the following styles to your existing CSS or create a new CSS section */

.menu-item-carousel .owl-menu-item .item {
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin: 10px;
}

.menu-item-carousel .owl-menu-item .item .card-with-shadow {
    border-radius: 10px;
    overflow: hidden;
}

.menu-item-carousel .owl-menu-item .item .card-with-shadow .info {
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.9);
}

.menu-item-carousel .owl-menu-item .item .price h6 {
    background-color: #000000; /* Change to your desired color */
    color: #fff; /* Change to your desired text color */
    padding: 8px 12px; /* Adjust padding as needed */
    border-radius: 5px;
    margin-bottom: 10px;
    font-family: "Arial", sans-serif; /* Change to your desired font family */
    font-size: 16px; /* Change to your desired font size */
    font-weight: bold; /* Change to your desired font weight */
}


.menu-item-carousel .owl-menu-item .item .info h1 {
    font-size: 18px;
    margin-bottom: 5px;
}

.menu-item-carousel .owl-menu-item .item .info p {
    font-size: 14px;
}

.menu-item-carousel .owl-menu-item .item .info .main-text-button {
    margin-top: 20px;
}

.menu-item-carousel .owl-menu-item .item input[type="number"] {
    border: 1px solid #ccc; /* Change to your desired border color */
    border-radius: 5px;
    padding: 8px;
    width: 60px;
    font-size: 14px; /* Change to your desired font size */
}


.menu-item-carousel .owl-menu-item .item input[type="submit"] {
    background-color: #000000; /* Change to your desired button color */
    color: #fff; /* Change to your desired text color */
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    font-family: "Arial", sans-serif; /* Change to your desired font family */
    font-size: 14px; /* Change to your desired font size */
    font-weight: bold; /* Change to your desired font weight */
    transition: background-color 0.3s ease;
    margin-top: 10px; /* Add margin-top as needed */
}

.menu-item-carousel .owl-menu-item .item input[type="submit"]:hover {
    background-color: #45a049; /* Change to your desired hover color */
}

    </style>
    <!-- ***** Menu Area Ends ***** -->