@extends('welcome')

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center text-white py-20" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');" data-aos="fade-down">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Simplify Your Payments</h1>
            <p class="text-xl mb-8">Integrate seamless payment solutions into your applications effortlessly.</p>
            <a href="#" class="bg-blue-500 px-8 py-4 rounded hover:bg-blue-600 transition duration-300">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20" data-aos="fade-up">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold">Powerful Features</h2>
                <p class="text-gray-700">Everything you need to process payments efficiently</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-5 shadow-lg rounded-lg bg-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/3144/3144456.png" alt="Fast Integration" class="mx-auto w-20 h-20">
                    <h3 class="text-xl font-bold my-4">Fast Integration</h3>
                    <p>Quickly integrate our API into your site or app, and start processing payments in no time.</p>
                </div>
                <!-- Feature 2 -->
                <div class="text-center p-5 shadow-lg rounded-lg bg-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/2913/2913460.png" alt="Secure Transactions" class="mx-auto w-20 h-20">
                    <h3 class="text-xl font-bold my-4">Secure Transactions</h3>
                    <p>Advanced security to ensure all transactions are safe and secure.</p>
                </div>
                <!-- Feature 3 -->
                <div class="text-center p-5 shadow-lg rounded-lg bg-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/3179/3179068.png" alt="24/7 Support" class="mx-auto w-20 h-20">
                    <h3 class="text-xl font-bold my-4">24/7 Support</h3>
                    <p>Our team is always here to help you with any issues or questions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="max-w-6xl mx-auto pt-10 pb-36 px-8">
        <div class="max-w-md mx-auto mb-14 text-center">
            <h1 class="text-4xl font-semibold mb-6 lg:text-5xl"><span class="text-indigo-600">Flexible</span> Plans</h1>
            <p class="text-xl text-gray-500 font-medium">Choose a plan that works best for you and your team.</p>
        </div>

        <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">

            <div class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
                <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                    <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"  alt="" class="rounded-3xl w-20 h-20" />
                    <div class="ml-5">
                        <span class="block text-2xl font-semibold">Basic</span>
                        <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold">10 </span></span><span class="text-gray-500 font-medium">/ user</span>
                    </div>
                </div>
                <ul class="mb-7 font-medium text-gray-500">
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">Up to 100 Transactions</span></span>
                    </li>
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">Flexible <span class="text-black">Email Support</span></span>
                    </li>
                    <li class="flex text-lg">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black"></span> Basic Reporting</span>
                    </li>
                </ul>
                <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl transition duration-300">
                    Choose Plan
                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                </a>
            </div>

            <div class="w-full flex-1 p-8 order-1 shadow-xl rounded-3xl bg-gray-900 text-gray-400 sm:w-96 lg:w-full lg:order-2 lg:mt-0">
                <div class="mb-8 pb-8 flex items-center border-b border-gray-600">
                    <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg"  alt="" class="rounded-3xl w-20 h-20" />
                    <div class="ml-5">
                        <span class="block text-3xl font-semibold text-white">Startup</span>
                        <span><span class="font-medium text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold text-white">24 </span></span><span class="font-medium">/ user</span>
                    </div>
                </div>
                <ul class="mb-10 font-medium text-xl">
                    <li class="flex mb-6">
                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                        <span class="ml-3"><span class="text-white">Up to 1,000 Transactions</span></span>
                    </li>
                    <li class="flex mb-6">
                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                        <span class="ml-3">=<span class="text-white">Priority Email Support</span></span>
                    </li>
                    <li class="flex">
                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                        <span class="ml-3"><span class="text-white"></span>Advanced Reporting</span>
                    </li>
                </ul>
                <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-6 px-4 text-center text-white text-2xl">
                    Choose Plan
                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                </a>
            </div>

            <div class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
                <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                    <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg"  alt="" class="rounded-3xl w-20 h-20" />
                    <div class="ml-5">
                        <span class="block text-2xl font-semibold">Enterprise</span>
                        <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold">35 </span></span><span class="text-gray-500 font-medium">/ user</span>
                    </div>
                </div>
                <ul class="mb-7 font-medium text-gray-500">
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">Unlimited Transactions</span></span>
                    </li>
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">24/7 Support</span></span>
                    </li>
                    <li class="flex text-lg">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">Unlimited</span> Custom Reporting</span>
                    </li>
                </ul>
                <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
                    Choose Plan
                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                </a>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600 text-white py-20" data-aos="zoom-in">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Start with One Touch Pay Today</h2>
            <p class="text-xl mb-8">Join thousands of businesses simplifying their payment process.</p>
            <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded hover:bg-gray-100 transition duration-300">Sign Up Now</a>
        </div>
    </section>
@endsection