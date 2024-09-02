<section id="why-us" class="why-us">
  <div class="container">

    <div class="section-title">
      <h2><span>{{ $whyus->title }}</span></h2>
      <p>{{ $whyus->subtitle }}</p>
    </div>

    <div class="row">

      <div class="col-lg-4">
        <div class="box">
          <span>{{ $whyus->list_1 }}</span>
          <h4>{{ $whyus->list_title_1 }}</h4>
          <p>{{ $whyus->list_description_1 }}</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box">
          <span>{{ $whyus->list_2 }}</span>
          <h4>{{ $whyus->list_title_2 }}</h4>
          <p>{{ $whyus->list_description_2 }}</p></div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box">
        <span>{{ $whyus->list_3 }}</span>
        <h4>{{ $whyus->list_title_3 }}</h4>
        <p>{{ $whyus->list_description_3 }}</p></div>
      </div>

    </div>

  </div>
</section>