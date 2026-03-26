<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body >
    <header class="bg-[#E1EDE6] p-[15px]">
        <div class="container mx-auto flex items-center justify-between">
            <a class="flex w-[143px] h-[35px]" href="/">
                <img src="" alt="">
                <h2 class="text-[#598D66] text-[20px] font-bold">Ink. House</h2>
            </a>
            <nav class="flex items-center gap-[60px]">
                <li>
                    <a class="font-medium text-[20px]" href="/">Репродукции</a>
                </li>
                <li>
                    <a class="font-medium text-[20px]" href="/">Новинки</a>
                </li>
                <li>
                    <a class="font-medium text-[20px]" href="/">О нас</a>
                </li>
                <li>
                    <a href="/cart">
                        <img src="" alt="">
                    </a>
                </li>
            </nav>
        </div>
    </header>
    <main class="container mx-auto">
        @yield('main_content')
    </main>
    <footer></footer>
</body>
</html>