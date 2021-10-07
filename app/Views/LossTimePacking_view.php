<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loss Time Packing</title>
     <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body>
    <!-- CONTAINER -->
    <div class="container">
        <!-- CARD -->
        <div class="card">
            <div class="card-header">
                Loss Time Packing
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        + Tambah Data
                    </button>
                    <form action="" method="get">
                    <button type="submit" class="btn btn-default btn-sm">
                        Reload
                    </button>
                    </form>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Input Loss Time Packing</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- KALAU ERROR -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
                                </div>
                                <!-- KALAU SUKSES -->
                                <div class="alert alert-primary sukses" role="alert" style="display: none;">
                                </div>
                                <!-- FORM INPUT DATA -->
                                <input type="hidden" id="inputIdx">
                                <div class="mb-3 row">
                                    <label for="inputTglprod" class="col-sm-4 col-form-label">Tanggal Produksi</label>
                                    <div class="col-sm-8">
                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" 
                                        id="inputTglprod" placeholder="Tanggal Produksi"/>
                                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPekerja" class="col-sm-4 col-form-label">Pekerja</label>
                                    <div class="col-sm-8">
                                        <select id="inputPekerja" class="form-control">
                                                <option value="pekerja 1">Pekerja 1</option>
                                                <option value="pekerja 2">Pekerja 2</option>
                                                <option value="Pekerja 3">Pekerja 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputUnitKerja" class="col-sm-4 col-form-label">Unit kerja</label>
                                    <div class="col-sm-8">
                                        <select id="inputUnitKerja" class="form-control" onchange="myFunction(event)">
                                        <option value="">--select--</option>
                                                <option value="Man Power 1">Unit Kerja 1</option>
                                                <option value="Man Power 2">Unit Kerja 2</option>
                                                <option value="Man Power 3">Unit Kerja 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputManPower" class="col-sm-4 col-form-label">Man Power</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputManPower" disabled>
                                        
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputDescrItem" class="col-sm-4 col-form-label">Deskripsi Item</label>
                                    <div class="col-sm-8">
                                        <select id="inputDescrItem" class="form-control" >
                                        <option value="">--select--</option>
                                                <option value="kode Item 1">Deskripsi Item 1</option>
                                                <option value="kode Item 2">Deskripsi Item 2</option>
                                                <option value="kode Item 3">Deskripsi Item 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputTungguBox"  class="col-sm-4 col-form-label">Tunggu Box</label>
                                    <div class="col-sm-8">
                                    <input type="number" id="inputTungguBox" class="form-control">
                                    </div>
                                
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputTungguPeralatanBox"  class="col-sm-4 col-form-label">Tunggu Peralatan Box</label>
                                    <div class="col-sm-8">
                                    <input type="number" id="inputTungguPeralatanBox" class="form-control">
                                    </div>
                                
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputTungguWIP"  class="col-sm-4 col-form-label">Tunggu WIP</label>
                                    <div class="col-sm-8">
                                    <input type="number" id="inputTungguWIP" class="form-control">
                                    </div>
                                
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputTungguSticker"  class="col-sm-4 col-form-label">Tunggu Sticker</label>
                                    <div class="col-sm-8">
                                    <input type="number" id="inputTungguSticker" class="form-control">
                                    </div>
                                
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                                <button type="button" class="btn btn-secondary tombol-tutup" data-dismiss="modal">Batal</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <label>Periode : &nbsp;</label>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1"   >
                                <select class="form-control" id="periodeToday" name="today" >
                                    <option value='2021-10-07 00:00:00' >today</option>
                                    
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio2" >
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="reservation" name='rangedate'>
                                    
                                </div>
                                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </form>
                <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                    <th>Tanggal Produksi</th>
                    <th>Pekerja</th>
                    <th>Unit Kerja</th>
                    <th>Man Power</th>
                    <th>Kode Item</th>
                    <th>Deskripsi Item</th>
                    <th>Waktu Kerja</th>
                    <th>Tunggu Box</th>
                    <th>Tunggu Peralatan Box</th>
                    <th>Tunggu VIP</th>
                    <th>Tunggu Sticker</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        foreach ($datas as $k => $v) {
                           
                        ?>
                            <tr>
                                <td><?php echo $v['tgl_produksi'] ?></td>
                                <td><?php echo $v['pekerja'] ?></td>
                                <td><?php echo $v['unit_kerja'] ?></td>
                                <td><?php echo $v['man_power'] ?></td>
                                <td><?php echo $v['item'] ?></td>

                                <td><?php echo $v['kode_item'] ?></td>
                                <td><?php echo $v['waktu_kerja'] ?></td>
                                <td><?php echo $v['tunggu_box'] ?></td>
                                <td><?php echo $v['tunggu_peralatan_box'] ?></td>
                                <td><?php echo $v['tunggu_wip'] ?></td>
                                <td><?php echo $v['tunggu_sticker'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal"
                                    onclick="edit(<?php echo $v['idx'] ?>)">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus(<?php echo $v['idx'] ?>)">Delete</button>

                                </td>
                            </tr>
                        <?php } ?>
                  </tbody>
                 
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function hapus($id) {
            var result = confirm('Yakin delete?');
            if (result) {
                window.location = "<?php echo site_url("LossTimePacking/hapus") ?>/" + $id;
            }
        }

        function edit($idx) {
            $.ajax({
                url: "<?php echo site_url("LossTimePacking/edit") ?>/" + $idx,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.idx != '') {
                        $('#inputIdx').val($obj.idx);
                        $('#inputTglprod').val($obj.tgl_produksi);
                        $('#inputPekerja').val($obj.pekerja);
                        $('#inputUnitKerja').val($obj.unit_kerja);
                        $('#inputManPower').val($obj.man_power);
                        $('#inputDescrItem').val($obj.item);
                        $('#inputTungguBox').val($obj.tunggu_box);
                        $('#inputTungguPeralatanBox').val($obj.tunggu_peralatan_box);
                        $('#inputTungguWIP').val($obj.tunggu_wip);
                        $('#inputTungguSticker').val($obj.tunggu_sticker);
                    }
                }

            });
        }
        function bersihkan() {
            $('#inputIdx').val('');
            $('#inputTglprod').val('');
            $('#inputPekerja').val('');
            $('#inputUnitKerja').val('');
            $('#inputManPower').val('');
            $('#inputDescrItem').val('');
            $('#inputTungguBox').val('');
            $('#inputTungguPeralatanBox').val('');
            $('#inputTungguWIP').val('');
            $('#inputTungguSticker').val('');
        }
        $('.tombol-tutup').on('click', function() {
            if ($('.sukses').is(":visible")) {
                window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
            }
            $('.alert').hide();
            bersihkan();
        });

        $('#tombolSimpan').on('click', function() {
            var $idx = $('#inputIdx').val();
            var $tglProd = $('#inputTglprod').val();
            var $pekerja = $('#inputPekerja').val();
            var $unitKerja = $('#inputUnitKerja').val();
            var $manPower = $('#inputManPower').val();
            var $kodeItem = $('#inputDescrItem').val();
            var $descrItem = $('#inputDescrItem').val();
            var $tungguBox = $('#inputTungguBox').val();
            var $tungguPeralatanBox = $('#inputTungguPeralatanBox').val();
            var $tungguWIP = $('#inputTungguWIP').val();
            var $tungguSticker = $('#inputTungguSticker').val();

            $.ajax({
                url: "<?php echo site_url("LossTimePacking/simpan") ?>",
                type: "POST",
                data: {
                    idx: $idx,
                    tglProd: $tglProd,
                    pekerja: $pekerja,
                    unitKerja: $unitKerja,
                    manPower: $manPower,
                    kodeItem: $kodeItem,
                    descrItem: $descrItem,
                    tungguBox: $tungguBox,
                    tungguPeralatanBox: $tungguPeralatanBox,
                    tungguWIP: $tungguWIP,
                    tungguSticker: $tungguSticker
                },
                success: function(jyed) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.sukses == false) {
                        $('.sukses').hide();
                        $('.error').show();
                        $('.error').html($obj.nsg);
                        
                    } else {
                        $('.error').hide();
                        $('.sukses').show();
                        $('.sukses').html($obj.msg);
                       
                    }
                }
               
            });
            bersihkan();

        });
    </script>

    <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script type="text/javascript">
    function myFunction(e) {
        document.getElementById("inputManPower").value = e.target.value
    }
</script>
<!-- Page specific script -->
<script>

$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "lengthChange": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

   

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    

  })
  
</script>
   </body>
</html>