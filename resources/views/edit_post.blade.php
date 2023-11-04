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
  <pre>
      @php
          // print_r($data->all());
          // echo $data->post_title;
            // dd($data);
            // print_r($data->toArray());
            // die;
  
      @endphp
      @forelse ($data as $value );
        {{print_r($value->toArray())}}
  
      @empty
        no record fond
      @endforelse
  </pre>
    <form action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">

        <div class="row">
        <div class="col">
            <h2>Edit POST</h2>
            <div class="col-6">
              <label for="" class="form-label">Title</label>
              {{-- <input type="text" name="title" id="title" placeholder="Enter a title" value="{{ $value->post_title }}" > --}}
              {{-- <div>{{$data[0]['post_titles']}}</div> --}}
              <input type="text" name="post_title" id="" class="form-control" placeholder="" value="{{$value->post_title}}" aria-describedby="helpId">
              <input type="hidden" name="post_id" id="" class="form-control" placeholder="" value="{{$value->id}}" aria-describedby="helpId">
             <span class="text-danger">
                @error('title')
                    {{ $message}}
                @enderror
             </span>
            </div>
            <div class="col-6">
              <label for="" class="form-label">Description</label>
              <textarea class="form-control" name="post_description" id="" rows="3">{{$value->post_description}}</textarea>

                {{-- <textarea class="form-control" name="description"  value="{{$value->post_description}}" id="" rows="3"></textarea> --}}
            </div>
            <span class="text-danger">
                @error('description')
                    {{ $message}}
                @enderror
             </span>
            <div class="col-6">
              <label for="" class="form-label">Post Image</label>
                  <input type="file" class="form-control" name="post_image" id="" value="{{$value->post_image}}" aria-describedby="fileHelpId">
                </div>
              </div>
            </div>
            <span class="text-danger">
                @error('error')
                    {{ $message}}
                @enderror
             </span>
             <br>
            <button type="submit" class="btn btn-primary" >
                Submit
            </button>
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