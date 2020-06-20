<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A official page for of NTC">
    <title>Nema Tea Company - A one stop for every solution</title>
    <link rel="icon" href="/images/logo.jpg">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img src="/images/logo.jpg" width="30" height="30" alt="" loading="lazy">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link h6" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link h6" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h6" href="#products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h6" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h6" href="/login">Login</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link h6" href="/register">Register</a>
            </li>
          </ul>
        </div>
    </nav>

    {{-- About section --}}
    <div class="container mt-5" id = "about">
      @if(Session::has('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> 
        @endif
      <h3 class="display-3 text-center">About Us</h3>
        <p class="text-center text-justify">NemaTeaCompany is an industry-leading Tea Wholesaler, supplying individuals and companies with the products they need. We were founded in 1975 by Nema Group, and have been located in Bhopal ever since. Learn all about nemateacompany and other offer's, just by giving us a call or dropping us a mail. We’ll be happy to assist you with any information regarding a specific product or service.
          <br><br>
          We're the right wholesaler supplier for your business / Individual, you can count on nemateacompany for quality products at affordable prices. We offer a wide selection of tea leaves and tea masala's for the people at Bhopal, IN. If you have something for us related to Tea Leaves / Tea Bags / Tea Masala's and even any suggestions related to this then please let us know we'll love to hear it out.
        </p>
    </div>

    {{-- Products --}}
    <div class="container mt-5" id="products">
      <h3 class="display-3 text-center">Products</h3>
      <div class="row">
        <div class="col-sm">
          <h3 class="h5">Tea Leaves</h3>
          <p class="lead">These are the big tea leaves which are available form different gardens of Assam, Darjiling, and other tea gardens. This brings bright and energetic morning routine for all tea lovers. This type of Tea leave will only give you a great taste but not good color.</p>
          <a href="/buy" class="btn btn-warning">Buy Now</a>
        </div>
        <div class="col-sm">
          <h3 class="h5">Granularity Tea</h3>
          <p class="lead">They are the chunks of tea leaves which is mainly of round shape,  which go through the process of granularity and after it put to dry for days, then they are ready to make you your better health and better immunity to fight the odds. It give you a light color but a great taste in tea</p>
          <a href="/buy" class="btn btn-warning">Buy Now</a>
        </div>
        <div class="col-sm">
          <h3 class="h5">Dust Tea</h3>
          <p class="lead">They are dusty tea which is made from tea leaves after giving a fine mixter and then drying it up. It is mainly use to get a color in tea with a light taste in it.</p>
          <a href="/buy" class="btn btn-warning">Buy Now</a>
        </div>
        <div class="col-sm">
          <h3 class="h5">Tea Masala's</h3>
          <p class="lead">We're offering you a mixed variety of Tea Masala's which is made up of Ginger, Balck-Paper, Cloves, Cardamom, mulethi and much more ground herbs and oregano's, to make you immune system better.</p>
          <a href="/buy" class="btn btn-warning">Buy Now</a>
        </div>
      </div>
    </div>

    {{-- contact --}}
    <div class="container mt-5" id="contact">
      <h3 class="display-3 text-center">Contact Us</h3>
      <div class="row">
        <div class="col-sm">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.369933000432!2d77.45774151480414!3d23.193185284866935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c43db5e903a47%3A0x3d21d622f55fdf7a!2sNema%20Tea%20Company!5e0!3m2!1sen!2sin!4v1591628798603!5m2!1sen!2sin" width="550" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-sm">  
          <form action="/contactus" method="post">
            @csrf
            <div class="row">
              <div class="col-12">
                <input type="text" name="name" class="form-control" placeholder="Name" required = "required">
              </div>
              <div class="col-6 mt-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="col-6 mt-3">
                <input type="number" name="number" class="form-control" placeholder="Number" required>
              </div>
              <div class="col-12 mt-3">
                <input type="text" name="subject" class="form-control" placeholder="subject" required>
              </div>
              <div class="col-12 mt-3">
                <textarea class="form-control" rows="5" name = "message" required></textarea>
              </div>
              <button type="submit" value="Enter your message here" id="exampleFormControlTextarea1" class="btn btn-warning mt-3 ml-3">Smash It</button>
            </div>  
          </form>
        </div>
      </div>    
    </div>

    {{-- Footer --}}
      <div class="container mt-5">
        <!-- Footer -->
<footer class="page-footer font-small">

  <div>
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/NemaTeaCompany/" target="_blank">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          {{-- <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a> --}}
          <!--Linkedin -->
          <a class="li-ic" href="https://www.linkedin.com/company/nemateacompany/" target="_blank">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https://www.instagram.com/nemateacompany/" target="_blank">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Nema Tea Company</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>We're the right wholesaler supplier for your business / Individual, you can count on nemateacompany for quality products at affordable prices. We offer a wide selection of tea leaves and tea masala's for the people at Bhopal, IN. If you have something for us related to Tea Leaves / Tea Bags / Tea Masala's and even any suggestions related to this then please let us know we'll love to hear it out.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#products">Tea Leaves</a>
        </p>
        <p>
          <a href="#products">Tea Masala's</a>
        </p>
        <p>
          <a href="#products">Garanual Tea Leaves</a>
        </p>
        <p>
          <a href="#products">Falavour Tea (Comming Soon !!)</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#contact" class="text-decorator-none">Contact Us</a>
        </p>
        <p>
          <a href="mailto:saurabh@nemateacompany.com">Mail Us</a>
        </p>
        <p>
          <a href="/suggestion">Suggestions</a>
        </p>
        <p>
          <a href="#!">Help (Comming Soon !!)</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i>E2 Bagsewaniya, Bhopal, M.P.</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> saurabh@nemateacompany.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91 74156 02179</p>
        <p>
          <i class="fas fa-print mr-3"></i> +91 83499 95427</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="http://nemateacompany.com/"> nemateacompany.com</a> Design and Develop By <a href="http://www.saurabhnema.com" target="_blank">Saurabh Nema</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

      </div>
</body>
</html>