<div align="center"></div>
<table width="80%" border="1" id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="5%">No</th>
                          <th width="25%">Nama Barang</th>
                          <th width="20%">Jumlah</th>
                          <th width="25%">Harga</th>
                          <th width="25%">Nama Supplier</th>
                          <th width="25%">Tanggal</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $no=1;
                        foreach ($okta as $diva) {

                        ?>
                        <tr>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $diva->nama_brg?></td>
                        <td><?php echo $diva->jumlah?></td>
                        <td><?php echo $diva->harga?></td>
                        <td><?php echo $diva->nama_supp?></td>
                        <td><?php echo $diva->Tanggal?></td>
                        <td>

                        <?php 
                      }
                        ?>
                      </tbody>
                    </table>

                    <script>
                      window.print();
                    </script>