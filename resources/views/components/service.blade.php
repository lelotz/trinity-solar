<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">{{__('site.our_services')}}</h6>
            <h1 class="mb-4">{{__('site.our_services_title')}}</h1>
        </div>
        <div class="row g-4" style="justify-content:center">

            @include('widgets.artical_card',[
                'title'=>" {{__('site.solar_panel_inst')}}",
                'img'=>'images/b-gallery-1.jpg',
                'description'=>"{{__('site.solar_panel_inst_sub')}}",
                'href'=>''
                ])
            
            @include('widgets.artical_card',
            [
                'title'=>"{{__('site.solar_panel_comps')}}",
                'img'=>'images/b-gallery-2.jpg',
                'description'=>"{{__('site.solar_panel_comps_sub')}}",
                'href'=>''
            ])

            @include('widgets.artical_card',
            [
                'title'=>"{{__('site.photo_volataic_systs')}}",
                'img'=>'images/b-gallery-3.jpg',
                'description'=>"{{__('site.photo_volataic_systs_sub')}}",
                'href'=>''
            ])

        <!-- </div>
        <div class="row g-4" style="justify-content:center"> -->
        @include('widgets.artical_card',
            [
                'title'=>"{{__('site.solar_project_consulting')}}",
                'img'=>'images/b-gallery-4.jpg',
                'description'=>"{{__('site.solar_project_cons_sub')}}",
                'href'=>''
            ])

            @include('widgets.artical_card',
            [
                'title'=>"{{__('site.solar_water_solutions')}}",
                'img'=>'images/b-gallery-5.jpg',
                'description'=>"{{__('site.solar_Water_solutions_sub')}}",
                'href'=>''
            ])
         

        </div>
    </div>
</div>
<!-- Service End -->
