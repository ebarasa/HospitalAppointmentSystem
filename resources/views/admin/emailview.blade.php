<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;
      }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
@include('admin.navbar')
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <div class="container" align="center" style="padding: 100px;">

        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
              x
            </button>
            {{session()->get('message')}}
          </div>
        @endif

        <form action="{{url('sendemail',$data->id)}}" method="POST">
          @csrf
          <div style="padding:15px;">
            <label>Greeting</lable>
            <input type="text" style="color:black" name="greeting" placeholder="Write Greetings" required="">
          </div>

          <div style="padding:15px;">
            <label>Body</lable>
            <input type="text" style="color:black" name="body" placeholder="Write Message" required="">
          </div>

          <div style="padding:15px;">
            <label>Action Text</lable>
            <input type="text" style="color:black" name="actiontext" placeholder="Write Action Text" required="">
          </div>

          <div style="padding:15px;">
            <label>Action Url</lable>
            <input type="text" style="color:black" name="actionurl" placeholder="Write Action URL" required="">
          </div>

          <div style="padding:15px;">
            <label>End Part</lable>
            <input type="text" style="color:black" name="endpart" placeholder="Write End Part" required="">
          </div>

          <div style="padding:15px;">
            <input type="submit" class="btn btn-success">
          </div>

        </form>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
