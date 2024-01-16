@extends("template.master")

@section("myTitleBlock")
    test
@endsection

@section("myHeaderBlock")
    <h1>This is my Header Block of Article page</h1>
@endsection

@section("myNavBlock")
    test
@endsection

@section("myContentBlock")
    <h1 style="color: #0084ff;">This is the Content block of my Article page</h1>
    <h1>ID: {{ $id }}</h1>
    <h1>Name: {{ $name }}</h1>
@endsection

@section("myFooterBlock")
    <!-- test -->
@endsection