<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create</title>
</head>

<body>
    <h1>Add A New Laptop</h1>
    <form action="{{ route('laptop.store') }}" method="POST">
        @csrf
        <input type="text" name="laptopname" id="laptopname" placeholder="Laptop Name:" class="border">
        <input type="text" name="processor" id="processor" placeholder="Processor:" class="border">
        <input type="text" name="storage" id="storage" placeholder="Storage:" class="border">
        <input type="text" name="operatingsystem" id="operatingsystem" placeholder="Operating System:"
            class="border">
        <input type="submit" value="add" >
        <a href="{{ route('laptop.index') }}" type="button">Cancel</a>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
