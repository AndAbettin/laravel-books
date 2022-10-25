@extends('layouts/main', [
    'current_page' => 'Create Author'
    ])

@section('content')
<form>
    <input type="text" name="full_name">
    <textarea name="bio"></textarea>
    <input type="submit" value="Submit">
</form>
@endsection