@extends('base')
@section('main')
<div>
<table border="1" style="margin-top:10%;width:60vw; height:60vh">
    <tr style="background-color: lightcoral; text-align:center">
        <td colspan="4"><h2>E-Store</h2></td>

    </tr>
<tr style="background-color:aquamarine; text-align:center">
    <td><form action="{{ route('showadmindetails') }}" method="get"> @csrf <button type="submit" class="btn btn-success" href="{{ route('showadmindetails')  }}" style="width: 100%">Admin Name</button></form></td>
    <td><form action="{{ route('showproductdetails') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Products</button></form></td>
    <td><form action="{{ route('showemployeedetails') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Employee</button></form></td>
    <td> <form action="{{ route('logout') }}" method="get"> @csrf <button type="submit" class="btn btn-danger" style="width: 100%">Logout</button></form></td>
</tr>
    <tr style="height: 40%">
        <td colspan="4" style="width: 100%; height:100%; text-align:center">

                @foreach ($user as $u )
                 <h1>   {{ $u->name }}</h1>
                @endforeach


            <td>
    </tr>

</table>
</div>

@endsection
