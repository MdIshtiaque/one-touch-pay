@php use Illuminate\Support\Facades\Request; @endphp
<nav class="bg-gray-900 text-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="{{ route('landing') }}" class="flex items-center py-5 px-2 text-White">
                        <span class="font-bold">OneTouchPay</span>
                    </a>
                </div>
            </div>

            <!-- Primary Nav Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="#features" class="py-2 px-4 {{ Request::is('feature') ? 'bg-blue-500 rounded' : '' }}">Features</a>
                <a href="#pricing" class="py-2 px-4 {{ Request::is('pricing') ? 'bg-blue-500 rounded' : '' }}">Pricing</a>
                <a href="{{ route('user.appRegister') }}" class="py-2 px-4 {{ Request::is('app-register') ? 'bg-blue-500 rounded' : '' }}">App Registration</a>
                <a href="{{ route('user.register') }}" class="py-2 px-4 {{ Request::is('register') ? 'bg-blue-500 rounded' : '' }}">Sign Up</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden" id="mobile-menu">
        <a href="#features" class="block py-2 px-4 text-sm {{ Request::is('feature') ? 'bg-blue-500 rounded' : '' }}">Features</a>
        <a href="#pricing" class="block py-2 px-4 text-sm {{ Request::is('pricing') ? 'bg-blue-500 rounded' : '' }}">Pricing</a>
        <a href="{{ route('user.appRegister') }}" class="block py-2 px-4 text-sm {{ Request::is('app-register') ? 'bg-blue-500 rounded' : '' }}">App Registration</a>
        <a href="{{ route('user.register') }}" class="block py-2 px-4 text-sm {{ Request::is('register') ? 'bg-blue-500 rounded' : '' }}">Sign Up</a>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
