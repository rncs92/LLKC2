<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LLKC</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-800 overflow-hidden">
<section>
    <div class="bg-green-800 text-white py-20">
        <div class="container drop-shadow-2xl mx-auto flex flex-col md:flex-row items-right my-12 md:my-24">
            <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">LLKC</h1>
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Latvijas Lauku konsultāciju un
                    izglītības centrs
                </h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">LLKC konsultāciju sistēma kā bagāta augsne klientu
                    gudrai augsmei.</p>
                <div class="flex justify-center">
                    <a href="/login"
                       class="mr-2 bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                        Ieiet sistēmā</a>
                    <a href="/register"
                       class="bg-yellow-300 text-black rounded shadow hover:bg-yellow-200 hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                        Izveidot kontu</a>
                </div>
            </div>
            <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                <div class="h-48 flex flex-wrap content-center">
                    <div class="flex-col justify-between">
                        <div class="relative">
                            <img src="{{asset('images/view.jpg')}}" alt="view"
                                 class="w-full"/>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="relative w-full">
                                <img src="{{ asset('images/cows2.jpg') }}" class="w-full h-3/5 object-cover" alt="cows">
                            </div>
                            <div class="relative w-full sm:mt-0 mt-4">
                                <img src="{{ asset('images/soil.jpg') }}" class="w-full h-3/5" alt="soil">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
