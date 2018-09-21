<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="Nama" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Name</label>
                        <div class="col-md-6">
                            <input type="text" id="Nama" name="Nama" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="Lahir" class="col-md-3 control-label"><span class="glyphicon glyphicon-calendar"></span>Tanggal Lahir</label>
                      <div class="col-md-6">
                          <input type="date" id="Lahir" name="Lahir" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                    <div class="form-group ">
                        <label for="Status" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Status</label>
                        <div class="col-md-6">
                        <Select id='Status' name="Status" class="form-control">
                        <option value='Single'>Single</option>
                        <option value ='Pacaran'>Pacaran</option>
                        <option value ='Menikah'>Menikah</option>
                        </Select>
                    </div>
                </div>
                 <div class="form-group ">
                        <label for="Gender" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Gender</label>
                        <div class="col-md-6">
                        <Select id='Gender' name="Gender" class="form-control">
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
