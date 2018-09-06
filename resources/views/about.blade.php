@extends('layouts.base')

@section('content')

<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <br>
                <div class="section-heading mx-auto section-padding-50-0">
                    <h3 class="text-center">{{$aboutUs->title}}</h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" >
            <div class="col-12 col-md-6">
                <div class="about-content">
                    <div class="section-heading wow bounceInUp size-16px">
                        <h5>{{$aboutUs->subtitle}}</h5>
                        <p>{!!$aboutUs->content!!}</p>                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail">
                    <img src="{{$aboutUs->image}}" class="img img-fluid rounded wow bounceInDown">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->


@endsection