<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <nav class="flex flex-wrap items-center justify-between p-6 bg-purple-700 shadow-lg">
        <div class="flex items-center flex-shrink-0 mr-6 text-white">
            <span class="text-xl font-semibold tracking-tight">Boris AIDS</span>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 text-white border border-teal-400 rounded hover:text-white hover:border-white">
                <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="flex-grow block w-full lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header"
                    class="block mt-4 mr-4 text-white lg:inline-block lg:mt-0 hover:text-white">
                    Docs
                </a>
                <a href="#responsive-header"
                    class="block mt-4 mr-4 text-white lg:inline-block lg:mt-0 hover:text-white">
                    Examples
                </a>
                <a href="#responsive-header" class="block mt-4 text-white lg:inline-block lg:mt-0 hover:text-white">
                    Blog
                </a>
            </div>
            <div>
                <a href="#"
                    class="inline-block px-4 py-2 mt-4 text-sm leading-none text-white border border-white rounded hover:border-transparent hover:text-teal-500 hover:bg-white lg:mt-0">Login
                </a>
            </div>
        </div>
    </nav>
   <div class="mt-4">
       <form action="" method="post">
          <div>
              <label for="mounth">Mois</label>
              <input type="text" class="bg-blue-600 rounded">
          </div>
       </form>
   </div>

</body>

</html>
