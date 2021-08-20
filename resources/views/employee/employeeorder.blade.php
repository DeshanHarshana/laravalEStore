@extends('base')
@section('main')
<div>
<table border="1" style="margin-top:10%;width:60vw; height:60vh">
    <tr style="background-color: lightcoral; text-align:center">
        <td colspan="4"><h2>E-Store</h2></td>

    </tr>
<tr style="background-color:aquamarine; text-align:center">
    <td><form action="{{ route('showEmployeeName') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Employee Name</button></form></td>
    <td><form action="{{ route('showOrder') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">My Order</button></form></td>
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
        <table border="1" style="width: 100%; text-align:center; margin-top:2vh">
            <tr style="border: 1px black solid; height:5vh">
                <th style="border: 1px black solid">No</th>
                <th style="border: 1px black solid">Product Name</th>
                <th style="border: 1px black solid">Detail</th>
                <th style="border: 1px black solid">Price</th>
                <th style="border: 1px black solid">Customer Name</th>
                <th style="border: 1px black solid">Customer Address</th>
                <th style="border: 1px black solid">Customer Mobile</th>
                <th style="border: 1px black solid">Customer Date</th>
            </tr>
            @foreach ($order as $p )
            <tr style="border: 1px black solid; height:5vh">
                <td style="border: 1px black solid">{{ ++$i }}</td>
                <td style="border: 1px black solid">{{ $p->employeeEmail }}</td>
                <td style="border: 1px black solid">{{ $p->productName }}</td>
                <td style="border: 1px black solid">{{ $p->detail }}</td>
                <td style="border: 1px black solid">{{ $p->customerName }}</td>
                <td style="border: 1px black solid">{{ $p->customerAddress }}</td>
                <td style="border: 1px black solid">{{ $p->customerMobile }}</td>
                <td style="border: 1px black solid">{{ $p->date }}</td>

            </tr>
            @endforeach
        </table>

            <td>
    </tr>

</table>
</div>

@endsection
