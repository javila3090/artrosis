@extends('layouts.base')

@section('content')
<script type='text/javascript'>var centreGot = false;</script>

{!! $map['map_js'] !!}

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <br>
                <div class="section-heading mx-auto section-padding-50-0">
                    <h3 class="text-center">Contacto</h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Contact Information -->
            <div class="col-12 col-lg-6">
                <div class="contact-information mb-100">

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-map"></i>
                        </div>
                        <p>{!!$companyInfo->address!!}</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p>{!!$companyInfo->phone_1!!} @if($companyInfo->phone_2) / {!!$companyInfo->phone_2!!}@endif</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p>{!!$companyInfo->email_1!!}<br>{!!$companyInfo->email_2!!}</p>
                    </div>                        

                    <!-- Contact Social Info -->
                    <div class="contact-social-info d-flex mt-50 mb-50 text-center">
                        <a href="https://facebook.com/{!!$companyInfo->facebook!!}"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/{!!$companyInfo->twitter!!}"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                        <a href="https://instagram.com/{!!$companyInfo->instagram!!}"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    </div>


                </div>
            </div>

            <!-- Contact Form Area -->
            <div class="col-12 col-lg-6">
                <div class="contact-form-area mb-100">
                    <div id="sendmessage">
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <b>¡Gracias por escribirnos!</b> Su mensaje será respondido a la mayor brevedad posible.
                        </div>
                    </div>
                    <div id="errormessage"></div>                    
                    <form action="" method="post" class="form-horizontal contactForm" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 carácteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Su email" data-rule="email" data-msg="Por favor ingrese un correo electrónico válido" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 carácteres de asunto" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input class="form-control datepicker" name="contact_date" placeholder="¿Cuando desea ser contactado?" autocomplete="off">
                        </div>                  
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor ingrese su mensaje" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default btn-2 mt-30 btn-submit" type="submit">Enviar mensaje</button>
                            <button type="button" class="btn btn-default btn-2 mt-30 btn-sending" disabled="true" style="display: none;">Enviando mensaje <i class="fa fa-spinner fa-spin"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<div class="contact-map-area section-padding-0-100 container">
    <!-- ##### Google Maps ##### -->
    <div class="map-area  box-shadow">
        {!! $map['map_html'] !!}
    </div>
</div>
<!-- ##### Contact Area End ##### -->
@endsection