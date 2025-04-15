@extends('app.layout')

@section('content')

@foreach ($crépesEtViennoseries as $crépesEtViennoserie )
    <div class="img_1">
        <img src="@voyager_image($crépesEtViennoserie->image)" alt="2"/>
    </div>
@endforeach

@endsection
