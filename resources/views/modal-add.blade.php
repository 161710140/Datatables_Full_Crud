<!-- Modal Add -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form method="post" id="form" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }} {{ method_field('POST') }}
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-plus"></span>Form Data Orang</h4>
        </div>
          <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                        <label><span class="glyphicon glyphicon-user"></span>Nama</label>
                        <input type="text" id="Nama" name="Nama" class="form-control"  required>
                        <span class="help-block has-error Nama_error"></span>
            </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-calendar"></span>Tanggal Lahir</label>
                        <input type="date" name="Lahir" id="Lahir" class="form-control" />
                         <span class="help-block has-error Lahir_error"></span>
                    </div>
                     <div class="form-group ">
                        <label><span class="glyphicon glyphicon-user"></span>Status</label>
                        <Select id='Status' name="Status" class="form-control">
              <option value='Single'>Single</option>
                <option value ='Pacaran'>Pacaran</option>
                <option value ='Menikah'>Menikah</option>
              </Select>
                    </div>
                    <div class="form-group">
                        <p>
                        <label><span class="glyphicon glyphicon-user"></span>Gender
                          <br>
                          <input type="checkbox" name="Gender" id="Gender" value="Laki-Laki" />
                            <span>Laki-Laki</span>
                           </label>
                         </p>
                          <p>
                        <label>
                          <input type="checkbox" name="Gender" id="Gender" value="Perempuan" />
                            <span>Perempuan</span>
                           </label>
                         </p>
              <button type="submit" class="btn btn-success btn-block" id ="btn-save"><span class="glyphicon glyphicon-plus"></span>Masukan Data</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>