@extends('app.layout')

@section('content')

@foreach ($snackPlats as $snackPlat )
    <div class="img_1">
        <img src="@voyager_image($snackPlat->image )" alt="2"/>
    </div>
@endforeach

@endsection
