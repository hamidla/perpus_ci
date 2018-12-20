<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">TAMBAH DATA</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                DATA TRANSAKSI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       <tr>
                                            <th>ID TRANSAKSI</th>
                                            <th>JUDUL</th>
                                            <th>NPM</th>
                                            <th>NAMA</th>
                                            <th>TANGGAL PINJAM</th>
                                            <th>TANGGAL KEMBALI</th>
                                            <th>STATUS</th>
                                            <th>________ACTION_______</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $sql = $this->Transaksi->get_transaksi()->result();
                                            foreach($sql as $data){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data->judul;?></td>
                                            <td><?php echo $data->npm;?></td>
                                            <td><?php echo $data->nama;?></td>
                                            <td><?php echo $data->tgl_pinjam;?></td>
                                            <td><?php echo $data->tgl_kembali;?></td>
                                            <td><?php echo $data->status;?></td>
                                            <td>
                                                <a href="" class="btn btn-info" > Ubah </a>
                                                <a href="" class="btn btn-danger" > Hapus </a>
                                        </tr>
                                        
                                        <?php } ?>
                                    </tbody>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>