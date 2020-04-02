@extends('admin.layouts.master')
@section('title', "Admin || Product Update")
@section('content')
<section class="content container-fluid">
  <script>
  function preview_images()
  {
  var total_file=document.getElementById("images").files.length;
  for(var i=0;i<total_file;i++)
  {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
  }
  </script>
  <script>
  (function(document) {
  'use strict';
  var LightTableFilter = (function(Arr) {
  var _input;
  function _onInputEvent(e) {
  _input = e.target;
  var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
  Arr.forEach.call(tables, function(table) {
  Arr.forEach.call(table.tBodies, function(tbody) {
  Arr.forEach.call(tbody.rows, _filter);
  });
  });
  }
  function _filter(row) {
  var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
  row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
  }
  return {
  init: function() {
  var inputs = document.getElementsByClassName('light-table-filter');
  Arr.forEach.call(inputs, function(input) {
  input.oninput = _onInputEvent;
  });
  }
  };
  })(Array.prototype);
  document.addEventListener('readystatechange', function() {
  if (document.readyState === 'complete') {
  LightTableFilter.init();
  }
  });
  })(document);
  </script>
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="padding:0px 10px;">
        <div class="card-header">
          <h3 style="background-color:#5bc0de; color:#ffffff; padding: 5px; text-align: center;"><i class="fas fa-user-edit"></i> Update Product</h3>
        </div>
        {{-- @include('admin.partials.message')  --}}
        <div class="card-body">
          <form  action="{{ route('admin.pages.product.product_edit', $edit->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="category"><i class="fas fa-chart-pie"></i> Category ID</label>
              <input type="text" class="form-control" name="category" value="{{ $edit->category_id }}" required>
            </div>
            <div class="form-group">
              <label for="brand"><i class="fab fa-bootstrap"></i> Brand ID</label>
              <input type="text" class="form-control" name="brand" value="{{ $edit->brand_id }}" required>
            </div>
            <div class="form-group">
              <label for="title"><i class="fas fa-pen"></i> Title</label>
              <input type="text" class="form-control" name="title" value="{{ $edit->title }}" required>
            </div>
            <div class="form-group">
              <label for="description"><i class="fas fa-edit"></i> Description</label>
              <textarea name="description" class="form-control" name="description"  rows="4" cols="80" required>{{ $edit->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="price"><i class="fas fa-dollar-sign"></i> Price</label>
              <input type="number" class="form-control" name="price" value="{{ $edit->price}}" required>
            </div>
            <div class="form-group">
              <label for="quantity"><i class="fas fa-tags"></i> Quantity</label>
              <input type="number" class="form-control" name="quantity" value="{{ $edit->quantity }}" required>
            </div>
            <div class="form-group">
              <label for="offer_price"><i class="fas fa-tags"></i> Offer Price</label>
              <input type="number" class="form-control" name="offer_price" value="{{ $edit->offer_price }}" required>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="product_image"><i class="fas fa-camera-retro"></i> Product's Image</label>
                  <input type="file" class="form-control" id="images" name="product_image[]" onchange="preview_images();" multiple/>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <br>
                  <button type="submit" class="btn btn-primary" name="submit">Upadate Database</button>
                </div>
              </div>
            </div>
          </form>
          
          <div class="row">
            <div class="col-md-12" id="image_preview">
              
            </div>
          </div>

          
        </div>
      </div>
    </div>

     <div class="col-md-8">
      <div class="card" style="padding:0px 10px;">
        <div class="card-header">
          <h3 style="background-color:#5bc0de; color:#ffffff; padding: 5px;text-align: center;" ><i class="fas fa-database"></i> Product Table</h3>
          <div class="row">

            <div class="col-md-6">
              <div class="active-cyan-3 active-cyan-4 mb-4">
                <label for="rows">Search</label><br>
                <input class="form-control light-table-filter" data-table="order-table" type="text"  aria-label="Search">
              </div>
            </div>

            <div class="col-md-6">
              
              <label for="rows">Select Number Of Rows</label>
              <div class="form-group">
                <select class  ="form-control" name="state" id="maxRows">
                  <option value="5000">Show ALL</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="50">50</option>
                  <option value="70">70</option>
                  <option value="100">100</option>
                </select>
                
              </div>
            </div>
          </div>
          
        </div>
        <div class="table-responsive tableFixHead">
          <table id= "table-id" class="order-table table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">Title
                </th>
                <th class="th-sm">Product ID
                </th>
                <th class="th-sm">Category ID
                </th>
                <th class="th-sm">Brand ID
                </th>
                <th class="th-sm">Quantity
                </th>
                <th class="th-sm">Price
                </th>
                <th class="th-sm">Action
                </th>
              </tr>
            </thead>
            <tbody id="table">
              
              @foreach ($products as $product)
              <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->category_id}}</td>
                <td>{{ $product->brand_id}}</td>
                <td>{{ $product->quantity}}</td>
                <td>{{ $product->price }}</td>
                <td><a href="{{ route('admin.pages.product.product_update', $product->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                 <a href="#deleteModal{{ $product->id }}"  class="btn btn-danger" data-toggle="modal"><i class="fas fa-trash-alt"></i></a></td>
              
                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <h4 style="background-color:#c9302c; color:#ffffff; padding: 5px;text-align: center;">TITLE : {{ $product->title }} Product ID : {{ $product->id }}</h4>
                       <h4></h4>
                      </div>
                      <div class="modal-footer">
                        
                         <form action="{{ route('admin.pages.product.product_delete', $product->id) }}" method="post">
                          {{ csrf_field() }}
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger">Delete Product</button>
                        </form>
                        
                      </div>
                    </div>
                  </div>
                </div>

              @endforeach
              
              
            </tbody>
            <tfoot>
            <tr>
              <th class="th-sm">Title
              </th>
              <th class="th-sm">Product ID
              </th>
              <th class="th-sm">Category ID
              </th>
              <th class="th-sm">Brand ID
              </th>
              <th class="th-sm">Quantity
              </th>
              <th class="th-sm">Price
              </th>
              <th class="th-sm">Action
              </th>
            </tr>
            </tfoot>
          </table>
          <div class='pagination-container' >
            <nav>
              <ul class="pagination">
                
                <li data-page="prev" >
                  <span> < <span class="sr-only">(current)</span></span>
                </li>
                <!-- Here the JS Function Will Add the Rows -->
                <li data-page="next" id="prev">
                  <span> > <span class="sr-only">(current)</span></span>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection