!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <style type="text/css">
            label
            {
              display: inline-block;
              width: 200px;
            }
      </style>
    @include('doctor.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('doctor.sidebar')
      <!-- partial -->
       @include('doctor.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class='container' align="Center" style="padding-top: 80px;">
            

             @if(session()->has('message'))

             <div class="alert alert-success">

              <button type="button" class="close" data-dismiss ="alert">
               X
              </button>

              {{session()->get('message')}}
              
             </div>


            @endif



            <form action="{{url('upload_schedule')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
                <div style="padding:15px;">
                  <label>Doctor Name</label>
                  <input type="text" style= "color: black;" name="name" placeholder="Write the name" required="">
                </div>

                <div style="padding:15px;">
                  <label>Phone</label>
                  <input type="Number" style= "color: black;" name="number" placeholder="Write the number" required="">
                </div>

                <div style="padding:15px;">
                  <label>Speciality</label>
                  <select name="speciality" style="color: black; width: 210px;" required="">
                    <option>--Select--</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                  </select>
                </div>

                <div style="padding:15px;">
                  <label>Room No</label>
                  <input type="text" style= "color: black;" name="room" placeholder="Write the room number" required="">
                </div>

                <div style="padding:15px;">
                   <label>Enter the Date</label> 
                  <input type="date" style= "color: black;width: 210px;" name="date" 
                   placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31" required="">
                </div>

                <div style="padding:15px;">
                   <label>Enter the Time</label> 
                  <input type="time" style= "color: black; width: 210px;" name="time" required="">
                </div>
                  
                <div style="padding:15px;">
                  <input type="submit" class ="btn btn-success" required="">
                </div>

              </form>
          </div>

       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
    <!-- End custom js for this page -->
  </body>
</html>
