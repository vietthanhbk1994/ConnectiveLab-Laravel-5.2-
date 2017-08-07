<!--/*
         * ----------------------------
         * CREATE: Pham Thi Duyen
         * DATE: 03/08/2016
         * CONTENT: front-end Technology
         * ----------------------------
         */-->
<div id='techonologies' >
    <section id="themo_service_block_1" class=" service-blocks-horiz  light-text"  >
        <div class='container'>
            <div class="row">
                <div class="section-header col-xs-12 centered">
                    <h2>TECHNOLOGIES IN CONNECTIVE LAB</h2>
                    <p>List and details of techonologies that was used in CONNECTIVE LAB</p>
                </div><!-- /.section-header -->        
            </div><!-- /.row -->   
            <div id="owl-carousel">                
                @foreach($technologies as $technology)                        
                <div class="image">
                    <a href="{{$technology->link}}" data-parent='slides'>
                    <img src='{!! URL::to("uploads/$technology->image") !!}' class=""/>
                    </a>
                </div>
                @endforeach
            </div> <!--carousel-->
        </div><!-- /.container -->    
    </section>
</div>