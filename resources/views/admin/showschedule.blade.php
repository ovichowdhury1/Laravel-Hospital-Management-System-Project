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
                 
                 <th style="padding:10px">Doctor name</th>
                 <th style="padding:10px">Phone </th>
                 <th style="padding:10px">Specality</th>
                 <th style="padding:10px">Room</th>
                 <th style="padding:10px">Date</th>
                 <th style="padding:10px">Time</th>



               </tr>
            @foreach($data as $schedule)
               <tr align="Center" style="background-color:teal;border: 1px solid rgb(190, 190, 190);">
                 <td>{{$schedule->name}}</td>
                 <td>{{$schedule->phone}}</td>
                 <td>{{$schedule->specality}}</td>
                 <td>{{$schedule->room}}</td>
                 <td>{{$schedule->date}}</td>
                 <td>{{$schedule->time}}</td>

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
