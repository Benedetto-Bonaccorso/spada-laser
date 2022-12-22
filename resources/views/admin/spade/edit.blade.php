@extends("layouts.app")

@section("content")
    <form action="{{route('sabers.update', $saber->id)}}" method="post">
        @csrf
        @method("put")
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{$saber->name}}">
        <label for="image">image</label>
        <input type="text" name="image" id="image" value="{{$saber->image}}">
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{$saber->description}}">
        <label for="price">price</label>
        <input type="text" name="price" id="price" value="{{$saber->price}}">

        <button type="submit">send</button>
    </form>
@endsection