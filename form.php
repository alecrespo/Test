<?php 

echo '<form class="form-signin" method="post" action="">
	<div class="modal fade" id="adduser">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">User Configuration</h4>
		  </div>
		  <div class="modal-body">
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			<input type="text" class="form-control" placeholder="First Name" name="firstname">
			</div>
			<br/>
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			<input type="text" class="form-control" placeholder="Last Name" name="lastname">
			</div>
			<br/>
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
			<input type="text" class="form-control" placeholder="Phone" name="phone">
			</div>
			<br/>
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			<input type="text" class="form-control" placeholder="Email" name="email">
			</div>
			<br/>						
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			<input type="text" class="form-control" placeholder="Address" name="address">
			</div>
			<br/>
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			<input type="text" class="form-control" placeholder="City" name="city">
			</div>
			<br/>
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			<input type="text" class="form-control" placeholder="Zip" name="zip">
			</div>
			<br/>		
			<div class="input-group input-group-lg">
			<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
			<input type="text" class="form-control" placeholder="Is a Friend" name="isfriend">
			</div>
			<br/>				
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<input type="submit" class="btn btn-primary" name="submit" value="Save changes"/>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>'


?>