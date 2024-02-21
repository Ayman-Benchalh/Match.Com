@extends('pagePrinc')
@section("title") Match.Com @endsection
@section('content')
<div class="container" style="color: #eeee">
  <h1>hello welcome to prodcut page id user is {{ $idUser }}</h1>
  @foreach ( $dataprodt as $collection )
    <div class="card" style="border: 2px solid black ;display: inline-block ;margin:10px;padding:15px"> 
      <h1> name {{ $collection->nom }}</h1>
      <p>  {{ $collection->sauvegarder }}</p>
      <p>  {{ $collection->desination1 }}</p>
      <p>  {{ $collection->desination2 }}</p>
      <p>  {{ $collection->desination3 }}</p>
      <p>  {{ $collection->desination4 }}</p>
      <p>  {{ $collection->desination5 }}</p>
      <p>  {{ $collection->desination6 }}</p>
      <p>prix :  {{ $collection->prix }} $</p>
      <button>add to card</button>
    </div>
  @endforeach
   
</div>  
@endsection