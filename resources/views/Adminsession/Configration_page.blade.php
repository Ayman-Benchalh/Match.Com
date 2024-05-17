@extends('pagePrinc')
@section('content')
<div class="container">
  <div class="navber">
    <div class="titleNave">
        Match.Com
    </div>
    <div class="messagebtn">
        <a href="{{ route('Admin_Boite_message') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                <path d="M12.5 1.5625C5.5957 1.5625 0 6.1084 0 11.7188C0 14.1406 1.04492 16.3574 2.7832 18.1006C2.17285 20.5615 0.131836 22.7539 0.107422 22.7783C0 22.8906 -0.0292969 23.0566 0.0341797 23.2031C0.0976562 23.3496 0.234375 23.4375 0.390625 23.4375C3.62793 23.4375 6.05469 21.8848 7.25586 20.9277C8.85254 21.5283 10.625 21.875 12.5 21.875C19.4043 21.875 25 17.3291 25 11.7188C25 6.1084 19.4043 1.5625 12.5 1.5625Z" fill="white" fill-opacity="0.8"/>
              </svg>
              Message
            </a>
    </div>
  </div>
  <div class="contentdash">
    <div class="part1">
        <div class="titleParty">Admin controller </div>
        <div class="list">
            <ul>
                <li ><a href="{{ route('indexpage') }}">Home</a></li>
                <li ><a href="{{ route('Add_collection') }}">Add collection</a></li>
                <li ><a href="{{ route('User_dashbord') }}">View all user</a></li>
                <li ><a href="{{ route('Delivery_dashbord') }}">Delivery commed</a></li>
                <li id="focuseBnt"><a href="{{ route('ConfigrationView')  }}">Setting</a></li>
            </ul>
        </div>
        <div class="btnlogout">
            {{-- <a href="{{route('logOutAdmin')}}">LOG OUT</a> --}}
            <form  action="{{route('logOutAdmin')}}" method="POST">
                @csrf
                @method('DELETE')
            <button>LOG OUT</button>
        </form>
        </div>
    </div>
    <div class="part2">

        <div class="titleparty2">
            Configure your admin profil
            @if(Session::has('success'))
                <span style="color:rgb(74, 192, 74);margin-left:400px">
                    {{ Session::get('success') }}
                 </span>
            @endif
         </div>



        <div class="confirContent">
            <div class="Conifrparty1">
                <form action="{{route('Configration',['idAdmin'=>$adminDa->idAdmin])}}" method="POST">
                    @csrf
                    @method('put')
                    <label for="idAdmin">ID Admin </label>
                    <input readonly type="text" name="idAdmin" value="{{$adminDa->idAdmin}}">
                    <label for="firstName">First name</label>
                    <input type="text" name="firstName" value="{{$adminDa->firstName}}" placeholder="First name">
                    <label for="lastName">last name</label>
                    <input type="text" name="lastName" value="{{$adminDa->lastName}}" placeholder="last name">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{$adminDa->email}}" placeholder="Email">
                    <label for="password">Password</label>
                    <input readonly type="text" name="password" id="password" placeholder="You Cannot Change The Password">
                    <button type="submit" hidden id="btnEdite"></button>

                </form>
                {{-- <form action="" method="post" style="display: none">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="idUser">
                    <button type="submit" hidden id="deleteBtn"></button>
                </form> --}}
                <div class="colletiobtn">
                            <label for="btnEdite" class="btnEdite">Edit Account</label>
                            {{-- <label for="deleteBtn" class="btnDelete">Delete all Paramerte</label> --}}
                 </div>
            </div>
            <div class="Conifrparty2">
                <div class="profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                        <g clip-path="url(#clip0_194_613)">
                          <path d="M50 56.25C65.5273 56.25 78.125 43.6523 78.125 28.125C78.125 12.5977 65.5273 0 50 0C34.4727 0 21.875 12.5977 21.875 28.125C21.875 43.6523 34.4727 56.25 50 56.25ZM75 62.5H64.2383C59.9023 64.4922 55.0781 65.625 50 65.625C44.9219 65.625 40.1172 64.4922 35.7617 62.5H25C11.1914 62.5 0 73.6914 0 87.5V90.625C0 95.8008 4.19922 100 9.375 100H90.625C95.8008 100 100 95.8008 100 90.625V87.5C100 73.6914 88.8086 62.5 75 62.5Z" fill="white" fill-opacity="0.7"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_194_613">
                            <rect width="100" height="100" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>


                </div>
                <div class="cartConfig">
                    <div class="titlecart">Wallet</div>
                    <div class="cartPrix">0 &dollar;</div>
                    <div class="dateCart">
                        <ul>
                            <li>Date</li>
                            <li>2/12/2024</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>






    </div>
  </div>
</div>
@endsection

