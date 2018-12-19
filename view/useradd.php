	
	<div class="col-md-12">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title">Kullanıcı Ekle</h4>
			</header><!-- .widget-header -->
			<hr class="widget-separator">
			<div class="widget-body">
				<div class="m-b-lg">
					
				</div>
				<form id="user_add_form" onsubmit="return false;">
					<div class="row">
						<div class="form-group col-lg-6">
							<label for="username">Kullanıcı Adı</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı">
						</div>
						<div class="form-group col-lg-6">
							<label for="fullname">Ad Soyad</label>
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Ad Soyad">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-lg-6">
							<label for="email">Email adresi</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group col-lg-6">
							<label for="password">Şifre</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-lg-6">
								<label for="select2-demo-2" class="col-sm-4 control-label">Yetki</label>
								<div class="col-sm-6">
									<select  class="form-control" id ="yetki" name="yetki" data-plugin="select2" multiple="multiple">
										<option value="1">HTML</option>
										<option value="2">CSS</option>
										<option value="3">Javascript</option>
										<option value="4">PHP</option>
										<option value="5">Bootstrap</option>
									</select>
								</div><!-- END column -->
						</div>
						<div class="form-group col-lg-6">
							<label for="profilresmi">Profil Resmi</label>
							<input type="file" id="profilresmi" name="profilresmi" class="form-control">
							<p id="b64" style="display:none;"></p>
						</div>
						
				</div>
				<div class="row">
					<div class="col-lg-12">
							<button id="user_add_button" type="submit" class="btn btn-primary btn-lg">Ekle</button>
						</div>
				</div>
					
				</form>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->
	<script type="text/javascript">
		function readFile() {
	  
			  if (this.files && this.files[0]) {
			    
			    var FR= new FileReader();
			    
			    FR.addEventListener("load", function(e) {
			      document.getElementById("b64").innerHTML = e.target.result;
			    }); 
			    
			    FR.readAsDataURL( this.files[0] );
			  }
	  
		}

		$(document).ready(function() {
			console.log(fullname + username + password);
			document.getElementById("profilresmi").addEventListener("change", readFile);
		    $("#user_add_button").click(function() {
		    var fullname = $("#fullname").val().trim();
			var username = $("#username").val().trim();
			var password = $("#password").val().trim();
			var email    = $("#email").val().trim();
			var yetki    = $("#yetki").val();
			var imgText	 = $("#b64").text().trim();

		    				debugger;
		    	$.ajax({
		            type:"POST",
		            url:"../sekom/operation/add_user.php",
		            data:  {fullname : fullname , username : username , password : password , yetki : yetki , profil : imgText, email : email},
		            success: function(response){
		                console.log(response);  
		            }
		        });
		    });
		});
	</script>