<!DOCTYPE html>
<html lang="en">
  <head>
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

          <div align="center" style="padding-top:100px;" class="">

            <table>
              <tr style="background: black;">
                <th style="padding:10px">Doctor Name</th>
                <th style="padding:10px">Phone</th>
                <th style="padding:10px">Specialization</th>
                <th style="padding:10px">Room Number</th>
                <th style="padding:10px">Image</th>
                <th style="padding:10px">Delete</th>
                <th style="padding:10px">Update</th>
              </tr>

              @foreach($data as $doctor)
              <tr style="background: skyblue;">
                <td style="padding:10px">{{$doctor->name}}</td>
                <td style="padding:10px">{{$doctor->phone}}</td>
                <td style="padding:10px" >{{$doctor->speciality}}</td>
                <td style="padding:10px">{{$doctor->room}}</td>
                <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" </td>
                <td><a onclick="return confirm('Are you sure you want to DELETE')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
              </tr>

            @endforeach
            </table>



          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

      </div>
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
