<table border="1" width="80%" id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Kode Barang</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>act</th>
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
                        <td><?php echo $diva->id_bill?></td>
                        <td>          

                        <?php 
                      }
                        ?>
                      </tbody>
                    </table>

                    <script>
                      window.print();
                    </script>