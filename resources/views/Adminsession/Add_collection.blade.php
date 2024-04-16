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
                <li id="focuseBnt"><a href="{{ route('Add_collection') }}">Add collection</a></li>
                <li><a href="{{ route('User_dashbord') }}">View all user</a></li>
                <li><a href="{{ route('Delivery_dashbord') }}">Delivery commed</a></li>
                <li><a href="{{ route('Configration') }}">Setting</a></li>
            </ul>
        </div>
        <div class="btnlogout">
            <a href="#">LOG OUT</a>
        </div>
    </div>
    <div class="part2">
        <div class="titleparty2">Add collection</div>
        <div class="AddColl">
        <div class="titColl">
            <div class="testTilt"> new collection</div>
            <div class="btnadd">
                <label for="btnSubmt">
                        add
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M20.875 9.15625H13.8438V2.125C13.8438 1.26221 13.144 0.5625 12.2812 0.5625H10.7188C9.85596 0.5625 9.15625 1.26221 9.15625 2.125V9.15625H2.125C1.26221 9.15625 0.5625 9.85596 0.5625 10.7188V12.2812C0.5625 13.144 1.26221 13.8438 2.125 13.8438H9.15625V20.875C9.15625 21.7378 9.85596 22.4375 10.7188 22.4375H12.2812C13.144 22.4375 13.8438 21.7378 13.8438 20.875V13.8438H20.875C21.7378 13.8438 22.4375 13.144 22.4375 12.2812V10.7188C22.4375 9.85596 21.7378 9.15625 20.875 9.15625Z" fill="#D9D9D9" fill-opacity="0.8"/>
                        </svg>



                </label>
            </div>
           </div>
           <div class="insertFrom">
            <form action="{{route('store_product')}}" method="post">
                @csrf
                <input type="text" name="nom" placeholder="name">
                <input type="text" name="sauvegarder" placeholder="sauvegarder">
                <input type="number" name="prix" placeholder="prix">
                <input type="text" name="desination1" placeholder="desingantion 1">
                <input type="text" name="desination2" placeholder="desingantion 2">
                <input type="text" name="desination3" placeholder="desingantion 3">
                <input type="text" name="desination4" placeholder="desingantion 4">
                <input type="text" name="desination5" placeholder="desingantion 5">
                <input type="text" name="desination6" placeholder="desingantion 6">

                <button type="submit"  hidden id="btnSubmt"></button>
            </form>
           </div>

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
                <div class="titleColl">1 month</div>
                <div class="partycoll1">
                    <div class="PriColl">12 &dollar;</div>
                    <div class="qultyColl">save 10%</div>
                </div>

            </div>
            <div class="collec">
                <div class="titleColl">1 month</div>
                <div class="partycoll1">
                    <div class="PriColl">26 &dollar;</div>
                    <div class="qultyColl">save 10%</div>
                </div>

            </div>

        </div>
    </div>
  </div>
</div>
@endsection
