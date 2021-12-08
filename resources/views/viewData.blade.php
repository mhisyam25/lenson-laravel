@extends('components.main')

{{-- Initialize for increment Number --}}
<?php $stdNo = 1; ?>

@section ('container')

  <div class="container mt-5">
    
    <h2 class="text-center mb-5">List Data Order</h2>

    {{-- Alert for Information --}}
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- Table Order Start --}}
    <table class="table table-dark table-hover">

      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Product</th>
          <th scope="col" class="text-center">Duration</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($order as $orders)
          <tr>
            <th scope="row"><?php echo $stdNo++; ?></th>
            <td>{{ $orders['username'] }}</td>
            <td>0{{ $orders['phone'] }}</td>
            <td>{{ $orders['product'] }}</td>
            <td class="text-center">{{ $orders['duration'] }} Hour</td>
            <td class="text-center">
              {{-- Update Data --}}
              <a class="btn btn-warning text-white" href="{{ url('edit/'. $orders['id']) }}" role="button">Change</a>

              {{-- Delete Data --}}
              <form action="{{ url('view/'. $orders['id']) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit" onclick="return confirm('Data will be delete, are you sure?')">Delete</button>
              </form>

            </td>
          </tr>      
        @endforeach
      </tbody>

    </table>
    {{-- Table Order End --}}

    <a class="btn btn-info text-white" href="/order" role="button">Back to Order</a>
  </div>

@endsection