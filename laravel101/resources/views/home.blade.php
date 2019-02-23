@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form  action="/add">
                    <div class="form-group">
                        <label class="sr-only" for="email">Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="enter titla here">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="pwd">description:</label>
                        <input type="text" class="form-control" name="desc" placeholder="enter description here">

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
