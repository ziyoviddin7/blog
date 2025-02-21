@extends('layouts.main')
@section('content')
    <!-- Comment Form -->
    <form action="{{ route('category.store') }}" method="post" style="margin-left: 230px; margin-top: -70px;">
        @csrf

        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="mx-auto max-w-2xl">
                <div class="text-center">
                    <h2 class="text-xl text-gray-800 font-bold sm:text-3xl white:text-white">
                        Create Category
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

{{-- <div class="container" style="margin-left: -100px; margin-top: -22px;">
    <div class="dropdown">
        <select id="createDropdown" style="color: white">
            <option value="" disabled selected>CREATE</option>
            <option value="task">Task</option>
            <option value="category">Category</option>
        </select>
    </div>
</div> --}}
