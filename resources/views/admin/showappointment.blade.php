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

        <div align="Center" style="padding-top:100px; margin-right:500px ;" >
           <table>
               <tr style="background-color:black ;">
                 
                 <th style="padding:10px">Customer name</th>
                 <th style="padding:10px">Email</th>
                 <th style="padding:10px">Phone </th>
                 <th style="padding:10px">Doctor Name</th>
                 <th style="padding:10px">Data</th>
                 <th style="padding:10px">Message</th>
                 <th style="padding:10px">Status</th>
                 <th style="padding:10px">Approved</th>
                 <th style="padding:10px">Canceled</th>
                 <th style="padding:10px">Send Mail</th>



               </tr>
            @foreach($data as $appoint)
               <tr align="Center" style="background-color:teal;">
                 <td>{{$appoint->name}}</td>
                 <td>{{$appoint->email}}</td>
                 <td>{{$appoint->phone}}</td>
                 <td>{{$appoint->doctor}}</td>
                 <td>{{$appoint->date}}</td>
                 <td>{{$appoint->message}}</td>
                 <td>{{$appoint->status}}</td>

                 <td>
                   <a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approved</a>
                 </td>
                 
                 <td>
                   <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger">Canceled</a>
                 </td>

                 <td>
                   <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
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
</html>admin/
