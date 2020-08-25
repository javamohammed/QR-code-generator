<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/svg" href="{{ URL::to('/') }}/images/qr-code.svg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>QR Code Generator!</title>
  </head>
  <body>
   
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="{{ URL::to('/') }}/images/qr-code.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Laravel 7.x - QR Code Generator
      </a>
    </nav>
    <div class="container mt-5">
      <div class="jumbotron">
        <div class="row">
          <div class="col">
            <form method="POST" action="{{ route('generate') }}">
              @csrf
              <div class="mb-3">
                <textarea class="form-control" id="your_text" name="your_text" placeholder="Your Text" ></textarea>
                  @error('your_text')
                      <div style="color: red; font-weight: bold;">Please enter your text.</div>
                  @enderror
              </div>
              <button class="btn btn-primary" type="submit">Generate</button>
            </form>
          </div>
          <div class="col">
            
            
            <div class="visible-print text-center">
                
                 
                @if (session('your_text'))
                {!! QrCode::size(250)->generate(session('your_text')); !!}
                  <p>{{ session('your_text') }}</p>
                @endif
                     
            </div>
          </div>

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>