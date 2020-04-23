<div class="container-fluid">
        <div class="row">
        <div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Form Desa</h3>
                            </div>
                            <div class="panel-body">
                            <form action="#">
                            <div class="form-group">
                            <label for="namajalan">Nama Jalan</label>
                            <input type="text" class="form-control" id="nama_desa" placeholder="">
                             <input type="hidden" name="id_desa" id="id_desa" value="">
                            </div>
                            <div class="form-group">
                           <label for="keterangan">Keterangan</label>
                             <textarea name="keterangan" class="form-control" id="keterangan"></textarea>
                                </div>
                            <div class="form-group">
                        <button type="button" name="simpandesa" id="simpandesa" class="btn btn-primary">Simpan</button>
                        <button type="button" name="resetdesa"  id="resetdesa" class="btn btn-warning">Reset</button>
                        <button type="button" name="updatedesa" id="updatedesa" class="btn btn-info" disabled="true">Update</button>
                      </div>
                  </form>
              </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-list"></span> Daftar Desa</h3>
              </div>
              <div class="panel-body">
                  <table class="table table-bordered">
                      <th>No</th>
                      <th>Nama Desa</th>
                      <th>Keterangan</th>
                      <th></th>
                      <tbody id="daftardesa">
                          <?php
                          $no = 1;
                          foreach ($itemdesa->result() as $desa) {
                              ?>
                              <tr>
                                  <td><?php echo $no;?></td>
                                  <td><?php echo $desa->nama_desa;?></td>
                                  <td><?php echo $desa->keterangan;?></td>
                                  <td>
                                      <button type="button" class="btn btn-sm btn-info" data-id_desa="<?php echo $desa->id_desa;?>" 
                                      name="editdesa<?php echo $desa->id_desa;?>" id="editjalan"><span class="glyphicon glyphicon-edit"></span></button>
                                      <button type="button" class="btn btn-sm btn-danger" data-id_desa="<?php echo $desa->id_desa;?>"
                                      name="deletedesa<?php echo $desa->id_desa;?>" id="deletedesa"><span class="glyphicon glyphicon-trash"></span></button>
                                  </td>
                              </tr>
                              <?php
                              $no++;
                          }
                           ?>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>
  </div>