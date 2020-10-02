<?php $this->load->view('global/head') ?>
	<?php $this->load->view('global/sidebar') ?>
		<?php $this->load->view('global/page_header') ?>

			<!-- Isi Konten Start -->

			<form action="<?= base_url(). 'product/deleteData'; ?>" method="post">
			<div class="row">
				<div class="col-xs-12">
					<h3 class="header smaller lighter blue">Data & Products</h3>

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header center">
						Product Data Details
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
									<th class="center">Id Produk</th>
									<th class="center">Nama Produk</th>
									<th class="center">Tanggal Produk</th>
									<th class="center">Kategori</th>
									<th class="center">Stok</th>
									<th class="center">Harga</th>
									<th class="center">Berat</th>
									<th class="center">Gambar</th>
									<th class="center">Deskripsi</th>
									<th class="center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($product as $prd) : ?>
								<tr>
									<th class="center">
										<label class="pos-rel">
											<input type="checkbox" class="ace" name="checkItem[]" value="<?= $prd['product_id'] ?>" />
											<span class="lbl"></span>
										</label>
									</th>
									<td class="center"><?= $prd['product_id'] ?></td>
									<td class="center"><?= $prd['product_name'] ?></td>
									<td class="center"><?= $prd['production_date'] ?></td>
									<td class="center"><?= $prd['category'] ?></td>
									<td class="center"><?= $prd['stock'] ?></td>
									<td class="center"><?= $prd['price'] ?></td>
									<td class="center"><?= $prd['weight'] ?></td>
									<td class="center"><?= $prd['picture'] ?></td>
									<td class="center"><?= $prd['description'] ?></td>
									<td class="center"><a href="">Update</a></td>
								</tr>
								<?php endforeach; ?>
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
				<button class="btn btn-white btn-danger " type="Submit"><i class="ace-icon fa fa-trash-o bigger-120 orange"></i>Delete</button>
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
	        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form" action="<?php echo base_url(). 'product/tambah_aksi'; ?>" method="post">
					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Produk </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="product_id" class="col-xs-10 col-sm-5" name="product_id" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Produk </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="product_name" class="col-xs-10 col-sm-5" name="product_name" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Produk </label>

							<div class="col-sm-9">
								<input type="date" id="form-field-1" placeholder="tanggal" class="col-xs-10 col-sm-5" name="production_date" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kategori </label>

							<div class="col-sm-9">
							<select class="chosen-select col-xs-10 col-sm-5" id="form-field-select-3" name="category">
									<option value="">Pilih Kategori</option>
									<option value="AL">AL</option>
									<option value="AK">AK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stok </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="stock" class="col-xs-10 col-sm-5" name="stock" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="harga" class="col-xs-10 col-sm-5" name="price" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Berat </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="berat" class="col-xs-10 col-sm-5" name="weight" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gambar </label>

							<div class="col-sm-9">
								<input type="file" id="form-field-1" placeholder="picture" class="col-xs-10 col-sm-5" name="picture" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi </label>

							<div class="col-sm-9">
								<input type="text" id="form-field-1" placeholder="description" class="col-xs-10 col-sm-5" name="description" />
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
	      <!-- <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>

	<!-- modal tables -->
	