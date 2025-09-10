<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laptop Management System</title>
</head>

<body>
    <h1>Laptop Management System</h1>
    <a href="{{ route('laptop.create') }}">Add laptop</a>
    <table class="min-w-xl">
        <tr>
            <th>Name</th>
            <th>Processor</th>
            <th>Storage</th>
            <th>Operating System</th>
        </tr>

        @foreach ($laptop as $laptops)
            <tr onclick="window.location='{{ route('laptop.show', $laptops->id) }}'" class="hover:bg-gray-300 cursor-pointer">
                <td>{{ $laptops->laptopname }}</td>
                <td>{{ $laptops->processor }}</td>
                <td>{{ $laptops->storage }}</td>
                <td>{{ $laptops->operatingsystem }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
