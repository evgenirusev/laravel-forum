<!-- Footer -->
<footer id="footer" class="page-footer font-small blue pt-4 mt-4 w-100" style="background-color: #2196f3; color:#fff;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Author: Evgeni Rusev, Plovdiv</h5>
        <p>Open source general purpose forum base on Laravel MVC php framework</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul id="footer-ul" class="list-unstyled">
          <li>
            <a href="{{ route('posts.index') }}">Home</a>
          </li>
          <li>
            <a href="{{ route('contact') }}">Contact</a>
          </li>
          <li>
            <a href="{{ route('about') }}">About</a>
          </li>
          <li>
            <a href="{{ route('posts.create') }}">Ask A Question</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: #1a78c2 !important;">© 2018 Copyright:
    <a href=""> Laravel forum</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
