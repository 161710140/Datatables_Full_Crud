<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/bootstrap/favicon.ico') }}">
    <title>Datatable</title>
    
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- dataTables --}}
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

      {{-- SweetAlert2 --}}
      <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
      <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/bootstrap/css/navbar-fixed-top.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('assets/bootstrap/js/ie-emulation-modes-warning.js') }}"></script>

</head>
<style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
  }
  .modal-footer {
      background-color: #f9f9f9;

  </style>
<body>

<div class="container">
    <br />
    <h3 align="center">Data Nama Orang</h3>
    <br />
    <div align="right">
        <a type="button" onclick="addForm()" name="add" id="add_data" class="btn btn-success btn-sm glyphicon glyphicon-plus" ></a>
    </div>
    <br />
    <table id="table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Lahir</th>
                <th>Status</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Keterangan</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
<!-- Modal Add -->
@include('DataOrang.form2')
<!-- Modal Edit -->
@include('DataOrang.form-edit')
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/jquery/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>
    <!-- Loading Overlay -->
    <script src="{{ asset('js/loadingoverlay.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script type="text/javascript">
      $.LoadingOverlay('show',{
      image:"{{asset('a.gif')}}",
      text:"Loading....",
      textAnimation: "1500ms fadein"
      });
  $(document).ready(function() {
    var table = $('#table').DataTable({
                      processing: true,
                      serverSide: true,
                      ajax: "{{ route('api.Data') }}",
                      columns: [
                        {data: 'Nama', name: 'Nama'},
                        {data: 'Lahir', name: 'Lahir'},
                        {data: 'Status', name: 'Status'},
                        {data: 'Gender', name: 'Gender'},
                        {data: 'Alamat', name: 'Alamat'},
                        {data: 'Pekerjaan', name: 'Pekerjaan'},
                        { "data": 0 , //mengambil id field
                          //mRender ???
                          "mRender" : function ( value, type, full ) {                    
                          //full adalah jumlah seluruh array 
                          //proses penggabungan
                          return 'Nama '+full['Nama']+',Lahir Pada Tanggal '+full['Lahir']+',Status '+full['Status']+',Berkelamin '+full['Gender']+',Tinggal Di '+full['Alamat']+',Bekerja Sebagai '+full['Pekerjaan'];}
                        },
                        {data: 'show_photo', name: 'show_photo'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });
          setTimeout(function(){
          $.LoadingOverlay("hide");
          }, 3000);
        addForm = function () {
          $('input[name=_method]').val('POST');
          $.LoadingOverlay('show',{
          image:"{{asset('a.gif')}}",
          });
          setTimeout(function(){
          $.LoadingOverlay("hide");
          }, 500);
        save_method = "add";
        // Method Spoofing 
        // Karena Html Forms tidak support PUT,PATCH,DELETE maka _method dapat digunakan tentu saja _method dapat menampung POST
         $.ajax({
        success: function(){
        $('#modal-form').modal('show');
        $('#form')[0].reset();
        $('.modal-title').text('TambahDataOrang');
          }
           });
      }
          Cancel = function(){
              $.LoadingOverlay('show',{
                  image:"{{asset('a.gif')}}",
                  });
                  setTimeout(function(){
                  $.LoadingOverlay("hide");
                  }, 500);
          }
          editForm = function (id) {
            $('input[name=_method]').val('POST');
                  $.LoadingOverlay('show',{
                  image:"{{asset('a.gif')}}",
                  });
                  setTimeout(function(){
                  $.LoadingOverlay("hide");
                  }, 500);
          save_method = 'edit';
          $('input[name=_method]').val('PATCH');
          $('#form')[0].reset();
          $.ajax({
            url: "{{ url('table') }}" + '/' + id + "/edit",
            // Method yang digunakan
            type: "GET",
             ///Type data yang akan dikembalikan oleh database  
            dataType: "JSON",
            success: function(data) {
              $('#modal-form').modal('show');
              $('.modal-title').text('FormEditData');
              $('#id').val(data.id);
              $('#Nama').val(data.Nama);
              $('#Lahir').val(data.Lahir);
              $('#Status').val(data.Status);
              if (data.Gender == 'Laki-Laki') {
                $('#9').prop('checked',true);
              }
              else{
                $('#8').prop('checked',true);
              }
              $('#Alamat').val(data.Alamat);
              
            },
            error : function() {
                alert("Tidak Ada Data");
            }
          });
        }
        deleteData = function (id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          $.LoadingOverlay('show',{
          image:"{{asset('a.gif')}}",
          });
          setTimeout(function(){
          $.LoadingOverlay("hide");
          }, 500);
          swal({
              title:'Are You Sure?',
              text: "You Can't Revert This Action!",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Yes,Delete It Please!',
          }).then(function () {
          $.LoadingOverlay('show',{
          image:"{{asset('a.gif')}}",
          });
              $.ajax({
                  url : "{{ url('table') }}" + '/' + id,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                    setTimeout(function(){
                    $.LoadingOverlay("hide");
                    }, 500);
                      table.ajax.reload();
                      swal({
                          title: 'Deleted!',
                          text: data.message,
                          type: 'success',  
                          allowOutsideClick: false,
                          allowEscapeKey   : false,
                          allowEnterKey    : false,
                      })
                  },
                  error : function () {
                     // $.LoadingOverlay('show',{
                     // image:"{{asset('a.gif')}}",
                     //  });
                     // setTimeout(function(){
                     // $.LoadingOverlay("hide");
                     // }, 500);
                      swal({
                         showLoaderOnConfirm:true, 
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          allowOutsideClick: false,
                          allowEscapeKey   : false,
                          allowEnterKey    : false,
                      })
                  }
              });
          });
        }
        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('table') }}";
                    else url = "{{ url('table') . '/' }}" + id;
                     $.LoadingOverlay('show',{
                     image:"{{asset('a.gif')}}",
                     });
                    $.ajax({
                        url : url,
                        type : "POST",
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                          setTimeout(function(){
                          $.LoadingOverlay("hide");
                          }, 500);
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text : data.message,
                                allowOutsideClick: false,
                                allowEscapeKey   : false,
                                allowEnterKey    : false,
                                type: 'success',
                            })
                        },
                        error : function(data){
                          setTimeout(function(){
                          $.LoadingOverlay("hide");
                          }, 500);
                            swal({
                                title: 'Oops...',
                                text : data.message,
                                allowOutsideClick: false,
                                allowEscapeKey   : false,
                                allowEnterKey    : false,
                                type: 'error',
                            })
                        }
                    });
                    return false;
                }
            });
        });
          var today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth()+1;
          var yyyy = today.getFullYear();
          if(dd<10){
              dd='0'+dd
            } 
            if(mm<10){
              mm='0'+mm
            } 
            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("Lahir").setAttribute("max", today);

     });
</script>
