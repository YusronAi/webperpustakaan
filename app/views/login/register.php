<section class="vh-100 bg-image bg-dark"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Register</h2>

              <form action="<?= Config::BASEURL ?>/login/register" method="POST" >

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cv" class="form-control form-control-lg" name="nama_anggota"/>
                  <label class="form-label" for="form3Example1cv">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3ck" class="form-control form-control-lg" name="alamat" />
                  <label class="form-label" for="form3Example3ck">Your Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cm" class="form-control form-control-lg" name="email"/>
                  <label class="form-label" for="form3Example3cm">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form3Example3cp" class="form-control form-control-lg" name="nomor_telepone"/>
                  <label class="form-label" for="form3Example3cp">Your Number Telephone</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cq" class="form-control form-control-lg" name="pass"/>
                  <label class="form-label" for="form3Example4cq">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdr" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdr">Repeat your password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cw" class="form-control form-control-lg" name="roles"/>
                  <label class="form-label" for="form3Example3cw">Your Role</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-dark btn-block btn-lg gradient-custom-4 text-body" name="register" id="register">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/webperpustakaan/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>