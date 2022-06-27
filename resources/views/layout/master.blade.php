<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Artikel</title>
</head>
<body style="font-family:Poppins; background-color:#FCE4EF" class="bg-white px-20 py-5 relative">
    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')
<script>
  AOS.init();
</script>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>


</body>
</html>
