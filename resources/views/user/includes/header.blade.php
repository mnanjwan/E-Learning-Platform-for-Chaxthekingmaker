<div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
    <div class="media media-card align-items-center">
        <div class="media-img media--img media-img-md rounded-full">
            <img class="rounded-full" src="{{asset('user_asset/images/small-avatar-1.jpg')}}"
                alt="Student thumbnail image" />
        </div>
        <div class="media-body">
            <h2 class="section__title fs-30">Howdy, {{auth()->user()->surname ." ". auth()->user()->firstname}}</h2>
            <div class="rating-wrap d-flex align-items-center pt-2"></div>
            <!-- end rating-wrap -->
        </div>
        <!-- end media-body -->
    </div>
    <!-- end media -->
</div>