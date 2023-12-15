<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
    .center
    {
        margin: auto;
        width: 80%;
        border: 2px solid green;
        text-align: center;
        margin-top: 50px;
    }
    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }
    .imag_size
    {
        width: 200px;
        height: 200px;
    }
    .tr_color
    {
        background-color: green
    }
    .th_deg
    {
        padding: 20px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if(session()->has('message'))

          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

          </div>
          @endif
            <h2 class="font_size">All Products</h2>
            <table class="center">
                <tr class="tr_color">
                    <th class="th_deg">Product Name</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Brand</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount Price</th>
                    <th class="th_deg">Product Image</th>
                    <th class="th_deg">Edit</th>
                    <th class="th_deg">Delete</th>
                </tr>
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}">
                    </td>
                    <td>
                      <a class="btn btn-success" href="{{url('edit_product',$product->id)}}">Edit</a>
                    </td>
                    <td>
                      <a class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete this Item?')" href="{{url('delete_product',$product->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
    </body>
</html>