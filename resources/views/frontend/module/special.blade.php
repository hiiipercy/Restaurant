<section id="specials" class="specials">
  <div class="container">

    <div class="section-title">
      <h2>Check our <span>Specials</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          @foreach ($special as $row)
          <div class="tab-pane {{ $loop->first ? 'active show' : '' }}" id="{{ $row->filter_name }}">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>{{ $row->title }}</h3>
                <p class="fst-italic">{{ $row->description }}</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('uploads/'.SPECIAL_AVATAR_PATH.$row->image) }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
</section>