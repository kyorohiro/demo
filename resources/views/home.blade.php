@extends('layouts.app')

@section('content')

<div class="container">
    <?php
        $name = $user->name;
        $email = $user->email;
        $email[1] = "*";
        $email[2] = "*";
    ?>

   <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        {{$name}} <br>
                        {{$email}}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
