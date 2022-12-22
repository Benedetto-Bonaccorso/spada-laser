@extends("layouts.app")

@section("content")
    <form action="{{route('sabers.store')}}" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <label for="image">image</label>
        <input type="text" name="image" id="image">
        <label for="description">description</label>
        <input type="text" name="description" id="description">
        <label for="price">price</label>
        <input type="text" name="price" id="price">

        <button type="submit">send</button>
    </form>
@endsection