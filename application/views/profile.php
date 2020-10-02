<?php $this->load->view('global/head') ?>
	<?php $this->load->view('global/sidebar') ?>
		<?php $this->load->view('global/page_header') ?>
			<!-- Isi Konten Start -->

			<div class="hr dotted"></div>

			<div class="center">
				<div id="user-profile-1" class="user-profile row">
					<div class="">
						<div>
							<div class="center">
							<span class="profile-picture">
								<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg" />
							</span>
							</div>

							<div class="space-4"></div>

							<div class="width-95 label label-info label-xlg arrowed-in arrowed-in-right">
								<div class="inline position-relative">
									<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
										<i class="ace-icon fa fa-circle light-green"></i>
										&nbsp;
										<span class="white">Michael Samsul</span>
									</a>

									<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
										<li class="dropdown-header"> Change Status </li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-circle green"></i>
&nbsp;
												<span class="green">Available</span>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-circle red"></i>
&nbsp;
												<span class="red">Busy</span>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
												<span class="grey">Invisible</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="space-6"></div>

						<div class="profile-user-info profile-user-info-striped">
							<div class="profile-info-row">
								<div class="profile-info-name"> Username </div>

								<div class="profile-info-value">
									<span class="editable" id="username">alexdoe</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Address </div>

								<div class="profile-info-value">
									<i class="fa fa-map-marker light-orange bigger-110"></i>
									<span class="editable" id="country">Netherlands</span>
									<span class="editable" id="city">Amsterdam</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> ZIP Code </div>

								<div class="profile-info-value">
									<span class="editable" id="age">38</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Phone Number </div>

								<div class="profile-info-value">
									<span class="editable" id="signup">2010/06/20</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Email </div>

								<div class="profile-info-value">
									<span class="editable" id="login">3 hours ago</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Status </div>

								<div class="profile-info-value">
									<span class="editable" id="about">Editable as WYSIWYG</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space"></div>

											<form class="form-horizontal">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Basic Info
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#edit-password">
																<i class="blue ace-icon fa fa-key bigger-125"></i>
																Password
															</a>
														</li>
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<input type="file" />
																</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
																		</div>
																	</div>

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

																		<div class="col-sm-8">
																			<input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
																			<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
																		</div>
																	</div>
																</div>
															</div>

															<div>
															<label for="form-field-select-3">status</label>

															<br />
															<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<option value="AL">Admin</option>
																<option value="AK">Karyawan</option>
															</select>
														</div>

															<hr />
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Gender</label>

																<div class="col-sm-9">
																	<label class="inline">
																		<input name="form-field-radio" type="radio" class="ace" />
																		<span class="lbl middle"> Male</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<input name="form-field-radio" type="radio" class="ace" />
																		<span class="lbl middle"> Female</span>
																	</label>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Address</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment"></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ZIP Code</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment"></textarea>
																</div>
															</div>

														<div id="edit-password" class="tab-pane">
															<div class="space-10"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass1" />
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass2" />
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="button">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											</form>

			<!-- Isi Konten Ends -->
		<?php $this->load->view('global/footer') ?>
		<!-- basic scripts -->
	<?php $this->load->view('global/script.php') ?>