@extends('components.main')

@section ('container')

<div class="container mt-5">

    <h2 class="text-center">Order Form</h2>
        
      <form action="{{ url('order') }}" method="POST" class="row g-3">
        @csrf
        <div class="mb-3">
          <label for="username" class="col-sm-2 col-form-label">Your Name</label>
          <div class="col-sm-12">
            <input type="text" id="username" class="form-control" name="username" required>          
          </div>
        </div>

        <div class="mb-3">
          <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
          <div class="col-sm-12">
            <input type="number" id="phone" class="form-control" name="phone" required>          
          </div>
        </div>
        
        <div class="mb-3">
          <label for="inputStocks" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-12">
            <textarea class="form-control" id="address" rows="3" name="address" required></textarea>
          </div>
        </div>

        <div class="mb-3 col-md-9">
          <label for="product" class="col-sm-2 col-form-label">Product Name</label>
        
          <select id="product" class="form-select" name="product">
            @foreach ($products as $prod)
              <option value="{{ $prod['name'] }}">{{ $prod['name'] }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3 col-md-3">
          <label for="duration" class="col-sm-2 col-form-label">Duration</label>
          
          <select id="duration" class="form-select" name="duration">
            <option value="1">1 Hour</option>
            <option value="6">6 Hour</option>
            <option value="12">12 Hour</option>
            <option value="24">24 Hour</option>
          </select>
        </div>

        <div class="d-flex justify-content-between">
          <a class="btn btn-info text-white" href="/view" role="button">View Data</a>
          <button class="btn btn-dark btn-right" type="submit">Order Now</button>
        </div>        
      </form>


</div>
  

@endsection