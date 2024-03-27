
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winajob</title>
    @include('Winajob-Autres/head')
</head>
<body>
    <div id="container">
    @include('Winajob-Autres/navbar')


        <main class="py-0">
            @yield('content')
        </main>
        
        
    @include('Winajob-Autres/footer')
    @include('Winajob-Autres/footerdate')
    @include('Winajob-Autres/footerjs')
    </div>
</body>
</html>