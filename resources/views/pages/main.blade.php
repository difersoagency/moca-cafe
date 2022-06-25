@extends('layout.master')

@section('content')

<section data-aos="flip-up">
        <div class="grid grid-cols-2 gap-4 mt-20 content-center">
            <div class="self-center w-3/4">
                <h1 class="font-bold text-7xl mb-3 leading-none mb-6">It's not about Food, It's an <span class="text-red-500">Experience</span></h1>
                <div class="w-3/4">
                  <p class="text-justify text-gray-400">Enjoy a healthi life by eating healty foods that have extraordinary flavors that make your life healthier for today and in the future   </p>
                </div>
                <a href="/">
                    <div class="animate-bounce transition duration-300 ease-in-out bg-red-500 p-3 rounded-full hover:bg-red-700 w-48 text-center mt-6">
                        <p class="text-white">View Menu</p>
                    </div>
                </a>
            </div>
            <div class="text-right">
                <img src="../../assets/images/banner-chef.png" alt="Laravel Logo" height="auto" width="100%" class="ml-auto">
            </div>
        </div>
    </section>
    <section class="mt-40 text-center mb-20">
        <h2 class="font-bold text-4xl mb-10" data-aos="fade-dow ">
            Our <span class="text-red-500">Special</span> Menu
        </h2>
        <div class="grid grid-cols-4 gap-7">     
            <div class="text-center rounded-xl p-8 hover:shadow-xl hover:shadow-dark-500 transition-shadow" data-aos="flip-left">
                <img src="../../assets/images/food-banner.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <h3 class="font-bold text-red-500 text-xl mb-2">Nama Makanan</h3>
                <p class="text-center text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
            </div>
            <div class="text-center rounded-xl p-8 hover:shadow-xl hover:shadow-dark-500 transition-shadow" data-aos="flip-left">
                <img src="../../assets/images/food-banner.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <h3 class="font-bold text-red-500 text-xl mb-2">Nama Makanan</h3>
                <p class="text-center text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
            </div>
            <div class="text-center rounded-xl p-8 hover:shadow-xl hover:shadow-dark-500 transition-shadow" data-aos="flip-left">
                <img src="../../assets/images/food-banner.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <h3 class="font-bold text-red-500 text-xl mb-2">Nama Makanan</h3>
                <p class="text-center text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
            </div>
            <div class="text-center rounded-xl p-8 hover:shadow-xl hover:shadow-dark-500 transition-shadow" data-aos="flip-left">
                <img src="../../assets/images/food-banner.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <h3 class="font-bold text-red-500 text-xl mb-2">Nama Makanan</h3>
                <p class="text-center text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION: NEWSLETTER -->
    <section class="h-64 relative mb-96" data-aos="fade-up">
        <img src="../../assets/images/newletter.jpg" alt="Makanan" height="100%" width="100%" class="h-full rounded-lg object-cover">
        <div class="w-full h-full bg-gray-700 rounded-lg absolute top-0 left-0 right-0 opacity-80">
        </div>
        <div class="text absolute top-0 left-0 right-0 py-9 px-16 text-center w-3/4 h-full mx-auto">
            <h2 class="text-white text-4xl font-bold leading-normal">
                Lihat Varian Menu Kami dan Hubungi Kami Segera untuk Booking Tempat 
            </h2>
            <div class="flex justify-around">
                <div></div>
                <div></div>
                <a href="#">
                    <div class="duration-300 ease-in-out bg-red-500 p-3 rounded-full hover:bg-red-700 w-48 text-center mt-6">
                        <p class="text-white">View Menu</p>
                    </div>
                </a>
                <a href="#">
                    <div class="text-white duration-300 ease-in-out border border-4 border-red-500 p-3 rounded-full hover:bg-white hover:text-red-500 w-48 text-center mt-6">
                        <p >Contact Us</p>
                    </div>
                </a>
                <div></div>
                <div></div>
            </div>
        </div>
    </section>

@endsection