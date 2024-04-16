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
                <li id="focuseBnt"><a href="{{ route('User_dashbord') }}">View all user</a></li>
                <li><a href="{{ route('Delivery_dashbord') }}">Delivery commed</a></li>
                <li><a href="#">Setting</a></li>
            </ul>
        </div>
        <div class="btnlogout">
            <a href="#">LOG OUT</a>
        </div>
    </div>
    <div class="part2">
        <div class="titleparty2">User dashbord</div>


        <div class="showUser">
                <div class="totalUser">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <g clip-path="url(#clip0_190_142)">
                            <path d="M13 14.5625C16.8818 14.5625 20.0312 11.4131 20.0312 7.53125C20.0312 3.64941 16.8818 0.5 13 0.5C9.11816 0.5 5.96875 3.64941 5.96875 7.53125C5.96875 11.4131 9.11816 14.5625 13 14.5625ZM19.25 16.125H16.5596C15.4756 16.623 14.2695 16.9062 13 16.9062C11.7305 16.9062 10.5293 16.623 9.44043 16.125H6.75C3.29785 16.125 0.5 18.9229 0.5 22.375V23.1562C0.5 24.4502 1.5498 25.5 2.84375 25.5H23.1562C24.4502 25.5 25.5 24.4502 25.5 23.1562V22.375C25.5 18.9229 22.7021 16.125 19.25 16.125Z" fill="white" fill-opacity="0.7"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_190_142">
                                <rect width="25" height="25" fill="white" transform="translate(0.5 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        </span>
                        {{$userCount}} users
                </div>
                <div class="deteleAlluser">
                    <form action="" method="post">

                        @csrf
                        <input type="hidden" name="deleteAllUser">
                        <button type="submit">
                             <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
                                <g clip-path="url(#clip0_190_97)">
                                <path d="M9.25033 27.7083C9.25033 29.3125 10.5628 30.625 12.167 30.625H23.8337C25.4378 30.625 26.7503 29.3125 26.7503 27.7083V10.2083H9.25033V27.7083ZM28.2087 5.83333H23.1045L21.6462 4.375H14.3545L12.8962 5.83333H7.79199V8.75H28.2087V5.83333Z" fill="white" fill-opacity="0.7"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_190_97">
                                    <rect width="35" height="35" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </span>
                            detele All user
                        </button>

                    </form>

                </div>



                {{-- begin user loop --}}



                @foreach ($clients as $client )
                {{-- @foreach ($aboType as $Type ) --}}
                <div class="cartUser">
                  <div class="userIcone">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                          <g clip-path="url(#clip0_189_63)">
                            <path d="M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z" fill="white" fill-opacity="0.7"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_189_63">
                              <rect width="25" height="25" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                  </div>
                  <div class="nameUser">
                       {{Str::limit($client->firstName ." ".$client->lastName, 15, '...')  }}
                  </div>
                  <div class="emailUser">
                      {{Str::limit($client->email, 20, '...')  }}
                  </div>
                  <div class="abonneType">
                      <ul>
                      <li>Abonne type :</li>
                      <li>{{$data['objectTwo']->nom}}</li>
                        </ul>
                  </div>
                  <div class="partyUser">
                      <div class="datacreate">
                                      <ul>
                                      <li>date create :</li>
                                      <li>{{$client->created_at}}</li>
                                      </ul>
                                  </div>
                   <div class="deletUser">
                      <form action="{{route('DeleteUser',['idUser'=>$client->idUser])}}" method="post">
                        @csrf
                        @method('DELETE')
                          <input type="hidden" name="IdUser" value="{{$client->idUser}}">
                          <button type="submit">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                  <rect width="40" height="40" rx="9" fill="#030637"/>
                                  <path d="M9.66667 31.6667C9.66667 33.5 11.1667 35 13 35H26.3333C28.1667 35 29.6667 33.5 29.6667 31.6667V11.6667H9.66667V31.6667ZM31.3333 6.66667H25.5L23.8333 5H15.5L13.8333 6.66667H8V10H31.3333V6.66667Z" fill="white" fill-opacity="0.7"/>
                              </svg>
                            </button>

                      </form>


                   </div>
                  </div>

              </div>
              @endforeach







    </div>
    <div class="editeUser">
        <div class="Useredite">
            <ul>
                <li> <div class="testUsername">User  name</div></li>
                <li>
                    <select name="" id="">
                            <option >name user</option>
                            <option >Ayman benchalh</option>
                            <option >mohamed khalid</option>
                    </select>
            </li>
            </ul>
        </div>
        <div class="typeabonne">
            <ul>
                <li><div class="testAbonne"> type Abonne</div>
                   </li>
                <li>
                    <select name="" >
                    <option >type abonne</option>
                    <option >1 month</option>
                    <option >2 months</option>
                    </select>
        </li>
            </ul>
        </div>
        <div class="btnedite">
            <ul>
                <li><div class="testbtn">Edite Abonne</div> </li>
                <li>
                    <form action="" method="post">@csrf<button class="btndelete" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                            <g clip-path="url(#clip0_190_159)">
                              <path d="M8 23.75C8 25.125 9.125 26.25 10.5 26.25H20.5C21.875 26.25 23 25.125 23 23.75V8.75H8V23.75ZM24.25 5H19.875L18.625 3.75H12.375L11.125 5H6.75V7.5H24.25V5Z" fill="white" fill-opacity="0.7"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_190_159">
                                <rect width="30" height="30" fill="white" transform="translate(0.5)"/>
                              </clipPath>
                            </defs>
                          </svg>
                        Delete User
                        </button>
                    </form>
                    <form action="" method="postt">@csrf @method('put')<button class="btnedite" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                            <g clip-path="url(#clip0_190_150)">
                              <path d="M4.25 21.5625V26.25H8.9375L22.7625 12.425L18.075 7.73745L4.25 21.5625ZM26.3875 8.79995C26.875 8.31245 26.875 7.52495 26.3875 7.03745L23.4625 4.11245C22.975 3.62495 22.1875 3.62495 21.7 4.11245L19.4125 6.39995L24.1 11.0875L26.3875 8.79995Z" fill="white" fill-opacity="0.7"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_190_150">
                                <rect width="30" height="30" fill="white" transform="translate(0.5)"/>
                              </clipPath>
                            </defs>
                          </svg>
                        Modife Abonne
                    </button>
                </form>
                </li>
            </ul>
        </div>
    </div>
  </div>
</div>
@endsection

