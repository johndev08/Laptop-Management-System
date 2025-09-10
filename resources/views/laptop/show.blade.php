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
<p>{{ $laptop->laptopname }}</p>
<p>{{ $laptop->processor }}</p>
<p>{{ $laptop->storage }}</p>
<p>{{ $laptop->operatingsystem }}</p>
<a href="{{ route('laptop.edit', $laptop->id) }}">Edit</a>
<a href="{{ route('laptop.index') }}">Cancel</a>
<form action="{{ route('laptop.destroy', $laptop->id) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
</body>

</html>
