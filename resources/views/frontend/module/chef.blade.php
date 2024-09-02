<section id="chefs" class="chefs">
  <div class="container">

    <div class="section-title">
      <h2>Our Proffesional <span>Chefs</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">

    @foreach ($chef as $item)
    <div class="col-lg-4 col-md-6">
      <div class="member">
        <div class="pic"><img src="{{ asset('uploads/'.EVENT_AVATAR_PATH.$item->image) }}" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>{{ $item->name }}</h4>
          <span>{{ $item->profession }}</span>
          <div class="social">
            <a href="{{ $item->tw_url }}" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="{{ $item->fb_url }}" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="{{ $item->ins_url }}" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="{{ $item->lin_url }}" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    </div>

  </div>
</section>