<section id="gallery" class="gallery">
  <div class="container-fluid">

    <div class="section-title">
      <h2>Some photos from <span>Our Restaurant</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row g-0">
      @foreach ($gallery as $item)
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('uploads/'.EVENT_AVATAR_PATH.$item->image) }}" class="gallery-lightbox">
              <img src="{{ asset('uploads/'.EVENT_AVATAR_PATH.$item->image) }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>    
      @endforeach

      {{-- <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="{{ asset('/') }}frontend/assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
            <img src="{{ asset('/') }}frontend/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div> --}}

    </div>

  </div>
</section>