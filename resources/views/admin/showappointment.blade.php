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
                <th style="padding:10px">Name</th>
                <th style="padding:10px">Email</th>
                <th style="padding:10px">Phone</th>
                <th style="padding:10px">Doctor</th>
                <th style="padding:10px">Date</th>
                <th style="padding:10px">Message</th>
                <th style="padding:10px">Status</th>
                <th style="padding:10px">Approve</th>
                <th style="padding:10px">Cancel</th>
                <th style="padding:10px">Send Mail</th>

              </tr>

              @foreach ($data as $appoint)


                <tr align="center" style="background-color:skyblue;">
                  <td style="padding:10px">{{$appoint->name}}</td>
                  <td style="padding:10px">{{$appoint->email}}</td>
                  <td style="padding:10px">{{$appoint->phone}}</td>
                  <td style="padding:10px">{{$appoint->doctor}}</td>
                  <td style="padding:10px">{{$appoint->date}}</td>
                  <td style="padding:10px">{{$appoint->message}}</td>
                  <td style="padding:10px">{{$appoint->status}}</td>
                  <td style="padding:10px"><a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approve</a></td>
                  <td style="padding:10px"><a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a></td>
                  <td style="padding:10px"><a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>
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
