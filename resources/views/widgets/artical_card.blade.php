<!-- resources/views/widgets/artical_card.blade.php -->
<div class="col-md-7 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item rounded overflow-hidden">
        <div style="padding-bottom: 20px;">
            <img class="img-fluid" src="{{ $img }}" style="max-height: 300px; width: 100%; object-fit: cover;" alt="">
        </div>
        <div class="position-relative p-4 pt-0">
            <div class="d-flex align-items-center mb-3">
                <div class="service-icon me-3">
                    <i class="fa {{ $icon }} fa-3x"></i>
                </div>
                <div class="text-container">
                    <h4 class="mb-3">{{ $title }}</h4>
                    <p class="mb-0" style="margin-left: 0;">{{ $description }}</p>
                </div>
            </div>
            <a class="small fw-medium" href="{{ $href }}" style="display: block; margin-top: 1rem; margin-left: 4rem;">Read More<i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</div>
