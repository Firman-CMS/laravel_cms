<section id="services" class="services-section section-padding">
    <div class="container">
       <h2 class="section-title">What I Offer</h2> <!-- section title -->
        <div class="row">
        @foreach ($data['service'] as $srvc)
          @if ($srvc->status == 1)
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="single-services text-center">
                    <div class="servise-icon">
                        <i class="fa {{ $srvc->icon }}"></i>
                    </div>
                    <h4>{{ $srvc->service }}</h4>
                    <p>{{ $srvc->description }}</p>
                </div>
            </div>
          @endif
        @endforeach

        </div>
    </div>
</section>
