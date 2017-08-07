<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: View show feedback
    *----------------------------
    */-->
<style scoped>
    section#themo_service_block_1{background-color:#273741;} section#themo_service_block_1{padding-top:80px; padding-bottom:80px}
</style>
<div id='feedbacks' >
    <section id="themo_thumbnail_slider_2" class=" service-blocks-horiz  light-text"  >
        <div class='container'>
            <div class="row">
                <div class="section-header col-xs-12 centered">
                    <h2>Feedbacks</h2>
                </div><!-- /.section-header -->        
            </div><!-- /.row -->   
            <div id="owl-feedbacks">                
                @foreach($feedbacks as $feedback)
                <div class="centered">
                        <p class="feedback-content">"{{ $feedback->content }}"</p>
                    <div class="" style="width: 100px;margin: auto;">
                        <img src='{!! URL::to("uploads/$feedback->image") !!}' class="img-circle img-responsive" />
                    </div>
                        <div class="feedback-name">
                        <p>{{ $feedback->name_client }} <br/><span>{{ $feedback->company }}</span></p>
                    </div>
                </div>
                @endforeach
            </div> <!--carousel-->
        </div><!-- /.container -->    
    </section>
</div>