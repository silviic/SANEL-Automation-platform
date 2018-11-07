@extends('layouts.index')

    @section('title')
      Register- Blic | Business automation
    @endsection

    @section('content')
    
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">

        <a href="{{ route('home') }}"><img src="/storage/images/Blic_icon.png" style="width: 30px; height: auto;"></a><h5 class="my-0 mr-md-auto font-weight-normal">Blic | Business automation</h5>

          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
          </nav>
          <a class="btn btn-outline-dark" href="http://blic.test/admin/login">Log in</a>
          <a class="btn btn-primary" style="margin-left: 10px;" href="{{ route('register') }}">Sign up</a>
    </div>

       <div class="container">
        
       <div class="row justify-content-center">
        <div class="col-4">
            
            <form action="{{ route('signup') }}">       
              
              <div class="form-group">
              <p class="lead">Business Name</p>
              <input type="name" name="name" class="form-control" placeholder="Name" required autofocus>
              </div>
              
              <div class="form-group">
              <p class="lead">Email Address</p>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
              </div>
              
              <div class="form-group">
              <p class="lead">Password</p>
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>
              
              <div class="text-center">
              <button class="btn btn-dark" type="submit" style="margin-top: 20px;">Create user account</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              </div>
              
            </form>
            
           </div>
            </div>

          <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
              <div class="col-12 col-md">

            <p><img src="/storage/images/Blic_icon.png" style="width: 30px; height: auto;"> Blic | Business automation </p>
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                  <li><a class="text-muted" href="#">Random feature</a></li>
                  <li><a class="text-muted" href="#">Team feature</a></li>
                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                  <li><a class="text-muted" href="#">Another one</a></li>
                  <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
                  <li><a class="text-muted" href="#">Resource name</a></li>
                  <li><a class="text-muted" href="#">Another resource</a></li>
                  <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                  <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script>
          Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
          });
        </script>
    
    @endsection
