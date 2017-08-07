<div id='members' >
    <section id="themo_service_block_1" classs=" service-blocks-horiz  light-text"  >
        <div class='container'>
            <div class="row">
                <div class="section-header col-xs-12 centered">
                    <h2 class = "text-white">Members</h2>
                </div><!-- /.section-header -->        
            </div><!-- /.row -->   
            <div id="owl-member">                
                @foreach($members as $member)
                <div class="item text-center">@if($member->image == "")
                    <img src="{{url('/uploads/no-image.jpg')}}" class='img-responsive'>
                    @else
                    <img src="{{url('/uploads/'.$member->image)}}" class='img-responsive'>
                    @endif
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h5 class = "text-white">{{$member->name}}</h5>
                            <p class = "text-white">{{$member->skills}}<p>
                        </div>
                    </div>
                </div>
                @endforeach   
            </div> <!--carousel-->
        </div><!-- /.container -->    
    </section>
</div>