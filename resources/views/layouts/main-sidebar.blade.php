<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>Raitotec Dashboard</span></li>
				<!--home-->
				<li class="{{ Request::is('admin/index_admin') ? 'active' : '' }}">
					<a href="{{ url('admin/index_admin') }}"><i data-feather="home"></i> <span>{{ trans('main.Dashboard') }}</span></a>
				</li>

				<!--customerService-->
				<li class="{{ Request::is('admin/user','admin/role') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="users"></i> <span>{{ trans('main.roles') }} {{ trans('main.Users') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<li class="ml-1"><a class=" {{ Request::is('admin/user') ? 'active' : '' }}" href="{{ route('user.index') }}">{{ trans('main.Users') }}</a></li>
						<li class="ml-1"><a class=" {{ Request::is(['admin/role', 'admin/role/create', 'admin/role/*/edit', 'admin/role/*']) ? 'active' : '' }}" href="{{ route('role.index') }}">{{ trans('main.Roles') }}</a></li>
					</ul>
				</li>

				
				<!--customerService-->
				<li class="{{ Request::is('admin/customersService') ? 'active' : '' }}">
					<a href="{{ route('customersService.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.CustomersServices') }}</span></a>
				</li>
				

				<li class="{{ Request::is('admin/category') ? 'active' : '' }}">
					<a href="{{ route('category.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Categories') }}</span></a>
				</li>

				
				<li class="{{ Request::is('admin/user') ? 'active' : '' }}" >
					<a href="{{ url('admin/users') }}"><i data-feather="users"></i> <span>Users</span></a>
				</li>
				<li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
					<a href="{{ url('admin/projects') }}"><i data-feather="database"></i> <span>Projects</span></a>
				</li>
				<li class="{{ Request::is('admin/providers') ? 'active' : '' }}">
					<a href="{{ url('admin/providers') }}"><i data-feather="user-check"></i> <span>Providers</span></a>
				</li>
				<li class="{{ Request::is('admin/reports') ? 'active' : '' }}">
					<a href="{{ url('admin/reports') }}"><i data-feather="pie-chart"></i> <span>Reports</span></a>
				</li>
				<li class="{{ Request::is('admin/bid-fees','admin/contest-entry-fees','admin/contests-fees','admin/fees','admin/projects-fees') ? 'active' : '' }}">
					<a href="{{ url('admin/fees') }}"><i data-feather="package"></i> <span>Fees</span></a>
				</li>
				<li class="{{ Request::is('admin/taxs') ? 'active' : '' }}">
					<a href="{{ url('admin/taxs') }}"><i data-feather="file-text"></i> <span>Taxs</span></a>
				</li>
				<li class="{{ Request::is('admin/roles','admin/roles-permission') ? 'active' : '' }}">
					<a href="{{ url('admin/roles') }}"><i data-feather="clipboard"></i> <span>Roles</span></a>
				</li>
				<li class="{{ Request::is('admin/skills') ? 'active' : '' }}">
					<a href="{{ url('admin/skills') }}"><i data-feather="award"></i> <span>Skills</span></a>
				</li>
				<li class="{{ Request::is('admin/verify-identity') ? 'active' : '' }}">
					<a  href="{{ url('admin/verify-identity') }}"><i data-feather="user-check"></i> <span>Verify Identity</span></a>
				</li>
				<li class="{{ Request::is('admin/change-password','admin/delete-account','admin/email-settings','admin/localization-details','admin/others-settings','admin/payment-settings','admin/seo-settings','admin/settings','admin/social-links','admin/social-settings','admin/tax-types') ? 'active' : '' }}">
					<a href="{{ url('admin/settings') }}"><i data-feather="settings"></i> <span>Settings</span></a>
				</li>
				<li class="menu-title"><span>UI Interface</span></li>
				<li class="{{ Request::is('admin/components') ? 'active' : '' }}">
					<a href="{{ url('admin/components') }}"><i data-feather="pocket"></i> <span>Components</span></a>
				</li>
				<li class="{{ Request::is('admin/form-basic-inputs','admin/form-horizontal','admin/form-input-groups','admin/form-mask','admin/form-validation','admin/form-vertical') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="file-minus"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="{{ Request::is('admin/form-basic-inputs') ? 'active' : '' }}" href="{{ url('admin/form-basic-inputs') }}">Basic Inputs </a></li>
						<li><a class="{{ Request::is('admin/form-input-groups') ? 'active' : '' }}" href="{{ url('admin/form-input-groups') }}">Input Groups </a></li>
						<li><a class="{{ Request::is('admin/form-horizontal') ? 'active' : '' }}" href="{{ url('admin/form-horizontal') }}">Horizontal Form</a></li>
						<li><a class="{{ Request::is('admin/form-vertical') ? 'active' : '' }}" href="{{ url('admin/form-vertical') }}"> Vertical Form </a></li>
						<li><a class="{{ Request::is('admin/form-mask') ? 'active' : '' }}" href="{{ url('admin/form-mask') }}"> Form Mask </a></li>
						<li><a class="{{ Request::is('admin/form-validation') ? 'active' : '' }}" href="{{ url('admin/form-validation') }}"> Form Validation </a></li>
					</ul>
				</li>
				<li class="{{ Request::is('admin/tables-basic','admin/data-tables') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="align-justify"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="{{ Request::is('admin/tables-basic') ? 'active' : '' }}" href="{{ url('admin/tables-basic') }}">Basic Tables</a></li>
						<li><a class="{{ Request::is('admin/data-tables') ? 'active' : '' }}" href="{{ url('admin/data-tables') }}">Data Table</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->