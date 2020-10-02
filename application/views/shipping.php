<?php $this->load->view('global/head') ?>
	<?php $this->load->view('global/sidebar') ?>
		<?php $this->load->view('global/page_header') ?>

			<!-- Isi Konten Start -->
			<div class="hr hr-18 dotted hr-double"></div>

			<h4 class="pink">
				<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
				<a href="#modal-table" role="button" class="green" data-toggle="modal"> Lihat Pengiriman </a>
			</h4>

			<div class="hr hr-18 dotted hr-double"></div>

			<div class="row">
				<div class="col-xs-12">
					<h3 class="header smaller lighter blue">Shipping</h3>

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Results for "Latest Registered Domains"
					</div>

					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-responsive">
							<thead>
								<tr>
									<th class="center">
										<label class="pos-rel">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</th>
									<th class="center">send_id</th>
									<th class="center">sender</th>
									<th class="center">province</th>
									<th class="center">sub_district</th>
									<th class="center">village</th>
									<th class="center">zip_code</th>
									<th class="center">phone</th>
									<th class="center">courier</th>
									<th class="center">price_send</th>
									<th class="center">Crud</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- modal triger -->
			<div class="container center">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Input Products
				</button>
			</div>
			<!-- Isi Konten Ends -->

		<?php $this->load->view('global/footer') ?>
		<!-- basic scripts -->
	<?php $this->load->view('global/script.php') ?>

	<!-- modal box -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Shipping</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form" action="<?php echo base_url(). 'shipping/addShip'; ?>" method="post">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> sender </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="sender" class="col-xs-10 col-sm-5" name="product_name" />
							</div>
						</div>
				
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="">province</label>
							<div class="col-sm-9">
								<select class="chosen-select col-xs-10 col-sm-5" id="form-field-select-3" name="category">
									<option value="">Choose Provibce</option>
									<option value="AL">Zimbabwe</option>
									<option value="AK">Alaska</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="">sub_district</label>
							<div class="col-sm-9">
								<select class="chosen-select col-xs-10 col-sm-5" id="form-field-select-3" name="category">
									<option value="">Choose sub_district</option>
									<option value="AL">Zimbabwe</option>
									<option value="AK">Alaska</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> village </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="village" class="col-xs-10 col-sm-5" name="stock" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> zip_code </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="zip_code" class="col-xs-10 col-sm-5" name="price" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> phone </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="phone" class="col-xs-10 col-sm-5" name="weight" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="">courier</label>
							<div class="col-sm-9">
								<select class="chosen-select col-xs-10 col-sm-5" id="form-field-select-3" name="category">
									<option value="">Choose Courier</option>
									<option value="AL">JNE</option>
									<option value="AK">GO-JEK</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> price_send </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="price_send" class="col-xs-10 col-sm-5" name="description" />
							</div>
						</div>

						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="Submit">
									<i class="ace-icon fa fa-check bigger-110"></i>
									Submit
								</button>
								<button class="btn" type="reset">
									<i class="ace-icon fa fa-undo bigger-110"></i>
									Reset
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- modal tables -->
	

	<!-- modal tables -->
	<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>