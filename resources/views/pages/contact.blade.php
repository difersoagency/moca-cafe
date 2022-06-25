@extends('layout.master')
@section('content')

<section class="mb-20 mt-28">
        <div class="grid grid-cols-2 gap-4 content-center items-center" >
            <div class="self-center flex flex-col" data-aos="fade-left">
                <div class="mb-5">
                    <h1 class="font-bold text-4xl ">Get in <span class="text-red-500">touch!</span></h1>
                    <p class="mt-4 text-gray-400">Contact us for a quote, help you to comunicate with us</p>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-5 p-5 border border-2 border-red-500 hover:shadow-lg transition-all">
                        <img src="../../assets/images/icon-02.png" alt="Laravel Logo" height="auto" width="15%" class="rounded-lg mr-4">
                        <p>omahmocca@gmail.com</p>
                    </div>
                    <div class="flex items-center mb-5 p-5 border border-2 border-red-500 hover:shadow-lg transition-all">
                        <img src="../../assets/images/icon-03.png" alt="Laravel Logo" height="auto" width="15%" class="rounded-lg mr-4">
                        <p>0851-2341-5123</p>
                    </div>
                    <div class="flex items-center mb-5 p-5 border border-2 border-red-500 hover:shadow-lg transition-all">
                        <img src="../../assets/images/icon-04.png" alt="Laravel Logo" height="auto" width="15%" class="rounded-lg mr-4">
                        <p>Jl. Patmususastro 89 Blok C No. 5 Surabaya</p>
                    </div>
                </div>
            </div>
            <div class="text-right h-full" data-aos="flip-right">
                <div class="w-full h-full mx-auto bg-black text-white rounded-md grid grid-cols-2 gap-4 py-10 px-5">
                    <div class="text-left">
                        <label for="nama-depan">First Name</label>
                        <br>
                        <input type="text" name="nama-depan" id="nama-depan" placeholder="Raffi" class="w-full px-3 text-black outline-none mt-3 h-8 rounded-lg">
                    </div>
                    <div class="text-left">
                        <label for="nama-belakang">Last Name</label>
                        <br>
                        <input type="text" name="nama-belakang" id="nama-belakang" placeholder="Ahmad" class="w-full px-3 text-black outline-none mt-3 h-8 rounded-lg">
                    </div>
                    <div class="text-left">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" name="email" id="email" placeholder="email@gmail.com" class="w-full px-3 text-black outline-none mt-3 h-8 rounded-lg">
                    </div>
                    <div class="text-left">
                        <label for="telephone">Tlephone</label>
                        <br>
                        <input type="text" name="telephone" id="telephone" placeholder="08523xxxxx" class="w-full px-3 text-black outline-none mt-3 h-8 rounded-lg">
                    </div>
                    <div class="text-left col-span-2">
                        <label for="pesan">Message</label>
                        <br>
                        <input type="text" name="pesan" id="pesan" placeholder="Your Messages for Us" class="w-full px-3 text-black outline-none mt-3 h-32 rounded-lg">
                    </div>
                    <div class="flex justify-between w-full col-span-2">
                        <div></div>
                        <a href="#">
                            <div class="text-white duration-300 ease-in-out  bg-red-500 p-3 rounded-full hover:bg-white hover:text-red-500 w-48 text-center">
                                <p >Send Messages</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- SECTION: MENU -->
    <h2 class="font-bold text-4xl mb-10" data-aos="fade-left">
        Our Special <span class="text-red-500">Menu</span>
        </h2>
    <section class="grid grid-cols-2 gap-5 mb-96 ">
        <div class="food relative h-4/5" data-aos="flip-left">
            <img src="../../assets/images/food.jpg" alt="Makanan" height="80%" width="100%" class="h-full rounded-lg object-cover">
            <div class="w-full h-full bg-gray-700 rounded-lg absolute top-0 left-0 right-0 opacity-80">
            </div>
            <div class="text absolute top-0 left-0 right-0 py-9 text-center w-3/4 h-full mx-auto">
            <div class="flex justify-between items-center mt-60">

                <h2 class="text-white text-4xl font-bold">
                Makanan
                </h2>
                <a href="#">
                    <div class="text-white duration-300 ease-in-out border border-4 border-red-500 p-3 rounded-full hover:bg-white hover:text-red-500 w-48 text-center">
                        <p >View Food Menu</p>
                    </div>
                </a>
               
            </div>
            </div>
        </div>
        <div class="drink relative h-4/5" data-aos="flip-right">
            <img src="../../assets/images/drink.jpg" alt="Makanan" height="100%" width="100%" class="h-full rounded-lg object-cover">
            <div class="w-full h-full bg-gray-700 rounded-lg absolute top-0 left-0 right-0 opacity-80">
            </div>
            <div class="text absolute top-0 left-0 right-0 py-9 text-center w-3/4 h-full mx-auto">
            <div class="flex justify-between items-center flex-row-reverse mt-60">

                <h2 class="text-white text-4xl font-bold">
                Minuman
                </h2>
                <a href="#">
                    <div class="text-white duration-300 ease-in-out border border-4 border-red-500 p-3 rounded-full hover:bg-white hover:text-red-500 w-48 text-center">
                        <p >View Drink Menu</p>
                    </div>
                </a>
               
            </div>
            </div>
        </div>
    </section>
    
@endsection