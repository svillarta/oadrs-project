
<div class="content">
  <div class="content">
    <div class="container-fluid">
			<div class="col-md-12">
        <form id="createUserForm" action="" method="" novalidate="novalidate">
          <div class="card ">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">person_add</i>
              </div>
              <h4 class="card-title">Register Form</h4>
            </div>
            <br>
            <div class="alert hidden" id="alertMessage">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span id="infoMessage"></span>
            </div>
            <div class="card-body ">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">First Name *</label>
		                <input type="text" class="form-control" name="first_name" id="first_name" required="true" aria-required="true">
		              </div>
								</div>
								<div class="col-sm-4">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">Middle Name *</label>
		                <input type="text" class="form-control" name="middle_name" id="middle_name" required="true" aria-required="true">
		              </div>
								</div>
								<div class="col-sm-4">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">Last Name *</label>
		                <input type="text" class="form-control" name="last_name" id="last_name" required="true" aria-required="true">
		              </div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">E-mail *</label>
		                <input type="email" class="form-control" name="email" id="email" required="true" aria-required="true">
		              </div>
								</div>
								<div class="col-sm-6">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">Mobile Number *</label>
		                <input type="text" class="form-control" name="phone" id="phone" required="true" aria-required="true">
		              </div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">Password *</label>
		                <input type="password" class="form-control" name="password" id="password" required="true" aria-required="true">
		              </div>
								</div>
								<div class="col-sm-6">
									<div class="form-group bmd-form-group">
		                <label for="exampleEmail" class="bmd-label-floating">Comfirm Password *</label>
		                <input type="password" class="form-control" name="password_confirm" id="password_confirm" required="true" aria-required="true">
		              </div>
								</div>
							</div>
              <div class="category form-category">* Required fields</div>
            </div>
            <div class="col-sm-12 hidden" id="loader" align="center" >
              <img class="" src="<?php echo base_url('assets/img/ezgif.gif'); ?>" alt="" style="width:20%;">
            </div>
            <div class="card-footer text-right " id="footer">
              <div class="form-check">
                <div class="row">
                  <div class="col">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="group" value="3" checked=""> Cashier
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="group" value="4" checked=""> Student
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="category form-category float-left">Please Select User Category</div>
              </div>
              <button type="submit" class="btn btn-info">Register</button>
            </div>
          </div>
        </form>
	      </div>
	  </div>
                  <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->


      <h3>Manage Listings</h3>
      <br>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
              <a href="#pablo">
                <img class="img" src="<?php echo base_url(); ?>assets/img/card-2.jpg">
              </a>
            </div>
            <div class="card-body">
              <div class="card-actions text-center">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                  <i class="material-icons">art_track</i>
                </button>
                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                  <i class="material-icons">edit</i>
                </button>
                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                  <i class="material-icons">close</i>
                </button>
              </div>
              <h4 class="card-title">
                <a href="#pablo">Cozy 5 Stars Apartment</a>
              </h4>
              <div class="card-description">
                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
              </div>
            </div>
            <div class="card-footer">
              <div class="price">
                <h4>$899/night</h4>
              </div>
              <div class="stats">
                <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
              <a href="#pablo">
                <img class="img" src="<?php echo base_url(); ?>assets/img/card-3.jpg">
              </a>
            </div>
            <div class="card-body">
              <div class="card-actions text-center">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                  <i class="material-icons">art_track</i>
                </button>
                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                  <i class="material-icons">edit</i>
                </button>
                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                  <i class="material-icons">close</i>
                </button>
              </div>
              <h4 class="card-title">
                <a href="#pablo">Office Studio</a>
              </h4>
              <div class="card-description">
                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
              </div>
            </div>
            <div class="card-footer">
              <div class="price">
                <h4>$1.119/night</h4>
              </div>
              <div class="stats">
                <p class="card-category"><i class="material-icons">place</i> London, UK</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
              <a href="#pablo">
                <img class="img" src="<?php echo base_url(); ?>assets/img/card-1.jpg">
              </a>
            </div>
            <div class="card-body">
              <div class="card-actions text-center">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                  <i class="material-icons">art_track</i>
                </button>
                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                  <i class="material-icons">edit</i>
                </button>
                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                  <i class="material-icons">close</i>
                </button>
              </div>
              <h4 class="card-title">
                <a href="#pablo">Beautiful Castle</a>
              </h4>
              <div class="card-description">
                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
              </div>
            </div>
            <div class="card-footer">
              <div class="price">
                <h4>$459/night</h4>
              </div>
              <div class="stats">
                <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
