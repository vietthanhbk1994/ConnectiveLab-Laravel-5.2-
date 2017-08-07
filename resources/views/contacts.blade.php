<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 02/08/2016
    * CONTENT: Show contact
    *----------------------------
    */-->
<style scoped>
    #contact{margin-top: -2px;}
    section#themo_conversion_form_1{padding-top:90px; padding-bottom:75px;background-image: url('uploads/geometry.png');} 
</style>
<div class="meta-border content-width"></div>
<div id='contact' >
    <section id="themo_conversion_form_1" class=" conversion-form "  >
        <div class='container'>
            <div class="row">
                <div class="section-header col-sm-offset-3 col-sm-6 centered">
                    <h2>Contact with us</h2>
                </div><!-- /.section-header -->
            </div><!-- /.row -->
            <div class="row">
                <div class="">

                    <div class="col-sm-8">
                    @include('flash::message')
                    @include('adminlte-templates::common.errors')
                        {{ Form::open(['route' => 'contacts.store','class'=>'frm-show-form','id'=>'form-contacts']) }}
                        <div class="frm_forms " id="frm_form_3_container">
                            <div class="frm_form_field form-field col-sm-6">
                                {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'Name']) }}
                            </div>
                            <div class="frm_form_field form-field col-sm-6" >
                                {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Email Address']) }}
                            </div>
                            <div class="frm_form_field form-field col-sm-12" style="padding-top: 2%;padding-bottom: 2%;">
                                {{ Form::text('company', null, ['class' => 'form-control','placeholder'=>'Name company']) }}
                            </div>
                        </div>
                        <div class="" >
                            <div class="col-sm-12">
                                <div class="frm_forms with_frm_style" id="frm_form_3_container">
                                    <div class="frm_form_field form-field  frm_none_container">
                                        {{ Form::textarea('content', null, ['class'=>'form-control', 'rows'=>'6','placeholder'=>'Content','id'=>'field_2ywico']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="" style="margin-top: 4%;">
                                    {{ Form::submit('Send', ['class' => 'form-control btn btn-primary']) }}
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>                    
                    <div class="col-sm-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3833.83969337352!2d108.1477255!3d16.0738064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x714561e9f3a7292c!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBCw6FjaCBLaG9hIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1470281701124" width="370" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->    
    </section>
</div>

