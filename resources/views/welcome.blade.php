<!DOCTYPE html>
<html lang="en" class="no-js">


<!-- Mirrored from themesdesign.in/joobsy/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 03:36:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    @include('Winajob-Autres/head')

</head>

<body>

    @include('Winajob-Autres/navbar')

    @include('Winajob-Autres/loginform')

    @include('Winajob-Autres/registerform')

    

    @include('Winajob-Autres/BarreAccueil')

   
    @include('Winajob-Autres/category')
    @include('Winajob-Autres/alljobs')

    @include('Winajob-Autres/how')

    @include('Winajob-Autres/counter')

   @include('Winajob-Autres/temoignages')

    @include('Winajob-Autres.Suscribe')

    @include('Winajob-Autres.footer')

    @include('Winajob-Autres.footerdate')

    @include('Winajob-Autres.footerjs')

</body>

</html>