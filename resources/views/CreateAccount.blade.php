@extends('pagePrinc')
@section("title") Create Account @endsection
@section("content")


<div class="containerCreateAcount">
  <div class="party2">
<div class="contentImagCreateAcount"><img src="{{ url('Image/foottleimg.svg') }}" alt="image"></div>
<div class="contantForme">
  <div class="titleCreatAcourt">Sing Up</div>
  <div class="btnrollback"><a href="{{ route('ladingPage')}}"><i class="fa-solid fa-xmark"></i></a></div>
  <form action="" method="POST">
    <div class="inputelemnt">
        <div class="pert1">
      <input type="text" placeholder="First name" required id="FirstNam" name="FirstNam">
      <label for="FirstNam" id="FirstNam1"><i class="fa-solid fa-user"></i></label>
      <input type="email" name="email" required id="Email" placeholder="Email">
      <label for="Email" id="email1"><i class="fa-solid fa-at"></i></label>
      <input type="password" required name="password" id="password1" placeholder="password">
      <label for="password" id="forpass1" onclick="myfunc()" ><i class="fa-solid fa-lock"></i></label>
      
    </div>
    <div class="pert2">
      <input type="text" required placeholder="Last name" id="LastNam" name="LastNam">
      <label for="LastNam" id="LastNam1"><i class="fa-solid fa-user"></i></label>
      <input type="email" required  name="email" id="email" placeholder="Confirme Email">
      <label for="email2" id="email2"><i class="fa-solid fa-at"></i></label>
      <input type="password" required name="password" id="password2"  placeholder="Confirme password">
      <label for="password" id="forpass2"  onclick="myfunc2()"><i class="fa-solid fa-lock"></i></label>
    </div>
    </div>
  
    <button type="submit">SingUp now</button>

    <p>I have an Account:  <a href="{{ route('loginPage') }}">Login !</a></p>
  </form>
</div>
  </div>
  
</div>
<script>

  myfunc=()=>{
 
    let  inputPassword1 = document.getElementById('password1')
    let  forpass1 = document.getElementById('forpass1')
  
   if(inputPassword1.type=="password"){
    inputPassword1.type="text";
   forpass1.innerHTML='<i class="fa-solid fa-lock-open"></i>';
   }else{
    inputPassword1.type="password";
    forpass1.innerHTML='<i class="fa-solid fa-lock"></i>';
   }
   
    }
  myfunc2=()=>{
  
    let  inputPassword2 = document.getElementById('password2')
    let  forpass2 = document.getElementById('forpass2')
  
   if(inputPassword2.type=="password"){
    inputPassword2.type="text";
    forpass2.innerHTML='<i class="fa-solid fa-lock-open"></i>';
   }
 else{
    inputPassword2.type="password";
    forpass2.innerHTML='<i class="fa-solid fa-lock"></i>';
   }
    }
</script>
@endsection