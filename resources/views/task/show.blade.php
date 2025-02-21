@extends('layouts.main')
@section('content')
    <!-- Comment Form -->
    <!-- Blog Article -->
    <div style="margin-left: 250px">

        <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
            <div class="max-w-2xl">
                <!-- Avatar Media -->
                <div class="flex justify-between items-center mb-6">
                    <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                        <div class="shrink-0">
                            <img class="size-12 rounded-full"
                                src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Avatar">
                        </div>

                        <div class="grow">
                            <div class="flex justify-between items-center gap-x-2">
                                <div>
                                    <!-- Tooltip -->
                                    <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                        <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                            <span class="font-semibold text-gray-800">
                                                Leyla Ludic
                                            </span>

                                            <!-- Dropdown Card -->

                                            <!-- End Dropdown Card -->
                                        </div>
                                    </div>
                                    <!-- End Tooltip -->

                                    <ul class="text-xs text-gray-500">
                                        <li
                                            class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full">
                                            {{ $task->created_at->format('d F H:i') }}
                                        </li>
                                    </ul>
                                </div>

                                <!-- Button Group -->
                                <div>
                                    @if ($task->category)
                                        <a href="{{ route('category.show', $task->category->id) }}" type="button"
                                            class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                            {{ $task->category ? $task->category->title : 'Без категории' }}
                                        </a>
                                    @else
                                        <a type="button"
                                            class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">

                                            {{ $task->category ? $task->category->title : 'Без категории' }}
                                        </a>
                                    @endif
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Avatar Media -->

                <!-- Content -->
                <div class="space-y-5 md:space-y-8">
                    <div class="space-y-3">
                        <h2 class="text-2xl font-bold md:text-3xl">{{ $task->title }}</h2>

                        <p class="text-lg text-gray-800">{{ $task->description }}</p>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
        <!-- End Blog Article -->

        <!-- Sticky Share Group -->
        <div class="sticky bottom-6 inset-x-0 text-center">
            <div class="inline-block bg-white shadow-md rounded-full py-3 px-4">
                <div class="flex items-center gap-x-1.5">
                    <!-- Button -->
                    <div class="hs-tooltip inline-block">
                        <button type="button"
                            class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                            </svg>
                            875
                            <span
                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                role="tooltip">
                                Like
                            </span>
                        </button>
                    </div>
                    <!-- Button -->

                    <div class="block h-3 border-e border-gray-300 mx-3"></div>

                    <!-- Button -->
                    <div class="hs-tooltip inline-block">
                        <button type="button"
                            class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800">
                            Edit
                            </span>
                        </button>
                    </div>
                    <!-- Button -->

                    <div class="block h-3 border-e border-gray-300 mx-3"></div>

                    <!-- Button -->
                    <div class="hs-dropdown relative inline-flex">
                        <form action="{{ route('task.delete', $task->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button id="hs-blog-article-share-dropdown" type="submit"
                                class="flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800"
                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                Delete
                            </button>
                        </form>

                    </div>
                    <!-- Button -->
                </div>
            </div>
        </div>

    </div>

    <!-- End Sticky Share Group -->
@endsection

{{-- <div class="container" style="margin-left: -100px; margin-top: -22px;">
    <div class="dropdown">
        <select id="createDropdown" style="color: white">
            <option value="" disabled selected>CREATE</option>
            <option value="task">Task</option>
            <option value="category">Category</option>
        </select>
    </div>
</div> --}}
