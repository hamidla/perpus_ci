<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">TAMBAH DATA</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                DATA BUKU
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID BUKU</th>
                                            <th>JUDUL</th>
                                            <th>PENGARANG</th>
                                            <th>PENERBIT</th>
                                            <th>TAHUN TERBIT</th>
                                            <th>ISBN</th>
                                            <th>JUMLAH BUKU</th>
                                            <th>LOK_ASL</th>
                                            <th>TANGGAL INPUT</th>
                                            <th>________ACTION_______</th>
                                        </tr>
                                    </thead>
                                       
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $sql = $this->buku->get_buku()->result();
                                            foreach($sql as $data){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data->judul;?></td>
                                            <td><?php echo $data->pengarang;?></td>
                                            <td><?php echo $data->penerbit;?></td>
                                            <td><?php echo $data->tahun_terbit;?></td>
                                            <td><?php echo $data->isbn;?></td>
                                            <td><?php echo $data->jumlah_buku;?></td>
                                            <td><?php echo $data->lok_asl;?></td>
                                            <td><?php echo $data->tgl_input;?></td>
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