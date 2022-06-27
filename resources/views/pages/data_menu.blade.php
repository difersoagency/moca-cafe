@foreach ($menu as $m)
<div class="item-menu w-full border border-2 border-gray-300 hover:border-red-500 transition-all hover:shadow-lg h-fit px-4 py-6" data-aos="zoom-in">
    <img src="../../assets/images/food-banner.png" alt="" width="50%" height="auto" class="mb-3">
    <h2 class="text-red-500 font-bold text-xl mb-2">{{ucfirst($m->nama)}}</h2>
    <p class="text-gray-400 text-sm mb-5">@if($m->deskripsi = '') -  @else {{$m->deskripsi}} @endif</p>
    <a href="{{route('menu.detail',$m->id)}}" class="bg-red-500 px-4 py-2 rounded-lg text-white text-sm hover:bg-red-900 transition-all">
        View Detail
    </a>
</div>
@endforeach

