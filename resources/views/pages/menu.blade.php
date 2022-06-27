@extends('layout.master')

@section('content')
<style>

    div a.active{
    color: red;
 }
</style>

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
                    <a href="" class="block mb-6 w-fit active transition-colors cat" id="cat0"  data-id="0">Semua</a>
                <div class="category-list">
                    @foreach ($kategori as $k )
                    <a href="" id="cat{{$k->id}}" data-id="{{$k->id}}" class="block mb-6 w-fit hover:text-red-500 transition-colors cat">{{ucfirst($k->nama)}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-span-2 p-4">
                <h2 class="font-bold text-4xl mb-3 mb-6" data-aos="fade-right">Catalog</h2>
                <div class="menu grid grid-cols-3 gap-10" id="menu_body">
                    @include('pages.data_menu')
                </div>
            </div>
        </div>
    </section>

@endsection
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script>
      $(document).on('click', '.cat', function(event) {
    event.preventDefault();
     var id = $(this).data('id');


     $('.cat').removeClass("active");
     $('.cat').addClass("hover:text-red-500");


    $('#cat'+id).removeClass("hover:text-red-500");
    $('#cat'+id).addClass("active");

    fetch_data(id);

    function fetch_data(id)
    {
     $.ajax({
        url:"{{route('menu.data')}}",
        data:{id:id},
           success:function(data)
      {
     $('#menu_body').html(data);

      }
     });
    }

})
    </script>
