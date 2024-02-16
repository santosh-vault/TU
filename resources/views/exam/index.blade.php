@extends('layouts.app')
@section( 'content' )

<body>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold mb-4">Exam Details</h2>
            <a href="{{route('exam.create')}}"
                class="inline-block bg-sky-500 text-white py-2 mb-1 px-4 rounded-md hover:bg-sky-600">Add New
                Exam

            </a>
        </div>
        <p class="w-full h-0.5 bg-sky-600 mb-4"></p>



        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>

                <tr class="bg-gray-100">
                    <th class="px-4 py-2 border border-gray-300">Semester</th>
                    <th class="px-4 py-2 border border-gray-300">Date</th>
                    <th class="px-4 py-2 border border-gray-300">Time</th>
                    <th class="px-4 py-2 border border-gray-300">Subjects</th>
                    <th class="px-4 py-2 border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($exam as $exam)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border border-gray-300">{{ $exam->semester }}</td>
                    <td class="px-4 py-2 border border-gray-300">{{ $exam->date }}</td>
                    <td class="px-4 py-2 border border-gray-300">{{ $exam->time }}</td>
                    <td class="px-4 py-2 border border-gray-300">{{ $exam->subjects }}</td>

                    <td class="px-4 py-2 border border-gray-300">

                        <a href="{{ route('exam.edit', ['id' => $exam->id]) }}"
                            class="text-blue-500 hover:underline mr-2">Edit</a>

                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</body>

@endsection