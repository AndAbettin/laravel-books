@extends('layouts/main', [
    'current_page' => 'Authors'
    ])

@section('content')
<h1>Authors</h1>

<ul>
    <?php foreach ($authors as $author) : ?>
        <li>{{$author->name}}</li>
        <?=$author->bio?>
    <?php endforeach ; ?>
</ul>
@endsection