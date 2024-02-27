@extends('pagePrinc')
@section("title") Reset Password @endsection
@section("content")


<div class="containerForLoginPage">
      <div class="partytforlogin">
            <div class="prtyforimage"><img src="{{ url('Image/foottleimg.svg') }}" alt="img"></div>
            <div class="partyformresset">
                  <div class="titleformREset">Reset Password</div>
                  <div class="btnrollcak2"><a href="{{ route('loginPage') }}"><i class="fa-solid fa-xmark"></i></a></div>
                  <form action="{{ route('resetPassworduser') }}" method="POST">
                        @csrf
                       
                        @error('password')<span class="errorMessage2">{{ $message }}</span>@enderror
                        <input type="text"  hidden name="token" value="{{ $token }}">
                        <input type="email" name="email" id="email" placeholder="your email">
                         <input type="password"  placeholder="New Password" name="password" id="password">
                        <input type="password"  placeholder="Confirme Password" name="password_confirm" id="password_confirm">
                       
                       
                        <button type="submit">Reset now</button>
                         </form>
                  <div class="paraghraf1">if you have an Account:  <a href="{{ route('loginPage') }}"> login ! </a></div>
                 
            </div>
      </div>
</div>
<script>

      myfunc=()=>{
     
        let  inputPassword1 = document.getElementById('password3')
        let  forpass1 = document.getElementById('forpass3')

       if(inputPassword1.type=="password"){
        inputPassword1.type="text";
      forpass1.innerHTML='<i class="fa-solid fa-lock-open"></i>';
       }else{
        inputPassword1.type="password";
        forpass1.innerHTML='<i class="fa-solid fa-lock"></i>';
       }
       
        }
     
    </script>
@endsection