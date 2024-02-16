@extends('layouts.app')
@section('content')

<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Add New Exam</h2>
    <form action="{{route('exam.store')}}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="semester" class="block text-sm font-medium text-gray-700">Semester:</label>
            <input type="text" id="semester" name="semester" required
                class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
            <input type="date" id="date" name="date" required
                class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
            <label for="time" class="block text-sm font-medium text-gray-700">Time:</label>
            <input type="time" id="time" name="time" required
                class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
            <label for="subjects" class="block text-sm font-medium text-gray-700">Subjects:</label>
            <input type="text" id="subjects" name="subjects" required
                class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <button type="submit" class="inline-block bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Add
            Exam</button>
    </form>
</div>


@endsection