@extends('Layouts.main_header')
@section('title', 'Baccarat | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<style>
    
.about_page_header {
    background-image: url(/image/games/Baccarat.jpg);
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
  background-image: url(/image/games/Baccarat.jpg);
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
  
</style>

<div class="container-fluid about_page_header p-0 d-none d-lg-block">
    <div class="about_page_header_mask p-3">
        <h1 class="h1">BACCARAT GAME</h1>
        <div class="row">
            <div class="col-md-5 mx-auto d-block">
                <p class="text-center text-white pt-2">
                    Baccarat is an exciting game, full of suspense and intrigue, in baccarat there are three possible outcomes which is that either: Player win, Banker win, or A tie.                    
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about_page_header_mobile p-0 d-lg-none d-sm-block">
    <div class="about_page_header_mask_mobile p-3">
        <h1 class="h1">BACCARAT GAME</h1>

        <p class="text-center text-white pt-2">
            Baccarat is an exciting game, full of suspense and intrigue, in baccarat there are three possible outcomes which is that either: Player win, Banker win, or A tie.
        </p>
    </div>
</div>



<div class="container py-5">
    <h1 class="h1 d-none d-lg-block">ABOUT THE GAME OF BACCARAT</h1>
    <h1 class="h1_mb d-lg-none d-sm-block">ABOUT THE GAME OF BACCARAT</h1>
    <div class="row">
        <div class="col-md-7">
            <p>
                There's nothing like a good game of baccarat to take your mind off things. And what could be better than playing at one of the top casinos in Abuja? Goldenloft is definitely one of those casinos. <br><br>

                Baccarat is an easy game to learn and play, so if you've never played before or you're looking to brush up on your skills, this is a great place to do it...
            </p>

            <h4 class="h4">OBJECTIVE</h4>

            <p>
                The objective of the player is to form a hand whose point value is nearer to 9 than the hand of the banker. <br> <br>

                Baccarat is an exciting game, full of suspense and intrigue, in baccarat there are three possible outcomes which is that either:

                <ul>
                    <li>Player win,</li>
                    <li>Banker win, or</li>
                    <li>A tie.</li>
                </ul>
            </p>
            
            <blockquote class="blockquote alert-danger mt-2">
                <p class="mb-0"m style="font-size: 12px;">
                    <b>Note: </b> that “Banker” does not refer to the house.
                </p>
            </blockquote>

            <p>
                Participants in the game have the option to bet on either the player or banker’s hand. Though whenever a player chooses to bet on the Banker hand the casino charges a 5% commission on the bet and this ensures that there is a house advantage regardless of the way the player bets.
            </p>

        </div>

        <div class="col-md-5">
            <img src="image/games/Baccarat.jpg" alt="" class="img-fluid" style="width: 100%; margin-top: 0px; height: 300px;">
        </div>
    </div>

</div>

<div class="game_of_play d-none d-lg-block">
    <div class="container">
        
        <h4 class="h4">VALUE OF CARDS</h4>

        <p>
            <b>ACE:</b> <span class="pl-lg-3">Worth’s either 1 or 11 depending on the player </span>
        </p>
        
        <p>
            <b>Cards of (king, Queen and Jack):</b> <span class="pl-lg-3">Worth’s 0</span>
        </p>
        
        <p>
            <b>Card numbers (2-9):</b> <span class="pl-lg-3">Retain their face value or the numbers they carry </span>
        </p>
        
        <p>
            <b>Sum = Double digit number:</b> <span class="pl-lg-3">Only the last digit of a double-digit number counts (so that for example 7 + 6 = (equals) 3, and not 13). </span>
        </p>

        <div class="row">

            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/Ace.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Ace Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/King.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>King Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/Queen.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Queen Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/Jack.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Jack Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/2.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 2</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/3.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 3</a></h6>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/5.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 5</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/6.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 6</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/7.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 7</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/8.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 8</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/9.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 9</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card">
                    <img class="card-img-top" src="image/baccarat card/10.jpg" alt="Card image cap" style="height: 180px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 10</a></h6>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="game_of_play_mobile d-lg-none d-sm-block">
    <div class="container">
        
        <h4 class="h4">VALUE OF CARDS</h4>

        <p>
            <b>ACE:</b> <span class="pl-lg-3">Worth’s either 1 or 11 depending on the player </span>
        </p>
        
        <p>
            <b>Cards of (king, Queen and Jack):</b> <span class="pl-lg-3">Worth’s 0</span>
        </p>
        
        <p>
            <b>Card numbers (2-9):</b> <span class="pl-lg-3">Retain their face value or the numbers they carry </span>
        </p>
        
        <p>
            <b>Sum = Double digit number:</b> <span class="pl-lg-3">Only the last digit of a double-digit number counts (so that for example 7 + 6 = (equals) 3, and not 13). </span>
        </p>

        <div class="row">

            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/Ace.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Ace Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/King.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>King Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/Queen.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Queen Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/Jack.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Jack Card</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/2.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 2</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/3.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 3</a></h6>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/5.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 5</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/6.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 6</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/7.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 7</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/8.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 8</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/9.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 9</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 pt-4">
                <div class="card mx-auto d-block">
                    <img class="card-img-top" src="image/baccarat card/10.jpg" alt="Card image cap" style="height: 250px;">
                
                    <div class="card-body">
                        <h6 class="card-title"><a>Card 10</a></h6>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="baccarat_img d-none d-lg-block">
    <div class="mask p-3">
    </div>
</div>
<div class="baccarat_img_mobile d-lg-none d-sm-block">
    <div class="mask p-3">
    </div>
</div>


<div class="container pt-4">
    <h4 class="h4">GAME PLAY</h4>
    <div class="row">
        <div class="col-md-6">
            <p>
                Once all players have placed a wager the dealer will then deal 2 cards to the Player hand and 2 cards to the Banker hand.
            </p>

            <blockquote class="blockquote alert-danger">
                <p class="mb-0"m style="font-size: 12px;">
                    Note: that it is only a single Player hand that is dealt at a time regardless of how many active players are there on the table. Each hand value is determined by adding the value of the two cards together and only considering the last digit/ unit of the resultant figure. For example, if the player hand was dealt a 9 and a 7 you would add these together giving 16, then only the last digit which of the total sum which is 6 would be considered.
                </p>
            </blockquote>

            <h6>
                After the first deal, there is a standard procedure for the subsequent deals, the following rules and steps is now followed:
            </h6>

            <ul>
                <li>
                    If the Player or the Banker receive an 8 or a 9 (Natural) then both hands stand which means cards will not be drawn for any of them again and either Player wins or Banker wins depending on who received the 8 or 9. If both Player and Banker is 8 or 9, it’s a TIE.
                </li>

                <li>
                    If the Player or Banker hand has a value of 6 or 7 then the Player or banker hand stands which means no card draw on either of the sides and either of them will win depending on who received the 6 or 7. While, if both Player and Banker is 6 or 7, it’s a TIE.
                </li>

                <li>
                    If the Player hand has a value of 5 of less another card is dealt to it.
                </li>

                <li>
                    If the Player hand stands the Banker hand will draw another card if it has a value of 5 or less.
                </li>

                <li>
                    If the Player hand draws an additional card the Banker hand will act according to the following table, which shows whether the Banker must draw a third card ('Hit') or play with just the original two cards ('Stand') according to the value of the Banker's 2-card hand and the value of the third card drawn by the Player.
                </li>
            </ul>
        </div>

        <div class="col-md-6 pl-lg-4">
            <h4 class="h4 pb-4">FOR THE PLAYER</h4>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        First two cards of PLAYER combine
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0、1、2、3、4、5</td>
                        <td>Must draw 3rd card</td>
                    </tr>

                    <tr>
                        <td>6、7</td>
                        <td>No draw, (Stands)</td>
                    </tr>

                    <tr>
                        <td>8、9</td>
                        <td>No draw, (Natural)</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th scope="col">First two cards of BANKER combine</th>
                        <th scope="col">If PLAYER 3rd card is card below, BANKER must draw 3rd card</th>
                        <th scope="col">If PLAYER 3rd card is card below, BANKER can NOT draw 3rd card</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>0、1、2</td>
                        <td>Must draw card</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>1、2、3、4、5、6、7、9、10</td>
                        <td>8</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>2、3、4、5、6、7</td>
                        <td>1、8、9、10</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>4、5、6、7</td>
                        <td>1、2、3、8、9、10</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>6、7</td>
                        <td>1、2、3、4、5、8、9、10</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>NO draw (Stands)</td>
                    </tr>

                    <tr>
                        <td>8, 9</td>
                        <td>NO draw (Natural)</td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
    
    <h4 class="h4 pt-4">THE RESULTS</h4>
    <P>
        The result is decided by comparing the final hand values: the higher hand wins. If both hands have the same numerical value the round is considered a Push and all Player and Banker wagers are returned.
    </P>

    <h6 class="pt-3">
        <b>Pay-out system</b>
    </h6>

    <ul>
        <li>A successful bet on the player has a pay-out of 1:1.</li>
        <li>While, that of banker has a pay-out of 1:1 minus 5% the value of the original bet.</li>
        <li>A successful tie bet has a pay-out of 8:1</li>
    </ul>
</div>


@include("Layouts.footer")
@endsection