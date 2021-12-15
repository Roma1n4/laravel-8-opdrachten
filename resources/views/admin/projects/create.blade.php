@extends('layouts.layout')

@section('topmenu_items')

<a href="{{ route('projects.index') }}">
    <button class="py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
    Index
    </button>
</a>

<a href="{{ route('projects.create') }}">
    <button class="py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
    Create
    </button>
</a>

@endsection

@section('content')

<div class="container mx-1">
        <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4xl font-semibold text-gray-600 dark:text-gray-400">
                Project Admin
            </h2>
        </div>

@if($errors->any())
    <div class="bg-red-200 text-red-200 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

        <form id="form" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4" action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name 
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tigh focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" name="name" id="name" value="{{ old('name') }}" type="text">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description 
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tigh focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" name="description" id="description" value="{{ old('description') }}" type="text">
            </div>

            <div class="flex item-center justifiy-between">
                <button id="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Submit
                </button>
            </div>
        </form>
    </div>
@endsection