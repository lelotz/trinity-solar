<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Projects</h6>
            <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Solar Panels</li>
                    <li class="mx-2" data-filter=".second">Photo Volataic Systems</li>
                    <li class="mx-2" data-filter=".third">Solar Water Solutions</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            @include('widgets.project_card',
            [
                'title'=>'Solar Panels',
                'order'=>'first',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-6.jpg',
                'hd_image'=> 'images/gallery.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>'Photo Voltaic Systems',
                'order'=>'second',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/light-1.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>'Solar Water Solutions',
                'order'=>'third',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-4.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>'Solar Panels',
                'order'=>'first',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-3.jpg'
            ]),
            @include('widgets.project_card',
            [
                'title'=>'Solar Panels',
                'order'=>'second',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-2.jpg'
            ]),

            @include('widgets.project_card',
            [
                'title'=>'Solar Panels',
                'order'=>'first',
                'description'=> 'We Are pioneers of solar & renewable energy industry',
                'href'=>'',
                'image'=> 'images/b-gallery-1.jpg'
            ]),
        </div>
    </div>
</div>
<!-- Projects End -->
