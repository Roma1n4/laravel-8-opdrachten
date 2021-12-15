@extends('layouts.layout')


@section('topmenu_items')
<a href="{{ route('tasks.index') }}">
    <button
    class="py-2 block text-green-500 border-green-500
        dark:text-green-200 dark:border-green-200
        focus:outline-none border-b-2 font-medium capitalize
        transition duration-500 ease-in-out">
        Index
    </button> 
</a>
<a href="{{ route('tasks.create') }}">
    <button
    class="ml-6 py-2 block border-b-2 border-transparent
        focus:outline-none font-medium capitalize text-center
        focus:text-green-500 focus:border-green-500
        dark-focus:text-green-200 dark-focus:border-green-200
        transition duration-500 ease-in-out">
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
       
        @if(session('status'))
            <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8"
                 style="...">
                 {{ session('status') }}
            </div>
        @endif

<table>
    <thead class="bg-gray divide-y divide-gray-200">
        <tr>
            <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                Task id
            </th>
            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Task name
            </th>
            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Begindate
            </th>
            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Enddate
            </th>
            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                User name
            </th>
            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Project name
            </th>
            <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                activity name
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($tasks as $task)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $task->id }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $task->task }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $task->begindate }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $task->enddate }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $task->user->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $task->project->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $task->activity->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <a href="{{ route('tasks.show', ['task' => $task -> id]) }}"> Details </a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <a href="{{ route('tasks.edit', ['task' => $task -> id]) }}"> Edit </a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <a href="{{ route('tasks.delete', ['task' => $task -> id]) }}"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection