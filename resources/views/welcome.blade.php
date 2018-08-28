@extends('layouts.base')

@section('content')

@include('partials.banner')

<!-- ##### Course Area Start ##### -->
@if($whyus)
<div class="cryptos-feature-area section-padding-100-0">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="section-heading mx-auto">
                    <h3 class="text-center">{{$whyus->title}}</h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        @if($whyusBanners)
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 text-justify wow bounceInUp">
                <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($whyusBanners as $v)
                    <!-- Single Accordian Area -->
                    <div class="panel single-accordion">
                        <h6><a role="button" class="{{$i==1 ? '' : 'collapsed'}} size-18px" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}">{{$v->title}}
                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                        <div id="collapse{{$i}}" class="accordion-content collapse {{$i==1 ? 'show' : ''}} size-16px" style="min-height:100px;">
                            {!!$v->caption!!}
                        </div>
                    </div>
                    @php $i++; @endphp
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-10 offset-md-1 text-center wow bounceInLeft section-padding-30">
                <div class="size-14px">{!!$whyus->content!!}</div>
            </div>
        </div>
        @endif
    </div>
</div>
@endif

<!-- ##### Blog Area Start ##### -->
<!--<section class="cryptos-blog-area section-padding-100-50">
    <div class="container-fluid">
        <div class="row">
            @if($team)
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="section-heading text-center mx-auto">
                        <h3>{{$team->title}}</h3>
                        <div class="heading-line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 text-center wow bounceInRight">
                        <img src="{{$team->image}}" class="img rounded"/>
                    </div>
                    <div class="col-12 col-md-10 offset-md-1 text-center wow bounceInLeft section-padding-30">
                        <div class="size-14px">{!!$team->content!!}</div>
                    </div>
                </div>
            </div>
            @endif
            @if($whyus)
            <div class="col-md-6 col-12 resp-padding-30-0">
                <div class="row">
                    <div class="section-heading text-center mx-auto">
                        <h3>{{$whyus->title}}</h3>
                        <div class="heading-line"></div>
                    </div>
                </div>
                @if($whyusBanners)
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 text-justify wow bounceInLeft">
                        <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($whyusBanners as $v)
                            
                            <div class="panel single-accordion">
                                <h6><a role="button" class="{{$i==1 ? '' : 'collapsed'}}" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}">{{$v->title}}
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                                <div id="collapse{{$i}}" class="accordion-content collapse {{$i==1 ? 'show' : ''}}">
                                    {!!$v->caption!!}
                                </div>
                            </div>
                            @php $i++; @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-10 offset-md-1 text-center wow bounceInLeft section-padding-30">
                        <div class="size-14px">{!!$whyus->content!!}</div>
                    </div>
                </div>
                @endif
            </div>
            @endif
        </div>
    </div>
</section>-->

<section class="cryptos-cool-facts-area section-padding-100-50" style="background-color: #f2f2f2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="cryptos-cool-facts-area wow bounceInUp">
                    <div class="row">

                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="single-cool-fact text-center mb-100">
                                <h3>+<span class="counter">1000</span></h3>
                                <div class="line"></div>
                                <h6>Casos atendidos</h6>
                            </div>
                        </div>

                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="single-cool-fact text-center mb-100">
                                <h3><span class="counter">100</span>%</h3>
                                <div class="line"></div>
                                <h6>Profesionalidad y compromiso</h6>
                            </div>
                        </div>

                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="single-cool-fact text-center mb-100">
                                <h3><span class="counter">100</span>%</h3>
                                <div class="line"></div>
                                <h6>Tratamiento garantizado</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->
@endsection
