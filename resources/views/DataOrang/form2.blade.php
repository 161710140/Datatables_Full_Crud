<!-- Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    </button>
                    <h4 class="modal-title"></h4>
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
                    <div class="form-group" id ='summernote'>
                      <label for="Alamat" class="col-md-3 control-label"><span class="glyphicon glyphicon-road"></span> Alamat</label>
                      <div class="col-md-6">
                        <textarea id="Alamat" name="Alamat" class="form-control" required></textarea>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                    <div class="form-group ">
                        <label for="Status" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Status</label>
                        <div class="col-md-6">
                        <Select name="Status" class="form-control select-single">
                        <option value='Single'>Single</option>
                        <option value ='Pacaran'>Pacaran</option>
                        <option value ='Menikah'>Menikah</option>
                        </Select>
                    </div>
                </div>
                 <div class="form-group ">
                        <label for="Gender" class="col-md-3 control-label"><span class="glyphicon glyphicon-user"></span>Gender</label>
                        <div class="col-md-6">
                         <input id="9" type="radio" name="Gender" value="Laki-Laki" required>Laki-Laki<br>
                         <input id="8" type="radio" name="Gender" value="Perempuan" required>Perempuan<br>
                         <span class="help-block with-errors"></span>
                    </div>
                </div>
                 <div class="form-group ">
                        <label for="Pekerjaan" class="col-md-3 control-label "><span class="glyphicon glyphicon-user"></span>Pekerjaan</label>
                        <div class="col-md-6">
                         <input id="1" type="checkbox" name="Pekerjaan" value="Guru" >Guru<br>
                         <input id="2" type="checkbox" name="Pekerjaan" value="Pelajar" >Pelajar<br>
                         <input id="3" type="checkbox" name="Pekerjaan" value="Programmer" >Programmer<br>
                         <input id="4" type="checkbox" name="Pekerjaan" value="Dokter" >Dokter<br>
                    </div>
                </div>
                <div class="form-group">
                      <label for="Photo" class="col-md-3 control-label"><span class="glyphicon glyphicon-camera"></span> Photo</label>
                      <div class="col-md-6">
                          <input type="file" id="Photo" name="Photo" class="form-control">
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="Cancel()">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>

