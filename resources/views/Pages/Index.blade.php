@extends('Layouts.Principal')


@section('mainsection')

<div id="div_centrado">
<h3>Todos los usuarios</h3>
</div>

<div class="m-5">
    @foreach($users as $user)
    <div id="contenedor_users">
        <p>{{$user->name}}</p>
        <p>{{$user->surname}}</p>
        <form action="{{route('delete_user',['id'=>$user->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        <form action="{{route('show_edit_user',['id'=>$user->id])}}" method="get">
            @csrf
            <button type="submit">Edit</button>
        </form>
    </div>
    @endforeach
</div>







<div id="div_centrado">
    <form action="{{route('create_user')}}" method="">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">name</label>
        <input  name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Surname</label>
        <input name="surname" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>

</div>









@endsection