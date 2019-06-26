<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">


  <?php $currency= '&#108;&#101;&#105 '; //currency symbol?>
        <script src="../MyLittleCupOfTea/item-ajax_admin.js"></script>
        	
</head>
<body>
    <div id="header">
		<h1><a href="index.php">My little <span>Cup Of Tea</span></a></h1>
		<ul id="navigation">
                    <li>
				<a href="index.php">Shop</a>
			</li>
			<li>
				<a href="about.php">About</a>
			</li>
			
			<li>
				<a href="contact.php">Contact</a>
			</li>
			<li>
                            <a href="tips.php">Tips</a>
			</li>
                        <li>
                        <li class="current">
				<a href="login.php">Admin</a>
			</li>
		</ul>
	</div>

	<div class="container">
		<div class="row">
		    <div class="col-lg-12 margin-tb">				
		          <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
					  Create Item
				</button>
                     <button type="button" class="btn btn-success" >
                         <a href="logout.php">Logout</a><br/>
                     </button>
                         
		        </div>
		    </div>
		</div>

		<table class="table table-bordered" >
                    
			<thead>
			    <tr>
				<th>Denumire produs</th>
                                <th>Descriere</th>
                                 <th>Pret <?php echo $currency ?></th>
				<th width="200px">Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>

		
  <!-- Create Item Modal -->
		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Create Item</h4>
		      </div>

		      <div class="modal-body">
		      		<form data-toggle="validator" action="create.php" method="POST">

		      			<div class="form-group">
							<label class="control-label" for="title">Denumire produs:</label>
							<input type="text" name="denumire_produs" class="form-control" data-error="Please enter name." required />
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="title">Descriere:</label>
							<textarea name="descriere" class="form-control" data-error="Please enter details." required></textarea>
							<div class="help-block with-errors"></div>
						</div>

                                          <div class="form-group">
				  			<label class="control-label" for="title">Pret:</label>
							<input name="pret" class="form-control" data-error="Please enter price." required>
							<div class="help-block with-errors"></div>
						</div>

                                    
						<div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Submit</button>
						</div>

		      		</form>

		      </div>
		    </div>

		  </div>
		</div>

		<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>

		      <div class="modal-body">
		      		<form data-toggle="validator" action="update.php" method="put">
		      			<input type="hidden" name="id" class="edit-id">

		      			<div class="form-group">
							<label class="control-label" for="title">Denumire produs:</label>
							<input type="text" name="denumire_produs" class="form-control" data-error="Please enter name ." required />
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="title">Descriere:</label>
							<textarea name="descriere" class="form-control" data-error="Please enter details." required></textarea>
							<div class="help-block with-errors"></div>
						</div>
                                                     <div class="form-group">
							<label class="control-label" for="title">Pret:</label>
							<input name="pret" class="form-control" data-error="Please enter price." required>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
						</div>

		      		</form>

		      </div>
		    </div>
		  </div>
		</div>

	</div>
   
    <div id="footer">
		<div>
			
				&copy; 2019 Danciu Teodora. All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https://www.facebook.com/" id="facebook" target="_blank">Facebook</a>
			<a href="https://twitter.com/" id="twitter" target="_blank">Twitter</a>
			<a href="https://plus.google.com" id="googleplus" target="_blank">Google&#43;</a>
			<a href="https://www.pinterest.com/" id="pinterest" target="_blank">Pinterest</a>
		</div>
	</div>
</body>
</html>