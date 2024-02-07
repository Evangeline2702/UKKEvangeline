<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Penjualan</h2>
      <ul class="nav navbar-right panel_toolbox">
        <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li> -->
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <a href="<?= base_url('/home/tambah_p/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga</th>
            <th>ID Bill</th>
            <?php 
            $level=session()->get('level');
            if ($level != 2){
              ?>
            <th>act</th>
            <?php
          }
          else{

          }
          ?>
          </tr>
        </thead>


        <tbody>
          <?php
          $no=1;
          foreach ($okta as $diva){
            ?>
            <tr>
              <th><?php echo $no++ ?></th>
              <td><?php echo $diva->id_barang?></td>
              <td><?php echo $diva->jumlah?></td>
              <td><?php echo $diva->harga?></td>
              <td><?php echo $diva->id_bill?></td>
              <td>
                <?php 
            $level=session()->get('level');
            if ($level != 2){
              ?>
                <a href="<?= base_url('/home/hapus_bk/'.$diva->id_transaksi)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                <?php
          }
          else{

          }
          ?>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>