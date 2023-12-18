<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body id="top">
    @include('preload')
    <!--
          - #TOP BAR
        -->

    @include('topbar')





    <!--
          - #HEADER
        -->

    @include('header')





    <main>
        <article>

            <!--
              - #HERO
            -->

            @include('hero')





            <!--
              - #SERVICE
            -->

            @include('service')





            <!--
              - #ABOUT
            -->

            @include('about')





            <!--
              - #SPECIAL DISH
            -->

            @include('specialDish')





            <!--
              - #MENU
            -->

            @include('menu')





            <!--
              - #TESTIMONIALS
            -->

            @include('testimonials')





            <!--
              - #RESERVATION
            -->

            @include('reservation')





            <!--
              - #FEATURES
            -->

            @include('features')





            <!--
              - #EVENT
            -->

            @include('event')

        </article>
    </main>





    <!--
          - #FOOTER
        -->

        @include('footer')





    <!--
          - #BACK TO TOP
        -->

    <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>





    <!--
          - custom js link
        -->
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/wow/wow.min.js') }}"></script>
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <!--
          - ionicon link
        -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
