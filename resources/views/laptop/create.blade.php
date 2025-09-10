<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Add a laptop</title>
</head>

<body>
    <div class="w-full min-h-screen flex">
        <div class="rounded m-auto min-w-xs lg:min-w-md md:min-w-sm sm:min-w-sx p-5 bg-gray-200">
            <h1 class="text-xl font-semibold mb-2">Add a New Laptop</h1>
            <form action="{{ route('laptop.store') }}" method="POST">
                @csrf
                <label for="laptopname">Laptop name:</label><br>
                <input type="text" name="laptopname" id="laptopname" class="border px-2 py-1 w-full rounded"><br>

                <label for="processor">Processor:</label><br>
                <input type="text" name="processor" id="processor" class="border px-2 py-1 w-full rounded"><br>

                <label for="storage">Storage:</label><br>
                <input type="text" name="storage" id="storage" class="border px-2 py-1 w-full rounded"><br>

                <label for="operatingsystem">Operating Syatem:</label><br>
                <input type="text" name="operatingsystem" id="operatingsystem" class="border px-2 py-1 w-full rounded"><br>

                <div class="flex justify-end mt-3 gap-2">
                    <input type="submit" value="add" class="bg-blue-600 text-white hover:bg-blue-700 px-2 py-1 rounded">
                    <a href="{{ route('laptop.index') }}" type="button" class="bg-yellow-600 hover:bg-yellow-700 text-white px-2 py-1 rounded">Cancel</a>
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>


</body>

</html>
