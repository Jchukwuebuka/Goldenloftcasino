<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Casino, Games, Game, Casinos, American Roulette, Black Jack, Caribbean Poker, Baccarat">
    <meta name="description" content="Goldenloft Casino is the number one leading gaming service provider in Nigeria. Our games include: American Roulette, Black Jack, Caribbean Poker, Baccarat and many more.">

    <title>@yield('title')</title>

    <!------------Font Family------------>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!--------------Fonts----------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!----------Google Fonts Roboto------------>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!----------Bootstrap core CSS---------->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!----------Material Design Bootstrap---------->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!----------ICONS----------------->
    <script src="https://kit.fontawesome.com/e1006efbda.js" crossorigin="anonymous"></script>
    <!----------------FAVICONS-------------------->
    <link rel="icon" href="image/favicon.ico" type="image/x-icon"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!------------Our Custom CSS and JAVASCRIPT---------------->
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="/js/custom.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

   
</head>
<body  id="topSection"  nload="welcomeMessage()">
    
    
    
    @yield('content')

 

<!----------------------JQuery------------------->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/particles.min.js"></script>


<script type="text/javascript">
    window.addEventListener('scroll', reveal);
    
    function reveal() {
        var reveals = document.querySelectorAll('.reveal');
        
        for(var i = 0; i < reveals.length; i++) {
            
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 80;
            
            if (revealtop < windowheight - revealpoint) {
                reveals[i].classList.add('active');
            }
            else {
                reveals[i].classList.remove('active'); 
            }
        }
    }
</script>

<script>
    function openNav() {
        var x = document.getElementById("mySidenav");
        if (x.style.display === "block") {
            x.style.display = "none";
            document.body.style.backgroundColor = "#fff";
        } 
        
        else {
            x.style.display = "block";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            document.body.style.zIndex = "9999";
        }
    }
</script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>

<script>
    window.
onload
= function() {
  Particles.
init
({
    selector: 
'.background'
  });
};
</script>
    
</body>
    <!---------GRADIENT------------------->
    <script>
        $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    
       
    <script>
        $(function() {
            setTimeout(()=> {
                $(".loader").fadeOut(1000);
            }, 1700)
        })
    </script>
    
</html>