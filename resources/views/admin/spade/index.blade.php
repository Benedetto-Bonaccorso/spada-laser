<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <a href="{{route('sabers.create')}}" class="btn">crea elementi</a>
    </div>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">immagine</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">prezzo</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($spade as $spada)
                    <tr class="">
                        <td scope="row">{{$spada->id}}</td>
                        <td>{{$spada->name}}</td>
                        <td>{{$spada->image}}</td>
                        <td>{{$spada->description}}</td>
                        <td>{{$spada->price}}</td>
                        <td>View <a href="{{route('sabers.edit', $spada->id)}}">Edit</a> Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    

</body>
</html>