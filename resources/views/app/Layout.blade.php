<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Index.css') }}"/>
    <title>Document</title>
</head>
<body>
    <div class="Menu">
        <div class="header" style="background: url('@if(Route::currentRouteName() == 'les_jus_et_les_boissons_et_froides')
                @voyager_image($layoutInfo->les_jus_et_les_boissons_et_froides_background)
            @elseif(Route::currentRouteName() == 'les_crépes_et_les_viennoiseries')
                 {{ asset('') }}
            @else
                @voyager_image($layoutInfo->Background_image)
            @endif');">
            <div class="title-image">
                <img src="@if(Route::currentRouteName() == 'les_jus_et_les_boissons_et_froides' || Route::currentRouteName() == 'les_crépes_et_les_viennoiseries')
                    @voyager_image($layoutInfo->les_jus_et_les_boissons_et_froides_title)
                @else
                    @voyager_image($layoutInfo->title_image)
                @endif" alt="title" />
            </div>
            <div class='list'>
                <img src="@voyager_image($layoutInfo->Tél_icon) " />
                <img src="@voyager_image($layoutInfo->WhastApp_icon) " />
                <img src="@voyager_image($layoutInfo->Instagram_icon) " />
                <img src="@voyager_image($layoutInfo->Map_icon) " />
            </div>
        </div>

        @yield('content')

        <div class='footer'>
            <img src="@voyager_image($layoutInfo->Footer_image)" alt="Footer"/>
        </div>
    </div>
</body>
</html>




