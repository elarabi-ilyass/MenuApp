@extends('app.layout')

@section('content')

    @foreach ($petitDéjeunés as $petitDéjeuné )

        <div class="img_1">
            <img src="@voyager_image($petitDéjeuné->image)" alt="2"/>
        </div>

    @endforeach

@endsection
