<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.include.header')
</head>

<body>
    <!-- ======= Top Bar ======= -->
    @include('frontend.include.topbar')


    <!-- ======= Header ======= -->
    @include('frontend.include.navbar')
    <!-- End Header -->

    <main id="main">
        <!-- ======= Hero Section ======= -->
        @include('frontend.module.hero')
        <!-- End Hero -->

        <!-- ======= About Section ======= -->
        @include('frontend.module.about')
        <!-- End About Section -->

        <!-- ======= Whu Us Section ======= -->
        @include('frontend.module.whyus')
        <!-- End Whu Us Section -->

        <!-- ======= Menu Section ======= -->
        @include('frontend.module.menu')
        <!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        @include('frontend.module.special')
        <!-- End Specials Section -->

        <!-- ======= Events Section ======= -->

        @include('frontend.module.event')
        <!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        @include('frontend.module.table')
        <!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        @include('frontend.module.gallery')
        <!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        @include('frontend.module.chef')
        <!-- End Chefs Section -->

        <!-- ======= Testimonials Section ======= -->

        @include('frontend.module.testimonial')
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->

        @include('frontend.module.contact')
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.include.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Scripts ======= -->
    @include('frontend.include.script')

</body>

</html>
