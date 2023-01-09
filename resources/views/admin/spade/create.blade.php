@extends("layouts.app")

@section("content")
    <form action="{{route('sabers.store')}}" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" required>
        <label for="image">image</label>
        <input type="text" name="image" id="image" value="{{old('image')}}">
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{old('description')}}">
        <label for="price">price</label>
        <input type="text" name="price" id="price" value="{{old('price')}}">

        <button type="submit">send</button>
    </form>
@endsection