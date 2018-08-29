@extends('layouts.base')

@section('content')

<!-- ##### Content Area Start ##### -->

<div class="cryptos-feature-area section-padding-100-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <br>
                <div class="section-heading mx-auto section-padding-50-0">
                    <h3 class="text-center">Aprende</h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">                
                <div class="d-flex flex-row mt-2">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation" style="letter-spacing: 1px">
                                <li class="nav-item">
                                    <a href="#tab_1" class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab_1">{{$osteoarthritis->title}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_2" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_2">{{$osteoporosis->title}}</a>
                                </li>                                
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$osteoarthritis->title}}</h2>
                                    <br>
                                    {!!$osteoarthritis->content!!}
                                </div>
                                <div class="tab-pane fade" id="tab_2" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$osteoporosis->title}}</h2>
                                    <br>
                                    {!!$osteoporosis->content!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection