@extends('layouts.app')
@section('content')

<div class="bg-white mb-8 p-6 shadow rounded top-0">
    <p class="text-xl m-1">Dashboard</p>
    <p class="w-full h-0.5  bg-sky-600"></p>

</div>
<div class="flex flex-wrap justify-center ">
    <!-- Total Students Card -->
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 bg-white">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Total Students</div>
            <p class="text-gray-700 text-base">500</p>
        </div>
    </div>

    <!-- Upcoming Exams Card -->
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 bg-white">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Upcoming Exams</div>
            <p class="text-gray-700 text-base">3</p>
        </div>
    </div>

    <!-- Recent Registrations Card -->
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 bg-white">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Recent Registrations</div>
            <p class="text-gray-700 text-base">20</p>
        </div>
    </div>
</div>

@endsection