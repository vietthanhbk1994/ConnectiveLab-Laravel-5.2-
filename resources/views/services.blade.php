
<section id="themo_tour_1" class="floated-blocks">
    
    <div id='services' >
        <section id="themo_tour_1_0" class=" float-block img-left " style="height: auto;" >
            <div class='container'>                
                <div class="section-header col-xs-12 centered">
                    <h1>Services</h1>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="gen">
                            <img  class="img" src="{{ URL::to('/uploads') }}/{{$service->image }}" alt="service">
                            <h3>{{$service->name}}</h3>
                            <p class="conten-text">{{$service->content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>   
            </div><!-- /.container --> 
        </section>
    </div>
</section>