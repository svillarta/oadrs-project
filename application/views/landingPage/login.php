<div class="wrapper wrapper-full-page">
	<div class="page-header login-page header-filter" filter-color="black" style="background-image: url(<?php echo base_url('assets/img/login.jpg'); ?> ); background-size: cover; background-position: top center;">
		<!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
		<div class="container">
			<div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" id="formLogin">
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">STUDENT LOGIN</h4>
                </div>
                <div class="alert alert-danger hidden" id="alertMessage">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                  </button>
									<span id="infoMessage"></span>
								</div>
                <div class="card-body ">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" name="identity" id="identity" placeholder="User Name or Student ID" required>
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                  </span>
                  <hr>

                  <div class="card-footer col-md-12 pull-left">
										<img class="hidden" id="loader" src="<?php echo base_url('assets/img/ezgif.gif'); ?>" alt="" style="width:100% !important; height:100% !important;">
                    <a href="<?php echo base_url('auth/forgot_password'); ?>" class="btn btn-rose btn-link">Forgot password</a>
                    <button  class="btn btn-rose  btn-sm" id="submit">Lets Go</button>
										<button class="pull-right btn btn-primary loading btn-sm hidden" id="loading" type="button" disabled=""><i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>Loading . . .</span></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

		</div>
		<footer class="footer">
			<div class="container">
				<nav class="float-left">
					<ul>
						<li>
							<a href="../../../product/buy/bundle/www_creative-tim_default_6.html">
								Creative Tim
							</a>
						</li>
						<li>
							<a href="https://creative-tim.com/presentation">
								About Us
							</a>
						</li>
						<li>
							<a href="http://blog.creative-tim.com">
								Blog
							</a>
						</li>
						<li>
							<a href="../../../license.htm">
								Licenses
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright float-right">
					&copy;
					<script>
						document.write(new Date().getFullYear())
					</script>, made with <i class="material-icons">favorite</i> by
					<a href="../../../product/buy/bundle/www_creative-tim_default_6.html" target="_blank">Creative Tim</a> for a better web.
				</div>
			</div>
		</footer>
	</div>
</div>
