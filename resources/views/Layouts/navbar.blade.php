<style>

.sidenav li {
    list-style-type: none;
  }
    
.sidenav .drp {
    border-left: 1px dotted rgb(179, 176, 176);
    margin: 0px 0px 0px 35px;
  }
  
  
.sidenav .drp a {
    display: block;
    padding: 10px 10px 5px 5px;
    text-decoration: none;
    font-size: 12px;
    display: block;
    color: rgb(218, 218, 218);
    margin-top: 5px;
    text-transform: uppercase;
  }
  
  
.sidenav .drp a:hover {
    background: rgba(250, 250, 250, 0.377);
    border-radius:0 20px ;
    font-weight: 500;
    transition: 0.3s ease-in;
  }
  
</style>


<div id="mySidenav" class="sidenav d-lg-none d-md-block">
    
    <a href="/" class="">
        HOME
    </a>
    
    <a href="about_us" class="">
        ABOUT
    </a>
    
    <a href="roulette" class="">
        AMERICAN ROULETTE

    </a>
    
    
    <ul class="accordion md-accordion p-0" id="accordionEx1" role="tablist" aria-multiselectable="true">

        <li role="tab" id="headingTwo2">
            <a class="collapsed py-0" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo2"
            aria-expanded="false" aria-controls="collapseTwo1"> TABLE GAMES <i class="fas fa-angle-down rotate-icon"></i>
            </a>

            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
            data-parent="#accordionEx1">

                <div class="drp">

                    <a href="#" class="waves-effect">All Users</a>
                
                    <a href="#" class="waves-effect">Active Users</a>
                    <a href="#" class="waves-effect">Banned Users</a>

                </div>

            </div>

        </li>
    </ul>

    <a href="baccarat" class="">
        BACCARAT
    </a>

    <a href="poker" class="">
        CARIBBEAN POKER
    </a>

    <a href="electronic" class="">
        ELECTRONIC MACHINE
    </a>

    <a href="lottery" class="">
        BINGO LOTTERY
    </a>

    <a href="rules" class="">
        RULES
    </a>

</div>

<div class="container-fluid sticky-top d-lg-none d-sm-block py-2" style="border-bottom: 1px solid #dfbd00; background-color: #AB2F44;">
    <div class="row">
        <div class="col-6">
            <a href="/"><img src="image/logo1.png" alt="logo" class="img-fluid d-inline" style="width:  90%;"></a>
        </div>

        <div class="col-6">
            <div class="menubtn"  onclick="openNav()">
                <div onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="container-fluid contact_nav py-2 d-none d-lg-block" style="background-color:#fff;">
    <div class="row">

        <div class="col-7">
            <span class="fas fa-globe" style="font-size: 15px; color: #AB2F44;"></span> <span class="text-muted pl-2 address" style="font-size: 12px;">1st Floor Discovery Mall, Plot 215 Konoko Crescent, Off Ademola Adetokunbo Crescent Wuse 2 Abuja </span>
        </div>
        
        <div class="col-3">
            <center>
            <span class="fas fa-envelope" style="font-size: 15px; color: #AB2F44;"></span> <span class="text-muted pl-2 address" style="font-size: 12px;">support@goldenloftcasino.com</span></center>
        </div>

        <div class="col-2">
            <center>
            <span class="fas fa-mobile" style="font-size: 15px; color: #AB2F44;"></span> <span class="text-muted pl-2 address" style="font-size: 12px;">+234 (703) 770-3438</span></center>
        </div>

    </div>
</div>

<style>
    
    .dropdown .icon1 {
        display: none;
    }
    
    .dropdown:hover .icon1 {
        display: block;
        position: absolute;
        z-index: 999;
        right: 50%;
        font-size: 18px;
        top: 30px;
    }
    
    .dropdown2 .icon1 {
        display: none;
    }
    
    .dropdown2:hover .icon1 {
        display: block;
        position: absolute;
        z-index: 999;
        right: 50%;
        font-size: 18px;
        top: 30px;
    }
    
    
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown2 {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #AB2F44;
      min-width: 500px;
      padding: 30px 10px;
      z-index: 1; 
      text-align: center;
      right: -50%;
    }
    
    .dropdown-content a {
      color: #fff;
      padding: 10px 10px;
      text-decoration: none;
      display: inline;
      font-size: 12px;
      font-family: Amiko;
      transform: rotateY('90');
    }
    
    .dropdown-content a:hover {color: #dfbd00;}
    
    .dropdown:hover .dropdown-content {display: block; transition: 0.2S; }

    .dropdown2:hover .dropdown-content {display: block; transition: 0.2S;}
    
</style>


<div class="d-none d-lg-block py-0 ">
    <nav class="navbar navbar_pc navbar-expand-lg shadow-none navbar-dark sticky-top" style="background-color: #AB2F44;">
        <a href="/"><img src="image/logo1.png" alt="logo" class="img-fluid" style="width: 70%;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars text-white"></span>
            </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navpc navbar-nav ml-auto px-2">
    
                <li class="nav-item active pl-4">
                    <a class="pc_a" href="/">HOME </a>
                </li>
    
                <li class="nav-item">
                    <a class="pc_a" href="about_us">ABOUT</a>
                </li>
    
                <li class="nav-item dropdown">
                    <a class="pc_a dropbtn" href="#">TABLE GAMES</a>
                    <i class="fas fa-angle-down icon1 text-white fa-2x"></i>
                    <div class="dropdown-content">
                        <a href="/poker">POKER</a>
                        <a href="/black_jack">BLACK JACK</a>
                        <a href="roulette">ROULETTE</a>
                        <a href="/baccarat">BACCARAT</a>
                        <a href="/texas">TEXAS</a>
                    </div>
                </li>
     
                <li class="nav-item dropdown2">
                    <a class="pc_a dropbtn" href="#">ELECTRONIC MACHINE</a>
                    <i class="fas fa-angle-down icon1 text-white fa-2x"></i>
                    <div class="dropdown-content">
                        <a href="/poker">SLOT</a>
                        <a href="/black_jack">FISH MACHINE</a>
                        <a href="roulette">ROULETTE</a>
                    </div>
                </li>
    
                <li class="nav-item dropdown2">
                    <a class="pc_a dropbtn" href="#">VIP GAMES</a>
                    <i class="fas fa-angle-down icon1 text-white fa-2x"></i>
                    <div class="dropdown-content">
                        <a href="/black_jack">BLACK JACK</a>
                        <a href="roulette">ROULETTE</a>
                        <a href="/baccarat">BACCARAT</a>
                        <a href="/texas">TEXAS</a>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="pc_a" href="lottery">BINGO LOTTERY</a>
                </li>
    
                <li class="nav-item">
                    <a class="pc_a" href="rules">RULES</a>
                </li>
    
            </ul>
        </div>
    </nav>
</div>


