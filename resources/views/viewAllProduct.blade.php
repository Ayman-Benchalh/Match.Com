@extends('pagePrinc')
@section("title") Match.Com @endsection
@section('content')
<div class="containerProdct" >
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
  <div class="contentimg">
    <img src="{{ url('Image/imagback.png') }}" alt="img">
    <div class="paraghaphe">Select your best server </div>
  </div>
  <div class="contantpage">
    <div class="title"> All Collection </div>
    <div class="partycollection">
    <div class="groupecart">
    
      @foreach ($dataprodt as $collection)
          <div class="cart">
            <img src="{{ url('Image/cartimag.svg') }}" alt="">
            <a href="#">
                  <h1 class="titlecart"> {{  $collection->nom }}</h1>
                  <div class="savecart"> {{  $collection->sauvegarder }}</div>
                  <div class="prixcart"> {{  $collection->prix }} $</div>
                  <div class="desination">
                    <ul>
                      <li><i class="fa-solid fa-check"></i> {{  $collection->desination1 }}</li>
                      <li><i class="fa-solid fa-check"></i> {{  $collection->desination2 }}</li>
                      <li><i class="fa-solid fa-check"></i> {{  $collection->desination3 }}</li>
                      <li><i class="fa-solid fa-check"></i> {{  $collection->desination4 }}</li>
                      <li><i class="fa-solid fa-check"></i> {{  $collection->desination5 }}</li>
                      <li><i class="fa-solid fa-check"></i> {{  $collection->desination6 }}</li>
                    </ul>
                  </div>
            </a>
      </div>
      @endforeach
   
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
@endsection