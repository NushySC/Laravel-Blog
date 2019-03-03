<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> {{-- This link is relative to the public folder --}}

    {{-- Go to resources folder and see saas/app.scss to see what style have been imported. 
        To use your own CSS you need to run in terminal NPM install. 
        NMP run dev will recompile everything. 
        Or npm run watch, that will watch the changes constantly.
        Best practice is to crete a new file in the resources/SAAS folder named _custom.css and there write you custom CSS.
        Don't forget to @import the file into resources/saas/app.scss
        Google Fonts also go there. --}}

    <title>Document</title>
</head>
<body>
    @include ('layouts._navbar')
    
    <div class="container">
        @yield ('content')
    </div>
</body>
</html>