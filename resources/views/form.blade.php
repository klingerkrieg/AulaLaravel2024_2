
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .pagination li{
            display:inline-block;
        }
    </style>

</head>
<body>

<form action="{{route("save")}}" method="post">
    @csrf
    <label for="title">Título
        <input name="title" id="title" type="text" value="" >
    </label> <br/>
    <label for="publisher">Editora
        <input name="publisher" id="publisher" type="text" value="">
    </label> <br/>
    <label for="year">Ano
        <input name="year" id="year" type="text" value="">
    </label> <br/>
    <label for="date_of_something">Data
        <input name="date_of_something" id="date_of_something" type="text" value="">
    </label> <br/>
    <button type="submit">Salvar</button>
    <a href="{{route('new')}}">Novo</a>
</form>

<ul>
@foreach ($list as $item)
    <li>
        {{$item->title}}
        {{$item->year}}
    </li>
@endforeach
</ul>
{{$list->links()}}




</body>
</html>
