@extends('Layouts.main_header')
@section('title', 'Caribbean Poker | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<style>
    
.about_page_header {
    background-image: url(/image/poker.jpg);
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
  background-image: url(/image/poker.jpg);
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
  color: #dfbd00;
  font-size: 28px;
}

  
h4 {
  text-align: left;
  font-family: Amiko;
  color: #dfbd00;
  font-size: 28px;
  padding-top: 17px;
}

ul li {
  font-family: Amiko;
  font-size: 14px;
  color: #222;
  padding-top: 6px;
}

p {
  font-family: Amiko;
  font-size: 13px;
  color: #222;
  padding-top: 6px;
}

.game_of_play {
    background-image: url(/image/background_1.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: auto;
    padding: 30px 0px;
}

.game_of_play_mobile {
    background-image: url(/image/background_1.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: auto;
    padding: 30px 0px;
}

.game_of_play_mobile .card {
    width: 80%;
}

.baccarat_img {
    background-image: url(/image/Baccarat2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 550px;
}
 
.baccarat_img  .mask {
    background-color: rgba(0, 0, 0, 0.438);
    height: 550px;
}
 
.baccarat_img_mobile {
    background-image: url(/image/Baccarat2.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 250px;
}
 
.baccarat_img_mobile .mask {
    background-color: rgba(0, 0, 0, 0.438);
    height: 250px;
}

.img {
    width: 60%;
    height: 180px;
}
  
@media only screen and (max-width: 600px) {
    .img {
    width: 100%;
    height: 220px;
    }
}

</style>

<div class="container-fluid about_page_header p-0 d-none d-lg-block">
    <div class="about_page_header_mask p-3">
        <h1 class="h1">CARIBBEAN POKER</h1>
        <div class="row">
            <div class="col-md-5 mx-auto d-block">
                <p class="text-center text-white pt-2">
                    Caribbean stud poker, also called casino stud poker, the game rules are derived from five-card stud poker game. It is a table game that is played between a player/customer and the house dealer.                    
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about_page_header_mobile p-0 d-lg-none d-sm-block">
    <div class="about_page_header_mask_mobile p-3">
        <h1 class="h1">CARIBBEAN POKER</h1>

        <p class="text-center text-white pt-2">
            Caribbean stud poker, also called casino stud poker, the game rules are derived from five-card stud poker game. It is a table game that is played between a player/customer and the house dealer.
        </p>
    </div>
</div>




<div class="container py-5">
    <h1 class="h1 d-none d-lg-block">ABOUT CARIBBEAN POKER</h1>
    <h1 class="h1_mb d-lg-none d-sm-block">ABOUT CARIBBEAN POKER</h1>
    <div class="row">
        <div class="col-md-7 pt-3">
            <p>
                Poker is a classic game that has been played for centuries. It is a card game that can be played with two to four players. The game is typically played with a standard deck of cards, but there are other versions of poker that use different decks of cards. <br><br>

                Poker is a game of skill and luck where a player can use bluffing, deception and psychology to try and fool their opponents into folding a hand so that they can win the pot.        
            </p>

            
            <h4 class="h4">HOW TO PLAY</h4>
            
            <ul>
                <li class="reveal">
                    To play, each player places his or her wager on the marked spot on the table (ante), all ante wagers must be placed before the dealer announces "no more bets".
                </li>

                <li class="reveal">
                    Each player and the dealer will then receive five cards, face down. The dealer will turn over one of his cards, after which the players may look at their cards.
                </li>

                <li class="reveal">
                    Players have the option to either play or fold. Any player choosing to play places their raise, an additional wager which is times 2 of the ante amount into the box marked Bet. That is a bet of N2,000 on the ante means a bet of N 4,000.
                </li>

                <li class="reveal">
                    Any player who chooses to fold forfeits their ante. After all the players have made their decisions, the dealer reveals their four face down cards.
                </li>

                <li class="reveal">
                    The dealer only qualifies (plays) if his hand either contains both an ace and a king or forms a pair or any higher-ranked poker hand.
                </li>

                <li class="reveal">
                    The dealer then compares his five-card hand to those of the other players, individually, and both the ante and the raise bets of all players whose hands beat the dealer's qualified hand win.
                </li>

                <li class="reveal">
                    If they do not beat the dealer's hand, they lose both the ante and the raise wager.
                </li>

                <li class="reveal">
                    If a player ties with the dealer, both ante and raise bets push (return to their respective players with no additional money won). 
                </li>

                <li class="reveal">
                    If the dealer's hand does not qualify, the ante bets of players get paid even money while the respective raise bets all push.
                </li>
            </ul>
        </div>

        <div class="col-md-5">
            <img src="image/poker.jpg" alt="" class="img-fluid" style="width: 100%; margin-top: 0px; height: 250px;">
        </div>
    </div>

    
    <h1 class="h1 d-none d-lg-block pt-5">PAYMENT SYSTEM</h1>
    <h1 class="h1_mb d-lg-none d-sm-block pt-5">PAYMENT SYSTEM</h1>

    <div class="row">
        <div class="col-md-6">
                    
            <h6 class="reveal pt-4">A (One) Pair</h6>
            <ul>
                <li class="reveal">
                    Means 2 numbers of the same card 
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p1.jpg" alt="Card 2" style="height: 150px; width: 60%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p1.jpg" alt="Card 2" style="height: 140px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 1 chip (stake of 1,000 will win 1,000)
                </li>
            </ul>
            
            <h6 class="reveal pt-4">Two Pair </h6>
            <ul>
                <li class="reveal">
                    Means 2 numbers of the same card  
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p2.jpg" alt="Card 2" style="height: 150px; width: 70%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p2.jpg" alt="Card 2" style="height: 130px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 1 chip (stake of 1,000 will win 1,000)
                </li>
            </ul>
            
            <h6 class="reveal pt-4">Three of A Kind</h6>
            <ul>
                <li class="reveal">
                    Means 3 numbers of the same card  
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p3.jpg" alt="Card 2" style="height: 150px; width: 60%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p3.jpg" alt="Card 2" style="height: 140px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 3 chip (stake of 1,000 will win 3,000)
                </li>
            </ul>
      
            <h6 class="reveal pt-4">Four of A Kind</h6>
            <ul>
                <li class="reveal">
                    Means 4 of the same numbers with 1 different number 
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p7.jpg" alt="Card 2" style="height: 150px; width: 80%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p7.jpg" alt="Card 2" style="height: 140px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 20 chip (stake of 1,000 will win 20,000)
                </li>
            </ul>
            
            <h6 class="reveal pt-4">Royal Flush</h6>
            <ul>
                <li class="reveal">
                    Means all the cards are made up of the royal families which are the King, Queen, Jack, Ace and clubs.
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p9.jpg" alt="Card 2" style="height: 150px; width: 80%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p9.jpg" alt="Card 2" style="height: 140px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 100 chip (stake of 1,000 will win 100,000)
                </li>
            </ul>

        </div>

        <div class="col-md-6">

            <h6 class="reveal pt-4">Straight</h6>
            <ul>
                <li class="reveal">
                    Means straight numbers in different flowers 
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p4.jpg" alt="Card 2" style="height: 150px; width: 80%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p4.jpg" alt="Card 2" style="height: 140px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 4 chip (stake of 1,000 will win 4,000)
                </li>
            </ul>
            
            <h6 class="reveal pt-4">Flush</h6>
            <ul>
                <li class="reveal">
                    Means the same flowers on a card 
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p5.jpg" alt="Card 2" style="height: 150px; width: 80%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p5.jpg" alt="Card 2" style="height: 130px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 5 chip (stake of 1,000 will win 5,000)
                </li>
            </ul>
            
            <h6 class="reveal pt-4">Full House</h6>
            <ul>
                <li class="reveal">
                    Means 3 same numbers with 2 different numbers  
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p6.jpg" alt="Card 2" style="height: 150px; width: 70%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p6.jpg" alt="Card 2" style="height: 140px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 7 chip (stake of 1,000 will win 7,000)
                </li>
            </ul>
            
            <h6 class="reveal pt-4">Straight Flush</h6>
            <ul>
                <li class="reveal">
                    Means 5 cards having the same flowers and numbers in a serial manner
                </li>
                
                <img class="img-fluid my-2 reveal img d-none d-lg-block" src="image/poker_img/p8.jpg" alt="Card 2" style="height: 150px; width: 80%;">
                <img class="img-fluid my-2 reveal img d-sm-block d-lg-none" src="image/poker_img/p8.jpg" alt="Card 2" style="height: 130px; width: 100%;">

                <li class="reveal">
                    Pays 1 to 50 chip (stake of 1,000 will win 50,000)
                </li>
            </ul>
            
        </div>
    </div>
    
    <blockquote class="blockquote alert-danger mt-4">
        <p class="mb-0"m style="font-size: 12px;">
            Note: A player has the opportunity to sell his card to the dealer (once) using the same amount as the ante. <br><br>

            Ace is the highest pair in poker 
        </p>
    </blockquote>

</div>



@include("Layouts.footer")
@endsection