<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Home.css') }}"/>
    <title>Food & Beverages</title>

</head>
<body>
    <div class="container">
        <div class="background_left" style="background: url('@voyager_image($homeImage->background)') no-repeat center center/cover; position: relative;">
            <div class="logo">
                <img class="logo_image" src='@voyager_image($homeImage->logo)' alt="Company Logo"/>
            </div>
            <div class="réseaus_links">
                <a href='{{$homeInfo->map_Link  }}'><img src="./imgs/map.png" alt="Map"/></a>
                <a href='{{$homeInfo->tel_Link  }}'><img src="./imgs/Tél.png" alt="Phone"/></a>
                <a href='{{$homeInfo->whatsApp_Link  }}'><img src="./imgs/WhastApp.png" alt="WhatsApp"/></a>
                <a href='{{$homeInfo->instagram_Link  }}'><img src="./imgs/Instagram.png" alt="Instagram"/></a>
                <a href='{{$homeInfo->facebook_Link  }}'><img src="./imgs/facebook.png" alt="Facebook"/></a>
            </div>
        </div>
        <div class="list_imgs">
@foreach ($homeFoods as $homeFood )
            <div class="img_food"  style=" background: url('@voyager_image($homeFood->background)') ; ">
                <div class="food_title">
                    <h1>{{ $homeFood->Name }}</h1>
                </div>
                <a href="{{ route( $homeFood->Link  ) }}">
                    <div class="food_icon">
                        {!! html_entity_decode($homeFood->icon) !!}
                    </div>
                </a>
            </div>

@endforeach



        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4>Location</h4>
                 <iframe
                    src="{!! html_entity_decode($homeInfo->location) !!}"
                    width="100%"
                    height="150"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                   </iframe>
            </div>

            <div class="footer-column">
                <h4>Details</h4>
                @php
                    $homeFoodsList =$homeFoods->slice(0,3)
                @endphp
                <ul>
                    @foreach ($homeFoodsList  as $homeFood )
                        <li>
                            <a href="{{ route($homeFood->Link) }}">
                                @php
                                    echo strtolower($homeFood->Name)
                                @endphp
                            </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul>
                    <li>Téle1 :<a href="tel:{{ $homeInfo->tel_1 }}">{{ $homeInfo->tel_1 }} </a></li>
                    <li>Téle2 :<a href="tel:{{ $homeInfo->tel_2 }}">{{ $homeInfo->tel_2 }} </a></li>
                </ul>
            </div>


            <div class="footer-column">
                <h4>Address</h4>
                <p>{!! html_entity_decode($homeInfo->adress) !!}<p>
                <p>
                    {!! html_entity_decode($homeInfo->copyright) !!}
                    <a href='https://www.black-concept.ma/'>BLACK-CONCEPT</a>
                </p>
            </div>
        </div>

    </footer>
</body>
</html>
