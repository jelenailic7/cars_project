<<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
<h1>Cars</h1>
    <ul>
        @foreach($cars as $car)
        <li><a href="{{route('single-car',['id'=>$car->id])}}">{{$car->title}}</a></li>
        @endforeach
   </ul>

</body>
</html>
