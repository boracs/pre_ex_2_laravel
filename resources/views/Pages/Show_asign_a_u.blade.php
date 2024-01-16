@extends('Layouts.Principal')




@section('mainsection')

<div id="div_centrado">
<h4>Relaciones</h4>
</div>


    @foreach ($addresses as $address)
    <div id="cont_rel_a_u">
        <p>{{$address->street}}</p>
        <p>{{$address->number}}</p>
        <p>{{$address->user_id}}</p>
    </div>
    @endforeach





<div id="div_centrado">

<form action="{{route ('asign_a_u')}}" method="POST">
    @csrf
    <select name="selusers" id="selusers">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>

    <select name="seladdress" id="seladdress">
        @foreach($addresses as $address)
            <option value="{{$address->id}}">{{$address->street}}</option>
        @endforeach
    </select>

    <button type="submit"> Asignar </button>
</form>


</div>

@endsection