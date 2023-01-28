@extends('Layouts.main_header')
@section('title', 'Electronic Machines | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<style>

.about_page_header .mask h1 {
    font-family: Amiko;
    color: #dfbd00;
    font-size: 60px;
    padding-top: 80px;
    text-align: center;
}

.about_page_header_mobile h1 {
  font-family: Amiko;
  color: #dfbd00;
  font-size: 45px;
  padding-top: 20px;
  text-align: center;
}


h1 {
  text-align: left;
  font-family: Amiko;
  color: #dfbd00;
  font-size: 60px;
}

.h1_mb {
  text-align: left;
  font-family: Amiko;
  color: #dfbd00;
  font-size: 28px;
}

.h3_mb {
  text-align: center;
  font-family: Amiko;
  color: #444;
  font-size: 25px;
}

h4 {
  text-align: left;
  font-family: Amiko;
  color: #dfbd00;
  font-size: 23px;
  padding-top: 17px;
}

ul li {
  font-family: Amiko;
  font-size: 14px;
  color: #222;
  padding-top: 6px;
}

</style>



<div class="container-fluid d-none d-lg-block p-0 about_page_header">
    <div class="view" id="">
        <video class="video-fluid" autoplay loop muted>
            <source src="image/electronics.mp4" type="video/mp4"/>
        </video>
    
        <div class="mask rgba-black-strong" style="padding-top: 140px;">
            <img src="image/logo2.png" alt="" class="img-fluid mx-auto d-block animated slideInDown slower" style="width: 16%;">

            <h1 class="h1 animated slideInLeft slower pt-4">
                ELECTONIC GAMES
            </h1>

            <div class="row">
                <div class="col-md-5 mx-auto d-block">
                    <p class="text-center text-white pt-2">
                        GoldenLoft casino offers  various kinds of Electronic Machines to our guests which includes: American Roulette, Slot Machine and Fish Machines. Let’s Play!
                    </p>
                </div>
            </div>            
        </div>
    </div>
</div>


<div class="container-fluid p-0 d-lg-none d-sm-block about_page_header_mobile">
    <div class="view first_slide_mask" id="">
        <video class="" autoplay loop muted style="height: 400px; object-fit: cover;">
            <source src="image/electronics.mp4" type="video/mp4"/>
        </video>
    
        <div class="mask rgba-black-strong" style="padding-top: 30px;">

            <img src="image/logo2.png" alt="" class="img-fluid mx-auto d-block animated slideInDown slower" style="width: 30%;">

            <h1 class="h1 animated slideInRight slower">
                ELECTONIC GAMES
            </h1>

            <p class="text-center text-white pt-2">
                GoldenLoft casino offers  various kinds of Electronic Machines to our guests which includes: American Roulette, Slot Machine and Fish Machines. Let’s Play!
            </p>
        </div>
    </div>
</div>



<div class="container py-5">
    <h1 class="h1 d-none d-lg-block text-center  reveal">OUR Electronic Games</h1>
    <h1 class="h1_mb d-lg-none d-sm-block  reveal">Our Electronic Games</h1>
    <div class="row">
        <div class="col-md-8 mx-auto d-block pt-2">
            <p class=" reveal">
                In a bid to provide our customers with entertaining games and chances of winning big, Golden loft has acquired and provided some of the best electronic gaming machines, these machines offers varieties of interesting, mind blowing and high chance winning games. Some games can be played in the machines with as low as N 50 per stake and for some as high as N 3,000 per stake depending on the game and machine.
            </p>
        </div>
    </div>

    
    <h1 class="h1 d-none d-lg-block pt-5 text-center reveal">Electronics Games Available Includes:</h1>
    <h3 class="h3_mb d-lg-none d-sm-block pt-5 reveal">Electronics Games Available Includes:</h3>

    <div class="row pt-4">
        <div class="col-md-7">
            <h4 class="reavel">
                ELECTRONIC ROULETTE:
            </h4>
            <p class="pt-3 reveal">
                The American roulette game is an electronic wheel game that has 38 divisions which are numbered from 1 to 36, 0 and 00 in a 360 degree manner. Numbers from 1 to 36 are alternately colour red and black, while the single zero and the double zero are marked in green. <br><br>

                The main objective, which any player pursues, is to predict which numbered pocket the roulette ball is going to drop into. In order to do that, players are to pick a number or type of bet and make a stake on them, this will be done between when the machine spins the ball to when it says no more bet. Once the ball finds finally drops/settle into the pocket of a particular number, the respective players get paid according to their type of bet.
            </p>

            
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Bet/Rules</th>
                        <th scope="col">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Straight Up</td>
                        <td>One number Bet</td>
                        <td>35 to 1</td>
                    </tr>

                    <tr>
                        <td>Split</td>
                        <td>Two numbers Bet</td>
                        <td>17 to 1</td>
                    </tr>

                    <tr>
                        <td>Street</td>
                        <td>Three numbers Bet</td>
                        <td>11 to 1</td>
                    </tr>

                    <tr>
                        <td>Corner</td>
                        <td>Four numbers Bet</td>
                        <td>8 to 1</td>
                    </tr>

                    <tr>
                        <td>Line</td>
                        <td>Six numbers Bet</td>
                        <td>5 to 1</td>
                    </tr>

                    <tr>
                        <td>Column</td>
                        <td>Twelve number Bet</td>
                        <td>2 to 1</td>
                    </tr>

                    <tr>
                        <td>Dozen</td>
                        <td>Twelve  numbers Bet</td>
                        <td>2 to 1</td>
                    </tr>

                    <tr>
                        <td>High or Low</td>
                        <td>Number 19-36 or 1-18</td>
                        <td>1 to 1</td>
                    </tr>

                    <tr>
                        <td>Colour</td>
                        <td>Colour Black or Red</td>
                        <td>1 to 1</td>
                    </tr>

                    <tr>
                        <td>Odd or Even</td>
                        <td>Numerals Odd or Even</td>
                        <td>* to 1</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-5 pt-lg-5">
            <img src="image/roulette.jpg" alt="" class="img-fluid reveal" style="width: 100%; margin-top: 30px;">
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-7 pt-5">
            <h4 class="reavel">
                SLOT MACHINE:
            </h4>
            <p class="pt-2 reveal">
                Golden Loft Casino offers variety of the latest slot gaming technology; the machines are equipped with 4k crystal clear dual screen display. They are also loaded with different games that can be played with as low as N50 per stake and as high as N2,500 per stake. 
            </p>
            
            <h6 class="reveal pt-3">Types of games present in the slot Machines</h6>
            <ul>
                <li class="reveal">
                    Pirate 
                </li>

                <li class="reveal">
                    A Happy Reunion
                </li>

                <li class="reveal">
                    Concucubine
                </li>

                <li class="reveal">
                    Fire series
                </li>

                <li class="reveal">
                    Coloured gold roulette
                </li>
            </ul>
        </div>

        <div class="col-md-5 pt-lg-5">
            <img src="image/slot1.jpg" alt="" class="img-fluid reveal" style="width: 100%; margin-top: 20px;">
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-7 pt-5">
            <h4 class="reavel">
                FISH MACHINE:
            </h4>
            <p class="pt-2 reveal">
                Golden Loft Casino offers variety of the latest fish gaming technology and machines. There is an assortment of slot machines loaded with games that can be played with as low as N50 per stake and as high as N2,500 per stake. 
            </p>
            
        </div>

        <div class="col-md-5 pt-lg-5">
            <img src="image/games/fishmachine.jpg" alt="" class="img-fluid reveal" style="width: 100%; margin-top: 30px;">
        </div>
    </div>
    
            
    <blockquote class="blockquote alert-danger mt-4">
        <p class="mb-0">
            For players/customers convenience, all of the slot machines on the floor are ticket in-ticket out.
        </p>
    </blockquote>
</div>



@include("Layouts.footer")
@endsection