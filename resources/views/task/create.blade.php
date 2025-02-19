@extends('layouts.main')
@section('content')
    <!-- Comment Form -->
    <form action="{{ route('task.store') }}" method="post">
        @csrf

        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="mx-auto max-w-2xl">
                <div class="text-center">
                    <h2 class="text-xl text-gray-800 font-bold sm:text-3xl white:text-white">
                        Create Task
                    </h2>
                </div>

                <!-- Card -->
                <div
                    class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 white:bg-neutral-900 dark:border-neutral-700">
                    <form>
                        <div class="mb-4 sm:mb-8">
                            <label for="hs-feedback-post-comment-name-1"
                                class="block mb-2 text-sm font-medium white:text-white">Title</label>
                            <input value="{{ old('title') }}" name="title" type="text"
                                id="hs-feedback-post-comment-name-1"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none white:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-900 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="title">
                            @error('title')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror

                        </div>

                        <div>
                            <label for="hs-feedback-post-comment-textarea-1"
                                class="block mb-2 text-sm font-medium white:text-white">Description</label>
                            <div class="mt-1">
                                <textarea name="description" id="hs-feedback-post-comment-textarea-1" name="hs-feedback-post-comment-textarea-1"
                                    rows="3"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none white:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-900 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Description...">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mx-auto max-w-xs" style="margin-left: 0px; margin-top: 40px;">
                            <label for="example2" class="mb-1 block text-sm font-medium text-gray-700">Category</label>
                            <select name="category_id" id="example2"
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50">

                                @foreach ($categories as $category)
                                    <option {{ old('category_id') == $category->id ? ' selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="mt-6 grid" style="margin-top: 30px">
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Create</button>
                        </div>
                    </form>
                </div>
                <!-- End Card -->
            </div>
        </div>


    </form>
@endsection
