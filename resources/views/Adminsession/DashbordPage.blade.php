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
        <div class="titleParty">{{$Admin->firstName." ".$Admin->lastName}}</div>
        <div class="list">
            <ul>
                <li id="focuseBnt"><a href="{{ route('indexpage') }}">Home</a></li>
                <li><a href="{{ route('Add_collection') }}">Add collection</a></li>
                <li><a href="{{ route('User_dashbord') }}">View all user</a></li>
                <li><a href="{{ route('Delivery_dashbord') }}">Delivery commed</a></li>
                <li><a href="{{ route('Configration') }}">Setting</a></li>
            </ul>
        </div>
        <div class="btnlogout">
            <a href="{{url('/')}}">LOG OUT</a>
        </div>
    </div>
    <div class="part2">
        <div class="titleparty2">Home Dashbord</div>
        <div class="groupCart">
            <div class="cart">
                <div class="numberandicon">
                    {{$users}}
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                            <path d="M40 45C52.4219 45 62.5 34.9219 62.5 22.5C62.5 10.0781 52.4219 0 40 0C27.5781 0 17.5 10.0781 17.5 22.5C17.5 34.9219 27.5781 45 40 45ZM60 50H51.3906C47.9219 51.5938 44.0625 52.5 40 52.5C35.9375 52.5 32.0938 51.5938 28.6094 50H20C8.95312 50 0 58.9531 0 70V72.5C0 76.6406 3.35938 80 7.5 80H72.5C76.6406 80 80 76.6406 80 72.5V70C80 58.9531 71.0469 50 60 50Z" fill="white" fill-opacity="0.8"/>
                          </svg>
                    </span>
                </div>
                <div class="titelcart">Number Users</div>
            </div>
            <div class="cart">
                <div class="numberandicon">
                    {{$commands}}
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                            <g clip-path="url(#clip0_188_46)">
                              <path d="M28 72C23.6 72 20.04 75.6 20.04 80C20.04 84.4 23.6 88 28 88C32.4 88 36 84.4 36 80C36 75.6 32.4 72 28 72ZM4 8V16H12L26.4 46.36L21 56.16C20.36 57.28 20 58.6 20 60C20 64.4 23.6 68 28 68H76V60H29.68C29.12 60 28.68 59.56 28.68 59L28.8 58.52L32.4 52H62.2C65.2 52 67.84 50.36 69.2 47.88L83.52 21.92C83.84 21.36 84 20.68 84 20C84 17.8 82.2 16 80 16H20.84L17.08 8H4ZM68 72C63.6 72 60.04 75.6 60.04 80C60.04 84.4 63.6 88 68 88C72.4 88 76 84.4 76 80C76 75.6 72.4 72 68 72Z" fill="white" fill-opacity="0.8"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_188_46">
                                <rect width="96" height="96" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                    </span>
                </div>
                <div class="titelcart">Number Commands</div>
            </div>
            <div class="cart">
                <div class="numberandicon">
                    {{$collections}}
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                            <g clip-path="url(#clip0_188_50)">
                              <path d="M76 12H20C15.6 12 12 15.6 12 20V76C12 80.4 15.6 84 20 84H76C80.4 84 84 80.4 84 76V20C84 15.6 80.4 12 76 12ZM56 68H28V60H56V68ZM68 52H28V44H68V52ZM68 36H28V28H68V36Z" fill="white" fill-opacity="0.8"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_188_50">
                                <rect width="96" height="96" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                    </span>
                </div>
                <div class="titelcart">Number Collections</div>
            </div>

        </div>
        <div class="totelpay">
            <div class="titlepay">Totel payment</div>
            <div class="prixPay">150 &dollar;</div>
        </div>
        <div class="collectionExm">
            <div class="collec">
                <div class="titleColl">1 month</div>
                <div class="partycoll1">
                    <div class="PriColl">6 &dollar;</div>
                    <div class="qultyColl">save 10%</div>
                </div>

            </div>
            <div class="collec">
                <div class="titleColl">2 month</div>
                <div class="partycoll1">
                    <div class="PriColl">12 &dollar;</div>
                    <div class="qultyColl">save 15%</div>
                </div>

            </div>
            <div class="collec">
                <div class="titleColl">3 month</div>
                <div class="partycoll1">
                    <div class="PriColl">19&dollar;</div>
                    <div class="qultyColl">save 15%</div>
                </div>

            </div>

        </div>
    </div>
  </div>
</div>
@endsection
