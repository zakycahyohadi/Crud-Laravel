<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- link cdn css --}}
     <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    {{-- navbar start --}}
    <div class="navbar bg-white">
        <div class="flex-none">
        </div>
        <div class="flex-1">
          <a class="btn btn-ghost text-xl">WARGA</a>
        </div>
        <div class="flex-none">
            <a href="/input"
            class="relative inline-flex items-center justify-center p-0.5 mb-5 mt-5 ml-5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
               ADD
            </span>
        </a>
        </div>
      </div>
    {{-- navbar end --}}
    @yield('navbar')
    
    {{-- link cdn js --}}
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>