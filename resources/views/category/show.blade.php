@extends('layouts.main')
@section('content')


    <H1 style="margin-left: 800px; font-size: 20px;">{{ $category->title }} / Tasks</H1>
    <!-- Table Section -->

    <div style="margin-left: 260px; margin-top: -25px;" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">
                                    {{ $category->title }}
                                </h2>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">


                                    <a href="{{ route('task.create') }}" type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Create Task
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        @if ($category->tasks->isNotEmpty())
                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                                href="#">
                                                Title
                                            </a>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                                href="#">
                                                Description
                                            </a>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                                href="#">
                                                Category
                                            </a>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                                                href="#">
                                                Created
                                            </a>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-end"></th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($category->tasks as $task)
                                        <tr class="bg-white hover:bg-gray-50">
                                            <td class="size-px whitespace-nowrap">
                                                <a class="block relative z-10" href="{{ route('task.show', $task->id) }}">
                                                    <div class="px-6 py-2">
                                                        <div
                                                            class="block text-sm text-blue-600 decoration-2 hover:underline">
                                                            {{ $task->title }}</div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="h-px w-72 min-w-72">
                                                <a class="block relative z-10" href="{{ route('task.show', $task->id) }}">
                                                    <div class="px-6 py-2">
                                                        <p class="text-sm text-gray-500">{{ $task->description }}</p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <a class="block relative z-10" href="{{ route('task.show', $task->id) }}">
                                                    <div class="px-6 py-2">
                                                        <span
                                                            class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800">
                                                            {{ $task->category ? $task->category->title : 'Без категории' }}
                                                        </span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <a class="block relative z-10" href="{{ route('task.show', $task->id) }}">
                                                    <div class="px-6 py-2 flex gap-x-1">
                                                        <p style="font-size: 15px">{{ $task->created_at }}</p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <form action="{{ route('task.delete', $task->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete" style="margin-left: -15px">
                                                </form>
                                            </td>

                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>

                            </table>
                            <!-- End Table -->

                            <!-- Footer -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                                <div>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-semibold text-gray-800">{{ $category->tasks->count() }}</span>
                                        results
                                    </p>
                                </div>

                                                <a href="{{ route('task.create') }}" type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                    Create Task
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Footer -->
                        @else
                            <h1 style="margin-left: 495px; font-size: 30px">No tasks</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>


    <!-- End Table Section -->
@endsection
