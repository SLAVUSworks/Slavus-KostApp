<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&family=Open+Sans:wght@700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{ url('/asset/Kure.PNG') }}">
    <title>{{ $room->name }}</title>
</head>

<style>
    body {
        overflow-x: hidden;
        font-family: 'Noto Sans JP', sans-serif;

    }

    .center {
        text-align: center;
    }

    .card-horizontal {
        display: flex;
        flex: 1 1 auto;
    }

    .card {
        margin: 0 auto;
        float: none;
        margin-bottom: 10px;
        width: 70rem;
    }

    #wangsaff {
        float: right;
    }

    .watsaff {
        width: 40px;
    }

    .fa-whatsapp {
        color: #fff;
        background:
            linear-gradient(#25d366, #25d366) 14% 84%/16% 16% no-repeat,
            radial-gradient(#25d366 58%, transparent 0);
    }

    @media only screen and (max-width: 650px) {
        .card {
            margin: 0 auto;
            float: none;
            margin-bottom: 10px;
            width: 20rem;
        }
    }
    </style>
</style>

<body>
    <div>
        <div>
            <br>
            <div class="center">
                <h2>Detail {{ $room->name }}</h2>
            </div>
            <br>
            <div class="btn">
                <a class="btn btn-primary" href="{{ route('users.index') }}">&laquo; Back</a>
            </div>
        </div>
    </div>
</body>

<br>

<body>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $room->name }} <a id="wangsaff" class="btn btn-primary btn-lg" href="#">
                    <img class="watsaff" src="{{ url('/asset/WhatsApp.png') }}" alt="">
                </a></h5>
                @if($room->status == 'Kosong')
                <p class="card-text" style="color: green;">Kondisi Ruangan : {{ $room->status }}</p>
                @else($room->status == 'Berpenghuni')
                <p class="card-text" style="color: red;">Kondisi Ruangan : {{ $room->status }}</p>
                @endif
                <p class="card-text">{{ $room->price }}/Month</p>
                <textarea readonly class="form-control" style="resize: none; height: 250px;" name="detail"
                    placeholder="Detail">{{ $room->detail }}</textarea>
                <p class="card-text"><small class="text-muted">Last Update {{ $room->updated_at }}</small></p>
        </div>
        <img src="/image/{{ $room->image }}" class="card-img-bottom" alt="...">
    </div>

</body>

</html>
