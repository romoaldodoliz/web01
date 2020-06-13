<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="descripton" content="Web Page using Vue and Laravel">
    <title>Home</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div 
    class="font-sans tracking-wide md:tracking-wider text-gray-800 flex flex-col min-h-screen" 
    id="app"
    >
        {{-- Header component --}}
        <hd></hd>

        <div class="flex-grow leading-relaxed mt-18 mb-6 items-center">
						<router-view></router-view>
        </div>

        {{-- Footer component --}}
        <ft></ft>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>