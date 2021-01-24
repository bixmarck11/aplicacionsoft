<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo get_phrase('si_ya_tienes_una_cuenta'); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form">
                      <div class="content-title-box">
                          <div class="title"><?php echo get_phrase('login'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('ingresa_tus_datos_correctos'); ?>.</div>
                          
                      </div>
                      <form action="<?php echo site_url('login/validate_login/user'); ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="login-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> <?php echo get_phrase('email'); ?>:</label>
                                      <input type="email" class="form-control" name = "email" id="login-email" placeholder="<?php echo get_phrase('email'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="login-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> <?php echo get_phrase('contraseña'); ?>:</label>
                                      <input type="password" class="form-control" name = "password" placeholder="<?php echo get_phrase('contraseña'); ?>" value="" required>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn"><?php echo get_phrase('Ingreso_al_sistema'); ?></button>
                          </div>
                          <div class="forgot-pass text-center">
                              <span>o</span>
                              <a href="javascript::" onclick="toggoleForm('forgot_password')"><?php echo get_phrase('recuperar_contraseña'); ?></a>
                          </div>
                          <div class="account-have text-center">
                              <?php echo get_phrase('si_al_parecer_no_tienes_una_cuenta'); ?>? <a href="javascript::" onclick="toggoleForm('registration')"><?php echo get_phrase('abrir_uenta'); ?></a>
                          </div>
                      </form>
                  </div>
                  <div class="user-dashboard-content w-100 register-form hidden">
                      <div class="content-title-box">
                          <div class="title"><?php echo get_phrase('formulario_de_registro'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('reggistrate_a_la_plataforma_UTN_y_aprende_rapido'); ?>.</div>
                      </div>
                      <form action="<?php echo site_url('login/register'); ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="first_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> <?php echo get_phrase('primer_nombre'); ?>:</label>
                                      <input type="text" class="form-control" name = "first_name" id="first_name" placeholder="<?php echo get_phrase('primer_nombre'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="last_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> <?php echo get_phrase('apellido'); ?>:</label>
                                      <input type="text" class="form-control" name = "last_name" id="last_name" placeholder="<?php echo get_phrase('apellido'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="registration-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> <?php echo get_phrase('email'); ?>:</label>
                                      <input type="email" class="form-control" name = "email" id="registration-email" placeholder="<?php echo get_phrase('email'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="registration-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> <?php echo get_phrase('password'); ?>:</label>
                                      <input type="password" class="form-control" name = "password" id="registration-password" placeholder="<?php echo get_phrase('password'); ?>" value="" required>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn"><?php echo get_phrase('Registrarse'); ?></button>
                          </div>
                          <div class="account-have text-center">
                              <?php echo get_phrase('ya_tienes_una_cuenta'); ?>? <a href="javascript::" onclick="toggoleForm('login')"><?php echo get_phrase('Ingreso_Sistema'); ?></a>
                          </div>
                      </form>
                  </div>

                  <div class="user-dashboard-content w-100 forgot-password-form hidden">
                      <div class="content-title-box">
                          <div class="title"><?php echo get_phrase('recuperar_password'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('ingresa_tu_contrasenia_para_recuperar_la_cuenta'); ?>.</div>
                      </div>
                      <form action="<?php echo site_url('login/forgot_password/frontend'); ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="forgot-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> <?php echo get_phrase('correo'); ?>:</label>
                                      <input type="email" class="form-control" name = "email" id="forgot-email" placeholder="<?php echo get_phrase('correo'); ?>" value="" required>
                                      <small class="form-text text-muted"><?php echo get_phrase('ingresa_tu_correo_para_recuperar_la_clave'); ?>.</small>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn"><?php echo get_phrase('resetear_clave'); ?></button>
                          </div>
                          <div class="forgot-pass text-center">
                              <?php echo get_phrase('un_paso_atras'); ?>? <a href="javascript::" onclick="toggoleForm('login')"><?php echo get_phrase('Ingreso_al_sistema'); ?></a>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  function toggoleForm(form_type) {
    if (form_type === 'login') {
      $('.login-form').show();
      $('.forgot-password-form').hide();
      $('.register-form').hide();
    }else if (form_type === 'registration') {
      $('.login-form').hide();
      $('.forgot-password-form').hide();
      $('.register-form').show();
    }else if (form_type === 'forgot_password') {
      $('.login-form').hide();
      $('.forgot-password-form').show();
      $('.register-form').hide();
    }
  }
</script>
