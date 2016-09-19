@extends('layouts.master')

@section('content')

<style type="text/css">
    .input-group label {
        text-align:left;
    } 
</style>

<form action="" method="post">
     <div class ="input-group">
                <label for="name">
                    Your name
                </label>
                <input type="text" name="name" id="name" placeholder="your name"/>
            </div>
            
                 <div class ="input-group">
                <label for="password">
                    Password
                </label>
                <input type="password" name="password" id="password" placeholder="your password"/>
            </div>
            
            <button type="submit">Submit</button>
</form>

@endsection