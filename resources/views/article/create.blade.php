@extends('template.master')
@section('myContentBlock')
    <form action="{{ route('article.store') }}" method="post" style="width: 400px; margin: 10px auto;">

        @csrf
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" placeholder="Enter title: " value="{{old('title')}}"><br><br>
        @error('title')
        <p style="color: red">{{ $message }}</p>
        @enderror
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="Enter title: " value="{{old('email')}}"><br><br>
        @error('email')
        <p style="color: red">{{ $message }}</p>
        @enderror
        <label for="description">Description: </label><br>
        <textarea name="description" id="description"
                  placeholder="Enter description: " cols="30" rows="10">{{old('description')}}</textarea><br><br>
        @error('description')
        <p style="color: red">{{ $message }}</p>
        @enderror
        <input type="submit" value="Submit" name="buttonSubmit">
        <input type="reset" value="Reset Form" name="buttonReset">
        <a href="/article">Go back</a>
    </form>
@endsection
