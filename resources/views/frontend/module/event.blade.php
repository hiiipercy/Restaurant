<section id="events" class="events">
  <div class="container">

    <div class="section-title">
      <h2>Organize Your <span>Events</span> in our Restaurant</h2>
    </div>

    <div class="events-slider swiper">
      <div class="swiper-wrapper">

        @foreach ($event as $item)
        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{ asset('uploads/'.EVENT_AVATAR_PATH.$item->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>{{ $item->title }}</h3>
              <div class="price">
                <p>$<span>{{ $item->price }}</span></p>
              </div>
              <p class="fst-italic">
                {{ $item->description }}
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i>{{ $item->list_1 }}</li>
                <li><i class="bi bi-check-circle"></i>{{ $item->list_2 }}</li>
                <li><i class="bi bi-check-circle"></i>{{ $item->list_3 }}</li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>
        </div>
        

        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>
        </div> --}}

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>