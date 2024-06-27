<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
  <h1> Duck.com </h1>
  <br>
  Name of employee <?php echo "$name job $days payment $nomina"; ?>
  <br>
  Name of employee {{$name}} job {{$days}} payment {{$nomina}}
  <br>
  @if($name=="Peru")
  <h1> Hello IRON MAN </h1>
  <br>
  <img src="{{asset('photos/peru.png')}}" weight = 100 height = 100>
  @endif
  @if($name=="Canada")
  <h1> Hello Lizzard </h1>
  <br>
  <img src="{{asset('photos/canada.png')}}" weight = 100 height = 100>
  @else
  <h1> No Photo</h1>
 @endif 
 <br>
 <a href="{{route('salirnomina')}}"> Close Nomina </a>
</body>
</html>