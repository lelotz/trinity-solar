<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Services</h6>
            <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1>
        </div>
        <div class="row g-4" style="justify-content:center">

            @include('widgets.artical_card',[
                'title'=>'Solar Panel Installation',
                'img'=>'images/b-gallery-1.jpg',
                'description'=>'We meticulously design and implement customized solar solutions tailored to your energy needs.',
                'href'=>''
                ])
            
            @include('widgets.artical_card',
            [
                'title'=>'Solar Components Supplier',
                'img'=>'images/b-gallery-2.jpg',
                'description'=>'Energize your projects with our comprehensive Supply of Solar Components service.',
                'href'=>''
            ])

            @include('widgets.artical_card',
            [
                'title'=>'Photo Voltaic Systems',
                'img'=>'images/b-gallery-3.jpg',
                'description'=>'Expert integration of diverse solar technologies, including backup systems, streetlights, and advanced hybrids',
                'href'=>''
            ])

        <!-- </div>
        <div class="row g-4" style="justify-content:center"> -->
        @include('widgets.artical_card',
            [
                'title'=>'Solar Project Consulting',
                'img'=>'images/b-gallery-4.jpg',
                'description'=>'Navigating the complexities of solar projects requires expertise, and our consulting services are
                            here to guide you every step of the way',
                'href'=>''
            ])

            @include('widgets.artical_card',
            [
                'title'=>'Solar Water Solutions',
                'img'=>'images/b-gallery-5.jpg',
                'description'=>'Empowering homes and businesses with eco-friendly water pumping and heating solutions powered by the sun.',
                'href'=>''
            ])
         

        </div>
    </div>
</div>
<!-- Service End -->
