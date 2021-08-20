@extends('base')
@section('main')
<div>
<table border="1" style="margin-top:10%;width:60vw; height:60vh">
    <tr style="background-color: lightcoral; text-align:center">
        <td colspan="4"><h2>E-Store</h2></td>

    </tr>
<tr style="background-color:aquamarine; text-align:center">
    <td><form action="{{ route('showadmindetails') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Customer Name</button></form></td>
    <td><form action="{{ route('showproductdetails2') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Place Order</button></form></td>
    <td>
        <form action="{{ route('logout') }}" method="get"> @csrf <button type="submit" class="btn btn-danger" style="width: 100%">Logout</button></form>
    </td>
</tr>
    <tr style="height: 40%">
        <td colspan="3" style="width: 100%; height:100%; text-align:center">
            @php
            $i=0;
        @endphp
        <br>
        @if($message=Session::get('success'))
                        <div class="alert alert-success">

                            <strong>{{$message}}</strong>
                        </div>
                        @endif

        <table border="1" style="width: 100%; text-align:center; margin-top:2vh">
            <tr style="border: 1px black solid; height:5vh">
                <th style="border: 1px black solid">No</th>
                <th style="border: 1px black solid">Name</th>
                <th style="border: 1px black solid">Details</th>
                <th style="border: 1px black solid">Price</th>
                <th style="border: 1px black solid">Action</th>
            </tr>
            @foreach ($product as $p )
            <tr style="border: 1px black solid; height:5vh">
                <td style="border: 1px black solid">{{ ++$i }}</td>
                <td style="border: 1px black solid">{{ $p->name }}</td>
                <td style="border: 1px black solid">{{ $p->detail }}</td>
                <td style="border: 1px black solid">{{ $p->price }}</td>
                <td>
                    <a href="{{ route('showoneproduct', $p->id) }}" class="btn btn-info">Show</a>
                </td>
            </tr>
            @endforeach
        </table>

            <td>
    </tr>

</table>
</div>

@endsection
