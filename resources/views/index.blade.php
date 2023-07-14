<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <section class="bg-slate-500">
        <div class="flex bg-slate-900 justify-start gap-14 p-2 text-white">
            <a href="">Need Help</a>
            <a href="">Info@jackson.com</a>
            <a href="">+353-7654-9098</a>
        </div>
        <div class=" bg-gray-500/30">
            <nav class="flex justify-between">
                <div class=" flex">
                    <div class=" w-16">
                        <img src="{{ asset('img/pavel.jpg') }}" alt="">
                    </div>
                    <h1 class="text-xl mt-1 text-amber-100 font-bold italic">pavel</h1>
                </div>
                <div class="text-yellow-50 space-x-10 mt-5 font-bold italic">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                    <a href="">Our Team Member</a>
                    <a href="">Contact Us</a>
                    <a href="">Blog</a>
                    <a href="">My account</a>
                </div>
                <div class="text-yellow-50 m-6 ml-14 bg-rose-900 py-1 px-6 italic">
                    <a href="">Login</a>
                </div>
            </nav>
        </div>
        <div class="lg:flex justify-center md:w-5/6 mx-auto p-8">
            <div class="lg:w-2/6 w-11/12 my-2 md:my-auto mx-auto md:flex lg:block">
                <div class="md:w-3/6 lg:w-full">
                    <img src="{{ asset('img/cat2.jpg') }}" alt="">
                </div>
                <div class="bg-slate-100/50 text-amber-800 p-2 md:w-3/6 lg:w-full">
                    <h2 class="text-2xl text-center font-bold p-2">John Tegan</h2>
                    <h1 class="text-center italic text-lg p-2">Midfeild</h1>
                      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nam id
                        doloribus aut dolorum corrupti sunt saepe dolor eaque! Quo, incidunt! Quisquam fuga vel earum
                        in, possimus incidunt eveniet voluptatum. <br>Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. At magnam necessitatibus in.
                    </p>
                    <div class="text-center">
                        <a href=""><i class="fa-brands fa-twitter text-cyan-700"></i></a>
                        <a href=""><i class="fa-brands fa-facebook text-blue-500"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-orange-500"></i></a>
                        <a href=""><i class="fa-brands fa-youtube text-red-500"></i></a>

                    </div>
                </div>

            </div>

            <div class="lg:w-2/6 w-11/12 my-2 md:my-auto mx-auto md:flex lg:block">
                <div class="bg-slate-100/50 text-amber-800 p-2 md:w-3/6 lg:w-full">
                    <h2 class="text-2xl text-center font-bold p-2">Sergio Martins</h2>
                    <h2 class="text-center italic text-lg p-2">Striker</h2>
                   <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nam id
                        doloribus aut dolorum corrupti sunt saepe dolor eaque! Quo, incidunt! Quisquam fuga vel earum
                        in, possimus incidunt eveniet voluptatum. <br>Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. At magnam necessitatibus in.
                    </p>
                    <div class="text-center">
                        <a href=""><i class="fa-brands fa-twitter text-cyan-700"></i></a>
                        <a href=""><i class="fa-brands fa-facebook text-blue-500"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-orange-500"></i></a>
                        <a href=""><i class="fa-brands fa-youtube text-red-500"></i></a>

                    </div>
                </div>
                <div class="md:w-3/6 lg:w-full">
                    <img src="{{ asset('img/cat3.jpg') }}" alt="">
                </div>


            </div>

            <div class="lg:w-2/6 w-11/12 my-2 md:my-auto mx-auto md:flex lg:block">
                <div class="md:w-3/6 lg:w-full">
                    <img src="{{ asset('img/cat5.png') }}" alt="">
                </div>
                <div class="bg-slate-100/50 text-amber-800 p-2 md:w-3/6 lg:w-full">
                    <h2 class="text-2xl text-center font-bold p-2">Maria Legan</h2>
                    <h1 class="text-center italic text-lg p-2">Defender</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nam id
                        doloribus aut dolorum corrupti sunt saepe dolor eaque! Quo, incidunt! Quisquam fuga vel earum
                        in, possimus incidunt eveniet voluptatum. <br>Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. At magnam necessitatibus in.
                    </p>
                    <div class="text-center">
                        <a href=""><i class="fa-brands fa-twitter text-cyan-700"></i></a>
                        <a href=""><i class="fa-brands fa-facebook text-blue-500"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-orange-500"></i></a>
                        <a href=""><i class="fa-brands fa-youtube text-red-500"></i></a>

                    </div>
                </div>

            </div>
            <!--     <div class="w-2/6 mx-auto">
                <div class="w-5/6"><img src="{{ asset('img/cat3.jpg') }}" alt=""></div>
                <div class="bg-white p-5 w-5/6">
                    <h2 class="font-bold text-2xl p-4">Alex Greenfeild</h2>
                    <p class="font-semibold italic p-4">Programming Guru</p>
                    <p class="p-4 font-serif">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus veniam doloremque voluptate
                    </p>
                </div>
            </div>
            <div class="w-2/6 mx-auto">
                <div class="bg-white p-5 w-5/6">
                    <h2 class="font-bold text-2xl p-4">Jeffery Brown</h2>
                    <p class="font-semibold italic p-4">Creative Leader</p>
                    <p class="p-4 font-serif">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus veniam doloremque voluptate
                    </p>
                </div>
                <div class="w-5/6"><img src="{{ asset('img/cat2.jpg') }}" alt=""></div>
            </div>
            <div class="w-2/6 mx-auto">
                <div class="w-5/6"><img src="{{ asset('img/cat1.jpg') }}" alt=""></div>
                <div class="bg-white p-5 w-5/6">
                    <h2 class="font-bold text-2xl p-4">Anni Richmond</h2>
                    <p class="font-semibold italic p-4">Manager</p>
                    <p class="p-4 font-serif">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus veniam doloremque voluptate
                    </p>
                </div>
            </div>-->
        </div>
    </section>
</body>

</html>
