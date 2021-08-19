@extends('base')
@section('main')


<div class="container" style="width: 30%; margin-top:25%">
    <h1 class="display">E-Store</h1>
<div>


        @if($message=Session::get('error'))
            <div class="alert alert-danger">

                <strong>{{$message}}</strong>
            </div>
            @endif

            @if($message=Session::get('success'))
            <div class="alert alert-success">
                
                <strong>{{$message}}</strong>
            </div>
            @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
        </div><br />
        @endif
       <div>
         <form method="post" action="{{ url('/checklogin') }}">
             {{ csrf_field() }}

                 <label for="email">Email</label>
                 <input type="email"  class="form-control" name="email"/>


                 <label for="password">Password:</label>
                 <input type="password" class="form-control" name="password"/>
<div style="width: 100%; text-align:center">

               <button type="submit" style="margin-bottom: 20px" class="btn btn-primary">Login</button><br>
               <a href="{{ url('registor') }}" type="button" class="btn btn-success">Registor Now</a>

            </div>
         </form>
     </div>
    </div>

@endsection

