<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>Raitotec Dashboard</span></li>
				<!--home-->
				<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
					<a href="{{ route('dashboard.index') }}"><i data-feather="home"></i> <span>{{ trans('main.Dashboard') }}</span></a>
				</li>


				<!--user & role-->
				<li class="{{ Request::is('admin/user','admin/role') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="users"></i> <span>{{ trans('main.roles') }} {{ trans('main.Users') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<!--user-->
						<li class="ml-1"><a class=" {{ Request::is('admin/user') ? 'active' : '' }}" href="{{ route('user.index') }}">{{ trans('main.Users') }}</a></li>
						<!--role-->
						<li class="ml-1"><a class=" {{ Request::is(['admin/role', 'admin/role/create', 'admin/role/*/edit', 'admin/role/*']) ? 'active' : '' }}" href="{{ route('role.index') }}">{{ trans('main.Roles') }}</a></li>
					</ul>
				</li>


				<!--slider-->
				<li class="{{ Request::is('admin/dashboard-slider') ? 'active' : '' }}">
					<a href="{{ route('dashboard-slider.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Slider') }}</span></a>
				</li>


				<!--aboutUs-->
				<li class="{{ Request::is('admin/dashboard-aboutUs') ? 'active' : '' }}">
					<a href="{{ route('dashboard-aboutUs.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.About Us') }}</span></a>
				</li>


				<!--whyUs-->
				<li class="{{ Request::is('admin/dashboard-whyUs') ? 'active' : '' }}">
					<a href="{{ route('dashboard-whyUs.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Why Us') }}</span></a>
				</li>


				<!--our program--->
				<li class="{{ Request::is('admin/dashboard-whyProgram','admin/dashboard-program','admin/dashboard-programManage','admin/dashboard-programAbility') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="copy"></i> <span>{{ trans('main.Our Programs') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<!--whyProgram-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-whyProgram') ? 'active' : '' }}" href="{{ route('dashboard-whyProgram.index') }}">{{ trans('main.Why Program') }}</a></li>
						<!--program-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-program') ? 'active' : '' }}" href="{{ route('dashboard-program.index') }}">{{ trans('main.Programs') }}</a></li>
						<!--programManage-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-programManage') ? 'active' : '' }}" href="{{ route('dashboard-programManage.index') }}">{{ trans('main.Program Manages') }}</a></li>
						<!--programAbility-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-programAbility') ? 'active' : '' }}" href="{{ route('dashboard-programAbility.index') }}">{{ trans('main.Program Abilities') }}</a></li>
						<!--programPackage-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-programPackage') ? 'active' : '' }}" href="{{ route('dashboard-programPackage.index') }}">{{ trans('main.Program Packages') }}</a></li>
					</ul>
				</li>


				<!--our service--->
				<li class="{{ Request::is('admin/dashboard-service','admin/dashboard-serviceSupport','admin/dashboard-serviceStep') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="copy"></i> <span>{{ trans('main.Our Services') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<!--service-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-service') ? 'active' : '' }}" href="{{ route('dashboard-service.index') }}">{{ trans('main.Services') }}</a></li>
						<!--serviceSupport-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-serviceSupport') ? 'active' : '' }}" href="{{ route('dashboard-serviceSupport.index') }}">{{ trans('main.Service Supports') }}</a></li>
						<!--serviceReason-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-serviceReason') ? 'active' : '' }}" href="{{ route('dashboard-serviceReason.index') }}">{{ trans('main.Service Reasons') }}</a></li>
						<!--serviceStep-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-serviceStep') ? 'active' : '' }}" href="{{ route('dashboard-serviceStep.index') }}">{{ trans('main.Service Steps') }}</a></li>
					</ul>
				</li>


				<!--sale-->
				<li class="{{ Request::is('admin/dashboard-sale') ? 'active' : '' }}">
					<a href="{{ route('dashboard-sale.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Sales') }}</span></a>
				</li>


				<!--companyInformation-->
				<li class="{{ Request::is('admin/dashboard-companyInformation') ? 'active' : '' }}">
					<a href="{{ route('dashboard-companyInformation.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Company Informations') }}</span></a>
				</li>


				<!--customerReview-->
				<li class="{{ Request::is('admin/dashboard-customersReview') ? 'active' : '' }}">
					<a href="{{ route('dashboard-customersReview.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Customers Reviews') }}</span></a>
				</li>


				<!--blog-->
				<li class="{{ Request::is('admin/dashboard-blog') ? 'active' : '' }}">
					<a href="{{ route('dashboard-blog.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Blogs') }}</span></a>
				</li>


				<!--business-->
				<li class="{{ Request::is('admin/dashboard-business','admin/dashboard-exampleBusiness','admin/dashboard-whyBusiness') ? 'active' : '' }}">
					<a href="{{ route('dashboard-business.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Business') }}</span></a>
				</li>


				<!--importantCustomer-->
				<li class="{{ Request::is('admin/dashboard-importantCustomer') ? 'active' : '' }}">
					<a href="{{ route('dashboard-importantCustomer.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Important Customers') }}</span></a>
				</li>

				<!--package & packageBenefit-->
				<li class="{{ Request::is('admin/dashboard-package','admin/dashboard-packageBenefit') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="copy"></i> <span>{{ trans('main.Packages') }} {{ trans('main.And') }} {{ trans('main.Benefits') }}</span> <span class="menu-arrow"></span></a>
					<ul>
						<!--package-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-package') ? 'active' : '' }}" href="{{ route('dashboard-package.index') }}">{{ trans('main.Packages') }}</a></li>
						<!--packageBenefit-->
						<li class="ml-1"><a class=" {{ Request::is('admin/dashboard-packageBenefit') ? 'active' : '' }}" href="{{ route('dashboard-packageBenefit.index') }}">{{ trans('main.PackageBenefits') }}</a></li>
					</ul>
				</li>


				<!--message-->
				<li class="{{ Request::is('admin/dashboard-message') ? 'active' : '' }}">
					<a href="{{ route('dashboard-message.index') }}"><i data-feather="copy"></i> <span>{{ trans('main.Messages') }}</span></a>
				</li>

			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->