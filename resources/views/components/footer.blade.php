<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('site.address')}}</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                <a href="{{ env('CLIENT_LOCATION') }}" target="_blank">{{ env('CLIENT_SHORT_ADDRESS') }}</a>
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                    <a href="{{ env('CLIENT_PHONE_REF') }}">{{ env('CLIENT_PHONE') }}</a>
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                    <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}?subject=Subject%20of%20Email&body=Body%20of%20Email">{{ env('MAIL_FROM_ADDRESS') }}
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('site.quick_links')}}</h5>
                <a class="btn btn-link" href="">{{__('site.about_us')}}</a>
                <a class="btn btn-link" href="">{{__('site.contact_us')}}</a>
                <a class="btn btn-link" href="">{{__('site.our_services')}}</a>
                <a class="btn btn-link" href="">{{__('site.terms_and_conds')}}</a>
                <a class="btn btn-link" href="">{{__('site.support')}}</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('site.project_gallery')}}</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="images/gallery-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="images/gallery-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="images/gallery-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="images/gallery-4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="images/gallery-5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="images/gallery-6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">{{__('site.newsletter')}}</h5>
                <p>{{__('site.newsletter_sub')}}</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">{{__('site.sign_up')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    {{Carbon\Carbon::now()->year}} &copy; <a href="#">{{ env('APP_NAME') }}</a>, {{__('site.all_rights_reserved')}}.
                </div>
                <div class="col-md-6 text-center text-md-end">
                {{__('site.designed_by')}} <a href="">Hi-Lo Solutions</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
