
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="title">
            <h1>Room List</h1>
        </div>
        <div>
            <a class="btn btn-primary" href="/">&laquo;  Back</a>
        </div>
    </div>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&family=Open+Sans:wght@700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ url('/css/styleuser.css') }}">
        <title>Room List</title>
    </head>

    <body>
        @foreach ($rooms as $room)
        @if($room->status == 'Kosong')
        <div>
            <article class="box">
                <figure> <a href="{{ route('rooms.show',$room->id) }}" class="hover-effect popup-gallery"><img
                            width="270" height="160" alt="" src="/image/{{ $room->image }}" draggable="false"></a>
                </figure>
                <div class="details"> <span class="price"><small>Price</small>{{ $room->price }}</span>
                    <h4 class="box-title">{{ $room->name }}
                        @if($room->status == 'Kosong')
                        <small style="color: green;">Kosong</small>
                        @else($room->status == 'Berpenghuni')
                        <small style="color: red;">Berpenghuni</small>
                        @endif
                    </h4>
                    <p class="description">{{ substr($room->detail, 0, 40) }} . . . .</p>
                    <div class="action"><a class="button btn-small yellow popup-map"
                            href="{{ route('rooms.show',$room->id) }}" data-box="37.089072, -8.247880">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>
        @else($room->status == 'Berpenghuni')
        <div>
            <article class="box">
                <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" id="block"
                            src="/image/{{ $room->image }}" draggable="false"></a>
                </figure>
                <div class="details"> <span id="block" class="price"><small>Price</small>{{ $room->price }}</span>
                    <h4 class="box-title">{{ $room->name }}
                        @if($room->status == 'Kosong')
                        <small style="color: green;">Kosong</small>
                        @else($room->status == 'Berpenghuni')
                        <small style="color: red;">Berpenghuni</small>
                        @endif
                    </h4>
                    <p class="description">{{ substr($room->detail, 0, 40) }} . . . .</p>
                    <div class="action"><a id="block" class="button btn-small yellow popup-map" href="#"
                            data-box="37.089072, -8.247880">DETAIL</a>
                    </div>
                </div>
            </article>
        </div>
        @endif
        @endforeach
    </body>

    <style>
        #block {
            filter: grayscale(100%);
            color: grey;
        }

    </style>

    </html>
