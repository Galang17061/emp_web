<aside class="left-sidebar">
	<div class="scroll-sidebar">
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li>
					<div class="user-profile d-flex no-block dropdown mt-3">
						<div class="user-pic"><img src="<?= base_url(); ?>asset/assets/images/users/1.jpg" alt="users"
								class="rounded-circle" width="40" /></div>
						<div class="user-content hide-menu ml-2">
							<a href="<?php $data['page'] = 'master' ?>" class="" id="Userdd" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<h5 class="mb-0 user-name font-medium">Selamat Datang,</h5>
								<span class="op-5 user-email"><?= $this->session->userdata('nameuser') ?></span>
							</a>
							<!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
								<a class="dropdown-item" href="<?= base_url().'login/sign_out' ?>"><i
										class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
							</div> -->
						</div>
					</div>
				</li>

				<!-- User is Manager -->
				<?php if($this->session->userdata('idprivillege') == 2){ ?>
				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'dashboard'  ?'active' :'' ?>"
						href="<?= base_url('dashboard') ?>" aria-expanded="false"><i
							class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'tags'  ?'active' :'' ?>" href="<?= base_url('tags/manager_index') ?>"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tags
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'absen'  ?'active' :'' ?>" href="<?= base_url('absen/manager_index') ?>"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Absensi
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'alert'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Alert
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'chat'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Chat Room
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'track'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tracking
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'user'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Users
						</span></a>
				</li>

				<li class="sidebar-item master">
					<a class="sidebar-link waves-dark <?= $page == 'master'  ?'active' :'' ?>"
						href="<?= base_url('master') ?>" aria-expanded="false">
						<i class="mdi mdi-view-dashboard"></i>
						<span class="hide-menu">
							Master Menu
						</span>
					</a>
				</li>

				<?php }?>
				<!-- End User is Manager -->

				<!-- User is Supervisor -->
				<?php if($this->session->userdata('idprivillege') == 3){ ?>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'dashboard'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'tags'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tags
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'absensi'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Absensi
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'alert'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Alert
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'chat'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Chat Room
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark <?= $page == 'track'  ?'active' :'' ?>" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tracking
						</span></a>
				</li>
				<?php }?>
				<!-- End User is Supervisor -->

				<!-- User is Employee -->
				<?php if($this->session->userdata('idprivillege') == 4){ ?>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tags
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Alert
						</span></a>
				</li>

				<li class="sidebar-item"> <a class="sidebar-link waves-dark" href="javascript:void(0)"
						aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Chat Room
						</span></a>
				</li>
				<?php }?>
				<!-- End User is Employee -->
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
