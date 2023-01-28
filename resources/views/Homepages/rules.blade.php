@extends('Layouts.main_header')
@section('title', 'House Rules Page | GoldenLoft')

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
      font-size: 25px;
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
      padding-top: 12px;
    }
    
    p {
      font-family: Amiko;
      font-size: 13px;
      color: #222;
      padding-top: 6px;
    }
      
</style>

<div class="container-fluid about_page_header p-0 d-none d-lg-block">
    <div class="about_page_header_mask p-3">
        <h1 class="h1">HOUSE RULES/REGULATING</h1>
        <div class="row">
            <div class="col-md-5 mx-auto d-block">
                <p class="text-center text-white pt-2">
                    We emplore all our customers/guests to keep to our rules/regulations in order for us to serve you better.                    
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about_page_header_mobile p-0 d-lg-none d-sm-block">
    <div class="about_page_header_mask_mobile p-3">
        <h1 class="h1">HOUSE RULES</h1>

        <p class="text-center text-white pt-2">
            We emplore all our customers/guests to keep to our rules/regulations in order for us to serve you better.
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto d-block">
            <h1 class="h1 d-none d-lg-block text-center pt-5">RULES AND REGULATIONS</h1>
            <h1 class="h1_mb d-lg-none d-sm-block text-center pt-5">RULES AND REGULATIONS</h1>

            <ul>
                <li>Our operational hours are 5pm to 6am daily</li>

                <li>All patrons, guests or customers must be at least eighteen (18) years old, proof of age may be required before gaining entrance into the gaming hall. </li>

                <li>All gaming chips issued by the casino remain the property of the casino and must be returned or redeemed (before exiting) the premises.</li>

                <li>When you gamble with us you are confirming that you are acting for yourself and not on behalf of anyone else and you are using your own funds.
                </li>

                <li>Any type of theft, criminal or other unlawful activity will not be tolerated and may result in a ban, suspension and/or prosecution by authorities.</li>

                <li>
                    Any case of willful damage or destruction of the Casino property will be subjected to repayment/replacement by the person and no refunds will be made in the event of banning or suspension.
                </li>
                
                <li>
                    Anybody caught cheating or breaching any of these rules will forfeit any stakes or winnings and will not be allowed to benefit from the breach.
                </li>

                <li>
                    The management of the Casino in its sole discretion, reserve the right to ban guests, customers, patrons for any reason including, but not limited to: loitering, solicitation, failure to comply to the house rules, criminal activity, cheating, offensive language, obscene gestures, threats, fights or harassment toward another customer, guest, patron or Casino associate
                </li>

                <li>
                    The Proprietor may disclose information relating to patrons whose access has been terminated or suspended to regulatory and enforcement authorities.
                </li>

                <li>
                    The reinstatement of any banned customer shall be at the sole discretion of the casino management. No such reinstatement shall be effective unless given by the Casino management.
                </li>

                <li>
                    Devices (whether electrical, mechanical or otherwise), skill, trick or deception the purpose of which is intended to defraud, or to gain an unfair advantage, or to influence any gambling in the casino will not be allowed or used by the management or any customer within or off the premises.
                </li>

                <li>
                    At the discretion of Casino Management, players, customers may be limited to one (1) gaming machine/table position.
                </li>

                <li>
                    Firearms and/or illegal substances of any kind are strictly prohibited on the premises. Bags, backpacks, purses, overcoats and other items, which may conceal such prohibited items are subject to search by the Casino Security.
                </li>

                <li>
                    The sale, supply or serving of intoxicating liquor in the casino shall be as determined by statutory provision, local regulation, and the casino’s alcohol licensing conditions. 
                </li>

                <li>
                    The casino management reserve the right to serve/ cease to serve food, refreshments, alcohol, and cigarettes to any customer without giving a reason.
                </li>

                <li>
                    Customers/Patrons who are suspected of “gang affiliation” by gathering in groups of two (2) or more persons that have a common identifying sign or symbol or an identifiable leadership that suggest affiliation with a “gang” (including flashing of hand signs, displaying logos or the wearing of any clothing or attire such as sagging pants, shirts, jewelry, bandannas, beanies or hats that suggest gang affiliation), or guests who incite racial, religious or ethnic slurs which could create disturbance, or disrupt the peace of customers, retailers and/or Associates of the property, may be required to leave the casino may be required to leave the premises.
                </li>

                <li>
                    Unauthorized taking of photographic snapshots and, recording of audio or video clips inside the gaming floor is strictly prohibited.
                </li>

                <li>
                    All consumables including food and alcoholic beverages sold/offered by the Casino management within the Casino are prohibited from leaving the premises.
                </li>

                <li>
                    Possession, consumption of prohibited items which includes medical or recreational marijuana, abused substance of any kind or type is strictly prohibited and not allowed inside and within the Casino premises
                </li>

                <li>
                    The Proprietor and its employees may withhold from patrons, payment of stakes and/or winnings for the purposes of recovery (in whole or in part) or outstanding Debts owed by the patron.
                </li>

                <li>
                    Patrons must pay all bills before leaving the casino unless they have approval by a member of casino management not to do so. 
                </li>

                <li>
                    No employees of the casino shall be reprimanded by any customer neither shall any employee harass, nor use insulting behavior towards any customer of the casino. Any breach of this Rule by a customer/employee may result in immediate suspension/ban of the employee/customer.
                </li>

                <li>
                    If you are aware of any theft, cheating, scams, or any other suspicious activity that may be occurring at Golden Loft Casino, please call the attention of the Management team immediately or through an email to goldenloftcasino@gmail.com.
                </li>

                <li>
                    The casino is obliged in certain cases to notify the Police, National Crime Agency and/or The Gambling Commission and any other relevant authority of any breaches of the Casino rule and of any action taken on any patron where it considers it appropriate to do so. 
                </li>

                <li>
                    Loitering or clustering around a table without actively playing on that table is highly and strictly prohibited. While seats placed around a table is reserved strictly for active players.
                </li>

                <li>
                    Players are responsible for all personal property and gaming devices (chips, tickets, money, player cards, machine credits, etc.). Casino Management is under no obligation to refund or replace any lost, stolen or abandoned item.
                </li>
                
                <li>
                    Using or cashing out another customers machine/credits/tickets/chips without that guest’s permission is a criminal offence and may result in a permanent ban and/or arrest and prosecution.
                </li>
            </ul>
            
        </div>
    </div>
</div>
    



@include("Layouts.footer")
@endsection