<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
</head>
<body>
    <h3>Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible</h3>
    <form action="{{route('commandCollection',['idUser'=>$dataOneUser->idUser , 'idProduct'=>$dataOneprodt->idProduct])}}" method="POST">
        @csrf
        <input type="hidden" value="{{$idUser}}">
        <input type="hidden" value="{{$idProduct}}">
        <input type="hidden" value="{{}}">
        <button>Continue</button>
    </form>
</body>
</html>