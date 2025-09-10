<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Show</title>
</head>

<body>
    <div class="max-w-screen flex min-h-screen">
        <div class="min-w-sm bg-gray-300 rounded-md p-5 m-auto">
            <p class="text-center text-3xl font-bold">{{ $laptop->laptopname }}</p>
            <div class="py-3">
                <p><b>Processor:</b> {{ $laptop->processor }}</p>
                <p><b>Storage:</b> {{ $laptop->storage }}</p>
                <p><b>Operaring System:</b> {{ $laptop->operatingsystem }}</p>
            </div>
            <div class="inline-flex">
                <a class="bg-green-700 hover:bg-green-800 text-white px-2 py-1 rounded"
                    href="{{ route('laptop.edit', $laptop->id) }}">Edit</a>
            </div>
            <div class="inline-flex">
                <a class="bg-blue-700 hover:bg-blue-800 text-white px-2 py-1 rounded"
                    href="{{ route('laptop.index') }}">Cancel</a>
            </div>
            <form class="inline-flex" action="{{ route('laptop.destroy', $laptop->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="bg-red-700 hover:bg-red-800 text-white px-2 py-1 rounded" value="Delete">
            </form>
        </div>
    </div>


</body>

</html>
