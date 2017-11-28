<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url(); ?>register" method="post">
		
			<h1>Register</h1>		
<? if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Email already exists </strong> <?=$error?>
            </div>
<? } ?>

			<div class="add-fields">
				
				<div class="field">
					<label for="customer_email">Email:</label>
					<input type="email" id="email" name="customer_email" required value="" placeholder="Email"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_password">Password:</label>
					<input type="password" id="password" name="customer_password" required value="" placeholder="Password"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_firstname">First name:</label>
					<input type="text" id="firstname" name="customer_firstname" required value="" placeholder="Firstname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_lastname">Last name:</label>
					<input type="text" id="lastname" name="customer_lastname" required value="" placeholder="Lastname"/>
				</div> <!-- /field -->


				<div class="field">
					<label for="customer_telephone">Telephone:</label>
					<input type="text" id="telephone" name="customer_telephone" value="" placeholder="Telephone"/>
				</div> <!-- /field -->


				<div class="field">
					<label for="customer_city">City:</label>
					<input type="text" id="city" name="customer_city" value="" placeholder="City"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="customer_country">Country:</label>
					<input type="text" id="country" name="customer_country" value="" placeholder="Country"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Register</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>