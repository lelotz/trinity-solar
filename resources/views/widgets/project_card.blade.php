<div class="col-lg-4 col-md-6 portfolio-item {{ $order }}">
    <div class="portfolio-img rounded overflow-hidden">
        <img class="img-fluid" src="{{ $image }}" alt="">
        <div class="portfolio-btn">
            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ $hd_image ?? $image}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ $href }}"><i class="fa fa-link"></i></a>
        </div>
    </div>
    <div class="pt-3">
        <p class="text-primary mb-0">{{$title}}</p>
        <hr class="text-primary w-25 my-2">
        <h5 class="lh-base">{{ $description }}</h5>
    </div>
</div>