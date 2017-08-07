<div id="main-flex-slider" class="flexslider">
    <ul class="slides">
        <li>
            <div class="slider-bg light-text themo_slider_0" style=" background-image:url('uploads/home-slider-app-portrait.jpg');    "  >
                <div class='container'>                        
                    <div class="row lrg-txt ">
                        <h1 class="slider-title  hide-animation">Connect delicated software engineers </h1>
                        <h1 class="slider-subtitle  hide-animation">With potential customers  </h1>
                        <div class='page-title-button  hide-animation'><a href="#contact"  class="btn btn-standard   ">Contact now</a></div>                            
                    </div><!-- /.row -->
                </div><!-- /.container -->                    
            </div><!-- /.slider-bg -->
        </li>
        
    </ul>
</div><!-- /.main-flex-slider -->
</div>
<script>
    jQuery(window).load(function () {
        adjust_padding_transparent_header('#main-flex-slider .themo_slider_0');
        adjust_padding_transparent_header('#main-flex-slider .themo_slider_1');
        start_flex_slider('#main-flex-slider', 'fade', 'swing',
                true, true, 4000, 550,
                false, true, true, true);
    });
</script>