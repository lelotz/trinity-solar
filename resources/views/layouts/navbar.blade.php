<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0 text-primary">{{env('APP_NAME')}}</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" 
    style="border:none; padding-left:5%">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="mobile-lang-button">@include('components.lang_button')</div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">{{__('site.home')}}</a>
            <a href="/about" class="nav-item nav-link">{{__('site.about')}}</a>
            <a href="/service" class="nav-item nav-link">{{__('site.services')}}</a>
            <a href="/project" class="nav-item nav-link">{{__('site.projects')}}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('site.pages')}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <!-- <a href="/feature" class="dropdown-item">{{__('site.feature')}}</a> -->
                    <a href="/quote" class="dropdown-item">{{__('site.free_quote')}}</a>
                    <a href="/team" class="dropdown-item">{{__('site.the_team')}}</a>
                    <a href="/testimonial" class="dropdown-item">{{__('site.testimonial')}}</a>
                    <!-- <a href="/404" class="dropdown-item">404 Page</a> -->
                
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">{{__('site.contact')}}</a>
        </div>
        <a href="/quote" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">{{__('site.get_a_quote')}}<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
