<!DOCTYPE html>
<html>
<head>
	<!-- Library Online -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <!-- Library Offline -->
    <script src="<?php echo base_url('assets/libs/jquery/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery/js/jquery.dataTables.min.js');?>"></script>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/libs/jquery/css/jquery.dataTables.min.css">
</head>

<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <B>Daftar Pembelian</B> 
            <small>Pengeluaran Kas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pemasukan</li>
        </ol>

        
        
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                
                <div class="box">
                        <div class="box-body">
                        <a href="<?php echo site_url('PengeluaranController/formcreate');?>" class="btn btn-default">
                            <span class="fa fa-plus"></span> &nbsp; Tambah </a> &nbsp;
                        <a href="<?php echo site_url('PemasukanController/get_download');?>" class="btn btn-default">
                            <span class="fa fa-download"></span> &nbsp; Unduh PDF</a> &nbsp; <br><br>

                        <?php $this->load->view('templates/flash'); ?>     
                        <!-- Tabel Akun Users -->
                        <table id="myTable" class="display table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Pengeluaran</th>
                                    <th>Asal Kirim</th>
                                    <th>Berat (Kg)</th>
                                    <th>Nominal (Rp.)</th>          
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <?php foreach ($dataPK->result() as $record) : ?>
                                <tr>
                                    <!-- Memanggil Value pada Tabel Users -->
                                    <td><?php echo $record->id_pengeluaran;?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $record->nominal_pengeluaran;?></td>
                                   
                                    <td>
                                        <!-- Button Aksi (Read and Delete) -->
                                        <a href="<?php echo site_url('PengeluaranController/readbyid/'.$record->id_pengeluaran) ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                                        <a href="<?php echo site_url('PengeluaranController/formupdate/'.$record->id_pengeluaran) ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="<?php echo site_url('PengeluaranController/get_download_byid/'.$record->id_pengeluaran) ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download"></span></a>                                      
                                        <button data-toggle="modal" data-target = "#delete-modal<?php echo $record->id_pengeluaran ;?>" class="btn btn-danger btn-sm delete_record"><span class="glyphicon glyphicon-trash"></span></button>
                                    </td>
                                </tr>
                                    <!-- Delete Modal-->
                                    <div class="modal modal-danger fade" id="delete-modal<?php echo $record->id_pengeluaran ;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Hapus</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Anda yakin akan menghapus data?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                                                    <?php echo form_open(site_url("PengeluaranController/delete/".$record->id_pengeluaran)) ?>
                                                    <button type="submit" class="btn btn-outline">Ya</button>
                                                    <?php echo form_close() ?>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Delete Modal -->
                                    </div>     
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>ID</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Pengeluaran</th>
                                    <th>Asal Kirim</th>
                                    <th>Berat (Kg)</th>
                                    <th>Nominal (Rp.)</th>          
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- End Tabel Akun Users -->
                        <script>
                            $(document).ready(function() {
                                $('#myTable').DataTable();
                            } );
                        </script> 
  
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> 
</body>

</html>