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
                Error 
            </h2>
            <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
                {{ $exception->getMessage() }}
            </div>
        </div>
    </div>
@endsection