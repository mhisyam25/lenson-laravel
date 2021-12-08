@extends('components.main')

@section ('container')

  <div class="container mt-5">

    <div class="text-center">
      <h2>LensOn Photography</h2>
      <h5>List Product Available</h5>
    </div>
    
    {{-- Alert for Information --}}
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <div class="row mt-4">
      
        @foreach ($products as $prod)
        <div class="col-sm-3">
          <div class="card">
            <img src="{{ asset('storage/'. $prod["path"]) }}" class="img-card card-img-top" alt="camera" width="50">
            <div class="card-body">
              <h5 class="card-title">{{ $prod["name"] }}</h5>
              <p class="card-text">Rp. {{ $prod["price"] }}/hour</p>
              <a href="/order" class="btn btn-dark">Order Now</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Available {{ $prod["stock"] }}</small>
            </div>
          </div>
        </div>
        @endforeach
        
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
      <a class="btn btn-outline-dark" href="/add" role="button">Add Items +</a>
    </div>
  </div>
  

@endsection