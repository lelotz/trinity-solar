<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">{{__('site.our_projects')}}</h6>
            <h1 class="mb-4">{{__('site.our_projects_title')}}</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">{{__('site.all')}}</li>
                    <li class="mx-2" data-filter=".first">{{__('site.solar_panels')}}</li>
                    <li class="mx-2" data-filter=".second">{{__('site.photo_volataic_systs')}}</li>
                    <li class="mx-2" data-filter=".third">{{__('site.solar_water_solutions')}}</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            @include('widgets.project_card',
            [
                'title'=> __('site.solar_panels'),
                'order'=>'first',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-6.jpg',
                'hd_image'=> 'images/gallery.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>__('site.photo_volataic_systs'),
                'order'=>'second',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/light-2.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>__('site.solar_water_solutions'),
                'order'=>'third',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-4.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>__('site.photo_volataic_systs'),
                'order'=>'second',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/light-13.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>__('site.solar_panels'),
                'order'=>'first',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-3.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>__('site.solar_water_solutions'),
                'order'=>'third',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-1.jpg'
            ]),
        </div>
    </div>
</div>
<!-- Projects End -->
