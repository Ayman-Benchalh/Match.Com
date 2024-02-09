@extends('pagePrinc')
@section("title") Match.Com @endsection
@section('content')
<div class="container">
  
    <div class="frame1">
        <img src="{{url('Image/bg_image.svg')}}" alt="bg_image">
        <h1 class="MatchCom">Match.Com</h1>
        <div class="linkgroupe">
            <ul>
                <li><a href="#aboute">Aboute</a></li>
                <li><a href="#aboute">Contact As</a></li>
                <li><a href="{{ route('CreateAcountPage')}}"><i class="fa-solid fa-user-plus"></i></a></li>
                <li><a href="{{ route('loginPage') }}"><span><i class="fa-solid fa-user"></i></span> Login</a></li>
        </ul>
        </div>
        <div class="paraghraf">
            <p>YOU CAN WATCH YOUR TV SHOW OR SPORT MATCH LIVE WITH THIS HIGH LEVEL QUALITY 4K SERVICE</p>
        </div>
        <div class="groupebtn">
            <div class="btn1"><a href="{{ route('loginPage') }}"> VIEW COLLECTION </a></div>
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
            <div class="Cardplan0"><img src="{{ url('Image/card1.svg') }}" alt="Image for plan card"></div>
           
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
    <div class="frame5">
        <div class="title">BUILT FOR STABILITY AND PERFORMANCE</div>
        <div class="party">
            <div class="content1">
                <div class="contentcard"><img src="{{ url('Image/work_on_all_devices.svg') }}" alt="card image"></div>
                <div class="contentcard"><img src="{{ url('Image/immediate_activation.svg') }}" alt="card image"></div>
                <div class="contentcard"><img src="{{ url('Image/Friendly_Support.svg') }}" alt="card image"></div>
            </div>
            <div class="content2"> <div class="liner"></div></div>
            <div class="content3">
                <div class="contentcard"><img src="{{ url('Image/free_intalltion.svg') }}" alt="card image"></div>
                <div class="contentcard"><img src="{{ url('Image/fast_and_stable_server.svg') }}" alt="card image"></div>
            </div>
        </div>
    </div>
    <div class="frame6" id="aboute">
        <div class="party">
            <div class="contentcardimag"><img src="{{ url('Image/aboute.svg') }}" alt="footer image card"></div>
            <div class="contentcardimag"><img src="{{ url('Image/useful.svg') }}" alt="footer image card"></div>
            <div class="contentcardimag"><img src="{{ url('Image/contact.svg') }}" alt="footer image card"></div>
        </div>
    </div>
    <div class="frame7">
        <div class="copyrghit">
            Copyright   <i class="fa-solid fa-copyright"></i>  Match.Com
        </div>
    </div>
</div>  
@endsection