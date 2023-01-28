@extends('Layouts.main_header')
@section('title', 'Roulette Page | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<style>
    
.about_page_header {
    background-image: url(/image/games/roullette.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 550px;
}
  
.about_page_header_mask {
    background-color: rgba(0, 0, 0, 0.671);
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
  background-image: url(/image/games/roullette.jpg);
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


h1 {
  text-align: left;
  font-family: Amiko;
  color: #dfbd00;
  font-size: 60px;
}

.h1_mb {
  text-align: left;
  font-family: Amiko;
  color: #AB2F44;
  font-size: 28px;
}

ul li {
  font-family: Amiko;
  font-size: 14px;
  color: #222;
  padding-top: 6px;
}

</style>

<div class="container-fluid about_page_header p-0 d-none d-lg-block">
    <div class="about_page_header_mask p-3">
        <h1 class="h1">AMERICAN ROULETTE</h1>
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
        <h1 class="h1">AMERICAN ROULETTE</h1>

        <p class="text-center text-white pt-2">
            GoldenLoft casino offers over 300 Machine and table games including Craps, Roulette, Blackjack, Baccarat, Slot, and Poker. Let’s Play!
        </p>
    </div>
</div>



<div class="container py-5">
    <h1 class="h1 d-none d-lg-block">ABOUT AMERICAN ROULETTE</h1>
    <h1 class="h1_mb d-lg-none d-sm-block">ABOUT AMERICAN ROULETTE</h1>
    <div class="row">
        <div class="col-md-7 pt-3">
            <p>
                The American roulette game is a mechanical wheel game that has 37 divisions which are numbered from 1 to 36 and 0 in a 360-degree manner. Numbers from 1 to 36 are alternately color red and black, while the single zero is marked in green. <br><br>

                The main objective, which any player pursues, is to predict which numbered pocket the roulette ball is going to settle into when spined. In order to do that, all players make bets on a particular number, after which the dealer turns the roulette wheel in one direction and spins the roulette ball in the opposite. Once the ball finds its way into the pocket with that particular number, the respective players get paid according to the payout structure.
            </p>
        </div>

        <div class="col-md-5 pt-4">
            <img src="image/games/roulette.jpg" alt="" class="img-fluid" style="width: 100%; margin-top: 0px;">
        </div>
    </div>

    
    <h1 class="h1 d-none d-lg-block pt-5">Types of Roulette bet and their payment</h1>
    <h1 class="h1_mb d-lg-none d-sm-block pt-5">Types of Roulette bet and their payment</h1>
    
    <h6 class="reveal pt-4">Straight-Up Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed on just a number
        </li>

        <li class="reveal">
            Pays 35 to 1 chip (stake of 1,000 will win 35,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">Split Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed in-between 2 numbers or on the column demarcating the 2 numbers 
        </li>

        <li class="reveal">
            Pays 17 to 1 chip (stake of 1,000 will win 17,000)
        </li>
    </ul>

    <h6 class="reveal pt-4">Street Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed in-between 2 numbers or on the column demarcating the 2 numbers 
        </li>

        <li class="reveal">
            Pays 17 to 1 chip (stake of 1,000 will win 17,000)
        </li>
    </ul>

    <h6 class="reveal pt-4">Corner Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed at the cross section of 4 numbers 
        </li>

        <li class="reveal">
            Pays 8 to 1 chip (stake of 1,000 will win 8,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">Line Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed in-between 6 numbers or on the column demarcating the 6 numbers  
        </li>

        <li class="reveal">
            Pays 5 to 1 chip (stake of 1,000 will win 5,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">Column Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed at the top of the column that houses 12 numbers   
        </li>

        <li class="reveal">
            Pays 2 to 1 chip (stake of 1,000 will win 2,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">Dozen Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed at the beginning of a dozen which contains 12 numbers   
        </li>

        <li class="reveal">
            Pays 2 to 1 chip (stake of 1,000 will win 2,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">High or Low Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed either on the high (19-36) or low (1-18) numbers    
        </li>

        <li class="reveal">
            Pays 1 to 1 chip (stake of 1,000 will win 1,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">Colour (Black or White) Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed either on the black coloured or white coloured numbers    
        </li>

        <li class="reveal">
            Pays 1 to 1 chip (stake of 1,000 will win 1,000)
        </li>
    </ul>
    
    <h6 class="reveal pt-4">Odd or Even Bet</h6>
    <ul>
        <li class="reveal">
            Chips are placed either on odd or even numbers    
        </li>

        <li class="reveal">
            Pays 1 to 1 chip (stake of 1,000 will win 1,000)
        </li>
    </ul>
    
</div>



@include("Layouts.footer")
@endsection