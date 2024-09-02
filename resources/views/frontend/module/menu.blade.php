<section id="menu" class="menu">
  <div class="container">

    <div class="section-title">
      <h2>Check our tasty <span>Menu</span></h2>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
          <li data-filter="*" class="filter-active">Show All</li>
          <li data-filter=".filter-starters">Starters</li>
          <li data-filter=".filter-salads">Salads</li>
          <li data-filter=".filter-specialty">Specialty</li>
        </ul>
      </div>
    </div>

    <div class="row menu-container">
      @foreach ($menu as $item)
        <div class="col-lg-6 menu-item {{ $item->filter_name }}">
          <div class="menu-content">
            <a href="#">{{ $item->title }}</a><span>${{ $item->price }}</span>
          </div>
          <div class="menu-ingredients">
            {{ $item->description }}
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>