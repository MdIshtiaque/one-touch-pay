@php use http\Client\Requestuest; @endphp
<nav class="bg-gray-900 text-white p-5">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('landing') }}" class="text-3xl font-bold">OneTouchPay</a>
        <div>
            <a href="#features" class="px-4 {{ Request::is('feature') ? 'bg-blue-500 py-2 rounded' : '' }}">Features</a>
            <a href="#pricing" class="px-4 {{ Request::is('pricing') ? 'bg-blue-500 py-2 rounded' : '' }}">Pricing</a>
            <a href="{{ route('user.appRegister') }}" class="px-4 {{ Request::is('app-register') ? 'bg-blue-500 py-2 rounded' : '' }}">App
                Registration</a>
            <a href="{{ route('user.register') }}" class="px-4 {{ Request::is('register') ? 'bg-blue-500 py-2 rounded' : '' }}">Sign Up</a>
        </div>
    </div>
</nav>