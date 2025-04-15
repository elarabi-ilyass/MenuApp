@extends('app.Layout')


@section('content')


@foreach ($homeInfos as $homeInfo)
    <div class="img1">
        <a href="{{ route($homeInfo->route_name) }}">
            <img src="@voyager_image($homeInfo->image) " alt="2"/>
        </a>
    </div>
@endforeach



@endsection
