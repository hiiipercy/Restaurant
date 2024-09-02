<section id="about" class="about">
  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('{{ asset('uploads/'.ABOUT_AVATAR_PATH.$about->image) }}');">
        <a href="{{ $about->video_url }}" class="glightbox play-btn mb-4"></a>
      </div>

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

        <div class="content">
          <h3><strong>{{ $about->title }}</strong></h3>
          <p>
            {!! $about->description !!}</p>
        </div>

      </div>

    </div>

  </div>
</section>