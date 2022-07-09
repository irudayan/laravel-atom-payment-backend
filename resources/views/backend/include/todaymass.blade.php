@extends('backend.layouts.subpage')

@section('content')


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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <a href="{{url('massbookings')}}">
              <div class="inner">
                <h3>150</h3>

                <p>TODAY MASS</p></a>
              </div>
              <div class="icon">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                <h3>53
                  <!-- <sup style="font-size: 20px">%</sup> -->
                </h3>

                <p>Contribution (WEEKLY)</p>
              </div>
              <div class="icon">
                <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
              </div>
           <!--    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Contribution (MONTHLY)</p>
              </div>
              <div class="icon">
                <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
              </div>
             <!--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Contribution (ANNUAL)</p>
              </div>
              <div class="icon">
                <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
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
  <div class="row" >

    <!-- <div class="col-xs-12"> -->
      <div class="card-body">
     <table id="simple_table" class="table table-bordered table-striped">
      
        <thead>
      <!-- <center><b><h2>Mass List</h2></b></center> -->
        <div class="d-flex justify-content-end mb-4">
            <!-- <a class="btn btn-primary" href="{{ URL::to('/massbooking/pdf') }}">Export to PDF</a> -->

            <input type="button" class="btn btn-primary" onclick="generate()" value="Export To PDF" /> 
            <!-- <button class="btn btn-primary" id="submit">Export to  PDF</button> -->
        </div>
            <th class="bg-info">No</th>
            <th class="bg-info">Name</th>
            <!-- <th class="text-center">Mass id</th> -->
            <th class="bg-info">Dateand Time</th>
            <th class="bg-info">language</th>
            <th class="bg-info">Intention</th>
            <th class="bg-info">Intention For</th>
            <th class="bg-info">Email</th>
            <th class="bg-info">Phone Number</th>
            <th class="bg-info">Payment status</th>
            <th class="bg-info">payment Reference</th>
        </tr>
    </thead>
    <tbody>

         @foreach ($data as $key=> $value)
       <?php 



      $date_time = date('d-m-Y h:i A', strtotime($value->DateTime));

     ?>   <tr>    
                <td class="text-center">{{$value->id}}</td>
                <td class="text-left">{{$value->name}}</td>
                <!-- <td class="text-left">{{$value->mass_id}}</td> -->
                <td class="text-center">{{$date_time}}</td>
                <td class="text-center">{{$value->language}}</td>
                <td class="text-center">{{$value->intention}}</td>
                <td class="text-center">{{$value->intentionfor}}</td>
                <td class="text-center">{{$value->email}}</td>
                <td class="text-center">{{$value->number}}</td>   
                <td class="text-center">{{$value->payment_status}}</td> 
                <td class="text-center">{{$value->payment_reference}}</td>
            </tr>
        @endforeach
    </tbody>

</table>
<!-- <input type="button" onclick="generate()" value="Export To PDF" />  -->
</div>
</div>
</div>
</body>
<script>
    $('table').DataTable();
</script>
<script type="text/javascript">  
function generate() {  
    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
    pageHeight = doc.internal.pageSize.height;  
    specialElementHandlers = {  
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function(element, renderer) {  
            // true = "handled elsewhere, bypass text extraction"  
            return true  
        }  
    };  
    // margins = {  
    //     top: 20,  
    //     bottom: 30,  
    //     left: 20,  
    //     right: 10,  
    //     width: 60  
    // };  
    var y = 20;  
    doc.setLineWidth(2);  
    doc.text(200, y = y + 30, "MassBooking List");  
    doc.autoTable({  
        html: '#simple_table',  
        startY: 60,  
         
        // columnStyles: {  
        //     0: {  
        //         cellWidth: 10,  
        //     },  
        //     1: {  
        //         cellWidth: 5,  
        //     },  
        //     2: {  
        //         cellWidth: 10,  
        //     }  
        // },  
        styles: {  
            minCellHeight: 10  
        }  
    })  
    doc.save('mass.pdf');  
}  
</script> 
</body>
</html>
@endsection


<!-- api -->
<!--  @foreach ($data as $key=> $value)
      
            <tr>    
                <td class="text-center">{{$value->id}}</td>
                <td class="text-left">{{$value->name}}</td>
                <td class="text-left">{{$value->mass_intention}}</td>
                <td class="text-center">{{$value->mass_offered}}</td>
                <td class="text-center">{{$value->mass_time}}</td>
                <td class="text-center">{{$value->date}}</td>
                <td class="text-center">{{$value->email}}</td>
                <td class="text-center">{{$value->phone}}</td>
                <td class="text-center">{{$value->place}}</td> 
            </tr>
        @endforeach -->

  
