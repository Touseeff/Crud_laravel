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
  {{-- navbar start --}}
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/register')}}" aria-current="page">Add User <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('post')}}" aria-current="page">Add Post <span class="visually-hidden">(current)</span></a>
          </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
          <input class="form-control me-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  {{-- navbar end --}}
  
{{-- content start  --}}

{{-- content start  --}}

<div class="container">
  <h1>Image Records</h1>

  <table class="table table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
              <th>Status</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($data as $value)
        @php
            echo "<pre>";
                // print_r($value);
                // die;
                @endphp
                  <tr>
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->post_title }}</td>
                  <td>{{ $value->post_description }}</td>
                  <td>
                    {{-- <p>{{$value->post_image}}</p> --}}
                    {{-- <img  src="{{asset('upload'.$value->post_image)}}"  alt="xyz" class="img-thumbnail" width="100"> --}}
                    {{-- <img  src="upload/{{$value->post_image}}"  alt="xyz" class="img-thumbnail" width="100"> --}}
                  {{-- <img src="upload/{{$value->post_image}}" alt="" width="100px" height="100px"> --}}
                  <img src="{{ asset('upload/' . $value->post_image)}}" alt="" width="100px" height="100px">
                  {{-- <img src="{{ asset('upload/' . $value->post_image) }}" alt="" width="100px" height="100px"> --}}

                </td>
                  <td class=" text-center">
                    <a class="btn btn-success" href="post/edit/{{$value->id }}">edit</a>
                    <a class="btn btn-danger" href="post/delete/{{$value->id }}">Delete</a>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>

{{-- content end --}}

{{-- content end --}}


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>