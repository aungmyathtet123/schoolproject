<div class="container-fluid mt-5">
	<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->

  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="mt-5">
    <div class="container text-center text-md-start">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-5">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <img src="{{ asset('images/school_logo.png') }}" alt="" class="img-fluid" width="50px;" height="50px;">
          </h6>
          <p>
            Here you can  rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

@php
   $contact=App\Contact::first();
@endphp

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-5">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Social links
          </h6>
          <p>
            <a href="{{ $contact->facebooklink }}" class="text-dark"><i class="fab fa-facebook-square fa-lg"></i></a>

            <a href="{{ $contact->instagramlink }}" class="text-dark"><i class="fab fa-instagram-square fa-lg"></i></a>

            <a href="{{ $contact->facebooklink }}" class="text-dark"><i class="fab fa-twitter-square fa-lg"></i></a>

            <a href="{{ $contact->instagramlink }}" class="text-dark"><i class="fab fa-youtube-square fa-lg"></i></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-5">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> {{ $contact->address }}</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> {{ $contact->phone }}</p>
          {{-- <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> --}}
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
          <!-- Links -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29551.356495925913!2d96.09874234530955!3d22.205163009270834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb40d71f99abb3%3A0x374df42cac73959b!2sMadaya!5e0!3m2!1sen!2smm!4v1641354233975!5m2!1sen!2smm" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
