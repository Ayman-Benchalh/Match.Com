@extends('pagePrinc')
@section('content')
<div class="container">
  <div class="navber">
    <div class="titleNave">
        Match.Com
    </div>
    <div class="messagebtn">
        <a style="background-color: #030637" href="{{ route('Admin_Boite_message') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                <path d="M12.5 1.5625C5.5957 1.5625 0 6.1084 0 11.7188C0 14.1406 1.04492 16.3574 2.7832 18.1006C2.17285 20.5615 0.131836 22.7539 0.107422 22.7783C0 22.8906 -0.0292969 23.0566 0.0341797 23.2031C0.0976562 23.3496 0.234375 23.4375 0.390625 23.4375C3.62793 23.4375 6.05469 21.8848 7.25586 20.9277C8.85254 21.5283 10.625 21.875 12.5 21.875C19.4043 21.875 25 17.3291 25 11.7188C25 6.1084 19.4043 1.5625 12.5 1.5625Z" fill="white" fill-opacity="0.8"/>
              </svg>
              Message
            </a>
    </div>
  </div>
  <div class="contentdash">
    <div class="part1">
        <div class="titleParty"> Boite message</div>
        <div class="list">
            <ul>
                <li ><a href="{{ route('indexpage')}}">Home</a></li>
                <li ><a href="{{ route('Add_collection') }}">Add collection</a></li>
                <li ><a href="{{ route('User_dashbord') }}">View all user</a></li>
                <li ><a href="{{ route('Delivery_dashbord') }}">Delivery commed</a></li>
                <li ><a href="{{ route('ConfigrationView') }}">Setting</a></li>
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
        <div class="titleparty2"> 
          <span> @if($UserSelected)
             User : {{$UserSelected->firstName.' '.$UserSelected->lastName.' ---> id : '.$UserSelected->idUser}} 
             {{-- <span style="margin-left:200px;">Command ID : {{$mesCom->idcommand}} </span> --}}
            @endif
            @if (!$UserSelected)
              {{-- Historique des messages : --}}
            @endif
          </span></div>      
        <div class="AdminBoitemessage">
            <div class="selectUser">
                <form>
                    <select name="selectClient" id="selectClient" onchange="javascriptfn()">
                        <option  value="">-------------------------------> Select User <--------------------------</option>
                        @foreach ( $allUsers as $user)
                          <option  value="{{$user->idUser}}"> {{' id : '.$user->idUser.' | '.$user->firstName.' '.$user->lastName}}</option>
                        @endforeach
                      
                    </select>
                    <a id="changedBtn" href="/AdminBoitemessage"></a>
                </form >
            </div>
            <div class="sectionMessage">
                <div class="contentMessage">
                    <div class="itmmessage">
                      @if(!$UserSelected)
                      @else
                      @foreach ($allmessage as $onemessage)

                      @if($onemessage->messageAdmin)
                        <div class="Adminitmmessaage">
                            <div class="profilAdmin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                                    <path d="M17.3235 21.2316C22.7033 21.2316 27.068 16.4766 27.068 10.6158C27.068 4.755 22.7033 0 17.3235 0C11.9438 0 7.57904 4.755 7.57904 10.6158C7.57904 16.4766 11.9438 21.2316 17.3235 21.2316ZM25.9853 23.5907H22.2567C20.7544 24.3426 19.083 24.7702 17.3235 24.7702C15.5641 24.7702 13.8994 24.3426 12.3904 23.5907H8.66177C3.87749 23.5907 0 27.8149 0 33.027V34.2065C0 36.1601 1.45491 37.7451 3.24816 37.7451H31.3989C33.1922 37.7451 34.6471 36.1601 34.6471 34.2065V33.027C34.6471 27.8149 30.7696 23.5907 25.9853 23.5907Z" fill="white" fill-opacity="0.8"/>
                                </svg>
                            </div>
                            <div class="messageAdmin">
                                {{$onemessage->messageAdmin}}
                                <div class="datamessageAdmin">{{$onemessage->dateMessageAdmin}}</div>
                            </div>

                        </div>
                        @elseif ($onemessage->messageUser)
                        <div class="Useritmmessaage">
                            <div class="profilUser">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                                    <path d="M17.3235 21.2316C22.7033 21.2316 27.068 16.4766 27.068 10.6158C27.068 4.755 22.7033 0 17.3235 0C11.9438 0 7.57904 4.755 7.57904 10.6158C7.57904 16.4766 11.9438 21.2316 17.3235 21.2316ZM25.9853 23.5907H22.2567C20.7544 24.3426 19.083 24.7702 17.3235 24.7702C15.5641 24.7702 13.8994 24.3426 12.3904 23.5907H8.66177C3.87749 23.5907 0 27.8149 0 33.027V34.2065C0 36.1601 1.45491 37.7451 3.24816 37.7451H31.3989C33.1922 37.7451 34.6471 36.1601 34.6471 34.2065V33.027C34.6471 27.8149 30.7696 23.5907 25.9853 23.5907Z" fill="white" fill-opacity="0.8"/>
                                </svg>
                        </div>
                        <div class="messageUser">
                           {{$onemessage->messageUser}}
                            <div class="datamessageUser">{{$onemessage->dateMessageUser}}</div>
                        </div>

                            </div>

                      @endif
                        
                      @endforeach
                      @endif
                    </div>
                    <div class="itmmessage">
                         {{-- <div class="Useritmmessaage">
                            <div class="profilUser">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                                    <path d="M17.3235 21.2316C22.7033 21.2316 27.068 16.4766 27.068 10.6158C27.068 4.755 22.7033 0 17.3235 0C11.9438 0 7.57904 4.755 7.57904 10.6158C7.57904 16.4766 11.9438 21.2316 17.3235 21.2316ZM25.9853 23.5907H22.2567C20.7544 24.3426 19.083 24.7702 17.3235 24.7702C15.5641 24.7702 13.8994 24.3426 12.3904 23.5907H8.66177C3.87749 23.5907 0 27.8149 0 33.027V34.2065C0 36.1601 1.45491 37.7451 3.24816 37.7451H31.3989C33.1922 37.7451 34.6471 36.1601 34.6471 34.2065V33.027C34.6471 27.8149 30.7696 23.5907 25.9853 23.5907Z" fill="white" fill-opacity="0.8"/>
                                </svg>
                        </div>
                        <div class="messageUser">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptatibus recusandae
                            sapiente quas repudiandae? Alias, quidem aut? Illum dolores corrupti nam sit commodi cupiditate.
                             Distinctio numquam omnis tempore provident repellat?
                            <div class="datamessageUser">04/8/2024</div>
                        </div>

                            </div> --}}
                    </div>

                    <div class="itmmessage">
                        {{-- <div class="Adminitmmessaage">
                                <div class="profilAdmin">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                                        <path d="M17.3235 21.2316C22.7033 21.2316 27.068 16.4766 27.068 10.6158C27.068 4.755 22.7033 0 17.3235 0C11.9438 0 7.57904 4.755 7.57904 10.6158C7.57904 16.4766 11.9438 21.2316 17.3235 21.2316ZM25.9853 23.5907H22.2567C20.7544 24.3426 19.083 24.7702 17.3235 24.7702C15.5641 24.7702 13.8994 24.3426 12.3904 23.5907H8.66177C3.87749 23.5907 0 27.8149 0 33.027V34.2065C0 36.1601 1.45491 37.7451 3.24816 37.7451H31.3989C33.1922 37.7451 34.6471 36.1601 34.6471 34.2065V33.027C34.6471 27.8149 30.7696 23.5907 25.9853 23.5907Z" fill="white" fill-opacity="0.8"/>
                                        </svg>
                                </div>
                                <div class="messageAdmin">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptatibus recusandae
                                    sapiente quas repudiandae? Alias, quidem aut? Illum dolores corrupti nam sit commodi cupiditate.
                                        Distinctio numquam omnis tempore provident repellat?
                                    <div class="datamessageAdmin">04/8/2024</div>
                                </div>

                        </div> --}}
                   </div>
                   <div class="itmmessage">
                            {{-- <div class="Useritmmessaage">
                                    <div class="profilUser">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                                            <path d="M17.3235 21.2316C22.7033 21.2316 27.068 16.4766 27.068 10.6158C27.068 4.755 22.7033 0 17.3235 0C11.9438 0 7.57904 4.755 7.57904 10.6158C7.57904 16.4766 11.9438 21.2316 17.3235 21.2316ZM25.9853 23.5907H22.2567C20.7544 24.3426 19.083 24.7702 17.3235 24.7702C15.5641 24.7702 13.8994 24.3426 12.3904 23.5907H8.66177C3.87749 23.5907 0 27.8149 0 33.027V34.2065C0 36.1601 1.45491 37.7451 3.24816 37.7451H31.3989C33.1922 37.7451 34.6471 36.1601 34.6471 34.2065V33.027C34.6471 27.8149 30.7696 23.5907 25.9853 23.5907Z" fill="white" fill-opacity="0.8"/>
                                            </svg>
                                    </div>
                                    <div class="messageUser">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptatibus recusandae
                                        sapiente quas repudiandae? Alias, quidem aut? Illum dolores corrupti nam sit commodi cupiditate.
                                            Distinctio numquam omnis tempore provident repellat?
                                        <div class="datamessageUser">04/8/2024</div>
                                    </div>

                            </div> --}}
                </div>

                    <div class="itmmessage">
                        {{-- <div class="Adminitmmessaage">
                                <div class="profilAdmin">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="38" viewBox="0 0 35 38" fill="none">
                                        <path d="M17.3235 21.2316C22.7033 21.2316 27.068 16.4766 27.068 10.6158C27.068 4.755 22.7033 0 17.3235 0C11.9438 0 7.57904 4.755 7.57904 10.6158C7.57904 16.4766 11.9438 21.2316 17.3235 21.2316ZM25.9853 23.5907H22.2567C20.7544 24.3426 19.083 24.7702 17.3235 24.7702C15.5641 24.7702 13.8994 24.3426 12.3904 23.5907H8.66177C3.87749 23.5907 0 27.8149 0 33.027V34.2065C0 36.1601 1.45491 37.7451 3.24816 37.7451H31.3989C33.1922 37.7451 34.6471 36.1601 34.6471 34.2065V33.027C34.6471 27.8149 30.7696 23.5907 25.9853 23.5907Z" fill="white" fill-opacity="0.8"/>
                                        </svg>
                                </div>
                                <div class="messageAdmin">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptatibus recusandae
                                    sapiente quas repudiandae? Alias, quidem aut? Illum dolores corrupti nam sit commodi cupiditate.
                                        Distinctio numquam omnis tempore provident repellat?
                                    <div class="datamessageAdmin">04/8/2024</div>
                                </div>

                        </div> --}}
                 </div>
            </div>
            <div class="newMessage">
                    <div class="profilAdmin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <g clip-path="url(#clip0_194_632)">
                              <path d="M17.5 19.6875C22.9346 19.6875 27.3438 15.2783 27.3438 9.84375C27.3438 4.40918 22.9346 0 17.5 0C12.0654 0 7.65625 4.40918 7.65625 9.84375C7.65625 15.2783 12.0654 19.6875 17.5 19.6875ZM26.25 21.875H22.4834C20.9658 22.5723 19.2773 22.9688 17.5 22.9688C15.7227 22.9688 14.041 22.5723 12.5166 21.875H8.75C3.91699 21.875 0 25.792 0 30.625V31.7188C0 33.5303 1.46973 35 3.28125 35H31.7188C33.5303 35 35 33.5303 35 31.7188V30.625C35 25.792 31.083 21.875 26.25 21.875Z" fill="white" fill-opacity="0.7"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_194_632">
                                <rect width="35" height="35" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                    </div>
                    <div class="barmessage">
                      
                      
                      
                      @if (!$UserSelected)
                      @else
                        <form action="/sendMessageAdmin/{{$onemessage->idUser}}" method="post">
                            @csrf
                            <input type="text" name="messageAdmin" id="idAdmin" placeholder="send message here">
                            <button type="submit" hidden id="bntsendmessage"></button>
                        </form>
                        @endif
                    </div>
                    <div class="btnsend">
                        <label for="bntsendmessage">
                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                <g clip-path="url(#clip0_194_609)">
                                  <path d="M13.7455 32.2918L31.4372 9.88706L3.01099 12.5176L7.17454 20.2135L24.8458 13.4652L9.55999 24.6078L13.7455 32.2918Z" fill="#030637"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_194_609">
                                    <rect width="30" height="30" fill="white" transform="translate(0 14.3127) rotate(-28.4955)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </label>
                    </div>
                </div>
            </div>
            {{-- <div class="lestmessage">
                <div class="titleLastmessageUser">
                    User Last Message
                </div>
                <div class="messageItme">
                    <div class="profilUser">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <g clip-path="url(#clip0_194_632)">
                          <path d="M17.5 19.6875C22.9346 19.6875 27.3438 15.2783 27.3438 9.84375C27.3438 4.40918 22.9346 0 17.5 0C12.0654 0 7.65625 4.40918 7.65625 9.84375C7.65625 15.2783 12.0654 19.6875 17.5 19.6875ZM26.25 21.875H22.4834C20.9658 22.5723 19.2773 22.9688 17.5 22.9688C15.7227 22.9688 14.041 22.5723 12.5166 21.875H8.75C3.91699 21.875 0 25.792 0 30.625V31.7188C0 33.5303 1.46973 35 3.28125 35H31.7188C33.5303 35 35 33.5303 35 31.7188V30.625C35 25.792 31.083 21.875 26.25 21.875Z" fill="white" fill-opacity="0.7"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_194_632">
                            <rect width="35" height="35" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="messageUser">
                        <div class="nameUser">@Ayman_benchalh</div>
                        heloo i have some problem in my account can you fix plez ,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!

                    </div>
                    <div class="dateMessage">04/8/2024
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_308_10)">
                                  <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="white"/>
                                  <path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="white"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_308_10">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </span>

                    </div>

                </div>
                <div class="messageItme">
                    <div class="profilUser">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <g clip-path="url(#clip0_194_632)">
                          <path d="M17.5 19.6875C22.9346 19.6875 27.3438 15.2783 27.3438 9.84375C27.3438 4.40918 22.9346 0 17.5 0C12.0654 0 7.65625 4.40918 7.65625 9.84375C7.65625 15.2783 12.0654 19.6875 17.5 19.6875ZM26.25 21.875H22.4834C20.9658 22.5723 19.2773 22.9688 17.5 22.9688C15.7227 22.9688 14.041 22.5723 12.5166 21.875H8.75C3.91699 21.875 0 25.792 0 30.625V31.7188C0 33.5303 1.46973 35 3.28125 35H31.7188C33.5303 35 35 33.5303 35 31.7188V30.625C35 25.792 31.083 21.875 26.25 21.875Z" fill="white" fill-opacity="0.7"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_194_632">
                            <rect width="35" height="35" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="messageUser">
                        <div class="nameUser">@Ayman_benchalh</div>
                        heloo i have some problem in my account can you fix plez ,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!

                    </div>
                    <div class="dateMessage">04/8/2024
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_308_10)">
                                  <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="white"/>
                                  <path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="white"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_308_10">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </span>

                    </div>

                </div>
                <div class="messageItme">
                    <div class="profilUser">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <g clip-path="url(#clip0_194_632)">
                          <path d="M17.5 19.6875C22.9346 19.6875 27.3438 15.2783 27.3438 9.84375C27.3438 4.40918 22.9346 0 17.5 0C12.0654 0 7.65625 4.40918 7.65625 9.84375C7.65625 15.2783 12.0654 19.6875 17.5 19.6875ZM26.25 21.875H22.4834C20.9658 22.5723 19.2773 22.9688 17.5 22.9688C15.7227 22.9688 14.041 22.5723 12.5166 21.875H8.75C3.91699 21.875 0 25.792 0 30.625V31.7188C0 33.5303 1.46973 35 3.28125 35H31.7188C33.5303 35 35 33.5303 35 31.7188V30.625C35 25.792 31.083 21.875 26.25 21.875Z" fill="white" fill-opacity="0.7"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_194_632">
                            <rect width="35" height="35" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="messageUser">
                        <div class="nameUser">@Ayman_benchalh</div>
                        heloo i have some problem in my account can you fix plez ,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!

                    </div>
                    <div class="dateMessage">04/8/2024
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_308_10)">
                                  <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="white"/>
                                  <path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="white"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_308_10">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </span>

                    </div>

                </div>
                <div class="messageItme">
                    <div class="profilUser">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <g clip-path="url(#clip0_194_632)">
                          <path d="M17.5 19.6875C22.9346 19.6875 27.3438 15.2783 27.3438 9.84375C27.3438 4.40918 22.9346 0 17.5 0C12.0654 0 7.65625 4.40918 7.65625 9.84375C7.65625 15.2783 12.0654 19.6875 17.5 19.6875ZM26.25 21.875H22.4834C20.9658 22.5723 19.2773 22.9688 17.5 22.9688C15.7227 22.9688 14.041 22.5723 12.5166 21.875H8.75C3.91699 21.875 0 25.792 0 30.625V31.7188C0 33.5303 1.46973 35 3.28125 35H31.7188C33.5303 35 35 33.5303 35 31.7188V30.625C35 25.792 31.083 21.875 26.25 21.875Z" fill="white" fill-opacity="0.7"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_194_632">
                            <rect width="35" height="35" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="messageUser">
                        <div class="nameUser">@Ayman_benchalh</div>
                        heloo i have some problem in my account can you fix plez ,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Expedita corrupti nostrum officiis iusto harum sint corporis impedit,
                          adipisci ipsa minus!

                    </div>
                    <div class="dateMessage">04/8/2024
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_308_10)">
                                  <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20Z" fill="white"/>
                                  <path d="M12.5 7H11V13L16.25 16.15L17 14.92L12.5 12.25V7Z" fill="white"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_308_10">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                              </svg>
                        </span>

                    </div>

                </div>
            </div> --}}

        </div>






    </div>
  </div>
</div>

<script>
  const selectClient=document.getElementById('selectClient')

  const javascriptfn=()=>{
    const changedBtn=document.getElementById('changedBtn')
    const url="AdminBoitemessage";
    const selectedClientId = selectClient.value;
    if (selectedClientId) {
      
      changedBtn.href = `/${url}/${selectedClientId}`;
    } else {
      
      changedBtn.href = `/${url}`;
    }
    
    return changedBtn.click();
  }
</script>
@endsection

