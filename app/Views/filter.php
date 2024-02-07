<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
                      <?php
                          if ($key=='view_b') {
                            echo "Laporan Barang";
                          }else if($key=='view_bm') {
                            echo "Laporan Barang Masuk";
                          }else
                            echo "Laporan Penjualan";
                      ?>
                    </h2>
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

                    <form class="form-horizontal form-label-left" novalidate action="<?php
                          if ($key=='view_b') {
                            echo base_url('home/pdf_b');
                          }else if($key=='view_bm') {
                            echo base_url('home/pdf_bm');
                          }else{
                            echo base_url('home/pdf_p');
                          }
                      ?>" method="post">

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-xs-12" for="name">Tanggal Mulai<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input name="awal" class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tanggal Akhir <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input name="akhir"class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-2">
                        <button type="submit" id="send" class="btn btn-warning"><i class="fa fa-print"></i></button>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                    </form>
                     <form class="form-horizontal form-label-left" novalidate action="<?php
                          if ($key=='view_b') {
                            echo base_url('home/pdf_b');
                          }else if($key=='view_bm') {
                            echo base_url('home/pdf_bm');
                          }else{
                            echo base_url('home/pdf_p');
                          }
                      ?>" method="post">

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-xs-12" for="name">Tanggal Mulai<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input name="awal" class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tanggal Akhir <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input name="akhir"class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-2">
                        <button type="submit" id="send" class="btn btn-danger"><i class="fa fa-file"></i></button>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                    </form>
                    <form class="form-horizontal form-label-left" novalidate action="<?php
                          if ($key=='view_b') {
                            echo base_url('home/excel_barang');
                          }else if($key=='view_bm') {
                            echo base_url('home/excel_barang');
                          }else{
                            echo base_url('home/excel_barang');
                          }
                      ?>" method="post">

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-xs-12" for="name">Tanggal Mulai<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input name="awal" class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Tanggal Akhir <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input name="akhir"class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-2">
                        <button type="submit" id="send" class="btn btn-success"><i class="fa fa-file"></i></button>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                    </form>
                  </div>
                </div>
              </div>


             