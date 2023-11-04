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
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($row as $data)
            @php
                echo "<pre>";
                    print_r($row);
                    die;
            @endphp --}}
                {{-- <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->post_title }}</td>
                    <td>{{ $row->post_description }}</td>
                    <td> --}}
                        {{-- <img src="{{ asset('storage/' . $row->image_path) }}" alt="{{ $row->title }}" class="img-thumbnail" width="100"> --}}
                    </td>
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>

  {{-- content end --}}