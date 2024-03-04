<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('Image/tv3.png') }}" type="image/x-icon">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('Css/All_Css_Container.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body  onLoad="noBack()" >

@yield('content')
<script type="text/javascript">
  
  function noBack()
  {
      window.history.forward();
  }
</script>
</body>
</html>