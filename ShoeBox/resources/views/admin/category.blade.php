<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.css')
  <style type="text/css">
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .h1_font
    {
        font-size: 45px;
        padding-bottom: 20px;
        color: rgb(26, 177, 26);
    }
    .input_color
    {
        color: black;
    }
    .center
    {
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 30px;
      border: 2px solid green;
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
          <div class="div_center">
              <h1 class="h1_font">Add Brand</h1>
              <form action="{{url('/add_category')}}" method="POST">
                  @csrf
                  <input class="input_color" type="text" name="category" placeholder ="Add Shoes Brand">

                  <input class="btn btn-primary" type="submit" name="submit" placeholder ="submit">
              </form>
          </div>

          <table class="center">
            <tr>
              <td>Brand Name</td>
              <td>Action</td>
            </tr>
            @foreach($data as $data)
            <tr>
              <td>{{$data->category_name}}</td>
              <td>
                <a onclick="return confirm('Are You Sure You Want to Delete this Brand?')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
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