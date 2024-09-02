<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide -->
                @foreach ($hero as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style="background-image: url('{{ asset('uploads/'.HERO_AVATAR_PATH.$item->image) }}');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>{{ $item->title }}</span></h2>
                            <p class="animate__animated animate__fadeInUp">{{ $item->description }}</p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                    Menu</a>
                                <a href="#book-a-table"
                                    class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>
