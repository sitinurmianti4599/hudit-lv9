@extends('layout/main-layout')
@section('title', 'Layanan')

@section('konten')
        
     <div class="">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                               
                                <div class="x_content">
                                    <form class="" action="" method="post" novalidate>
                                        <span class="section">Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control"  name="name" placeholder="ex. John f. Kennedy" required="required" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="formGroupExampleInput" class="form-label">Example label</label>
                                          <div class="col-md-6 col-sm-12">
                                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                                          </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Occupation<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" class='optional' name="occupation"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Confirm email address<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" type="email" class='email' name="confirm_email" data-validate-linked='email' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Number <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" class='date' type="date" name="date" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" class='time' type="time" name="time" required='required'></div>
                                        </div>
                                        
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-12  label-align ">Password<span class="required">*</span></label>
											<div class="col-md-6 col-sm-12">
												<input class="form-control" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />
												
												<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
													<i id="slash" class="fa fa-eye-slash"></i>
													<i id="eye" class="fa fa-eye"></i>
												</span>
											</div>
										</div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Repeat password<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" type="password" name="password2" data-validate-linked='password' required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">Telephone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12">
                                                <input class="form-control" type="tel" class='tel' name="phone" required='required'  /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-12  label-align ">message<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea required="required" name='message'></textarea></div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            
            <!-- /page content -->
{{-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/vendors/validator/multifield.js"></script>
    <script src="assets/vendors/validator/validator.js"></script>
     --}}
    <!-- Javascript functions	-->
	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");
			
			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
	</script>

    {{-- <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script> --}}

    {{-- <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="assets/vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script> --}}
@endsection