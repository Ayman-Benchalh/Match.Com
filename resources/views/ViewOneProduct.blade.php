@extends('pagePrinc')
@section("title") Match.Com @endsection
@section('content')
<div class="containerOnprodcut" >
  <div class="navbar">
    <div class="part1"><h1>Match.Com</h1></div>
    <div class="part2">
      <ul>
        <li title="send message"><a href="#" ><span><i class="fa-solid fa-comment"></i></span>Message</a></li>
        <li title="view cart"><a href="#" ><i class="fa-solid fa-cart-shopping"></i></a></li>
        <li title="Account"><a href="#"><i class="fa-solid fa-user"></i></a></li>
      </ul>
    </div>
  </div>
<div class="contentOnprodcut">
<div class="partone">                                                                       
    <div class="cart">
        <img src="{{ url('Image/cartimag.svg') }}" alt="">
        <a href="#">
              <h1 class="titlecart"> {{  $dataOneprodt->nom }}</h1>
              <div class="savecart"> {{  $dataOneprodt->sauvegarder }}</div>
              <div class="prixcart"> {{  $dataOneprodt->prix }} $</div>
              <div class="desination">
                <ul>
                  <li><i class="fa-solid fa-check"></i> {{  $dataOneprodt->desination1 }}</li>
                  <li><i class="fa-solid fa-check"></i> {{  $dataOneprodt->desination2 }}</li>
                  <li><i class="fa-solid fa-check"></i> {{  $dataOneprodt->desination3 }}</li>
                  <li><i class="fa-solid fa-check"></i> {{  $dataOneprodt->desination4 }}</li>
                  <li><i class="fa-solid fa-check"></i> {{  $dataOneprodt->desination5 }}</li>
                  <li><i class="fa-solid fa-check"></i> {{  $dataOneprodt->desination6 }}</li>
                </ul>
              </div>
        </a>
  </div>
</div>
<div class="parttwo">

 
    <div class="contentInform">
    <div class="titleproduct">{{  $dataOneprodt->nom }} iptv 4k Good Quality </div>
    <div class="line"></div>
    <div class="namUser">User Name : {{$dataOneUser->lastName}} {{$dataOneUser->firstName}}</div>
    <div class="emailUser">Your email : {{ $dataOneUser->email }} </div>
    <div class="feedback">Feedbacks : 
        @if ($dataOneprodt->prix <15) 
        <span class='star2'>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
           </span>
        @elseif ($dataOneprodt->prix <=20)
        <span class='star3'>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>


        </span>
        @elseif ($dataOneprodt->prix <=30)
        <span class='star4'>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star"></i>
       
        </span>
        @elseif ($dataOneprodt->prix >=30)
        <span class='star5'>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
   
        </span>
       
        @elseif ($dataOneprodt->prix >10)
        <span class='star1'>
            <i class="fa-solid fa-star" style="color: #EEC800"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        
    
        </span>
       
    @endif
    
    </div>
    <div class="Datefinish">Date finishe : {{ date('d/m/Y') }}</div>
    <div class="TotalPrix">Total Prix : {{  $dataOneprodt->prix }} $   <span class="lastprix">{{ $dataOneprodt->prix +49 }} $</span></div> 

    <div class="twobtn">
        <a href="{{ route('AllCollection',$idUser) }}" class="goback"> GO BACK</a>
        <a href="#" class="paynow">Pay now</a>
    </div>
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