@foreach ($data['about'] as $about)
<section id="about" class="about-section section-padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="author-image">
                      <img src="{{ url($about->pic) }}" alt="Author Image"> <!--=== author image ===-->
                      <div class="social-icon"> <!--=== author social icons ===-->
                          <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>

                      </div>
                  </div>

              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="author-info">
                      <ul> <!--=== author inf0 ===-->
                          <li>Complete Name: <span>{{ $about->complate_name }}</span></li>
                          <li>Date of birth: <span> {{ $about->date_birth }}</span></li>
                          <li>Nationality: <span> {{ $about->nationality }}</span></li>
                          <li>Email: <span>{{ $about->email }}</span></li>
                          <li>Phone: <span>{{ $about->number_phone }}</span></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <div class="about-author">
                      <h4>About Me</h4>
                      {!!html_entity_decode($about->aboutme)!!}
                  </div>
              </div>
          </div>
      </div>
  </section>
   @endforeach
