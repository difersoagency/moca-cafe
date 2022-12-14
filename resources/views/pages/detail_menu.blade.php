@extends('layout.master')

@section('content')

<section class="mb-96">
        <div class="grid grid-cols-2 gap-4 mt-20 content-center">
            <div class="self-center p-4 rounded-lg mb-auto mt-4" data-aos="flip-right">
            <img src="../../assets/images/food-banner.png" alt="" width="70%" height="auto" class="mx-auto mb-3">
            </div>
            <div class="p-4 text-right" data-aos="flip-left">
                <h2 class="font-bold text-6xl mb-3 mb-6">{{$detail->nama}}</h2>
                <p class="text-gray-400">@if($detail->deskripsi = '') -  @else {{$detail->deskripsi}} @endif</h3>
                <div class="price flex mx-auto justify-end mt-4">
                    <p class="font-bold text-3xl px-2">Rp</p>
                    <p class="font-bold text-5xl text-red-500">{{number_format($detail->harga)}}</p>
                </div>
                <hr class="bg-gray-300 border-1 border-gray-300 mt-3" >
                <div class="grid grid-cols-2 gap-4 mt-5">
                    <a href="" class="bg-green-500 px-5 py-3 rounded-xl text-center text-white text-lg hover:bg-white hover:text-green-500 transition-all">
                        Whatsapp
                    </a>
                    <a href="" class="bg-blue-500 px-5 py-3 rounded-xl text-center text-white text-lg hover:bg-white hover:text-blue-500 transition-all">
                        Telephone
                    </a>
                </div>
            </div>
        </div>
        <div class="reccomend mt-10">
            <h2 class="font-bold text-3xl mb-3 mb-6" data-aos="fade-right">Reccomendation Dish</h2>
            <div class="dish grid grid-cols-5 gap-5">
                @foreach ($data as $d )
                <div class="item-menu w-full border border-2 border-gray-300 hover:border-red-500 transition-all hover:shadow-lg h-fit px-4 py-6" data-aos="zoom-in">
                    <img src="../../assets/images/food-banner.png" alt="" width="50%" height="auto" class="mb-3">
                    <h2 class="text-red-500 font-bold text-xl mb-2">{{$d->nama}}</h2>
                    <p class="text-gray-400 text-sm mb-5">@if($d->deskripsi = '') -  @else {{$d->deskripsi}} @endif</p>
                    <a href="{{route('menu.detail',$d->id)}}" class="bg-red-500 px-4 py-2 rounded-lg text-white text-sm hover:bg-red-900 transition-all">
                        View Detail
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
