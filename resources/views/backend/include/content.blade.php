<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
      <!--     <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Dashboard v1</li> 
            </ol>
          </div> -->
         
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <!-- <a href="{{url('massbooking')}}"> -->
              <div class="inner">
                <h3>
                  <i class="fas fa-book"></i>
               {{ $data->count() }}
              </h3>

                <p>TODAY MASS</p></a>
              </div>
              <div class="icon">
                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
              </div>
             <!--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>


         <!--  <li class="nav-item">
            <a href="{{url('massbooking')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Massbooking
              </p>
            </a>
          </li> -->


          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <i class="fas fa-rupee-sign"></i> -->
                <h3>
                  <i class="fas fa-rupee-sign"></i>{{ $week }}
                  <!-- <sup style="font-size: 20px">%</sup> -->
                </h3> 
                <p>Contribution (WEEKLY)</p>
              </div>
              <div class="icon">
                <!-- <i class="fas fa-rupee-sign fa-2x text-gray-300"></i> -->
              </div>
           <!--    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <i class="fas fa-rupee-sign"></i>{{ $month }}</h3>
                <p>Contribution (MONTHLY)</p>
              </div>
              <div class="icon">
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  <i class="fas fa-rupee-sign"></i>{{ $year }}</h3>
                <p>Contribution (ANNUAL)</p>
              </div>
              <div class="icon">
                <!-- <i class="fas fa-rupee-sign fa-2x text-gray-300"></i> -->
              </div>
           <!--    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

   <div class="container">
            @yield('content')



  
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css"> -->


</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.0.0/jspdf.umd.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js">
  
</script>

<style>  
th, td {  
    text - align: center;  
    border: 1 px solid black;  
    border - collapse: collapse;  
}  
</style> 
<div class="row">
    <div class="col-lg-3">
        
    </div>

    
</div>

<div class="container">
  <div class="row" >

      <div class="card-body">
     <table id="simple_table" class="table table-bordered table-striped">
      
        <thead>
      <!-- <center><b><h2>Mass List</h2></b></center> -->
        <div class="d-flex justify-content-end mb-4">
            <!-- <a class="btn btn-primary" href="{{ URL::to('/massbooking/pdf') }}">Export to PDF</a> -->
<!-- <button type="submit" id="myBtn" class="btn btn-info">Export to PDF</button> -->
            <input type="button" class="btn btn-primary" onclick="generate()" value="Export To PDF" /> 
           <!--    <i class='fas fa-file-pdf' onclick="generate()" value="Export To PDF"  style='font-size:35px;color:red'></i> -->
            <!-- <button class="btn btn-primary" id="submit">Export to  PDF</button> -->
        </div>
        
        <tr>

            <th class="bg-info">No</th>
            <th class="bg-info">Name</th>
            <th class="bg-info">Intention For</th>
            <th class="bg-info">Intention</th>
            <th class="bg-info">Mass</th>
            <th class="bg-info">Date & Time</th>
            <!-- <th class="bg-info">Payment status</th> -->
        </tr>
    </thead>
    <tbody>

         @foreach ($data as $key=> $value)
       <?php 



      $date_time = date('d-m-Y h:i A', strtotime($value->DateTime));

     ?>   <tr>    
                <td class="text-center">{{++$key}}</td>
                <td class="text-left">{{$value->name}}</td>
                <td class="text-left">{{$value->intentionfor}}</td>
                <td class="text-left">{{$value->intention}}</td>
                <td class="text-left">{{$value->language}}</td>
                <td class="text-left">{{$date_time}}</td>
                <!-- <td class="text-left">{{$value->f_code}}</td> -->
         @endforeach
    </tbody>

</table>
</div>
</div>
</div>

<!-- <div class="container">

<div class="modal" id="myModal" >
<div class="modal-dialog modal-lg modal-centered">

<div class="modal-content">

  <div class="modal-header" style="background-color: #701260;color:#fff;">
    <h4 >Export Pdf</h4>
    <button type="button" id="CloseModal" class="close" data-dismiss="modal" >&times;</button>
  </div>
  <form id="mass" method="post" action="{{ route('restriction') }}">                                                      
  <div class="modal-body">
    <form>
        @csrf
        <p style="font-size: x-large;">Are you want close this Massbooking ?</p>
        <label for="lastname">Mass Restriction Time</label>
        <br/>

        @foreach($datagroup as $key => $value)
            @php 
                $date_time = date('d-m-Y h:i A', strtotime($value[0]['DateTime']));
                $lang = $value[0]['language'];
                $massId = $value[0]['mass_id'];
            @endphp
            <label>
                {{ Form::checkbox('mass_id[]', $massId, false, array('multiple' => true));}}
                {{ $date_time }},&nbsp;
                {{ $lang }}
            </label>
            <br>
        @endforeach

@forelse ($datagroup as $key => $value)

@empty
    <center><b><h5>All mass already restricted</h5></b></center>
@endforelse
        <input type="hidden" name="masstime_restriction" maxlength="0"value="Yes">
        @if(isset($startDate))
        <input type="hidden" id="download_starttime" name="download_starttime" maxlength="0"value="{{date('d-m-Y h:i A', strtotime($startDate))}}">
        <input type="hidden" id="download_endtime" name="download_endtime" maxlength="0"value="{{date('d-m-Y h:i A', strtotime($endDate))}}">
        @else
        <input type="hidden" id="download_starttime" name="download_starttime" maxlength="0"value="{{Carbon\Carbon::now('Asia/Kolkata')->toDateTimeString()}}">
        <input type="hidden" id="download_endtime" name="download_endtime" maxlength="0"value="{{Carbon\Carbon::now('Asia/Kolkata')->toDateTimeString()}}">
        @endif
    </form>
  <div class="modal-footer">
    <button class="btn btn-add m-t-15 waves-effect mb-3 btn-submit" id="closeModal" style="background-color: #701260;color:#fff;" onclick="generate()" value="Export To PDF">YES</button>
    <button class="btn btn-add m-t-15 waves-effect mb-3" id="CloseModalBTN" style="background-color: #701260;color:#fff;" onclick="generate()" type="button" >No</button>
  </div>
</form>
</div>

</div>
</div>
</div> -->






<!-- 
<div>
  <form id="mailsend">
    @csrf
    <label>Email:</label><input type="email" name="email" required/>
    <button class="btn-submit" type="submit">send</button>
  </form>
</div> -->

</body>

<script>
    $('table').DataTable();
</script>
<script type="text/javascript">  

// $(".btn-submit").click(function(e){
//   e.preventDefault();
//     var url = "{{Route('mailsend')}}";
//     var formID = $(this).parents("form").attr("id");

//     MailSend(formID, url);
// });

// function MailSend(formId, url){ 

//   var formData = $("#"+formId+"").serializeArray();
//   $.ajax({
//     type: "POST",
//     url: url,
//     data: formData,
//     success: function(response) {
//        console.log(response.success);
//      }
//    });
// }


// $(".btn-submit").click(function(e){
//   e.preventDefault();
//     var url = "{{Route('restriction')}}";
//     var formID = $(this).parents("form").attr("id");
//     restriction(formID, url);
// });
// function restriction(formId, url){ 

//   var formData = $("#"+formId+"").serializeArray();
//  console.log(formData);
//     $.ajax({
//       type: "post",
//       url: url,
//       data: formData,
//       success: function(response) {
//          console.log(response.success);
//          $('#myModal').modal('hide');
//          }
//       });
// } 

//  $(document).ready(function(){

//       $("#myBtn").click(function() {
//           $('#myModal').appendTo("body").modal('toggle');
//       });
//       $("#closeModal").click(function() {
//           $('#myModal').modal('hide');
//       });
//       $("#CloseModalBTN").click(function() {
//           $('#myModal').modal('hide');
//       });

// });





function generate(e) {  

    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
var now = moment().format("DD/MM/YYYY hh:mm A");
    
    // var ExportDate = new Date().toLocaleString();
    // alert(ExportDate);
    pageHeight = doc.internal.pageSize.height;  
    specialElementHandlers = {  
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function(element, renderer) {  
            // true = "handled elsewhere, bypass text extraction"  
            return true  
        }  
    };  
    margins = {  
        top: 20,  
        bottom: 30,  
        left: 20,  
        right: 10,  
        width: 60  
    };  
    // var date            = ($('#app_date').text() != '' ? $('#app_date').text(): 'Date');
    var y = 20;  
    doc.setLineWidth(2);  
    doc.text(200, y = y + 30, "Massbooking List"); 

    doc.setTextColor(255,0,0);
    doc.text(40, 30, "St.Mary's Basilica");
    doc.text(430, 15, now);
    doc.autoTable({  
        html: '#simple_table',  
        startY: 60,  
         
      
        styles: {  
            minCellHeight: 10  
        }  
    })  
    doc.save('Todaymass.pdf');  
}  
</script> 
