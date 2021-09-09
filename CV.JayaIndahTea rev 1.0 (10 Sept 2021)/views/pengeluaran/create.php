

<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <B>Form Tambah Pengeluaran</B> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li class="active">Pengeluaran</li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="box">
                        <div class="box-body">
                        
                        <?php $this->load->view('templates/flash'); ?>   
                        <!-- form start -->
                        <br>
                        <?php echo form_open_multipart(site_url('PemasukanController/Create')) ?>
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row ">
                                    <label for="inputIDPemasukan" class="col-sm-2 col-form-label">ID</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name='id_pemasukan' readonly value="" >
                                    
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group row <?php echo (form_error('nama_barang')) ? ' has-error' : ''; ?>">
                                    <label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name='nama_barang' placeholder="Nama">
                                    <?php echo form_error('nama_barang', '<span class="help-block">', '</span>') ?>
                                    </div>
                                    
                                </div>
                                <div class="form-group row <?php echo (form_error('tujuan')) ? ' has-error' : ''; ?>">
                                    <label for="inputTujuan" class="col-sm-2 col-form-label">Jenis Pengeluaran</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name='tujuan' placeholder=" ">
                                    <?php echo form_error('tujuan', '<span class="help-block">', '</span>') ?>
                                    </div>
                                    
                                </div>
                                <div class="form-group row <?php echo (form_error('tujuan')) ? ' has-error' : ''; ?>">
                                    <label for="inputTujuan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name='tujuan' placeholder="Keterangan lainnya">
                                    <?php echo form_error('tujuan', '<span class="help-block">', '</span>') ?>
                                    </div>
                                    
                                </div>
                                <div class="form-group row <?php echo (form_error('berat_barang_pm')) ? ' has-error' : ''; ?>">
                                    <label for="inputBeratBarang" class="col-sm-2 col-form-label">Berat Barang</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name='berat_barang_pm' placeholder="50.2">
                                    <?php echo form_error('berat_barang_pm', '<span class="help-block">', '</span>') ?>
                                    </div> 
                                    <label >Kilogram (Kg)</label>
                                    
                                </div>
                                <div class="form-group row <?php echo (form_error('nominal_pemasukan')) ? ' has-error' : ''; ?>">
                                    <label for="inputNominalPM" class="col-sm-2 col-form-label">Nominal</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control" name='nominal_pemasukan' placeholder="10000">
                                    <?php echo form_error('nominal_pemasukan', '<span class="help-block">', '</span>') ?>
                                    </div>
                                    <label >Rupiah (Rp. )</label>
                                    
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <a href="<?php echo site_url('PengeluaranController') ?>" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                            <?php echo form_close() ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div> 
</body>

