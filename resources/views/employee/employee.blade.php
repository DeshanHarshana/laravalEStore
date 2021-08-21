@extends('base')
@section('main')
<div>
<table border="1" style="margin-top:10%;width:60vw; height:60vh">
    <tr style="background-color: lightcoral; text-align:center">
        <td colspan="4"><h2>E-Store</h2></td>
<td>
    @if($message=Session::get('success'))
                        <div class="alert alert-success">

                            <strong>{{$message}}</strong>
                        </div>
                        @endif
</td>
    </tr>
<tr style="background-color:aquamarine; text-align:center">
    <td><form action="{{ route('showEmployeeName') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Employee Name</button></form></td>
    <td><form action="{{ route('showOrder') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">My Orders</button></form></td>
    <td>
        <form action="{{ route('logout') }}" method="get"> @csrf <button type="submit" class="btn btn-danger" style="width: 100%">Logout</button></form>
    </td>
</tr>
    <tr style="height: 40%">
        <td colspan="3" style="width: 100%; height:100%; text-align:center"><h1>Welcome To Employee dashboard</h1><td>
    </tr>

</table>
</div>

@endsection
