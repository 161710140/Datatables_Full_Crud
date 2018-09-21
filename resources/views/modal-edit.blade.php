<!-- Modal Edit -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header2" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-edit"></span>Form Edit Data</h4>
        </div>
          <div class="modal-body">
                <form method="post" id="form2">
              {{csrf_field()}} {{ method_field('POST') }}
                    <input type="hidden" id="id2" name="id">
                    <div class="form-group">
                        <label for="Nama" class="col-md-3 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="Nama2" name="Nama" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="Lahir" class="col-md-3 control-label">Tanggal Lahir</label>
                      <div class="col-md-6">
                          <input type="date" id="Lahir2" name="Lahir" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                     <div class="form-group ">
                        <label><span class="glyphicon glyphicon-user"></span>Status</label>
                        <Select id='Status2' name="Status2" class="form-control">
              <option value='Single'>Single</option>
                <option value ='Pacaran'>Pacaran</option>
                <option value ='Menikah'>Menikah</option>
              </Select>
                    </div>
                    <div class="form-group ">
                        <label><span class="glyphicon glyphicon-user"></span>Gender</label>
                        <Select id='Gender2' name="Gender2" class="form-control">
              <option value='Laki-Laki'>Laki-Laki</option>
                <option value ='Perempuan'>Perempuan</option>
              </Select>
                    </div>

                        <br>
              <button type="submit" class="btn btn-info btn-block" id ="btn-edit"><span class="glyphicon glyphicon-edit">Edit</span></button>
          </form>
        </div>
        <div class="modal-footer">
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
         <input type="hidden" name="id" id="id" value="" />
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>