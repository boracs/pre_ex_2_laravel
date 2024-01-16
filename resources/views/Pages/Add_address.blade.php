@extends('Layouts.Principal')


@section('mainsection')

<div id="div_centrado">
<h3>Todos las direcciones</h3>
</div>

<div class="m-5">
    @foreach($addresses as $address)
    <div id="contenedor_users">
        <p>{{$address->street}}</p>
        <p>{{$address->number}}</p>

        <form action="" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>

        <form action="" method="get">
            @csrf
            <button type="submit">Edit</button>
        </form>
    </div>
    @endforeach
</div>

<div id="div_centrado">

    <form action="{{route('create_address')}}" method="post">   
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">street</label>
            <input  name="street" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">number</label>
            <input name="number" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Crear Address</button>
    </form>

</div>









@endsection