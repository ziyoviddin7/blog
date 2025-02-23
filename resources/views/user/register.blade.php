<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>

    <section class="bg-white dark:bg-gray-900">

        <div class="container flex items-center justify-center min-h-screen px-6 mx-auto">

            <form action="{{ route('user.register') }}" method="post" class="w-full max-w-md">
                @csrf

                <div class="flex justify-center mx-auto">
                    <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/logo.svg" alt="">
                </div>

                <div class="flex items-center justify-center mt-6">

                    <a href="#"
                        class="w-1/3 pb-4 font-medium text-center text-gray-800 capitalize border-b-2 border-blue-500 dark:border-blue-400 dark:text-white">
                        Register
                    </a>
                </div>
                <br>
                <ul>
                    @foreach ($errors->all() as $message)
                        <li style="color:azure">{{ $message }}</li>
                    @endforeach
                </ul>

                <div class="relative flex items-center mt-8">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 mx-3 {{ $errors->has('name') ? 'text-red-900 border-red-800' : 'text-gray-300 dark:text-gray-500"' }} fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>

                    <input name="name" value="{{ old('name') }}" type="text"
                        class="{{ $errors->has('name') ? 'block w-full py-3 text-gray-700 bg-red border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-red-600 focus:border-red-900 dark:focus:border-red-900 focus:ring-red-900 focus:outline-none focus:ring focus:ring-opacity-40' : 'block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40' }}"
                        placeholder="Username">
                </div>

                <div class="relative flex items-center mt-6">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 {{ $errors->has('name') ? 'text-red-900 border-red-800' : 'text-gray-300 dark:text-gray-500"' }}
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>

                    <input name="email" value="{{ old('email') }}" type="email"
                        class="{{ $errors->has('email') ? 'block w-full py-3 text-gray-700 bg-red border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-red-600 focus:border-red-900 dark:focus:border-red-900 focus:ring-red-900 focus:outline-none focus:ring focus:ring-opacity-40' : 'block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40' }} "
                        placeholder="Email address">
                </div>

                <div class="relative flex items-center mt-4">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 {{ $errors->has('name') ? 'text-red-900 border-red-800' : 'text-gray-300 dark:text-gray-500"' }}
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>

                    <input name="password" type="password"
                        class="{{ $errors->has('password') ? 'block w-full py-3 text-gray-700 bg-red border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-red-600 focus:border-red-900 dark:focus:border-red-900 focus:ring-red-900 focus:outline-none focus:ring focus:ring-opacity-40' : 'block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40' }} "
                        
                        placeholder="Password">
                </div>

                <div class="relative flex items-center mt-4">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 {{ $errors->has('name') ? 'text-red-900 border-red-800' : 'text-gray-300 dark:text-gray-500"' }}
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>

                    <input name="password_confirmation" type="password"
                        class="{{ $errors->has('password') ? 'block w-full py-3 text-gray-700 bg-red border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-red-600 focus:border-red-900 dark:focus:border-red-900 focus:ring-red-900 focus:outline-none focus:ring focus:ring-opacity-40' : 'block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40' }} "
                        
                        placeholder="Confirm Password">
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Sign Up
                    </button>

                    <div class="mt-6 text-center ">
                        <a href="{{ route('user.login') }}" class="text-sm text-blue-500 hover:underline dark:text-blue-400">
                            Already have an account?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
