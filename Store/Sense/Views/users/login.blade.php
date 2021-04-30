  @extends("sense::master")

      @section("body")

          <section class="container">
             <article class="row">
                <article class="col-lg-6 col-md-6 col-sm-8">

                   <section class="auth">
                      <form action="#">
                        <div class="form-group">
                           <div class="form-floating">
                              <input type="text"
                              id="user"
                              class="form-control"
                              placeholder="Email o Usuario"
                              autocomplete="off">

                              <label for="user">
                                 <i class="mdi mdi-shield-account-outline"></i> Email o Usuario
                              </label>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="form-floating">
                              <input type="password"
                              id="password"
                              class="form-control"
                              placeholder="Clave de acceso">

                              <label for="password">
                                 <i class="mdi mdi-key-outline"></i> Clave de acceso
                              </label>
                           </div>
                        </div>

                        <div class="form-group">

                           @csrf

                           <button class="btn btn-primary">
                              {{__("words.login")}}
                           </button>

                        </div>
                     </form>
                  </section>

               </article>
             </article>
          </section>
      @endsection
