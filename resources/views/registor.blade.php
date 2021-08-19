@extends('base')
@section('main')

<div class="container" style="width: 40%; margin-top:15%">

<div class="col-sm-8 offset-sm-2">
    <h1>Registor Customer</h1>
    <div>
        @if($errors -> any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
        </ul>
        </div>
        <br />
        @endif
    </div>

<form method="post" action="{{ route('store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name"/>
    </div>


             <label for="email">Email:</label>
             <input type="text" class="form-control" name="email"/>
             <label for="gender">Gender</label>
             <select id="gender" name="gender">
               <option value="male">Male</option>
               <option value="female">Female</option>

             </select><br>
             <label for="address">Address</label>
             <input type="text" class="form-control" name="address"/>
               <label for="mobile">Mobile</label>
             <input type="text" class="form-control" name="mobile"/>
             <label for="password">Password</label>
             <input type="password" class="form-control" name="password"/>
             <div style="width: 100%; text-align:center">

                <button type="submit" style="margin-bottom: 20px" class="btn btn-primary">SignUp</button><br>
                <a href="{{ route('login') }}" type="button" class="btn btn-success">Go To Login</a>

             </div>


     </form>
<div>
@endsection
