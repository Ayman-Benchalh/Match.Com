@extends('pagePrinc')
@section("title") Match.Com @endsection
@section('content')
<div class="containerProdct" >
  <div class="navbar">
    <div class="part1"><h1>Match.Com</h1></div>
    <div class="part2">
      <ul>
        <li title="send message"><a href="{{ route('boitMessage',$dataUser->idUser) }}" ><span><i class="fa-solid fa-comment"></i></span>Message</a></li>
       
        <li title="Account"><a id="account" onclick="fonthedininfo(id)"><i class="fa-solid fa-user"></i></a></li>
      </ul>
      <span class="informa" id="infroUser">
        <div class="btncloce" id="btncloce" onclick="fonthedininfo(id)"> <i class="fa-solid fa-xmark"></i></div>
        <div class="prtyimg"><img src="{{ url('Image/userimgsvg.svg') }}" alt="img user"></div>
        <div class="prtyinfo">
          <div class="emailname">Email</div>
          <div class="emaildata"><div class="logo"><i class="fa-regular fa-envelope"></i></div>{{Str::limit($dataUser->email, 15, '...')}}</div>
          <div class="username">User name</div>
          <div class="userdata"><div class="logo"><i class="fa-solid fa-user"></i></div>{{ $dataUser->lastName}} {{$dataUser->firstName }}</div>
          <div class="edutpard" onclick="editeinfo(id)"  id="editeInfo"><a >
            <div class="partext" >Edite your profile</div>
            <div class="partylogo"><i class="fa-solid fa-pen"></i></div>
          </a>
        </div>
        <div class="btnlogout"><a href="{{ route('logout') }}">logout</a></div>
        </div>
      </span>
      <div class="cartEditeInfo" id="cartEditeInfo">
        <div class="btncloce2" onclick="editeinfo(id)" id="btncloce2" > <i class="fa-solid fa-xmark"></i></div>
        <div class="contentformEdite">
          <h1>Edite Your Profile</h1>
          <form action="{{ route('editUser',['idUser'=>$dataUser->idUser]) }}" method="post">
            @csrf
            @method('PUT')
            
            <input type="text" name="firstName" id="firstName" placeholder="First Name" value="{{ $dataUser->firstName }}">
            <input type="text" name="lastName" id="lastName" placeholder="Last Name" value="{{ $dataUser->lastName }}">
            <input type="email" name="email" id="email" placeholder="Email" value="{{ $dataUser->email }}">
            <input type="password" name="password" id="password" placeholder="Insert new ! if you need chenge password " >
             <button>Edite Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="contentimg"> 
    @if(session('success'))
     <div class="messageSec">{{session('success')}} <div class="close" onclick="reladthispage()"><i class="fa-solid fa-xmark"></i></div></div>
 @endif
    <video autoplay loop muted>
       <source src="{{ url('Image/videaopub.mp4') }}" type="video/mp4"></source>
           
    </video>
    <div class="fliter"></div>
    <div class="paraghaphe">Select your best server </div>
    <div class="iconbuttom"><i class="fa-solid fa-angles-down"></i></div>
  </div>
  <div class="contantpage">
    <div class="title"> All Collection </div>
    <div class="partycollection">
    <div class="groupecart">
    
      @foreach ($dataprodt as $collection)

          <div class="cart">
            <img src="{{ url('Image/cartimag.svg') }}" alt="">
            <a href="{{ route('viewOne_Product',['idUser'=>$idUser,'idProduct'=>$collection->idProduct]) }}">
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
<script >

  const fonthedininfo=(event)=>{
    const account=document.getElementById('account');
    const cartinfo=document.getElementById('infroUser');
    const btncloce=document.getElementById('btncloce');
    
    if(event == 'btncloce'){
      cartinfo.style.transform='translateX(500px)';
      
    }else if(event =='account'){
      cartinfo.style.transform='translateX(0)';
    }
  }
  const editeinfo=(event)=>{
    const account=document.getElementById('account');
    const cartinfo=document.getElementById('cartEditeInfo');
    const btncloce=document.getElementById('btncloce2');
    
    if(event == 'btncloce2'){
      console.log(event);
      cartinfo.style.transform='translateY(-700px)';
      
    }else if(event =='editeInfo'){
      console.log(event);
      cartinfo.style.transform='translateY(0)';
    }

    
  }
  const reladthispage=()=>{
    location.reload();
    
    }
</script> 
@endsection