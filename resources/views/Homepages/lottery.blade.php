@extends('Layouts.main_header')
@section('title', 'Lotteries & Promos | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<style>
.about_page_header {
    background-image: url(/image/games/Bingo1.jpg);
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
  background-image: url(/image/games/Bingo1.jpg);
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
  color: #AB2F44;
  font-size: 60px;
}

.h1_pc {
  text-align: left;
  font-family: "Archivo Black";
  color: #AB2F44;
  font-size: 100px;
}

.h1_mb {
  text-align: center;
  font-family: "Archivo Black";
  color: #AB2F44;
  font-size: 50px;
}

.h3_mb {
  text-align: center;
  font-family: Amiko;
  color: #444;
  font-size: 25px;
}

.h4_mb {
  text-align: center;
  font-family: Amiko;
  color: #444;
  font-size: 20px;
}

.h4_pc {
  text-align: center;
  font-family: "Archivo Black";
  color: #444;
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



<div class="container-fluid about_page_header p-0 d-none d-lg-block">
    <div class="about_page_header_mask p-3">
        <h1 class="h1">PROMOS AND LOTTERIES</h1>
        <div class="row">
            <div class="col-md-5 mx-auto d-block">
                <p class="text-center text-white pt-2">
                    20% DISCOUNT ON A 1 TIME BUY-IN THAT IS ABOVE 200,000                    
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about_page_header_mobile p-0 d-lg-none d-sm-block">
    <div class="about_page_header_mask_mobile p-3">
        <h1 class="h1">PROMOS AND LOTTERIES</h1>

        <p class="text-center text-white pt-2">
            20% DISCOUNT ON A 1 TIME BUY-IN THAT IS ABOVE 200,000
        </p>
    </div>
</div>


<div class="container py-5">

    <div class="row pt-4">

        <div class="col-md-7">
            <h4 class="h4 h4_pc reveal d-none d-lg-block">
                MAKE A ONE TIME/INSTANT <br> BUY-IN OF 
            </h4>
            <h4 class="h4 h4_mb reveal d-lg-none d-sm-block">
                MAKE A ONE TIME/INSTANT <br> BUY-IN OF 
            </h4>
            
            <h1 class="h1 h1_pc d-none d-lg-block text-center  reveal">#200,000</h1>
        
            <h1 class="h1 h1_mb d-lg-none d-sm-block text-center  reveal">#200,000</h1>
        
            <h4 class="h4 h4_pc reveal d-none d-lg-block">
                AND ABOVE <br> TO RECIEVE 
            </h4>
            <h4 class="h4 h4_mb reveal d-lg-none d-sm-block pt-2">
                AND ABOVE TO RECIEVE 
            </h4>
        
            <h4 class="h4 h4_pc reveal d-none d-lg-block" style="color: #AB2F44;">
                the next day/After 24 hours 
            </h4>
            <h4 class="h4 h4_mb reveal d-lg-none d-sm-block pt-2" style="color: #AB2F44;">
                the next day/After 24 hours 
            </h4>        
        </div>

        <div class="col-md-5 ">
            <h4 class="h4 text-left h4_pc reveal d-none d-lg-block">
                10% REBATE POLICY 
            </h4>
            <h3 class="h3_mb text-left reveal d-lg-none d-sm-block pt-4" style="color: #dfbd00;">
                10% REBATE POLICY 
            </h3>

            <p class="pt-2 reveal">
                Any Amount Spent and lost on our tables, the house will offer a 10% rebate the following day (After close of work and reopening on a new day). Slots and electronic games not included. <br><br>

                The rebate will be credited at the tables or Machines of your Choice.
            </p>

            <blockquote class="blockquote alert-danger mt-4 reveal">
                <p class="mb-0" style="font-size: 13px;">
                    Note: This Rebate offer will be given in rebate chips for the live game customers only. The rebate offer cannot be given in Cash and will expire after 24 hours!
                </p>
            </blockquote>

            <p class="pt-3 reveal">
                Thanks for your Patronage, <br>
                Signed: <br>
                Golden Loft Casino Management.
            </p>
        </div>
    </div>
    
    
        
    <blockquote class="blockquote alert-danger mt-4 reveal">
        <p class="mb-0 text-center">
            Note: Both buy-in & rebate must be played on the table
        </p>
    </blockquote>


    <h1 class="h1 d-lg-none d-sm-block text-center pt-5 reveal">GOLDENLOFT BINGO RELOADED</h1>

    <h1 class="h1 d-none d-lg-block pt-5 text-center reveal">GOLDENLOFT BINGO RELOADED</h1>

    <div class="row ">
        <div class="col-md-5 pt-4">
            <img src="image/games/Bingo1.jpg" alt="" class="img-fluid reveal" style="width: 100%;">
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-6 pt-4">
            
            <h4 class="reveal" style="color: #dfbd00;">
                Bingo/Lottery
            </h4>

            <p class="reveal pt-2">
                Get 6 numbers in a random order and your 7th number (powerful number) must be the 7th spin number to win an AWOOF amount of #2,000,000
            </p>

            <h6 class="reveal pt-4" style="font-family: Archivo;"><b>PAY-OUT/PAYMENT</b></h6>
            <ul>
                <li class="reveal">+ = ₦2,000,000</li>
                <li class="reveal">+ = ₦1,000,000</li>
                <li class="reveal">+ = ₦200,000</li>
                <li class="reveal">+ = ₦100,000</li>
                <li class="reveal">+ = ₦2,000</li>
            </ul>
            
            <h6 class="reveal pt-4" style="font-family: Archivo;"><b>GAMEPLAY</b></h6>
            <ul>
                <li class="reveal">Randomly pick and write down your numbers choosing from 1 – 36.</li>
                <li class="reveal">Pick and write down your special number which is just one (1) number.</li>
                <li class="reveal">No of spin is 7 spin</li>
                <li class="reveal">Ticket sale starts once CASINO opens till 3:00 AM when the spin commences with each line cost ₦2,000 ticket cost at ₦10,000.</li>
                <li class="reveal">Bingo holds everyday (7 days a week)</li>
            </ul>
            
        </div>

    </div>

    
    <div class="row">
        <div class="col-md-5 pt-5">
            <img src="image/games/BINGO BACK-1.jpg" alt="" class="img-fluid reveal" style="width: 100%;">
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-6">
            
            <h6 class="reveal pt-5" style="font-family: Archivo;"><b>RULES</b></h6>
            <ul>
                <li class="reveal">Once a ticket is cancelled, wet, torn or with an error made it is void.</li>

                <li class="reveal">Double number or repeated numbers is null & void.</li>

                <li class="reveal">Once the spin lands on Zero (0) it cancelled.</li>

                <li class="reveal">To win you pick seven (7) numbers in total from the range of one – Thirty-six (1 – 36) of six (6) normal (that’s numbers that the first 6 spins will fall in no particular order) and one (1) special number this a number that must be the last spin number.</li>

                <li class="reveal">The special number is the seventh spin and cannot be added to the normal six (6) numbers or vis-à-vis (you can’t replace special number for normal number or either way).</li>

                <li class="reveal">Each draw commences by 3am every day.</li>

                <li class="reveal">In a situation where two (2) customers/players both get the winning numbers the prize is split amongst them. (The winning prize/amount will be shared among the number of winners)</li>

                <li class="reveal">Winnings are valid for 48hrs and must be redeemed with the winning ticket</li>

                <li class="reveal">You are to verify your Winnings immediately with the CASINO before leaving the premises</li>

                <li class="reveal" style="color: #AB2F44;">If after the five (5) different rounds of spins no winner, lotto ends for the day</li>

                <li class="reveal" style="color: #AB2F44;">For every day without a grand prize won 15% of total tickets sold would be added to the grand prize.</li>

                <li class="reveal">The Casino has the rights to make final decisions all in the aim of FAIR GAME</li>
            </ul>
        </div>

    </div>

</div>



@include("Layouts.footer")
@endsection