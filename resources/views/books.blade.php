@php
$books = [];
    @endphp

<x-layout>
    <h1>Hello from the Books page</h1>
</x-layout>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
    <div class="books-library">


    </div>
</main>
</body>
</html>




        @foreach($books as $book)
            <div class="card">
                <h3>{{ $book->name }}</h3>
                <p>{{ $book->description }}</p>
                <a href="{{ route('/books', $book) }}">
                    Show book
                </a>
            </div>
        @endforeach





