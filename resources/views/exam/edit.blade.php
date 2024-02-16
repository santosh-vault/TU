@extends('layouts.app')
@section('content')

<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Edit Exam</h2>


    <form action="" method="POST" class="mt-5"> @csrf
        <input type="text" name="categoryname" placeholder="category Name"
            class="block w-full rounded border-gray-300 my-4" value="{{$exam->semester}}">
        @error('categoryname')
        <div class="text-red-500 -mt-4">{{$message}}</div>
        @enderror
        <input type="text" class="block w-full rounded border-gray-300 my-4" value="{{$exam->date}}">
        <input type="text" class="block w-full rounded border-gray-300 my-4" value="{{$exam->time}}">
        <input type="text" class="block w-full rounded border-gray-300 my-4" value="{{$exam->subjects}}">
        @error('priority')
        <div class="text-red-500 -mt-4">{{$message}}</div>
        @enderror

        <div class="flex justify-center my-5">
            <input type="submit" value="update" class="bg-blue-600 text-white px-5 py-1 rounded mx-2">
            <a href="" class="bg-red-600 text-white px-5 py-1 rounded mx-2">Exit</a>

        </div>

    </form>
</div>


@endsection