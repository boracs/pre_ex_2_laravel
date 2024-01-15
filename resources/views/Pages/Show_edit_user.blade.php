@extends('Layouts.Principal')




@section('mainsection')

<div id="div_centrado">
    <form action="{{route('edit_user',['id'=>$user->id])}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">name</label>
        <input value="{{$user->name}}"  name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Surname</label>
        <input value="{{$user->surname}}" name="surname" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Editar Usuario</button>
    </form>

</div>

@endsection