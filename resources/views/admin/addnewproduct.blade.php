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

        <td colspan="4" style="width: 100%; height:100%;">

                <table style="margin-left:40%">
                    <tr style="height: 40%; ">
                        @if($message=Session::get('success'))
                        <div class="alert alert-success">

                            <strong>{{$message}}</strong>
                        </div>
                        @endif

                    <form action="{{ route('storeproduct') }}" method="post">
                        @csrf
<tr>
    <td><h2>Add a new Product</h2><td>
</tr>
<tr>
<td>
    <label for="name">Name</label>
        <input type="text" class="form-control" name="name"/>
</td>
</tr>
<tr>
    <td>
        <label for="detail">Detail</label>
            <textarea class="form-control" name="detail"></textarea>
    </td>
    </tr>
    <tr>
        <td>
            <label for="price">Price</label>
                <input type="text" class="form-control" name="price"/>
        </td>
        </tr>
        <tr>
           <td> <button type="submit" class="btn btn-warning">Add Product</button></td>

        </tr>

                    </form>
                </table>

            <td>

    </tr>

</table>
</div>

@endsection
