@extends('layouts.layout')

@section('topmenu_items')

<a href="{{ route('tasks.index') }}">
    <button class="py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
    Index
    </button>
</a>

<a href="{{ route('tasks.create') }}">
    <button class="py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
    Create
    </button>
</a>

@endsection

@section('content')

<div class="container mx-1">
        <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4xl font-semibold text-gray-600 dark:text-gray-400">
                Task Admin
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
<form id="from" lass="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4" action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="task">
                    Task
                </label>
                <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                focus:outline-none focus:shadow-outline @error('task') border-red-500 @enderror" 
                name="task" id="task" value="{{ old('task') }}" type="text" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="begindate">
                    Begindate
                </label>
                <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                focus:outline-none focus:shadow-outline @error('begindate') border-red-500 @enderror" 
                name="begindate" id="begindate" value="{{ old('begindate') }}" type="date" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="enddate">
                    Enddate
                </label>
                <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                focus:outline-none focus:shadow-outline @error('enddate') border-red-500 @enderror" 
                name="enddate" id="enddate" value="{{ old('enddate') }}" type="date">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">
                    User
                </label>
                <select 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                    focus:outline-none focus:shadow-outline" 
                    name="user_id" id="user_id" value="{{ old('user_id') }}">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}"
                        @if( old('user_id') ==  $user->id)
                            selected
                                @endif
                        >{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="project_id">
                    Project
                </label>
                <select 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                    focus:outline-none focus:shadow-outline" 
                    name="project_id" id="project_id" value="{{ old('project_id') }}" required>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}"
                        @if( old('project_id') == $project->id)
                            selected
                                @endif
                        >{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="activity_id">
                    Activity
                </label>
                <select 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                    focus:outline-none focus:shadow-outline" 
                    name="activity_id" id="activity_id" value="{{ old('activity_id') }}" required>
                    @foreach($activities as $activity)
                        <option value="{{ $activity->id }}"
                        @if( old('activity_id') == $activity->id)
                            selected
                                @endif
                        >{{ $activity->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button id="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-8 rounded
                    focus:outline-none focus:shadow-outline" type="submit">Submit
                </button>
            </div>
        </form>
    </div>
@endsection