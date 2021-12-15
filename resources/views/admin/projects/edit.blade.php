@extends('layouts.layout')

@section('content')

@if($errors->any())
    <div class="bg-red-200 text-red-200 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<form id="form" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4"
    action="{{ route('projects.update', ['project' => $project -> id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tigh focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" name="name" id="name" value="{{old('name', $project -> name) }}" type="text">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Description
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tigh focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" name="description" id="description" value="{{old('description', $project -> description) }}" type="text">
    </div>

    <div class="flex items-center justify-between">
        <button id="submit" class="bg-green-500 hover:bg-green-700 text:white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Edit
        </button>
    </div>

@endsection