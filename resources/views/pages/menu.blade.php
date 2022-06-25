@extends('layout.master')

@section('content')

<section class="mb-96">
    <div class="flex mt-20 justify-between gap-11">
        <a href="" class="px-5 py-2 border border-2 border-gray-400 w-full text-center hover:bg-red-500 hover:border-transparent hover:text-white transition-all" data-aos="zoom-in-right">Hot Seller</a>
        <a href="" class="px-5 py-2 border border-2 border-gray-400 w-full text-center hover:bg-red-500 hover:border-transparent hover:text-white transition-all" data-aos="zoom-in-right">Reccomendation</a>
        <a href="" class="px-5 py-2 border border-2 border-gray-400 w-full text-center hover:bg-red-500 hover:border-transparent hover:text-white transition-all" data-aos="zoom-in-right">Food</a>
        <a href="" class="px-5 py-2 border border-2 border-gray-400 w-full text-center hover:bg-red-500 hover:border-transparent hover:text-white transition-all" data-aos="zoom-in-right">Drink</a>
        <a href="" class="px-5 py-2 border border-2 border-gray-400 w-full text-center hover:bg-red-500 hover:border-transparent hover:text-white transition-all" data-aos="zoom-in-right">Snack</a>
        <div class="flex gap-4" data-aos="zoom-in-right">
            <input type="text" name="dish" id="dish" placeholder="Insert Dish Name..." class="px-4">
            <a href="" class="text-center px-5 py-2 bg-red-500 rounded-md text-white hover:bg-red-800 transition-colors">Search</a>
        </div>
    </div>
    <hr class="bg-gray-300 h-1 mt-5">
        <div class="grid grid-cols-3 gap-4 mt-8 content-center" data-aos="fade-down">
            <div class="self-center shadow-lg p-4 rounded-lg mb-auto mt-4">
                <h2 class="font-bold text-4xl mb-3 leading-none mb-8">Category List</h1>
                <div class="category-list">
                    <a href="" class="block mb-6 w-fit hover:text-red-500 transition-colors">Category </a>
                    <a href="" class="block mb-6 w-fit hover:text-red-500 transition-colors">Category </a>
                    <a href="" class="block mb-6 w-fit hover:text-red-500 transition-colors">Category </a>
                    <a href="" class="block mb-6 w-fit hover:text-red-500 transition-colors">Category </a>
                    <a href="" class="block w-fit hover:text-red-500 transition-colors">Category </a>
                </div>
            </div>
            <div class="col-span-2 p-4">
                <h2 class="font-bold text-4xl mb-3 mb-6" data-aos="fade-right">Catalog</h2>
                <div class="menu grid grid-cols-3 gap-10">
                    <div class="item-menu w-full border border-2 border-gray-300 hover:border-red-500 transition-all hover:shadow-lg h-fit px-4 py-6" data-aos="zoom-in">
                        <img src="../../assets/images/food-banner.png" alt="" width="50%" height="auto" class="mb-3">
                        <h2 class="text-red-500 font-bold text-xl mb-2">Nama Makanan</h2>
                        <p class="text-gray-400 text-sm mb-5">Makanan Ayam yang dibakar dengan Bumbu Bumbu Terbaik menghasilkan cita rasa yang unik dan berbeda</p>
                        <a href="/detail" class="bg-red-500 px-4 py-2 rounded-lg text-white text-sm hover:bg-red-900 transition-all">
                            View Detail
                        </a>
                    </div>
                    <div class="item-menu w-full border border-2 border-gray-300 hover:border-red-500 transition-all hover:shadow-lg h-fit px-4 py-6" data-aos="zoom-in">
                        <img src="../../assets/images/food-banner.png" alt="" width="50%" height="auto" class="mb-3">
                        <h2 class="text-red-500 font-bold text-xl mb-2">Nama Makanan</h2>
                        <p class="text-gray-400 text-sm mb-5">Makanan Ayam yang dibakar dengan Bumbu Bumbu Terbaik menghasilkan cita rasa yang unik dan berbeda</p>
                        <a href="/detail" class="bg-red-500 px-4 py-2 rounded-lg text-white text-sm hover:bg-red-900 transition-all">
                            View Detail
                        </a>
                    </div>
                    <div class="item-menu w-full border border-2 border-gray-300 hover:border-red-500 transition-all hover:shadow-lg h-fit px-4 py-6" data-aos="zoom-in">
                        <img src="../../assets/images/food-banner.png" alt="" width="50%" height="auto" class="mb-3">
                        <h2 class="text-red-500 font-bold text-xl mb-2">Nama Makanan</h2>
                        <p class="text-gray-400 text-sm mb-5">Makanan Ayam yang dibakar dengan Bumbu Bumbu Terbaik menghasilkan cita rasa yang unik dan berbeda</p>
                        <a href="/detail" class="bg-red-500 px-4 py-2 rounded-lg text-white text-sm hover:bg-red-900 transition-all">
                            View Detail
                        </a>
                    </div>
                    <div class="item-menu w-full border border-2 border-gray-300 hover:border-red-500 transition-all hover:shadow-lg h-fit px-4 py-6" data-aos="zoom-in">
                        <img src="../../assets/images/food-banner.png" alt="" width="50%" height="auto" class="mb-3">
                        <h2 class="text-red-500 font-bold text-xl mb-2">Nama Makanan</h2>
                        <p class="text-gray-400 text-sm mb-5">Makanan Ayam yang dibakar dengan Bumbu Bumbu Terbaik menghasilkan cita rasa yang unik dan berbeda</p>
                        <a href="/detail" class="bg-red-500 px-4 py-2 rounded-lg text-white text-sm hover:bg-red-900 transition-all">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection