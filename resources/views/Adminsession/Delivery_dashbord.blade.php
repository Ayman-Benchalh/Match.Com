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
                <li id="focuseBnt"><a href="{{ route('Delivery_dashbord') }}">Delivery commed</a></li>
                <li><a href="{{route('ConfigrationView')  }}">Setting</a></li>
            </ul>
        </div>
        <div class="btnlogout">
            {{-- <a href="{{route('logOutAdmin')}}">LOG OUT</a> --}}
            <form style="margin-left: 60px" action="{{route('logOutAdmin')}}" method="POST">
                @csrf
                @method('DELETE')
            <button> <a>LOG OUT</a></button>
        </form>
        </div>
    </div>
    <div class="part2">
        <div class="titleparty2">Delivery dashbord
            @if(session('success'))
            <div style="margin-top: 75px" class="messageSec">{{session('success')}} <div class="close" onclick="reloadthispage()"><i class="fa-solid fa-xmark"></i></div></div>
        @endif
        </div>
        <div class="deliveryContent">
            <div class="allCommed">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M15 27.5C16.375 27.5 17.5 26.375 17.5 25H12.5C12.5 26.375 13.6125 27.5 15 27.5ZM22.5 20V13.75C22.5 9.9125 20.45 6.7 16.875 5.85V5C16.875 3.9625 16.0375 3.125 15 3.125C13.9625 3.125 13.125 3.9625 13.125 5V5.85C9.5375 6.7 7.5 9.9 7.5 13.75V20L5 22.5V23.75H25V22.5L22.5 20Z" fill="white" fill-opacity="0.7"/>
                    </svg>
                    </span>
                    {{$commands}} Command

            </div>
            <div class="datatoday">date d'aujourd'hui : {{$todaydate}}</div>
            @foreach ($Commands as $command )
                <div class="devlivItem">
                <div class="idcommd">
                    <ul>
                        <li  class="textCommd">Id Command : </li>
                        <li>{{$command->idcommand}}</li>
                    </ul>
                </div>
                <div class="prixtotal">
                    <ul>
                    <li  class="textprix">Id User : </li>
                    <li>{{$command->idUser}}</li>
                </ul></div>
                <div class="typeabonne">
                <ul>
                    <li  class="textabonne">Statut :</li>
                    <li>{{$command->statut}}</li>
                </ul>
                </div>
                <div class="dataCommd">
                    <ul>
                    <li  class="textDate ">Date cmd :</li>
                    <li>{{$command->datecommand}}</li>
                </ul></div>
                <div class="btnDelivery"> <a href="AdminBoitemessage/{{$command->idUser}}">Delivery Commandd</a></div>



                <div class="deletUser">
                    <form action="{{route('deleteCommand',['idCommand'=>$command->idcommand])}}" onsubmit="return confirm('ARE YOU SURE')" method="post">
                      @csrf
                      @method('DELETE')
                        <input type="hidden" name="IdUser" value="">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <rect width="40" height="40" rx="9" fill="#030637"/>
                                <path d="M9.66667 31.6667C9.66667 33.5 11.1667 35 13 35H26.3333C28.1667 35 29.6667 33.5 29.6667 31.6667V11.6667H9.66667V31.6667ZM31.3333 6.66667H25.5L23.8333 5H15.5L13.8333 6.66667H8V10H31.3333V6.66667Z" fill="white" fill-opacity="0.7"/>
                            </svg>
                          </button>

                    </form>


                 </div>

            </div>
            @endforeach
        </div>
    </div>
  </div>
</div>
<script>
    const reloadthispage=()=>{
      location.reload();
      
      }
  </script>
@endsection

