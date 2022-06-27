@extends('template')
@section('content')

<br><br>

<div id="status" class="jumbotron mt-3">
    <h1 class="display-4">Room Status</h1>
</div>
<div class="col d-flex justify-content-center">
    <div class="card text-white bg-primary mb-3"
        style="width: 18rem; display:inline-block;justify-content: start;margin-right: 10px;">
        <div class="card-header">Jumlah Kamar</div>
        <div class="card-body">
            <h3 class="card-title">{{ count($rooms) }}</h3>
        </div>
    </div>
    <div class="card text-white bg-info mb-3"
        style="width: 18rem; display:inline-block;justify-content: center;margin-right: 10px;">
        <div class="card-header">Jumlah Kamar Kosong</div>
        <div class="card-body">
            <h3 class="card-title">{{ $kosong }}</h3>
        </div>
    </div>
    <div class="card text-white bg-success mb-3" style="width: 18rem; display:inline-block;text-align: start;">
        <div class="card-header">Jumlah Kamar Diisi</div>
        <div class="card-body">
            <h3 class="card-title">{{ $berpenghuni }}</h3>
        </div>
    </div>
</div>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Room</th>
        <th>Status</th>
        <th>Status Log</th>
        <th>Update Log</th>
    </tr>
    <tr>
        @foreach ($rooms as $room)
        <td>{{ ++$i }}</td>
        <td>{{ $room->name }}</td>
        @if($room->status == 'Kosong')
        <td style="color: green;">
            Kosong
        </td>
        @else($room->status == 'Berpenghuni')
        <td style="color: red;">
            Berpenghuni
        </td>
        @endif
        @if($room->status == 'Kosong')
        <td>{{ $room->status }} Sejak {{ $room->updated_at->format('d/m/Y') }}</td>
        @else($room->status == 'Berpenghuni')
        <td>{{ $room->status }} Sejak {{ $room->updated_at->format('d/m/Y') }}</td>
        @endif
        <td>{{ $room->updated_at }}</td>
    </tr>
    @endforeach
</table>

<br><br id="control">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="jumbotron mt-3">
            <h1 class="display-4">Room Control</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
        </div>
    </div>
</div>

<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<br>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th class="a">Image</th>
        <th>Name</th>
        <th>Status</th>
        <th>Price</th>
        <th class="a">Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($rooms as $room)
    <tr>
        <td>{{ ++$i }}</td>
        <td class="a"><img src="/image/{{ $room->image }}" width="100px"></td>
        <td>{{ $room->name }}</td>
        @if($room->status == 'Kosong')
        <td style="color: green;">
            Kosong
        </td>
        @else($room->status == 'Berpenghuni')
        <td style="color: red;">
            Berpenghuni
        </td>
        @endif
        <td>{{ $room->price }}</td>
        <td class="a">{{ $room->detail }}</td>
        <td class="b">
            <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                <a class="btn btn-primary btn-sm" href="{{ route('rooms.edit',$room->id) }}">Edit/Room Status</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

{!! $rooms->links() !!}

<style>
    @media only screen and (max-width: 650px) {
        table {
            font-size: 10px;
        }

        .b {
            font-size: 1px;
        }

        .a {
            display: none;
        }
    }
</style>