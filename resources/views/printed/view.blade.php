@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/printeds/back" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Back</button>
            </form>
        </div>
        <ul>
            @foreach($printeds_view as $printed)
                <li>{{$printed['naslov']}}</li>
                <li>{{$printed['new_text']}}</li>
                <li><hr/></li>
            @endforeach
        </ul>
        <form action="/printeds/search" method="POST">
            <button type="submit" class="btn btn-primary">Primary</button>
        </form>
    </div>
@endsection
