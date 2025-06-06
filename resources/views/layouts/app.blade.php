<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tab-name')</title>


    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        :root{
            --color-white: rgb(235,235,235);
            --color-black: rgb(0,0,0);
            --color-primary: oklch(26.9% 0 0);
            --color-color_bg_table: oklch(44.6% 0.03 256.802);
            --color-secondary: oklch(82.8% 0.189 84.429); /* amber */
            --color-primary_2: oklch(76.8% 0.233 130.85); /* green */
            --color-btns_primary: oklch(37.1% 0 0);
            --w-screen-menu:250px;
 
        }

    </style>

</head>

<body class="">

    @if(session()->has('success') || session()->has('error'))
    <div class="fixed top-10 left-[calc(50%+var(--w-screen-menu)/2)] w-150 -translate-x-1/2 rounded-sm ">
        @if(session('success'))
        <div class="w-full h-full p-4 pl-8 pr-8 bg-green-200 border-1 border-green-500 text-green-600">
            <p class="text-center">Success</p>
            <p class="text-center">{{session('success')}}</p>
        </div>
        @elseif(session('error'))
        <div class="w-full h-full p-4 pl-8 pr-8 bg-red-200 border-1 border-red-500 text-red-600">
            <p class="text-center">Upss...</p>
            <p class="text-center">{{session('error')}}</p>
        </div>
        @endif
    </div>
    @endif
    <nav
        class="fixed top-0 left-0 p-2 pl-5 pt-10 h-screen bg-[var(--color-primary)] w-[var(--w-screen-menu)] hidden md:block">
        <div class="pl-1 pr-1 flex items-start  flex-col">
            <h2 class=" w-full mb-5  pb-3 border-b-1 border-grey-50 text-center text-white uppercase">Welcome User</h2>

            <a href="{{route('home.page')}}"
                class="w-full pt-2 pb-2 pl-1 pr-1  uppercase text-sm hover:bg-white hover:scale-95 easy-in-out duration-100 cursor-pointer text-white hover:text-black">
                <span class="text-purple-300">| &leftarrow;</span>

                Home</a>
            <a href="{{route('create.user')}}"
                class="w-full pt-2 pb-2 pl-1 pr-1 hover:bg-white uppercase text-sm hover:scale-95 easy-in-out duration-100 cursor-pointer text-white hover:text-black">
                <span class="text-green-300">| &plus;</span>

                New member</a>

            @yield('btns')
        </div>
    </nav>

    <div
        class="w-[calc(100%-var(--w-screen-menu))]  min-h-dvh ml-[var(--w-screen-menu)] bg-[rgb(240,240,240)] flex justify-start items-center flex-col pt-10 pb-10">
        <h1 class=" border-b-1 border-b-indigo-500 p-5 mb-10 text-2xl uppercase ">@yield('page-name')</h1>


        @yield('content')

    </div>

</body>

</html>