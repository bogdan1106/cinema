



@extends('pages.layout')



@section('content')

<div class="container">
    <div class="row">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col" >
            <form action="/new" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input  type="text"  class="form-control" name="name">
                </div>
                <label for="name">Email</label>
                <div class="form-group">
                    <input type="text"  class="form-control" name="email">
                </div>
                <label for="name">Pass</label>
                <div class="form-group">
                    <input type="password"  class="form-control" name="password">
                </div>
                <button type="submit" class="btn-primary btn">Register</button>
            </form>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>


@endsection



