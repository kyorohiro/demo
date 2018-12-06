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
                    <div class="card-header">登録情報</div>
                    <div class="card-body">
                        NAME : {{$name}} <br>
                        EMAIL: {{$email}}<br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">プロフィール</div>
                    <div class="card-body">
                        adfasdfasdfasdfasdfasdfasdf<br>
                        adfasdfasdfasdfasdfasdfasdf<br>
                        
                        adfasdfasdfasdfasdfasdfasdf<br>
                        adfasdfasdfasdfasdfasdfasdf<br>
                        adfasdfasdfasdfasdfasdfasdf<br>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <div class="container">
        <div class="list-group">
          <div class="list-group-item active">契約一覧</div>
          <a href="#" class="list-group-item">xxxxxxの授業</a>
          <a href="#" class="list-group-item">yyyの授業</a>
        </div>
    </div>


    <br>
    <br>
    <div class="container">
        <div class="list-group">
          <div class="list-group-item active">相談から契約まで</div>
          <a href="#" class="list-group-item">mmmの授業</a>
          <a href="#" class="list-group-item">nnnの授業</a>
        </div>
    </div>

</div>
@endsection
