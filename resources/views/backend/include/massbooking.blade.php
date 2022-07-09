@extends('backend.layouts.subpage')

@section('content')

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css"> -->


</head>
</head>
<body>
      <!-- <script type="text/javascript" src="assets/jspdf/jspdf.min.js"></script> -->

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>


<style>  
th, td {  
    text - align: center;  
    border: 1 px solid black;  
    border - collapse: collapse;  
}  

.btn-primary {
  
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px 2px 342px;
    cursor: pointer;
}
</style> 
<div class="row">
    <div class="col-lg-3">
        
    </div>

    
</div>
<div class="container">
  <!-- <div class="row" > -->

<div class="my-2">
<!--             <form id="search">

            <center>
        
                <label>Start Date:</label><input type="datetime-local" id="start_date" name="start_date" value="">
                <label>End Date:</label><input type="datetime-local" id="end_date" name="end_date" value="">
                <label>Language:</label>
                <select id="mySelect" style='width: 200px;' name="language" value="">
                <option value=''>-- Select all --</option>          
                <option value='Tamil'>Tamil</option>  
                <option value='Malayalam'>Malayalam</option>   
                <option value='Telugu'>Telugu</option>        
                <option value='English'>English</option>
                <option value='kannada'>kannada</option>        
                </select>   
<input type="button" onclick="multipleFunc()" value="Select multiple options">

               <button id="finddata" class="btn-success"><i class="fa fa-search"></i></button>
            </center>
   </form> -->
                </div>

    <center>
             @if(isset($startDate))
                        <label>Start Date:</label><input type="text" id="start_date" name="start_date" maxlength="0"value="{{date('d-m-Y h:i A', strtotime($startDate))}}">


                        <label>End Date:</label><input type="text" id="end_date" name="end_date" maxlength="0"value="{{date('d-m-Y h:i A', strtotime($endDate))}}">

           

                        <a href="{{url('massbooking')}}" class="btn btn-danger">Reset</a>
                        <!-- <button type="submit" id="myBtn" class="btn btn-info">Export to PDF</button> -->
               @else

                        <form action="{{Route('massdatefilter')}}" method="GET">
                        <label>Start Date:</label><input type="datetime-local" id="start_date" name="start_date" required >
                        <label>End Date:</label><input type="datetime-local" id="end_date" name="end_date" required>
                        <button type="submit" id="submit" class="btn btn-success">Filter</button>
                        <!-- <input type="button" class="btn btn-success" onclick="generate()" value="Export To PDF" />  -->
                        </form>
               @endif
    </center>

<div class="card-body">

<table id="simple_table" class="table table-bordered table-striped">

<thead>



<div class="d-flex justify-content-end mb-4">
<input type="button" class="btn btn-success" onclick="generate()" value="Export To PDF"/>
</div>

    <th class="bg-info">No</th>
    <th class="bg-info">Name</th>
    <th class="bg-info">Intention For</th>
    <th class="bg-info">Intention</th>
    <th class="bg-info">Mass</th>
    <th class="bg-info">Date & Time</th>
</tr>
</thead>
<tbody id="searchdata">

@foreach ($data as $key=> $value)
    <?php 
        $date_time = date('d-m-Y h:i A', strtotime($value->DateTime));
    ?>  
 <tr>    
        <td class="text-center">{{++$key}}</td>
        <td class="text-left">{{$value->name}}</td>
        <td class="text-center">{{$value->intentionfor}}</td>
        <td class="text-center">{{$value->intention}}</td>
        <td class="text-center">{{$value->language}}</td>
        <td class="text-center">{{$date_time}}</td>
    </tr>
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
        <p style="font-size: x-large; color: green;">Are you want close this Massbooking ?</p>
        <label for="lastname"><h3>Mass Restriction Time</h3></label>
        <br/>


@if($datagroup != '')
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
      

@endif
        <input type="hidden" name="masstime_restriction" maxlength="0"value="Yes">
        @if(isset($startDate))
        <input type="hidden" id="download_starttime" name="download_starttime" maxlength="0"value="{{date('d-m-Y h:i A', strtotime($startDate))}}">
        <input type="hidden" id="download_endtime" name="download_endtime" maxlength="0"value="{{date('d-m-Y h:i A', strtotime($endDate))}}">
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



</body>
      <script>
         function multipleFunc() {
            document.getElementById("mySelect").multiple = true;
         }
      </script>

<script type="text/javascript">
 
    


 
    $("#finddata").click(function(e){
      e.preventDefault();
        var url = "{{Route('search')}}";
        var formID = $(this).parents("form").attr("id");
        finddata(formID, url);
    });
    function finddata(formId, url){ 
      var formData = $("#"+formId+"").serializeArray();
     
        $.ajax({
          type: "GET",
          url: url,
          data: formData,
          success: function(response) {
             console.log(response.success);
             
             }
          });
    }
   
  

    $(document).ready(function() {
        $('select').selectpicker();
    });

    $('table').DataTable();

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

 $(document).ready(function(){

      $("#myBtn").click(function() {
          $('#myModal').appendTo("body").modal('toggle');
      });
      $("#closeModal").click(function() {
          $('#myModal').modal('hide');
      });
      $("#CloseModalBTN").click(function() {
          $('#myModal').modal('hide');
      });

});

function generate(e) {  

    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
    var ExportDate = moment().format("DD/MM/YYYY hh:mm A");
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
    doc.text(40, 30, "St. Mary's Basilica");
    doc.text(430, 20, ExportDate);
    doc.autoTable({  
        html: '#simple_table',  
        startY: 60,  
         
      
        styles: {  
            minCellHeight: 10  
        }  
    })
    doc.save('mass.pdf');  
}  
</script> 

@endsection


  
