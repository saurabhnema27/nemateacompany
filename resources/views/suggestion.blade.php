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
                <a class="nav-link h6" href="#">Login</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link h6" href="#">Register</a>
            </li>
          </ul>
        </div>
    </nav>

    {{-- suggestions --}}
    <div class="container"> 
      @if(Session::has('suggestion'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ Session::get('suggestion') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      @endif 
        <h3 class="display-h3 mt-5 text-center">Suggestion Form</h3>
        <p class="lead text-center content-justify">This is our small motive to bring out the change in us, we're here for our valuable customers if you want some change then be the one, fill out the form below and we'll hear you out and replay in 24 hours for your query.</p>
        <form action="/suggestions" method="post" class="mt-3">
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
                <select class="form-control" id="sel1" name="subject">
                    <option>Related to website</option>
                    <option>Related to Products</option>
                    <option>Related to Content</option>
                    <option>Others</option>
                  </select>
            </div>
            <div class="col-12 mt-3">
              <textarea class="form-control" rows="5" name = "message" placeholder="Enter your suggestion details" required></textarea>
            </div>
            <button type="submit" value="Enter your message here" id="exampleFormControlTextarea1" class="btn btn-warning mt-3 ml-3">Start the Change</button>
          </div>  
        </form>
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
        <p>NemaTeaCompany is an industry leading Tea Wholesaler, supplying individuals and companies with the products they need. We were founded in 1975 by Nema Group, and have been located in Bhopal ever since. Learn all about nemateacompany and what we offer by giving us a call.</p>

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