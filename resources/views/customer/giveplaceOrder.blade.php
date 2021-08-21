@extends('base')
@section('main')
<div>
<table border="1" style="margin-top:10%;width:60vw; height:60vh">
    <tr style="background-color: lightcoral; text-align:center">
        <td colspan="4"><h2>E-Store</h2></td>

    </tr>
<tr style="background-color:aquamarine; text-align:center">
    <td><form action="{{ route('showCustomerName') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Customer Name</button></form></td>
    <td><form action="{{ route('showproductdetails2') }}" method="get"> @csrf <button type="submit" class="btn btn-success" style="width: 100%">Place Order</button></form></td>
    <td>
        <form action="{{ route('logout') }}" method="get"> @csrf <button type="submit" class="btn btn-danger" style="width: 100%">Logout</button></form>
    </td>
</tr>
<tr>

    <td colspan="4" style="width: 100%; height:100%;">
        @if($message=Session::get('success'))
        <div class="alert alert-success">

            <strong>{{$message}}</strong>
        </div>
        @endif

            <table>
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                <tr style="height:4vh">
                    <h2><u>Product Details<u></h2>
                </tr>
                <tr style="height:6vh">
                    <td>
                        <h4>Name : {{ $product->name }}</h4>
<input hidden="true" type="text" name="productName" value="{{ $product->name }}">
                    </td>
<input type="text" hidden="true" name="detail" value="{{ $product->detail }}">
                </tr>
                <tr style="height:6vh">
                    <td>
                        <h4>Employee </h4>
                        <select name="employeeEmail">
                            @foreach ($employee as $e)

                                <option value={{ $e->email }}>
                                    {{ $e->email }}

                               </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr style="height:6vh">
                    <td><h4>Price : {{ $product->price }}</h4></td>
                    <input type="text" hidden="true" name="price" value="{{ $product->price }}">

                </tr>
                <tr style="height:6vh">
                    <td><button type="submit" class="btn btn-info">Order<a></td>
                </tr>
                </form>
            </table>
    </td>
</tr>

</table>
</div>

@endsection
