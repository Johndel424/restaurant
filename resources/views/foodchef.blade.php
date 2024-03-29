<!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Drinks</h6>
                        <h2>We offer the best drinks for you</h2>
                    </div>
                </div>
            </div>


            

            <div class="row">
                @foreach($data2 as $data2)
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb custom">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img height="200" width="200" src="chefimage/{{$data2->image}}" alt="Chef">
                        </div>
                        <div class="down-content">
                            <h4>{{$data2->name}}</h4>
                            <span>{{$data2->speciality}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <style>
        .custom img{

            width: 150px;
            height: 250px;
        }
    </style>
    <!-- ***** Chefs Area Ends ***** -->