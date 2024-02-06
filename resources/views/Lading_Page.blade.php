<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match.Com</title>
    <link rel="stylesheet" href="{{ asset('Css/All_Css_Container.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="container">
  
    <div class="frame1">
        <img src="{{url('Image/bg_image.svg')}}" alt="bg_image">
        <h1 class="MatchCom">Match.Com</h1>
        <div class="linkgroupe">
            <ul>
                <li><a href="#">Aboute</a></li>
                <li><a href="#">Contact As</a></li>
                <li><a href="#"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="#"><span><i class="fa-solid fa-user"></i></span> Login</a></li>
        </ul>
        </div>
        <div class="paraghraf">
            <p>YOU CAN WATCH YOUR TV SHOW OR SPORT MATCH LIVE WITH THIS HIGH LEVEL QUALITY 4K SERVICE</p>
        </div>
        <div class="groupebtn">
            <div class="btn1"><a href="#"> VIEW COLLECTION </a></div>
            <div class="btn2">
                <ul>
                    <li><a href="#"><img src="{{url('Image/Instagram (1).svg')}}" alt="bg_image"></a></li>
                    <li><a href="#"><img src="{{url('Image/Facebook.svg')}}" alt="bg_image"></a></li>
                    <span> : </span>
                    <li><a href="#"><img src="{{url('Image/Whatsapp.svg')}}" alt="bg_image"></a></li>
                    <li><a href="#"><img src="{{url('Image/Linkedin.svg')}}" alt="bg_image"></a></li>
                </ul>
            </div>
            
        </div>

        <div class="busTitle"><p> BEST TV SERVER FOR YOU </p></div>
        
    </div>
    <div class="frame2">
        <div class="gourpecardimg">
             <div class="cardimg"><img src="{{ url("Image/mincardNet.svg") }}" alt="image"></div>
             <div class="cardimg"><img src="{{ url("Image/mincardHul.svg") }}" alt="image"></div>
             <div class="cardimg"><img src="{{ url("Image/mincardHbo.svg") }}" alt="image"></div>
             <div class="cardimg"><img src="{{ url("Image/mincardDes.svg") }}" alt="image"></div>
             <div class="cardimg"><img src="{{ url("Image/mincardPirmeV.svg") }}" alt="image"></div>
        </div>
      
    </div>
    <div class="frame3">
        <div class="title">POPULAR FILMS AND SERIES</div>
        <div class="prtyForCardImg">
            <div class="CardImgMovie"><img src="{{ url('Image/filmcrad1.svg') }}" alt="image card movie"></div>
            <div class="CardImgMovie"><img src="{{ url('Image/filmcrad2.svg') }}" alt="image card movie"></div>
            <div class="CardImgMovie"><img src="{{ url('Image/filmcrad3.svg') }}" alt="image card movie"></div>
            <div class="CardImgMovie"><img src="{{ url('Image/filmcrad4.svg') }}" alt="image card movie"></div>
        </div>
    </div>
    <div class="frame4">
        <div class="title">CHOOSE YOUR PLAN</div>
        <div class="partyForCradCOLL">
            <div class="Cardplan"><img src="{{ url('Image/card1.svg') }}" alt="Image for plan card"></div>
           
           <div class="Cardplan" >   
            <div class="Cardplan1">
                <img src="{{ url('Image/card2.svg') }}" alt="Image for plan card"></div>
            <div class="Cardplan2">
                <div class="Cardplan21"><img src="{{ url('Image/card3.svg') }}" alt="Image for plan card"></div>
                <div class="Cardplan21"><img src="{{ url('Image/card4.svg') }}" alt="Image for plan card"></div>
                <div class="Cardplan21"><img src="{{ url('Image/card5.svg') }}" alt="Image for plan card"></div>
        </div>
        </div>
        </div>
    </div>
</div>  
</body>
</html>