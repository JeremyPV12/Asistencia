<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <header class="">
            <div class="logo-information container">
                <div class="logo flex justify-between items-center ">
                    <div class="inline-flex space-x-4 ">
                        <div class="w-12 h-12 border-transparent "> <img src="assets/image/logo-company.jpg" alt="logo-company"></div>
                        <div class=""><h1 class="text-2xl text-color-main font-bold py-2">Veterinaria<span class="text-color-secundary">Tomy</span></h1></div>
                    </div>
                    <div class="inline-flex space-x-7  ">
                        <div class="inline-flex space-x-4 items-center "><a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                          </svg>
                          </a>
                          <div><h1 class="text-color-main font-semibold">Telefono</h1> <h1 class="text-color-secundary font-semibold">948124785</h1></div>
                        </div>
                        <div class="inline-flex space-x-4 items-center"><a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          </a>
                          <div><h1 class="text-color-main font-semibold">Horario</h1> <h1 class="text-color-secundary font-semibold">09:00 - 20:00 L - S</h1></div>
                        </div>
                        <div class="inline-flex space-x-4 items-center "><a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                          </svg>
                          </a>
                          <div><h1 class="text-color-main font-semibold">Ubicacion</h1> <h1 class="text-color-secundary font-semibold">Jiron Calixto N°785</h1></div>
                        </div>
                    </div>
                </div>
        </header>
        <main>
            @yield('main')
        </main>
        <footer class="">
            <div class="bg-color-main flex justify-evenly h-64 ">
                <div>
                    <h1 class="text-color-terciario text-2xl font-semibold h-10 py-10">Veterinaria Tomy</h1>
                    <p class="text-color-cuarto font-medium text-start">Nosotros brindamos la atencion<br>  mas completa y mejor <br> Todo al menor precio</p>
                </div>
                <div>
                    <h2 class="text-color-cuarto font-semibold h-10 py-10">Contactanos</h2>
                    <h3 class="text-color-cuarto font-medium h-8">Celular: 95412364</h3>
                    <h3 class="text-color-cuarto font-medium h-5">Email: tomy@gmail.com</h3>
                </div>
                <div>
                    <h2 class="text-color-cuarto font-semibold py-10 h-10">Atencion al cliente</h2>
                    <h3 class="" >
                        <input type="checkbox">
                        <a href="" class="text-color-cuarto font-medium h-8">Politicas de devolucion</a>
                        <br>
                        <input type="checkbox">
                        <a href="" class="text-color-cuarto font-medium">Politicas de privacidad</a>
                        <br>
                        <input type="checkbox">
                        <a href="" class="text-color-cuarto font-medium">Politicas de contenido</a>
                        <br>
                        <input type="checkbox">
                        <a href="" class="text-color-cuarto font-medium">Politicas de flexbox</a>
                    </h3>
                </div>
                <div>
                    <h2 class="text-color-cuarto font-semibold py-10 h-10">Libro de reclamaciones</h2>
                    <a class="" href=""><svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#07072c" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg></a>
                </div>
            </div>
            <div class="bg-color-main">
                <hr class="w-10/12 ml-28">
                <div class="flex justify-around">
                    <h3 class="text-color-terciario font-normal py-10 mr-96">Pagina hecha por papo Intitokc,wemovew</h3>
                    <div class="flex py-10">
                        <div class="mr-4"><a href="">
                            <svg  xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0f4fbd" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                        </a></div>
                        <div class="mr-4"><a href="">
                            <svg   xmlns="http://www.w3.org/2000/svg"  height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#518cf0" d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>
                        </a></div>
                        <div class="mr-4"><a href="">
                            <svg   xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0f8000" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                        </a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>