<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">TAMBAH DATA</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                DATA PEMINJAM
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       <tr>
                                            <th>ID PEMINJAM</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>TEMPAT TANGGAL LAHIR</th>
                                            <th>STATUS</th>
                                            <th>TOTAL BUKU</th>
                                            <th>________ACTION_______</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $sql = $this->Peminjam->get_peminjam()->result();
                                            foreach($sql as $data){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data->nama;?></td>
                                            <td><?php echo $data->alamat;?></td>
                                            <td><?php echo $data->TTL;?></td>
                                            <td><?php echo $data->status;?></td>
                                            <td><?php echo $data->total_buku;?></td>
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