@extends('layouts.layout')

@section('topmenu_items')

<a href="{{ route('projects.index') }}">
    <button
    class="py-2 block text-green-500 border-green-500
        dark:text-green-200 dark:border-green-200
        focus:outline-none border-b-2 font-medium capitalize
        transition duration-500 ease-in-out">
        Index
    </button> 
</a>
<a href="{{ route('projects.create') }}">
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
                Project Admin
            </h2>
        </div>

        @if(session('status'))
            <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
                {{ session('status') }}
            </div>
        @endif

    <table>
        <tbody class="bg-white divide-y divide-gray-200">
        <tr>
            <th> Name </th>
            <th> Details </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
            @foreach($projects as $project)
                <tr>
                    <!-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $project->id }}
                    </td> -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $project->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="{{ route('projects.show', ['project' => $project -> id]) }}"> Details </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="{{ route('projects.edit', ['project' => $project -> id]) }}"> Edit </a>
                    </td>
                    @can('delete project')
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="{{ route('projects.delete', ['project' => $project -> id]) }}"> Delete </a>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
