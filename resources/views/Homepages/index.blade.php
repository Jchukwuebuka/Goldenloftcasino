@extends('Layouts.main_header')
@section('title', 'Home Page | GoldenLoft')

@section('content')

@include('Layouts.navbar')

<div class="container-fluid d-none d-lg-block p-0 index_header_pc">
    <div class="view" id="">
        <video class="video-fluid" autoplay loop muted>
            <source src="image/bg_video.mp4" type="video/mp4"/>
        </video>
    
        <div class="mask rgba-black-strong" style="padding-top: 200px;">
            <h4 class="animated slideInDown slower">WELCOME TO</h4>
            <h1 class="h1 animated slideInLeft slower">
                GOLDENLOFT CASINO
            </h1>

            <h2 class="h2">Number One Gaming Spot</h2>
        </div>
    </div>
</div>

<!----------------
<div id="carousel-example-1z" class="carousel slide d-none d-lg-block carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" id="">
                <video class="video-fluid" autoplay loop muted>
                    <source src="image/bg_video.mp4" type="video/mp4"/>
                </video>
            
                <div class="mask rgba-black-strong">
                    <h1 class="h1 animated slideInRight slower text-white text-center pt-5 d-none">
                        GOLDEN LOFT CASINO
                    </h1>
                </div>
            </div>    
        </div>

        <div class="carousel-item pc_first_slide p-0">
            <div class="pc_first_slid_mask pt-2 px-3">
                
            </div>
        </div>

        <div class="carousel-item pc_third_slide p-0">
            <div class="pc_third_slide_mask pt-2 px-3">
                
            </div>
        </div>

        <div class="carousel-item pc_fourth_slide">
            <div class="pc_fourth_slide_mask pt-2 px-3">
                
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only text-warning">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
--------->

<div class="container-fluid p-0 d-lg-none d-sm-block index_header_mobile">
    <div class="view first_slide_mask" id="">
        <video class="" autoplay loop muted style="height: 400px; object-fit: cover;">
            <source src="image/bg_video.mp4" type="video/mp4"/>
        </video>
    
        <div class="mask rgba-black-strong" style="padding-top: 80px;">
            <h4 class=" animated slideInDown slower">Welcome To</h4>

            <h1 class="h1 animated slideInRight slower">
                GOLDENLOFT <br> CASINO
            </h1>

            <h2 class="h2  animated slideInUp slower">Number One Gaming Spot</h2>
        </div>
    </div>
</div>

<!------
<div id="carousel-example-1z" class="carousel slide d-lg-none d-sm-block carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active first_slide">
            
            <div class="view first_slide_mask" id="">
                <video class="" autoplay loop muted style="height: 400px; object-fit: cover;">
                    <source src="image/bg_video.mp4" type="video/mp4"/>
                </video>
            
                <div class="mask rgba-black-strong pt-5">
                    <h3 class="h3 pt-5">Welcome To</h3>

                    <h1 class="h2 animated slideInRight slower text-white text-center">
                        GOLDENLOFT <br> CASINO
                    </h1>

                    <h2 class="h2">A Sure "Bet" Since 2019</h2>
                </div>
            </div>

        </div>

        <div class="carousel-item third_slide p-0">
            <div class="third_slide_mask pt-2 px-3">
                
            </div>
        </div>

        <div class="carousel-item fourth_slide">
            <div class="fourth_slide_mask pt-2 px-3">
                
            </div>
        </div>

        <div class="carousel-item slide2 p-0">
            <div class="slid2_mask pt-2 px-3">
                
            </div>
        </div>

    </div>

    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
---->


<div class="pc_body1">
    <div class="container py-5">
        <h1 class="h1 reveal">BE PART OF THE EXTRAORDINARY</h1>

        <div class="d-none d-lg-block mx-auto" style="width: 80%;">  
            <p class="reveal">
                {{config('app.name')}} Casino offers a top-notch casino experience with over 30 slots and table games, as well as a host of live casino options, this place has just about everything you could ever want from a casino. Whether you're into slots or tables, you can find plenty of games that suit your tastes.
                <br><br>
                If you're a fan of classic casino games, you'll be right at home here. You'll find all the classics here, like blackjack, roulette, craps, and more. If you're looking for something new, you can try your hand at one of the latest games to hit the casino floor. No matter how you like to play, you'll find something to suit you at {{config('app.name')}} Casino.
        
            </p>
        </div>

        <div class="d-sm-block d-lg-none">  
            <p class="reveal">
                {{config('app.name')}} Casino offers a top-notch casino experience with over 30 slots and table games, as well as a host of live casino options, this place has just about everything you could ever want from a casino. Whether you're into slots or tables, you can find plenty of games that suit your tastes.
                <br><br>
                If you're a fan of classic casino games, you'll be right at home here. You'll find all the classics here, like blackjack, roulette, craps, and more. If you're looking for something new, you can try your hand at one of the latest games to hit the casino floor. No matter how you like to play, you'll find something to suit you at {{config('app.name')}} Casino.
        
            </p>
        </div>

        <div class="sub_body1 d-none d-lg-block mt-5" style="background-color: #AB2F44;"> 
            <div id="carousel-example-3z" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-3z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-3z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-3z" data-slide-to="2"></li>
                    <li data-target="#carousel-example-3z" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active pc_game_type1 ">
                        <div class="row">
                            <div class="col-md-6 image1 reveal">

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-5 text">
                                <h4 class="h4 reveal">ELECTRONIC ROULLETE</h4>

                                <p class="reveal">
                                    If you're looking for a new and exciting casino game to play, Goldenloft Casino Roullete may be the perfect option for you. <br><br>
                                    
                                    This game is a variation of the popular roulette game, and offers players a variety of options to customize their experience, including the minimum and maximum bets that can be placed on each spin, the speed of the wheel, and the color of the ball and table...
                                </p>

                                <a href="" class="text-white nav-link reveal">
                                    <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item pc_game_type2">
                        <div class="row">
                            <div class="col-md-6 image2 reveal">

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-5 text2">
                                <h4 class="h4 reveal">BACCARAT</h4>

                                <p class="reveal">
                                    There's nothing like a good game of baccarat to take your mind off things. And what could be better than playing at one of the top casinos in Abuja? Goldenloft is definitely one of those casinos. <br><br>

                                    Baccarat is an easy game to learn and play, so if you've never played before or you're looking to brush up on your skills, this is a great place to do it...
                                </p>

                                <a href="" class="text-white nav-link reveal">
                                    <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item pc_game_type3">
                        <div class="row">
                            <div class="col-md-6 image3 reveal">

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-5 text3">
                                <h4 class="h4 reveal">POKER</h4>

                                <p class="reveal">
                                    Poker is a classic game that has been played for centuries. It is a card game that can be played with two to four players. The game is typically played with a standard deck of cards, but there are other versions of poker that use different decks of cards. <br><br>

                                    Poker is a game of skill and luck where a player can use bluffing, deception and psychology to try and fool their opponents into folding a hand so that they can win the pot...
                                </p>

                                <a href="" class="text-white nav-link reveal">
                                    <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item pc_game_type4">
                        <div class="row">
                            <div class="col-md-6 image4 reveal">

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-5 text4">
                                <h4 class="h4 reveal">SLOT MACHINE</h4>

                                <p class="reveal">
                                    If you love playing slots and looking for something a little different to try out then the Goldenloft slot machine is definitely worth a look. This machine features five reels and 20 paylines, giving players the chance to win big! <br><br>
                                    
                                    All you need to do to get started is to place a few bets, spin the reels and enjoy! With this game you can win up to $10,000 by simply matching up the symbols on the reels...
                                </p>

                                <a href="" class="text-white nav-link reveal">
                                    <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-example-3z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only text-warning">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carousel-example-3z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

    
    <div class="sub_body_mb d-lg-none d-md-block px-2 py-2"> 
        <div id="carousel-example-4z" class="carousel slide" data-ride="carousel">
            <!---<ol class="carousel-indicators">
                <li data-target="#carousel-example-4z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-4z" data-slide-to="1"></li>
                <li data-target="#carousel-example-4z" data-slide-to="2"></li>
                <li data-target="#carousel-example-4z" data-slide-to="3"></li>
            </ol>---->

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active mb_game_type1 ">
                    <div class="row">
                        <div class="col-md-6 image1 reveal">

                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 text">
                            <h4 class="h4 reveal">ELECTRONIC ROULLETE</h4>

                            <p class="reveal">
                                If you're looking for a new and exciting casino game to play, Goldenloft Casino Roullete may be the perfect option for you. <br><br>
                                
                                This game is a variation of the popular roulette game, and offers players a variety of options to customize their experience, including the minimum and maximum bets that can be placed on each spin, the speed of the wheel, and the color of the ball and table...
                            </p>

                            <a href="" class="text-white nav-link reveal">
                                <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item mb_game_type2">
                    <div class="row">
                        <div class="col-md-6 image2 reveal">

                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 text2">
                            <h4 class="h4 reveal">BACCARAT</h4>

                            <p class="reveal">
                                There's nothing like a good game of baccarat to take your mind off things. And what could be better than playing at one of the top casinos in Abuja? Goldenloft is definitely one of those casinos. <br><br>

                                Baccarat is an easy game to learn and play, so if you've never played before or you're looking to brush up on your skills, this is a great place to do it...
                            </p>

                            <a href="" class="text-white nav-link reveal">
                                <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item mb_game_type3">
                    <div class="row">
                        <div class="col-md-6 image3 reveal">

                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 text3">
                            <h4 class="h4 reveal">POKER</h4>

                            <p class="reveal">
                                Poker is a classic game that has been played for centuries. It is a card game that can be played with two to four players. The game is typically played with a standard deck of cards, but there are other versions of poker that use different decks of cards. <br><br>

                                Poker is a game of skill and luck where a player can use bluffing, deception and psychology to try and fool their opponents into folding a hand so that they can win the pot...
                            </p>

                            <a href="" class="text-white nav-link reveal">
                                <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item mb_game_type4">
                    <div class="row">
                        <div class="col-md-6 image4 reveal">

                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 text4">
                            <h4 class="h4 reveal">SLOT MACHINE</h4>

                            <p class="reveal">
                                If you love playing slots and looking for something a little different to try out then the Goldenloft slot machine is definitely worth a look. This machine features five reels and 20 paylines, giving players the chance to win big! <br><br>
                                
                                All you need to do to get started is to place a few bets, spin the reels and enjoy! With this game you can win up to $10,000 by simply matching up the symbols on the reels...
                            </p>

                            <a href="" class="text-white nav-link reveal">
                                <i class="fas fa-arrow-left"></i> Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel-example-4z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only text-warning">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carousel-example-4z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>


<div class="container-fluid d-none d-lg-block banner4 p-0">
    <div class="view" id="">
        <video class="video-fluid" autoplay loop muted>
            <source src="image/video_image.mp4" type="video/mp4"/>
        </video>
    
        <div class="mask">
            <div class="row">
                <div class="col-md-6 ban4 ">
                    <div class="row">
                        <div class="col-md-9 mx-auto d-block">
                        <h2 class="reveal">Table Games</h2>
                            <p class="reveal">
                                Table games are the set of Casino games that are played physically between the house dealers and the customers. The aim of the game is for either party to win as much chips from the other as it is the number of chips won from each other that determines the winning party.
                            </p>

                            <h6 class="reveal">Table games available in Goldenloft Casino includes:</h6>
                            <ul>

                                <li class="reveal">
                                    <a href="/roulette">American Roulette</a>
                                </li>

                                <li class="reveal">
                                    <a href="/poker">Black Jack</a>
                                </li>

                                <li class="reveal">
                                    <a href="/poker">Caribbean Poker </a>
                                </li>

                                <li class="reveal">
                                    <a href="/baccarat">Baccarat</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ban4">
                    <div class="row">
                        <div class="col-md-9 mx-auto d-block">
                        <h2 class="reveal">Electronic Games</h2>
                            <p class="reveal">
                                In a bid to provide our customers with entertaining games and chances of winning big, Golden loft has acquired and provided some of the best electronic gaming machines, these machines offers varieties of interesting, mind blowing and high chance winning games. Some games can be played in the machines with as low as N 50 per stake and for some as high as N 3,000 per stake depending on the game and machine.
                            </p>

                            <h6 class="reveal">Electronic games available in Goldenloft Casino includes:</h6>
                            <ul>

                                <li class="reveal">
                                    <a href="/roulette">Electronic Roulette Machine</a>
                                </li>

                                <li class="reveal">
                                    <a href="/electronic">Slot Machine</a>
                                </li>

                                <li class="reveal">
                                    <a href="/electronic">Fish Machine</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid banner3 pb-4 pt-3 d-none d-lg-block">
    <h1 class="h1 reveal py-4">GOLDENLOFT CASINO GAMES</h1>

    <div class="row">
        <div class="col-md-3 pb-3">
            <img src="image/roulette.jpg" alt="" class="img-fluid reveal img mt-5 ml-auto d-block">

            <img src="image/Baccarat.jpg" alt="" class="img-fluid reveal img ml-auto d-block" style="margin-top: 80px; height: 200px;">

            <img src="image/games/fishmachine.jpg" alt="" class="img-fluid reveal img ml-auto d-block" style="margin-top: 67px;">

            <img src="image/poker.jpg" alt="" class="img-fluid reveal img ml-auto d-block" style="margin-top: 70px;">

            <img src="image/slot1.jpg" alt="" class="img-fluid reveal img ml-auto d-block" style="margin-top: 60px;">

            <img src="image/games/Bingo1.jpg" alt="" class="img-fluid reveal img ml-auto d-block" style="margin-top: 83px;">
        </div>

        <div class="col-md-9 sec_col pb-3">
            <div class="text1">
                <h4 class="pt-5 reveal">AMERICAN ROULETTE</h4>
                <p class=" reveal">
                    The American roulette game is a mechanical wheel game that has 37 divisions which are numbered from 1 to 36 and 0 in a 360-degree manner. <br><br>

                    The main objective, which any player pursues, is to predict which numbered pocket the roulette ball is going to settle into when spined.
                </p>
                
                <a href="/roulette">
                    <button class="btn reveal">Explore</button>
                </a>
            </div>

            <div class="text1">
                <h4 class="pt-5 reveal">BACCARAT</h4>
                <p class=" reveal">
                    Baccarat is an exciting game, full of suspense and intrigue, in baccarat there are three possible outcomes which is that either: <br><br>

                    Player win, Banker win or A tie
                </p>
                
                <a href="/baccarat">
                    <button class="btn reveal">Explore</button>
                </a>
            </div>

            <div class="text1 pt-4">
                <h4 class="pt-5 reveal">FISH MACHINE</h4>
                <p class=" reveal">
                    We offers variety of the latest fish gaming technology and machines. <br><br>

                    There is an assortment of slot machines loaded with games that can be played with as low as N50 per stake and as high as N2,500 per stake.
                </p>
                
                <a href="/electronic">
                    <button class="btn reveal">Explore</button>
                </a>
            </div>

            <div class="text1 pt-3">
                <h4 class="pt-5 reveal">POKER GAME</h4>
                <p class=" reveal">
                    Caribbean stud poker, also called casino stud poker, the game rules are derived from five-card stud poker game. <br><br>

                    It is a table game that is played between a player/customer and the house dealer.
                </p>
                
                <a href="/poker">
                    <button class="btn reveal">Explore</button>
                </a>
            </div>

            <div class="text1 pt-4">
                <h4 class="pt-5 reveal">SLOT MACHINE</h4>
                <p class=" reveal">
                    Golden Loft Casino offers variety of the latest slot gaming technology; the machines are equipped with 4k crystal clear dual screen display. <br><br>

                    They are also loaded with different games that can be played with as low as N50 per stake and as high as N2,500 per stake.
                </p>
                
                <a href="/electronic">
                    <button class="btn reveal">Explore</button>
                </a>
            </div>

            <div class="text1 pt-2">
                <h4 class="pt-5 reveal">BINGO LOTTERY</h4>
                    
                <ul class="pt-1 reveal">
                    <li>Randomly pick and write down your numbers choosing from 1 – 36.</li>
                    <li>Pick and write down your special number which is just one (1) number</li>
                    <li>No of spin is 7 spin</li>
                    <li>Ticket sale starts once CASINO opens till 3:00 AM when the spin commences with each line cost ₦2,000 ticket cost at ₦10,000.</li>
                </ul>
                
                <a href="/lottery">
                    <button class="btn reveal">Explore</button>
                </a>
            </div>
            
        </div>
    </div>
</div>

<div class="container-fluid banner3_mb d-lg-none d-md-block">
    <h4 class="h4 reveal">GOLDENLOFT CASINO GAMES</h4>
    
    <div class="card">
        <div class="card_header1 reveal">

        </div>

        <div class="card_body px-3 py-2">
            <h5 class="pt-3 reveal">AMERICAN ROULETTE</h5>
            
            <p class=" reveal">
                The American roulette game is a mechanical wheel game that has 37 divisions which are numbered from 1 to 36 and 0 in a 360-degree manner. <br><br>

                The main objective, which any player pursues, is to predict which numbered pocket the roulette ball is going to settle into when spined.
            </p>
            
            <a href="/roulette">
                <button class="btn reveal">Explore</button>
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card_header2 reveal">

        </div>

        <div class="card_body px-3 py-2">
            <h5 class="pt-3 reveal">BACCARAT</h5>
            
            <p class=" reveal">
                Baccarat is an exciting game, full of suspense and intrigue, in baccarat there are three possible outcomes which is that either: <br><br>

                Player win, Banker win or A tie
            </p>
            
            <a href="/baccarat">
                <button class="btn reveal">Explore</button>
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card_header3 reveal">

        </div>

        <div class="card_body px-3 py-2">
            <h5 class="pt-3 reveal">FISH MACHINE</h5>
            
            <p class=" reveal">
                We offers variety of the latest fish gaming technology and machines. <br><br>

                There is an assortment of slot machines loaded with games that can be played with as low as N50 per stake and as high as N2,500 per stake.
            </p>
            
            <a href="/electronic">
                <button class="btn reveal">Explore</button>
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card_header4 reveal">

        </div>

        <div class="card_body px-3 py-2">
            <h5 class="pt-3 reveal">POKER GAME</h5>
            
            <p class=" reveal">
                Caribbean stud poker, also called casino stud poker, the game rules are derived from five-card stud poker game. <br><br>

                It is a table game that is played between a player/customer and the house dealer.
            </p>
            
            <a href="/poker">
                <button class="btn reveal">Explore</button>
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card_header5 reveal">

        </div>

        <div class="card_body px-3 py-2">
            <h5 class="pt-3 reveal">SLOT MACHINE</h5>
            
            <p class=" reveal">
                Golden Loft Casino offers variety of the latest slot gaming technology; the machines are equipped with 4k crystal clear dual screen display. <br><br>

                They are also loaded with different games that can be played with as low as N50 per stake and as high as N2,500 per stake.
            </p>
            
            <a href="/electronic">
                <button class="btn reveal">Explore</button>
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card_header6 reveal">

        </div>

        <div class="card_body px-3 py-2">
            <h5 class="pt-3 reveal">BINGO ROTTERY</h5>
            
            <ul class="pt-1 reveal">
                <li>Randomly pick and write down your numbers choosing from 1 – 36.</li>
                <li>Pick and write down your special number which is just one (1) number</li>
                <li>No of spin is 7 spin</li>
                <li>Ticket sale starts once CASINO opens till 3:00 AM when the spin commences with each line cost ₦2,000 ticket cost at ₦10,000.</li>
            </ul>
            
            <a href="/lottery">
                <button class="btn reveal">Explore</button>
            </a>
        </div>
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
                    </ul>

                    <a href="/about_us">
                        <button class="btn reveal">read more</button>
                    </a>
                    
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid d-lg-none d-md-block pt-5 body_2_mb">
    <div class="py-4">
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
        </ul>

        <a href="/about_us">
            <button class="btn reveal">read more</button>
        </a>
    </div>
</div>

<div class="container-fluid reveal d-none d-lg-block pt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.8912523577583!2d7.471322714710615!3d9.073670973035455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b174ef8caff%3A0xad443f077773c46f!2sDiscovery%20Mall!5e0!3m2!1sen!2sng!4v1670367114001!5m2!1sen!2sng" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="reveal d-lg-none d-md-block py-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.8912523577583!2d7.471322714710615!3d9.073670973035455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b174ef8caff%3A0xad443f077773c46f!2sDiscovery%20Mall!5e0!3m2!1sen!2sng!4v1670367114001!5m2!1sen!2sng" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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