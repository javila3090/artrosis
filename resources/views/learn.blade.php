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
                                @if(isset($osteoarthritis) && $osteoarthritis!='')
                                <li class="nav-item">
                                    <a href="#tab_1" class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab_1">{{$osteoarthritis->title}}</a>
                                </li>
                                @endif
                                @if(isset($osteoporosis) && $osteoporosis!='')
                                <li class="nav-item">
                                    <a href="#tab_2" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_2">{{$osteoporosis->title}}</a>
                                </li>
                                @endif
                                @if(isset($osteoarthritis_tips) && $osteoarthritis_tips!='')
                                <li class="nav-item">
                                    <a href="#tab_3" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_3">{{$osteoarthritis_tips->title}}</a>
                                </li>
                                @endif                                
                                @if(isset($osteoporosis_tips) && $osteoporosis_tips!='')
                                <li class="nav-item">
                                    <a href="#tab_4" class="nav-link" data-toggle="tab" role="tab" aria-controls="tab_4">{{$osteoporosis_tips->title}}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                @if(isset($osteoarthritis) && $osteoarthritis!='')
                                <div class="tab-pane fade show active size-16px" id="tab_1" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$osteoarthritis->title}}</h2>
                                    <br>
                                    {!!$osteoarthritis->content!!}
                                </div>
                                @endif
                                @if(isset($osteoporosis) && $osteoporosis!='')
                                <div class="tab-pane fade size-16px" id="tab_2" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$osteoporosis->title}}</h2>
                                    <br>
                                    {!!$osteoporosis->content!!}
                                </div>
                                @endif
                                @if(isset($osteoarthritis_tips) && $osteoarthritis_tips!='')
                                <div class="tab-pane fade size-16px" id="tab_3" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$osteoarthritis_tips->title}}</h2>
                                    <br>
                                    {!!$osteoarthritis_tips->content!!}
                                </div>
                                @endif
                                @if(isset($osteoporosis_tips) && $osteoporosis_tips!='')
                                <div class="tab-pane fade size-16px" id="tab_4" role="tabpanel" style="padding: 20px;">
                                    <h2>{{$osteoporosis_tips->title}}</h2>
                                    <br>
                                    {!!$osteoporosis_tips->content!!}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection