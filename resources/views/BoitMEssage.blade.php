@extends('pagePrinc')
@section("title") Match.Com @endsection
@section('content')
<div class="containerOnprodcut" >
  <div class="navbar">
    <div class="part1"><h1>Match.Com</h1></div>
    <div class="part2">
      <ul>
        <li ></li>
        <li title="Home"><a href="{{ route('AllCollection',$idUser) }}"><i class="fa-solid fa-house"></i></a></li>
        <li title="Account"><a id="account" onclick="fonthedininfo(id)"><i class="fa-solid fa-user"></i></a></li>
      </ul>
      <span class="informa" id="infroUser">
        <div class="btncloce" id="btncloce" onclick="fonthedininfo(id)"> <i class="fa-solid fa-xmark"></i></div>
        <div class="prtyimg"><img src="{{ url('Image/userimgsvg.svg') }}" alt="img user"></div>
        <div class="prtyinfo">
          <div class="emailname">Email</div>
          <div class="emaildata"><div class="logo"><i class="fa-regular fa-envelope"></i></div>{{Str::limit($dataOneUser->email, 15, '...')}}</div>
          <div class="username">User name</div>
          <div class="userdata"><div class="logo"><i class="fa-solid fa-user"></i></div>{{ $dataOneUser->lastName}} {{$dataOneUser->firstName }}</div>
          <div class="edutpard" onclick="editeinfo(id)" id="editeInfo"><a >
            <div class="partext">Edite your profile</div>
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
          <form action="{{ route('editUser',['idUser'=>$dataOneUser->idUser]) }}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="firstName" id="firstName" placeholder="First Name" value="{{ $dataOneUser->firstName }}">
            <input type="text" name="lastName" id="lastName" placeholder="Last Name" value="{{ $dataOneUser->lastName }}">
            <input type="email" name="email" id="email" placeholder="Email" value="{{ $dataOneUser->email }}">
            <input type="password" name="password" id="password" placeholder="Insert new ! if you need chenge password " >
             <button>Edite Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<div class="contentBoitMEssage">
   <div class="contentmsg">
    <form action="{{ route('sendmessg',['idUser'=>$idUser,'idAdmin'=>$idAdmin]) }}" method="post">
        @csrf
    
        @foreach ($allmessage as $onemessage)
        @if ($onemessage->messageAdmin)
          <div class="onemassge onemassgeofAdmin">
          <div class="iconmaage iconmaageofAdmin"><i class="fa-solid fa-user"></i></div>
          <div class="contentOnemessag contentOnemessagforAdmin">
                  {{ $onemessage->messageAdmin }}
          </div>
          </div> 
        @elseif ($onemessage->messageUser)
        <div class="onemassge onemassgeofUser">
          <div class="iconmaageofUser"><i class="fa-solid fa-user"></i></div>
          <div class="contentOnemessag contentOnemessagforUser">
                  {{ $onemessage->messageUser }}
          </div>
          </div>
        @endif
        
        @endforeach
   </div>
   <div class="msgcontrol">
    <div class="partyuser"><i class="fa-solid fa-user"></i></div>
    <div class="partymsg">
        <input type="text" name="messageuser" id="message" placeholder="Send your message here" >
    </div>
    <div class="sendmsg"><button type="submit"><i class="fa-solid fa-paper-plane"></i></button></div>
   </div>
    </form>
   

</div>
<div class="contentViewAther">
  <div class="contentAthertitel">More collection</div>
  <div class="groupecartAther">
    @foreach ($datatheeprodt as $datatheeprodtone)
       <div class="cart">
      <img src="{{ url('Image/cartimag.svg') }}" alt="">
      <a href="{{ route('viewOne_Product',['idUser'=>$idUser,'idProduct'=>$datatheeprodtone->idProduct]) }}">
            <h1 class="titlecart"> {{  $datatheeprodtone->nom }}</h1>
            <div class="savecart"> {{  $datatheeprodtone->sauvegarder }}</div>
            <div class="prixcart1"> {{  $datatheeprodtone->prix }} $</div>
            <div class="desination">
              <ul>
                <li><i class="fa-solid fa-check"></i> {{  $datatheeprodtone->desination1 }}</li>
                <li><i class="fa-solid fa-check"></i> {{  $datatheeprodtone->desination2 }}</li>
                <li><i class="fa-solid fa-check"></i> {{  $datatheeprodtone->desination3 }}</li>
                <li><i class="fa-solid fa-check"></i> {{  $datatheeprodtone->desination4 }}</li>
                <li><i class="fa-solid fa-check"></i> {{  $datatheeprodtone->desination5 }}</li>
                <li><i class="fa-solid fa-check"></i> {{  $datatheeprodtone->desination6 }}</li>
              </ul>
            </div>
      </a>
</div>
    @endforeach
   
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
    // const onemassge=()=>{
    //   windows.
    // }
    // onemassge()
  }
</script>
@endsection