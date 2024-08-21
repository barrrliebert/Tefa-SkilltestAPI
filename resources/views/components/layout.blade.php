<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SkillTest 2 TeFa</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="flex min-h-screen" x-data="{panel:false, menu:true}">
    <div class="flex ">
        <div :class="isOpen ? 'block' : 'hidden'" @click="isOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
    
        <div :class="isOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform lg:translate-x-0 lg:static lg:inset-0 shadow-xl">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <img class="w-12 mr-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5gOfSB6ZM26FPjb_b7jvzcS8K6oJA03u0gg&s"/>
                    <span class="mx-2 text-2xl font-semibold text-indigo-600">X</span>
                    <img class="w-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYcOOSztcsFqNizHobKLxGlPo6beBmuZ0Q5w&s"/>
                </div>
            </div>
    
            <nav class="mt-10 ">
                <a href="/categories" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4" :class="[$route.name === 'Dashboard' ? activeClass : inactiveClass]" to="/dashboard">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10C2 5.58172 5.58172 2 10 2V10H18C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10Z" fill="currentColor"/>
                        <path d="M12 2.25195C14.8113 2.97552 17.0245 5.18877 17.748 8.00004H12V2.25195Z" fill="currentColor"/>
                    </svg>
                    <span class="mx-4">Dashboard</span>
                </a>

                <a href="{{ route('categories.create') }}" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"/>
                    </svg>
                    <span class="mx-4">Create Category</span>
                </a>

            </nav>
        </div>
    </div>
    
    <div class="flex-grow bg-gray-300 text-black ">
        <header class="flex items-center h-20 px-6 sm:px-10 bg-white ">
            <div class="mr-8 cursor-pointer" @click="menu = !menu">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            <div class="flex flex-shrink-0 items-center ml-auto">
                <button class="relative inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg" @click="panel = !panel" @click.away="panel = false">
                    <span class="sr-only">User Menu</span>
                    <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
                        <span class="font-semibold text-black">{{$user}}</span>
                        <span class="text-sm text-gray-500">Admin</span>
                    </div>
                    <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                        <img src="https://i.pinimg.com/736x/34/ea/8f/34ea8f9c822d87293c918286ee28f72c.jpg" alt="user profile photo" class="h-full w-full object-cover">
                    </span>
                    <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="hidden sm:block h-6 w-6 text-gray-300">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="border-l pl-3 ml-3 space-x-1">
                    @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button onclick="event.preventDefault(); if(confirm('Are you sure you want to log out?')) document.getElementById('logout-form').submit();" class="relative p-2 text-red-400 hover:bg-gray-100 hover:text-red-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Log out</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                    @endauth
                </div>
            </div>
        </header>
        <main class="p-6 sm:p-10 space-y-6">
            {{ $slot }}
        </main>
        <footer class="w-full text-center text-gray-500 bg-white text-sm p-6">
            <span>&copy; 2024 Akbar TR. All rights reserved.</span>
        </footer>
    </div>
</body>

</html>