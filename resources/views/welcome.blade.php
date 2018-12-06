@extends('layouts.app')

@section('content')
<div class="container-fluid" 
    style="background:url(/images/header-bg-beach.jpg) no-repeat center center;height:400px;background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="margin-top:80px;" align=center>
                  <div style="color:#FFFFFF;font-size:42px;font-weight: bold;text-shadow: 1px 1px 1px #222222;">繋がるを繋げる</div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background:#EEEEF3; min-height:200px">
    <div class="container">
        <div class="row justify-content-center" style="background:#EEEEF3;">
            <div class="col-md-4" style="margin-top:50px;">
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
</div>

<div class="container" style="margin-top:20px;">
        <div class="col-12">
                <div class="card-header" style="text-align: center;">新着の仕事</div>

                <div class="row">
                  <div class="col-sm-4">
                    <div class="card">
                      <img class="card-img-top" src="/images/accounting-bill-black-53621_mini.jpg" alt="Card image cap" style="height:200px;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <img class="card-img-top" src="/images/book-education-graphing-paper-167682_mini.jpg" alt="Card image cap" style="height:200px;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="card">
                      <img class="card-img-top" src="/images/cell-human-science-45239_mini.jpg" alt="Card image cap" style="height:200px;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>

                </div>
        </div>
</div>




<div class="container" style="height:200px;">
</div>




<div class="container" style="margin-top:20px;min-height:400px;">
        <div class="col-12">
                <div class="card-header" style="text-align: center;">よくある質問</div>

                <div class="row">
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>

                </div>
        </div>
</div>



<div class="container" style="height:200px;">
</div>

    
@endsection