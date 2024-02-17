@extends('welcome')

@section('content')
    <section class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-lg" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-center text-blue-600">Create Your Account</h2>
            <p class="mt-2 text-sm text-center text-gray-600">Join us and simplify your payments!</p>
            <form class="mt-8 space-y-6" action="/register" method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" required pattern=".{5,}" title="Username must be at least 5 characters long" class="w-full px-4 py-2 mt-1 border rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="Your username">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-1 border rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="you@example.com">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required pattern=".{6,}" title="Password must be at least 6 characters long" class="w-full px-4 py-2 mt-1 border rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="••••••••">
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required pattern=".{6,}" title="Please enter the same Password as above" class="w-full px-4 py-2 mt-1 border rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="••••••••">
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required class="w-4 h-4 border-gray-300 rounded focus:ring-blue-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a></label>
                    </div>
                </div>
                <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Register</button>
            </form>
            <p class="mt-6 text-sm text-center text-gray-400">Already have an account? <a href="#" class="text-blue-600 hover:underline">Sign in</a></p>
        </div>
    </section>
@endsection