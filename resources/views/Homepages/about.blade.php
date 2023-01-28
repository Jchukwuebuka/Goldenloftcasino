@extends('Layouts.other_header')
@section('title', 'About Page | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<style>
    
.about_page_header {
    background-image: url(/image/a.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 550px;
}
  
.about_page_header_mask {
    background-color: rgba(0, 0, 0, 0.603);
    height: 550px;
}

.about_page_header .about_page_header_mask h1 {
    font-family: Amiko;
    color: #fff;
    font-size: 60px;
    padding-top: 180px;
    text-align: center;
}


.about_page_header_mobile {
  background-image: url(/image/a.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 350px;
}

.about_page_header_mask_mobile {
  background-color: rgba(0, 0, 0, 0.603);
  height: 350px;
}

.about_page_header_mobile .about_page_header_mask_mobile h1 {
  font-family: Amiko;
  color: #fff;
  font-size: 40px;
  padding-top: 80px;
  text-align: center;
}


</style>

<div class="container-fluid about_page_header p-0 d-none d-lg-block">
    <div class="about_page_header_mask p-3">
        <h1 class="h1">ABOUT US</h1>
        <div class="row">
            <div class="col-md-5 mx-auto d-block">
                <p class="text-center text-white pt-2">
                    GoldenLoft casino offers over 300 Machine and table games including Craps, Roulette, Blackjack, Baccarat, Slot, and Poker. Let’s Play!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about_page_header_mobile p-0 d-lg-none d-sm-block">
    <div class="about_page_header_mask_mobile p-3">
        <h1 class="h1">ABOUT US</h1>

        <p class="text-center text-white pt-2">
            GoldenLoft casino offers over 300 Machine and table games including Craps, Roulette, Blackjack, Baccarat, Slot, and Poker. Let’s Play!
        </p>
    </div>
</div>


<div class="container-fluid py-4 body_2 d-none d-lg-block">
    <div class="row">
        <div class="col-md-7">
            <div class="body_2_image reveal">
                <div class="body_2_image_mask"></div>
            </div>
        </div>

        <div class="col-md-5 text">
            <div class="card">
                <div class="card-body">
                    <h3 class="reveal">Why we stand out</h3>
                    
                    <ul>
                        <li class="reveal">
                            <b><u>Vision :</u></b> To become the leading gaming service provider within Nigeria.
                        </li>
                
                        <li class="reveal">
                            <b><u>Mission :</u></b> To dedicate the next few years to becoming the leading gaming service provider through our following core values.
                        </li>
                
                        <li class="reveal">
                            <b><u>Hospitality :</u></b> To provide our customers and clients with fantastic hospitable and entertaining services.
                        </li>
                
                        <li class="reveal">
                            <b><u>Transparency :</u></b> We are committed to delivering optimal returns through transparent gaming operation and procedures that are in line with international acceptable standards.
                        </li>  

                        <li class="reveal">
                            <b><u>Employee Growth :</u></b> We are committed to letting our employees grow into their desired potential through reward for excellence, training, mentorship and professional guidance.
                        </li>  

                        <li class="reveal">
                            <b><u>Innovation :</u></b> We are committed to finding new technical ways to surpass the expectation of all customers and giving them memorable gaming experiences.
                        </li>  

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid d-lg-none d-md-block pt-3 body_2_mb">
    <div class="py-2">
        <h3 class="reveal">Why we stand out</h3>
        
        <ul class="px-3">
            <li class="reveal">
                <b><u>Vision :</u></b> To become the leading gaming service provider within Nigeria.
            </li>
    
            <li class="reveal">
                <b><u>Mission :</u></b> To dedicate the next few years to becoming the leading gaming service provider through our following core values.
            </li>
    
            <li class="reveal">
                <b><u>Hospitality :</u></b> To provide our customers and clients with fantastic hospitable and entertaining services.
            </li>
    
            <li class="reveal">
                <b><u>Transparency :</u></b> We are committed to delivering optimal returns through transparent gaming operation and procedures that are in line with international acceptable standards.
            </li>    
            
            <li class="reveal">
                <b><u>Employee Growth :</u></b> We are committed to letting our employees grow into their desired potential through reward for excellence, training, mentorship and professional guidance.
            </li>  

            <li class="reveal">
                <b><u>Innovation :</u></b> We are committed to finding new technical ways to surpass the expectation of all customers and giving them memorable gaming experiences.
            </li>  
        </ul>
    </div>
</div>





<div class="container-fluid body_3 py-5">
    <h1 class="h1 reveal">GOLDENLOFT CASINO GAMES</h1>
    
    <div class="row">
        <div class="col-md-4 mx-auto d-block mt-4">
            <div class="image">
                <div class="image_mask">
                    <h4 class="h3">ROULETTE</h4>
                    
                    <p class="hide">
                        The American roulette game is a mechanical wheel game that has 37 divisions which are numbered from 1 to 36 and 0 in a 360-degree manner. <br><br>

                        The main objective, which any player pursues, is to predict which numbered pocket the roulette ball is going to settle into when spined. 
                    </p>

                    <a href="/roulette">
                        <button class="btn ">read more</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto d-block mt-4">
            <div class="image2">
                <div class="image_mask">
                    <h4 class="h3">BACCARAT</h4>
                    
                    <p class="hide">
                        Baccarat is an exciting game, full of suspense and intrigue, in baccarat there are three possible outcomes which is that either:

                        <ul class="hide pt-0">
                            <li>Player win</li>
                            <li>Banker win</li>
                            <li>A tie</li>
                        </ul>
                    </p>

                    <a href="/baccarat">
                        <button class="btn ">read more</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto d-block mt-4">
            <div class="image3">
                <div class="image_mask">
                    <h4 class="h3">FISH MACHINE</h4>
                    
                    <p class="hide">
                        We offers variety of the latest fish gaming technology and machines. <br><br>

                        There is an assortment of slot machines loaded with games that can be played with as low as N50 per stake and as high as N2,500 per stake.
                    </p>

                    <a href="/fish">
                        <button class="btn ">read more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mx-auto d-block mt-4">
            <div class="image6">
                <div class="image_mask">
                    <h4 class="h3">POKER TABLE</h4>
                    
                    <p class="hide">
                        Caribbean stud poker, also called casino stud poker, the game rules are derived from five-card stud poker game. <br><br>
                        
                        It is a table game that is played between a player/customer and the house dealer.
                    </p>

                    <a href="/poker">
                        <button class="btn ">read more</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto d-block mt-4">
            <div class="image5">
                <div class="image_mask">
                    <h4 class="h3">SLOT MACHINE</h4>
                    
                    <p class="hide">
                        Golden Loft Casino offers variety of the latest slot gaming technology; the machines are equipped with 4k crystal clear dual screen display. <br><br>

                        They are also loaded with different games that can be played with as low as N50 per stake and as high as N2,500 per stake. 
                    </p>

                    <a href="/slot">
                        <button class="btn ">read more</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto d-block mt-4">
            <div class="image4">
                <div class="image_mask">
                    <h4 class="h3">BINGO LOTTERY</h4>
                        
                        <ul class="hide">
                            <li>Randomly pick and write down your numbers choosing from 1 – 36.</li>
                            <li>Pick and write down your special number which is just one (1) number</li>
                            <li>No of spin is 7 spin</li>
                            <li>Ticket sale starts once CASINO opens till 3:00 AM when the spin commences with each line cost ₦2,000 ticket cost at ₦10,000.</li>
                        </ul>

                    <a href="/lottery">
                        <button class="btn ">read more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class=" about_page_body1">
    <div class="container py-4">
        <h1 class="h1 reveal">Goldenloft Casino overview</h1>

        <div class="row">
            <div class="col-md-7">
                <ul>
                    <li class="reveal">
                        Our gaming platform is designed to maximize player enjoyment and loyalty across a wide range of regulated markets in Nigeria. Our goal is to create a unique gaming experience that meets the expectations of our players and regulators.
                    </li>

                    <li class="reveal">
                        Goldenloft also strives to deliver the highest levels of customer service while setting the highest standards of integrity and professionalism within our industry. This translates into a culture that promotes respect, responsibility and values. By building a team of passionate individuals who support our mission every day, we are able to grow our business and operate in a way that reinforces these values.
                    </li class="reveal">

                    <li class="reveal">
                        One of our core values is "innovation." We believe that innovation is the key to success and are always looking for new ways to improve the user experience for our players. At Goldenloft Casino, we are constantly updating our software to improve the functionality and security of our platforms while maintaining the highest technical standards in the industry. 
                    </li>

                    <li class="reveal">
                        In addition to implementing innovative features within our software, we also develop new games with the goal of staying ahead of the competition and bringing new and exciting content to the casino floor. The success of this strategy is evident by the amount of players who have discovered Goldenloft Casino for the first time and are coming back again and again to try new games and win big jackpots.
                    </li>
                </ul>
            </div>

            <div class="col-md-5">
                <img src="image/b.jpg" alt="" class="img-fluid" style="width: 100%; margin-top: 50px;">
            </div>

        </div>
    </div>
</div>


<div class="banner5 py-5">
    <div class="container mt-0">
        <h1 class="h1 reveal">GOLDENLOFT CASINO SPECIAL OFFERS</h1>

        <div class="row">
            <div class="col-md-6 px-lg-5">
                <div class="card bg-light" style="margin-top: 80px;">
                    <center>
                        <div class="header1 reveal"></div>
                    </center>
                    <div class="card_body px-3">
                        <h4 class="reveal">VIP GAMING EXPERIENCE</h4>

                        <p class="reveal">
                            GOLDENLOFT CASINO gives our customers one of the best VIP betting experience. <br><br>
                            
                            We provide you with a very conducive and convinient gaming environment with host refreshments for your comfortability.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-lg-5">
                <div class="card bg-light" style="margin-top: 80px;">
                    <center>
                        <div class="header2 reveal"></div>
                    </center>

                    <div class="card_body px-3">
                        <h4 class="reveal">BAR & REFRESHMENTS</h4>

                        <p class="reveal">
                            GOLDENLOFT CASINO gives our customers one of the best VIP betting experience. <br><br>
                            
                            We provide you with a very conducive and convinient gaming environment with host refreshments for your comfortability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include("Layouts.footer")
@endsection