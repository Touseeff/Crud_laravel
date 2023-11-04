<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{ url ('login')}}" method="POST">
    @csrf
    <div class="container">
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        <div class="row">
        <div class="col">
            <h2>Login Form</h2>
          
            <div class="col-6">
              <label for="" class="form-label">Email</label>
              <input type="email" name="email" id="" class="form-control" placeholder="" value="{{ old('email')}}" aria-describedby="helpId">
            </div>
            <span class="text-danger">
                @error('email')
                    {{ $message}}
                @enderror
             </span>
            <div class="col-6">
              <label for="" class="form-label">Password</label>
              <input type="password" name="password" id="" class="form-control"  aria-describedby="helpId">
            </div>
            <span class="text-danger">
                @error('password')
                    {{ $message}}
                @enderror
             </span>
             <br>
            <button class="btn btn-primary" >Login</button>
            {{-- <a href="{{ route('forgot.button') }}" class="btn btn-primary">Forgot Password</a> --}}
            {{-- <button class="btn btn-primary" >Forgot Password</button> --}}
         
        </div>
    </div>
</div>
</form>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html> 