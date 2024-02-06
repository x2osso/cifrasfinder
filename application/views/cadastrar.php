<?php header('Access-Control-Allow-Origin: *'); ?>
<section class="hero-section" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5" style="text-align: center;">
                    <h1 class="section-title ">Cadastrar</h1>
                </div>
            </div>
          <form action="<?base_url();?>/cadUser">
            <div class="container">
                <div class="row">
                  <div class="col-2" style="font-size:100px">
    								<label class="btn btn-block btn-info">
                      <img id="user_img_src" class=""src="" style="max-height: 150px; max-width: 150px;">
    									<i id="logoImg" class="fa fa-user-circle fa-5x clearInfo"></i>
    									<input type="file" id="upload_user_img" accept="image/*" style="display: none;">
    								</label>
    								<input  id="user_img" hidden name="user_img">
    								<span class="help-block"></span>
                  </div>
                <div class="col-10">
                    <div class="col-sm">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label class="form-label"><h3>Nome de usuario</h3></label>
                            <input type="" style="height:75px;border-radius:40px" class="form-control " id="user_name" >
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="" class="form-label"><h3>Instrumento favorito</h3></label>
                            <select style="height:75px;border-radius:40px" class="form-control " id="inst_id" >
                              <option value="">Escolha um Instrumento . . . </option>
                              <?php foreach ($row as $inst): ?>
                                  <option value="<?= $inst->inst_id ?>"><?=$inst->inst_name?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><h3>E-mail</h3></label>
                        <input type="email" style="height:75px;border-radius:40px" class="form-control " id="user_email" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label"><h3>Senha</h3></label>
                        <input type="password" style="height:75px;border-radius:40px" class="form-control " id="user_password">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><h3>Biografia</h3></label>
                        <textarea class="form-control" style="border-radius:30px;"id="user_bio" rows="4"></textarea>
                      </div>
                      <div class="mb-3" style="text-align:center;">
                        <button type="submit" style="height:80px;border-radius:30px;align:center;" class="btn btn-outline-success"><h5 style="color:white;">Cadastrar</h5></button>
                      </div>
                      <div style="text-align:center;"class="form-text">Ja tem cadastro ? <a href="<?= base_url();?>login" >LOGIN<a></div>
                  </div>
              </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</section>
</main>
<script>

</script>
