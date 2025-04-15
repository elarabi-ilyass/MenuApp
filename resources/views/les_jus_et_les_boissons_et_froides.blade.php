@extends('app.layout')

@section('content')

@foreach ($jusBoissonEtFroids as $jusBoissonEtFroid )
<div class="img_1">
    <img src="@voyager_image($jusBoissonEtFroid->image)" alt="2"/>
</div>
@endforeach

@endsection
