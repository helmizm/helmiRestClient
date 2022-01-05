<html>
<head>
    <title>IKAN GUPPY</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <br />
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">Daftar Jenis Ikan Guppy</h3>
                    </div>
                    <div class="col-md-6" align="right">
                        <button type="button" id="add_button" class="btn btn-info btn-xs">Tambah Data Ikan Guppy</button>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <span id="success_message"></span>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>              
                            <th>Nama</th>
                            <th>Jenis Ikan</th>
                            <th>Kualitas Air</th>
                            <th>Perawatan</th>
                            <th>Penyakit</th>
                            <th>Pengobatan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Ikan Guppy</h4>
                </div>
                <div class="modal-body">
                  
                    <label>Nama Ikan</label>
                    <input type="text" name="nama_ikan" id="nama_ikan" class="form-control" />
                    <span id="nama_ikan_error" class="text-danger"></span>
                    <br />

                    <label>Jenis Ikan</label>
                    <input type="text" name="jenis_ikan" id="jenis_ikan" class="form-control" />
                    <span id="jenis_ikan_error" class="text-danger"></span>
                    <br />

                    <label>Kualitas Air</label>
                    <input type="text" name="kualitas_air" id="kualitas_air" class="form-control" />
                    <span id="kualitas_air_error" class="text-danger"></span>
                    <br />

                    <label>Perawatan</label>
                    <input type="text" name="perawatan" id="perawatan" class="form-control" />
                    <span id="perawatan_error" class="text-danger"></span>
                    <br />

                    <label>Penyakit</label>
                    <input type="text" name="penyakit" id="penyakit" class="form-control" />
                    <span id="penyakit_error" class="text-danger"></span>
                    <br />

                    <label>Pengobatan</label>
                    <input type="text" name="pengobatan" id="pengobatan" class="form-control" />
                    <span id="pengobatan_error" class="text-danger"></span>
                    <br />
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="data_action" id="data_action" value="Insert" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    
    function fetch_data()
    {
        $.ajax({
            url:"<?php echo base_url(); ?>guppy/action",
            method:"POST",
            data:{data_action:'fetch_all'},
            success:function(data)
            {
                $('tbody').html(data);
            }
        });
    }

    fetch_data();

    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("tambah ikan guppy");
        $('#action').val('Add');
        $('#data_action').val("Insert");
        $('#userModal').modal('show');
    });

    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        $.ajax({
            url:"<?php echo base_url() . 'guppy/action' ?>",
            method:"POST",
            data:$(this).serialize(),
            dataType:"json",
            success:function(data)
            {
                if(data.success)
                {
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    fetch_data();
                    if($('#data_action').val() == "Insert")
                    {
                        $('#success_message').html('<div class="alert alert-success">Data Telah Ditambahkan</div>');
                    }
                }

                if(data.error)
                {
                    $('#nama_ikan_error').html(data.nama_ikan_error);
                    $('#jenis_ikan_error').html(data.jenis_ikan_error);
                    $('#kualitas_air_error').html(data.kualitas_air_error);
                    $('#perawatan_error').html(data.perawatan_error);
                    $('#penyakit_error').html(data.penyakit_error);
                    $('#pengobatan_error').html(data.pengobatan_error);
                }
            }
        })
    });

    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $.ajax({
            url:"<?php echo base_url(); ?>guppy/action",
            method:"POST",
            data:{id:id, data_action:'fetch_single'},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#nama_ikan').val(data.nama_ikan);
                $('#jenis_ikan').val(data.jenis_ikan);
                $('#kualitas_air').val(data.kualitas_air);
                $('#perawatan').val(data.perawatan);
                $('#penyakit').val(data.penyakit);
                $('#pengobatan').val(data.pengobatan);
                $('.modal-title').text('Edit Ikan Guppy');
                $('#id').val(id);
                $('#action').val('Edit');
                $('#data_action').val('Edit');
            }
        })
    });

    $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Apa anda yakin ingin menghapus data?"))
        {
            $.ajax({
                url:"<?php echo base_url(); ?>guppy/action",
                method:"POST",
                data:{id:id, data_action:'Delete'},
                dataType:"JSON",
                success:function(data)
                {
                    if(data.success)
                    {
                        $('#success_message').html('<div class="alert alert-danger">Data Telah Dihapus</div>');
                        fetch_data();
                    }
                }
            })
        }
    });
    
});
</script>