<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.4/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-100 to-blue-100">
    <div class="container mx-auto mt-5">
        <div class="rounded-2xl bg-white shadow-md px-5 py-2 flex justify-between items-center">
            <h1 class="font-semibold">TeFa</h1>

            <a href="/login" class="text-white bg-gray-900 hover:bg-white hover:shadow-xl transition-colors hover:text-gray-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-sm px-5 py-2.5">Login</a>
        </div>

        <div class="mx-auto flex flex-col items-center justify-center mt-24 w-max">
            <h1 class="font-bold text-5xl text-gray-800 max-w-lg mx-auto text-center">The category management system you're looking for</h1>
            <p class="text-gray-600 max-w-2xl text-center mt-5">Simple category management system created by Akbar Tolib Ramadan from Team Kr4bat SMKN 4 Bogor for Tefa Skill Test 2.</p>

            <a href="/categories" class="text-white mt-10 inline-flex items-center bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-auto">
                Start managing
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</body>

</html>