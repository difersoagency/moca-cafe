@extends('layout.master')
@section('content')

<section>
        <div class="grid grid-cols-2 gap-4 mt-20 content-center" >
            <div class="self-center w-3/4" data-aos="fade-left">
                <h1 class="font-bold text-4xl mb-3 leading-none mb-6">It's not about Food, It's an <span class="text-red-500">Experience</span></h1>
                <div >
                  <p class="text-left text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos porro pariatur distinctio deserunt repudiandae? Eveniet quos nobis et natus molestiae laudantium repellat accusantium sequi tempore soluta. Veritatis, sit. Accusamus, vitae.
                  Error debitis iste rem dolorum officiis! Consequuntur reiciendis eveniet nam in, iusto laudantium quia autem asperiores explicabo, recusandae eum accusantium nihil illum sit quasi fugiat sapiente similique hic, animi id?
                  Praesentium assumenda qui, veniam quidem esse obcaecati enim a at, doloremque nesciunt repellendus libero fugit cumque velit quasi voluptatem. Quaerat, labore! Dolor et repellendus quaerat repudiandae deserunt consequuntur suscipit blanditiis?</p>
                </div>
            </div>
            <div class="text-right" data-aos="flip-right">
                <img src="../../assets/images/resto.jpg" alt="Laravel Logo" height="auto" width="100%" class="ml-auto rounded-lg">
            </div>
        </div>
    </section>
    <section class="mt-40 mb-20">
        <h2 class="font-bold text-4xl mb-10" data-aos="fade-left">
        What makes us <span class="text-red-500">different</span>
        </h2>
        <div class="grid grid-cols-2 gap-7">     
            <div class="grid grid-cols-2 gap-4 text-left p-8 border border-2 border-gray-300 h-fit items-center" data-aos="flip-up">
                <img src="../../assets/images/benefit.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <div>
                <h3 class="font-bold text-red-500 text-xl mb-2">Keunggulan</h3>
                <p class=" text-left text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 text-left p-8 border border-2 border-gray-300 h-fit items-center" data-aos="flip-up">
                <img src="../../assets/images/satisfaction.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <div>
                <h3 class="font-bold text-red-500 text-xl mb-2">Keunggulan</h3>
                <p class=" text-left text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4 text-left p-8 border border-2 border-gray-300 h-fit items-center" data-aos="flip-up">
                <img src="../../assets/images/planet-earth.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <div>
                <h3 class="font-bold text-red-500 text-xl mb-2">Keunggulan</h3>
                <p class=" text-left text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 text-left p-8 border border-2 border-gray-300 h-fit items-center" data-aos="flip-up">
                <img src="../../assets/images/welfare.png" alt="" height="auto" width="50%" class="mx-auto mb-3">
                <div>
                <h3 class="font-bold text-red-500 text-xl mb-2">Keunggulan</h3>
                <p class=" text-left text-sm leading-relaxed text-gray-400">
                    Perpaduan antara daun dan Ayam yang dimasak dengan saus spesial ala ala hingga menghasilkan cita rasa yang belum pernah Anda rasakan sebelumnya
                </p>
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