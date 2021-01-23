<div class="row"
  style="margin-top: 30px;">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0"
          style="border-color: #dedede;">
          <!-- panel body -->
          <div class="panel-body" style="font-size: 14px;">
            <center>
              <i class="entypo-thumbs-up" style="font-size: 32px;"></i>
              <h3>Congratulations!! The installation was successfull</h3>
            </center>
            <br>
            <center>
              <strong>
              Antes de comenzar a utilizar su aplicación, conviértala en suya. Establezca el nombre y el título de su aplicación, el correo electrónico de inicio de sesión del administrador y
                 contraseña. Recuerde las credenciales de inicio de sesión que necesitará más adelante para iniciar sesión en su cuenta. Después de este paso,
                 será redirigido a la página de inicio de sesión de la aplicación.
              </strong>
            </center>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal form-groups" method="post"
                  action="<?php echo site_url('install/finalizing_setup/setup_admin');?>">
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Nombre del Sistema</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="system_name" placeholder=""
                        required autofocus>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      El nombre de la app
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Admin First Name</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="first_name" placeholder="" required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Nombre Administrador
                    </div>
            			</div>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Admin Last Name</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="last_name" placeholder="" required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Full name of Administrator
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Admin Email</label>
            				<div class="col-sm-5">
            					<input type="email" class="form-control" name="email" placeholder="" required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Email address for administrator login
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Password</label>
            				<div class="col-sm-5">
            					<input type="password" class="form-control" name="password" placeholder=""
                        required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Admin login password
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label"></label>
            				<div class="col-sm-7">
            					<button type="submit" class="btn btn-info">Set me up</button>
            				</div>
            			</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
