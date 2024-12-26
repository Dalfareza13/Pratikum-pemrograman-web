<!DOCTYPE html>
<html lang="en">
<head>
<title>DAFFA ALFAREZA (701230045)</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>
<body>
<div class="container"><br/><br/>
    <div class="row">
        <div class="col-lg-10">
            <h2>Pengunjung Taman Indah (CRUD)</h2>
            
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Tambahkan Pengunjung
            </button>
        </div>
    </div>
 
    <table class="table table-bordered table-striped" id="pengunjungTable">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Keperluan</th>
                <th>Alamat</th>
                <th width="280px">Action</th>
            </tr>
        </thead>  
        <tbody>
       <?php
        foreach($pengunjung_detail as $row){
        ?>
        <tr id="<?php echo $row['id']; ?>">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['keperluan']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td>
            <a data-id="<?php echo $row['id']; ?>" class="btn btn-primary btnEdit">Edit</a>
            <a data-id="<?php echo $row['id']; ?>" class="btn btn-danger btnDelete">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Pengunjung Hari Ini</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="tambahpengunjung" name="tambahpengunjung" action="<?php echo site_url('pengunjung/store');?>" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="txtnama" placeholder="Nama" name="txtnama">
                    </div>
                    <div class="form-group">
                        <label for="Keperluan">Keperluan</label>
                        <input type="text" class="form-control" id="txtKeperluan" placeholder="Keperluan" name="txtKeperluan">
                    </div>
                    <div class="form-group">
                        <label for="txtAlamat">Alamat</label>
                        <textarea class="form-control" id="txtAlamat" name="txtAlamat" rows="10" placeholder="Alamat"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
    </div>
 
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Update </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updatepengunjung" name="updatepengunjung" action="<?php echo site_url('pengunjung/update');?>" method="post">
            <div class="modal-body">
                <input type="hidden" name="hdnpengunjungId" id="hdnpengunjungId"/>
                <div class="form-group">
                    <label for="txtFirsNama">Nama:</label>
                    <input type="text" class="form-control" id="txtFirstNama" placeholder="Nama" name="txtFirstNama">
                </div>
                <div class="form-group">
                    <label for="txtLastKeperluan">Keperluan:</label>
                    <input type="text" class="form-control" id="txtLastKeperluan" placeholder="Keperluan" name="txtKeperluan">
                </div>
                <div class="form-group">
                    <label for="txtAlamat">Alamat</label>
                    <textarea class="form-control" id="txtAlamat" name="txtAlamat" rows="10" placeholder="Alamat"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
    </div>
 
</div>
 
<script>
$(document).ready(function () {
    $('#pengunjungTable').DataTable();
 
    $("#pengunjung").validate({
        rules: {
            nama: "required",
            txtnama: "required",
            txtalamat: "required"
        },
        messages: {
        },
           
        submitHandler: function(form) {
            var form_action = $("#addpengunjung").attr("action");
            $.ajax({
                data: $('#addpengunjung').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    var pengunjung = '<tr id="'+res.data.id+'">';
                    pengunjung += '<td>' + res.data.id + '</td>';
                    pengunjung += '<td>' + res.data.nama + '</td>';
                    pengunjung += '<td>' + res.data.keperluan + '</td>';
                    pengunjung += '<td>' + res.data.alamat + '</td>';
                    pengunjung += '<td><a data-id="' + res.data.id + '" class="btn btn-primary btnEdit">Edit</a>  <a data-id="' + res.data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
                    pengunjung += '</tr>';            
                    $('#pengunjungTable tbody').prepend(pengunjung);
                    $('#addpengunjung')[0].reset();
                    $('#addModal').modal('hide');
                },
                    error: function (data) {
                }
            });
        }
    });
 
    $('body').on('click', '.btnEdit', function () {
        var pengunjung_id = $(this).attr('data-id');
        $.ajax({
            url: 'pengunjung/edit/'+pengunjung_id,
            type: "GET",
            dataType: 'json',
            success: function (res) {
                $('#updateModal').modal('show');
                $('#updatepengunjung #hdnpengunjungId').val(res.data.id); 
                $('#updatepengunjung #nama').val(res.data.nama);
                $('#updatepengunjung #txtkeperluan').val(res.data.keperluan);
                $('#updatepengunjung #txtalamat').val(res.data.alamat);
            },
                error: function (data) {
            }
        });
    });
     
    $("#updatepengunjung").validate({
        rules: {
            txtnama: "required",
            txtkeperluan: "required",
            txtalamat: "required"
        },
            messages: {
        },
        submitHandler: function(form) {
            var form_action = $("#updatepengunjung").attr("action");
            $.ajax({
                data: $('#updatepengunjung').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    var pengunjung = '<td>' + res.data.id + '</td>';
                    pengunjung += '<td>' + res.data.first_name + '</td>';
                    pengunjung += '<td>' + res.data.last_name + '</td>';
                    pengunjung += '<td>' + res.data.alamat + '</td>';
                    pengunjung += '<td><a data-id="' + res.data.id + '" class="btn btn-primary btnEdit">Edit</a>  <a data-id="' + res.data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
                    $('#pengunjungTable tbody #'+ res.data.id).html(pengunjung);
                    $('#updatepengunjung')[0].reset();
                    $('#updateModal').modal('hide');
                },
                    error: function (data) {
                }
            });
        }
    }); 
 
    $('body').on('click', '.btnDelete', function () {
        var pengunjung_id = $(this).attr('data-id');
        $.get('pengunjung/delete/'+pengunjung_id, function (data) {
            $('#pengunjungTable tbody #'+ pengunjung_id).remove();
        })
    });  
});   
</script>
<span>Copyright &copy; Daffa Alfareza (701230045)</span>
</body>
</html>