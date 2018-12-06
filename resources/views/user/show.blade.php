@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報 更新</div>

                <div class="card-body">
                    Name : {{$user->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
