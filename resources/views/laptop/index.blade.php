<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laptop Management System</title>
</head>

<body >
    <div class="max-w-screen ">
        <nav class="my-5 max-w-3xl flex mx-auto justify-between">
            <h1 class="font-light text-2xl">Laptop Management System</h1>
            <a href="{{ route('laptop.create') }}" class="bg-blue-500 text-white rounded px-2 py-1 hover:bg-blue-700 transition">Add laptop</a>
        </nav>
        <table class="min-w-xl mx-auto mt-10">
            <tr class="bg-gray-500 text-white">
                <th class="py-2">Name</th>
                <th class="py-2">Processor</th>
                <th class="py-2">Storage</th>
                <th class="py-2">Operating System</th>
            </tr>
            @foreach ($laptop as $laptops)
                <tr onclick="window.location='{{ route('laptop.show', $laptops->id) }}'" class="hover:bg-gray-300 cursor-pointer not-even:bg-gray-200">
                    <td class="py-2">{{ $laptops->laptopname }}</td>
                    <td class="py-2">{{ $laptops->processor }}</td>
                    <td class="py-2">{{ $laptops->storage }}</td>
                    <td class="py-2">{{ $laptops->operatingsystem }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
