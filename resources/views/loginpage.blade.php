@extends('pagePrinc')
@section("title") login @endsection
@section("content")


<div class="containerForLoginPage">
      <div class="partytforlogin">
            <div class="prtyforimage"><img src="{{ url('Image/foottleimg.svg') }}" alt="img"></div>
            <div class="partyform">
                  <div class="titleform">LOG IN</div>
                  <div class="btnrollcak2"><a href="{{ route('ladingPage') }}"><i class="fa-solid fa-xmark"></i></a></div>
                  <form action="" method="POST">
                        @csrf
                        <input type="email" required name="email" id="email" placeholder="email">
                        <label for="email3" id="email3"><i class="fa-solid fa-user"></i></label>
                        <div class="passparty">
                              <input type="password" required placeholder="password" name="password" id="password3">
                              <label for="password" id="forpass3" onclick="myfunc()" ><i class="fa-solid fa-lock"></i></label>
                              <a href="#">reset your password here</a>
                        </div>
                        <button type="submit">Login now</button>
                         </form>
                  <div class="paraghraf1">You don’t have an Account:  <a href="{{ route('CreateAcountPage') }}"> Register ! </a></div>
                 
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