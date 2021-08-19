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
        <td colspan="4" style="width: 100%; height:100%;">

            <a href="{{ route('addnewemployee') }}" class="btn btn-primary" style="position:relative">Enroll new Employee</a>
            @php
                $i=0;
            @endphp
            <br>
            <table border="1" style="width: 100%; text-align:center; margin-top:2vh">
                <tr style="border: 1px black solid; height:5vh">
                    <th style="border: 1px black solid">No</th>
                    <th style="border: 1px black solid">Name</th>
                    <th style="border: 1px black solid">Email</th>
                    <th style="border: 1px black solid">Mobile</th>
                    <th style="border: 1px black solid">Action</th>
                </tr>
                @foreach ($employee as $e )
                <tr style="border: 1px black solid; height:5vh">
                    <td style="border: 1px black solid">{{ ++$i }}</td>
                    <td style="border: 1px black solid">{{ $e->name }}</td>
                    <td style="border: 1px black solid">{{ $e->email }}</td>
                    <td style="border: 1px black solid">{{ $e->mobile }}</td>
                    <td>
                        <form method="post" action="{{ route('employees.destroy', $e->id) }}">
                            @method('DELETE')
                            @csrf
                        <a href="{{ route('employees.show', $e->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('employees.edit', $e->id) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>

            <td>
    </tr>

</table>
</div>

@endsection
