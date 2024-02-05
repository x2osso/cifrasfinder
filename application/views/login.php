
<section class="hero-section" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5" style="text-align: center;">
                    <h1 class="section-title ">Login</h1>
                </div>
            </div>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"><h3>E-mail</h3></label>
                  <input type="email" style="height:75px;border-radius:40px" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label"><h3>Senha</h3></label>
                  <input type="password" style="height:75px;border-radius:40px" class="form-control " id="user_password">
                </div>
                <div class="mb-3" style="text-align:center;">
                  <button type="submit" style="height:80px;border-radius:30px;align:center;" class="btn btn-outline-success"><h5 style="color:white;">Entrar</h5></button>
                </div>
                <div style="text-align:center;"class="form-text">Ainda nao tem cadatro ? <a href="<?= base_url();?>cadastrar" >Cadastrar<a></div>
            </form>
        </div>
    </div>
</section>
</main>
