<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo base_url(). 'Home' ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Data & Products </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url(). 'Product' ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Data &amp; Product
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?= base_url(). 'Payments' ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Transaction
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="<?php echo base_url(). 'Report/laporanpenjualan' ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Report </span>
						</a>

						<b class="arrow"></b>
					</li>


						<b class="arrow"></b>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> Lebih Banyak </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url(). 'Profile' ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									User Profile
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url(). 'Shipping' ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Shipping
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url(). 'Login' ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Login &amp; Register
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>