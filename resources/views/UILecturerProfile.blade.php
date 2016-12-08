@extends('sidebar')
@section('content')

    <div class="container body">
      <div class="main_container">
       
                <div class="x_title">
                  <div >
                        <h1 class="prod_title">Lecturer's Profile & Avilability </h1>
                  </div>
                  <div class="x_content" style="background: white;">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Availability</a>
                        </li>
                     
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="col-md-4">
                             <div class="image">
                               <img style="width: 100%; padding: 10px;" src="images/user.png">
                             </div>
                          </div>
                          <div class="col-md-8" style="float: left;">
                            <div class="row">
                               <div class="prod_title" style="margin-bottom: 3px;">
                               John Doe's Profile
                                   <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i> Edit Profile Info </a>
                               </div>
                              <div>
                                  <h2>
                                   <br><label style="margin-bottom: 5px">Nama :</label> 
                                   <br><label style="margin-bottom: 5px">NIP : </label> 
                                   <br><label style="margin-bottom: 5px">Alamat : </label> 
                                   <br><label style="margin-bottom: 5px">Email : </label> 
                                   <br><label style="margin-bottom: 5px">Nomor Telepon : </label> 
                                   </h2>
                              </div>
                            </div>
                           
                            <div class="row">
                              <div class="prod_title">Availability</div>
                              <div>
                                  <div class="alert alert-success alert-dismissible fade in">
                    
                                    <strong>John Doe</strong> is currently available
                                  </div>
                              </div>
                            </div>
                            
                              

                          </div>
                        
                          </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <!-- page content -->
     

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <div class="prod_title">
                     <label style="margin-right: 10px"> John Doe's Activity </label> 
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-chevron-circle-right"></i> Insert New Availability </a>
                    </div>
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Activity</th>
                          <th>Start Time</th>
                          <th>End Time</th>
                          <th>Action</th>

                      
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Meeting</td>
                          <td>2011/04/25 10:00</td>
                          <td>2011/04/25 12:00</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Out of Campus</td>
                          <td>2011/04/25 15:00</td>
                          <td>2011/04/25 16:00</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                       <tr>
                          <td>3</td>
                          <td>Meeting</td>
                          <td>2011/04/25 17:00</td>
                          <td>2011/04/25 18:00</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Meeting</td>
                          <td>2011/04/25 10:00</td>
                          <td>2011/04/25 12:00</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
        <!-- /page content -->
                  </div>

      
      </div>
    </div>
@stop

@section('js')

     <!-- jQuery -->
   
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
    <!-- /Datatables -->
@stop