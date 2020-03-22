<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('home') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!--li class='nav-item'><a class='nav-link' href='{{ backpack_url('extract_metadata_status') }}'><i class='nav-icon fa fa-question'></i> Extract_metadata_statuses</a></li-->
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('Transactions') }}'><i class='nav-icon fa fa-dollar'></i> Transactions</a></li>

<!--li class='nav-item'><a class='nav-link' href='{{ backpack_url('Category') }}'><i class='nav-icon fa fa-question'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('subCategory') }}'><i class='nav-icon fa fa-question'></i> SubCategories</a></li-->
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('Pattern') }}'><i class='nav-icon fa fa-tags'></i> Patterns</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-group"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Users</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-group"></i> <span>Roles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-cog"></i> Configs</a>
	<ul class="nav-dropdown-items">
<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('menu-item') }}'><i class='nav-icon fa fa-list'></i> <span>Menu</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon fa fa-file-o'></i> <span>Pages</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon fa fa-cog'></i> <span>Settings</span></a></li>
</ul>
</li>

<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
