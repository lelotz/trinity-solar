<!-- Topbar Start -->
<div class="container-fluid bg-dark p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            
            <div class="h-100 d-inline-flex align-items-center me-4" href="{{ env('CLIENT_LOCATION') }}">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small><a href="{{ env('CLIENT_LOCATION') }}" target="_blank" style="text-decoration:none">
                    {{ env('CLIENT_ADDRESS') }}</a></small>
                </div>
            
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock text-primary me-2"></small>
                <small>{{ env('CLIENT_HOURS') }}</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <a href="{{ env('CLIENT_PHONE_REF') }}">
                    <small>{{ env('CLIENT_PHONE') }}</small>
                </a>
                
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="{{ env('CLIENT_FACEBOOK') }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href="{{ env('CLIENT_INSTAGRAM') }}" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
