@extends('components.main')

@section ('container')

  <div class="container mt-5">

    <form action="{{ url('add') }}" method="POST" enctype="multipart/form-data">
      
      @csrf

      <div class="mb-3">
        <label for="product" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-12">
          <input type="text" id="product" class="form-control" name="product" required>          
        </div>
      </div>
      
      <div class="mb-3">
        <label for="inputStocks" class="col-sm-2 col-form-label">Stocks</label>
        <div class="col-sm-12">
          <input type="number" class="form-control" id="inputStock" name="stocks" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
        
        <div class="input-group col-sm-10">
          <span class="input-group-text">Rp. </span>
          <input type="number" class="form-control" name="price" required>
          <span class="input-group-text">/hour</span>
        </div>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Input Pict</label>
        <input class="form-control" type="file" id="formFile" name="path">
      </div>

      <div class="d-grid gap-2 mt-5 d-md-flex justify-content-md-end">
        <button class="btn btn-dark" type="submit">Add Item +</button>
      </div>

    </form>

  </div>
  

@endsection