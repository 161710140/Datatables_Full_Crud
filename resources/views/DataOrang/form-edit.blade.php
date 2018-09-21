<div class="modal fade" id="Mymodal" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form2" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header2" style="padding:35px 50px;">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title glyphicon glyphicon-edit"></h3>
                </div>

                <div class="modal-body">
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
                        <label for="Status" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Status</label>
                        <div class="col-md-6">
                        <Select id='Status2' name="Status" class="form-control">
                        <option value='Single'>Single</option>
                        <option value ='Pacaran'>Pacaran</option>
                        <option value ='Menikah'>Menikah</option>
                        </Select>
                    </div>
                </div>
                 <div class="form-group ">
                        <label for="Gender" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Gender</label>
                        <div class="col-md-6">
                        <Select id='Gender2' name="Gender" class="form-control">
                        <option value='Laki-Laki'>Laki-Laki</option>
                        <option value ='Perempuan'>Perempuan</option>
                        </Select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>
