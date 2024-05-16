@extends('pagePrinc')
@section("title") Forget Password @endsection
@section("content")


<div class="containerForLoginPage">
      <div class="partytforlogin">
            <div class="prtyforimage"><img src="{{ url('Image/foottleimg.svg') }}" alt="img"></div>
            <div class="partyformresset">
                  <div class="titleformREset">Forget Password</div>
                  <div class="btnrollcak2"><a href="{{ route('loginPage') }}"><i class="fa-solid fa-xmark"></i></a></div>
                  <form action="{{ route('forgetpassswordUser') }}" method="POST">
                        @csrf

                        @error('email')<span class="errorMessage1">{{ $message }}</span>@enderror
                        <input type="email" required placeholder="Email" name="email" id="email">
                        <button type="submit">Send now</button>
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