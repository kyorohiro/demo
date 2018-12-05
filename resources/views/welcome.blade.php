@extends('layouts.app')

@section('content')
<div class="container-fluid" 
    style="background:url(/images/header-bg-beach.jpg) no-repeat center center;height:300px;background-size:cover;">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-top:80px;" align=center>
                  <div style="color:#FFFFFF;font-size:42px;font-weight: bold;text-shadow: 1px 1px 1px #222222;">繋がるを繋げる</div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background:#CCCCCC;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" >
                  <div style="color:#005588;font-size:26px;font-weight: normal;" align=center>どちらですか?</div>
            </div>
        </div>
         <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-12"  align=center>
                <div class="request-button">依頼したい</div>
                <div class="receive-button">受注したい</div>
          </div>
    </div>
</div>
@endsection