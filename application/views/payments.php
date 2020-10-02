<?php $this->load->view('global/head') ?>
	<?php $this->load->view('global/sidebar') ?>
		<?php $this->load->view('global/page_header') ?>
			<!-- Isi Konten Start -->

			<table class="table table-sm table-dark">
			  <thead>
			    <tr>
			    	<th>
			    		<!-- <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <div class="input-group-text">
						      <input type="checkbox" aria-label="Checkbox for following text input">
						    </div>
						  </div>
						</div> -->
			    	</th>
				    <th class="center" scope="col">Pay Id</th>
				    <th class="center" scope="col">User Id</th>
				    <th class="center" scope="col">Order Id</th>
				    <th class="center" scope="col">Send Id</th>
				    <th class="center" scope="col">Bank</th>
				    <th class="center" scope="col">Nominal</th>
				    <th class="center" scope="col">Proof Payment</th>
				    <th class="center" scope="col">Message Code</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($pay as $p) : ?>
			    <tr>
			    	<th>
			    		<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <div class="input-group-text">
						      <input type="checkbox" aria-label="Checkbox for following text input">
						    </div>
						  </div>
						</div>
			    	</th>
			        <td class="center"><?= $p['pay_id'] ?></td>
			        <td class="center"><?= $p['user_id'] ?></td>
			        <td class="center"><?= $p['order_id'] ?></td>
			        <td class="center"><?= $p['send_id'] ?></td>
			        <td class="center"><?= $p['bank'] ?></td>
			        <td class="center"><?= $p['nominal'] ?></td>
			        <td class="center"><?= $p['proof_payment'] ?></td>
			        <td class="center"><?= $p['message_code'] ?></td>
			    </tr>
				<?php endforeach ; ?>
			  </tbody>
			</table>

				<div class="container center">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Tambah Pembayaran</button>
			</div>
			</form>
			<!-- Isi Konten Ends -->

		<?php $this->load->view('global/footer') ?>
		<!-- basic scripts -->
	<?php $this->load->view('global/script.php') ?>

	<!-- modal box -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title" id="exampleModalLabel">Add Transaction</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form" action="<?php echo base_url(). 'payments/addPay'; ?>" method="post">

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="">pay id</label>
							<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="pay_id" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> user id </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="user_id" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">order id</label>
							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="order_id" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> send id </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="send_id" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> bank </label>

							<div class="col-sm-9">
							<select class="chosen-select col-xs-10 col-sm-5" id="form-field-select-3" name="bank">
									<option>Pilih Kategori</option>
									<option">BRI</option>
									<option>BNI</option>
									<option>MANDIRI</option>
									<option>BCA</option>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> nominal </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="nominal" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> proof payment </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="proof_payment" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> message code </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="message_code" />
							</div>
						</div>

						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="Submit">
									<i class="ace-icon fa fa-check bigger-110"></i>
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
	      </div>
