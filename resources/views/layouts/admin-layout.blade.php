<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <link href="{{ asset('backend/assets/vendor/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/fontawesome/css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('backend/assets/css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/flagiconcss/css/flag-icon.min.css') }}" rel="stylesheet">
    <style>
.float-right {
    float: right!important;
}
.float-none {
    float: none!important;
}
.float-left {
    float: left!important;
}

    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                Admin
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="{{ url('/admin') }}"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}"><i class="fas fa-file-alt"></i> User Manager</a>
                </li>
                <li>
                    <a href="{{ route('admin.products.index') }}"><i class="fas fa-table"></i> Product Manager</a>
                </li>
              <li>
                    <a href="{{ route('admin.orders.index') }}"><i class="fas fa-shopping-cart"></i> Orders</a>
                </li>
                 <!-- <li>
                    <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> Buttons</a>
                        </li>
                        <li>
                            <a href="ui-badges.html"><i class="fas fa-angle-right"></i> Badges</a>
                        </li>
                        <li>
                            <a href="ui-cards.html"><i class="fas fa-angle-right"></i> Cards</a>
                        </li>
                        <li>
                            <a href="ui-alerts.html"><i class="fas fa-angle-right"></i> Alerts</a>
                        </li>
                        <li>
                            <a href="ui-tabs.html"><i class="fas fa-angle-right"></i> Tabs</a>
                        </li>
                        <li>
                            <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i> Date & Time Picker</a>
                        </li>-->
                    </ul>
                </li>
                <li>
                    <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                        </li>
                        <li>
                            <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                        </li>
                        <li>
                            <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                        </li>
                        <li>
                            <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                        </li>
                        <li>
                            <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>{{ Auth::user()->name }}</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="{{ route('admin.users.edit',Auth::user()->id) }}" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="{{ route('admin.users.updatepwd') }}" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
    
    @yield('breadcrumbs')
  </ol>
</nav>
                @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('backend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/chartsjs/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard-charts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
    <script>
  function selectAll()
{	

with(window.document.subsControlForm)
	{	 
		totalElements = elements.length;
		for(i = 0; i < totalElements; i++)
		{	if (elements[i].type == 'checkbox')
			{	elements[i].checked = true;
			}
		}		
	}
}
function confirmDelete()
{	with(window.document.subsControlForm)
	{	
			if (checkSelected())
			{	return confirm("Selected records will be deleted.\n\nSure?");
			
			}
			else
			{	return false;
			}
		
	}
}

function selectNone()
{	with(window.document.subsControlForm)
	{	 
		totalElements = elements.length;
		for(i = 0; i < totalElements; i++)
		{	
			if (elements[i].type == 'checkbox')
			{	elements[i].checked = false;
			}
		}		
	}
} 
function checkSelected()
{	with(window.document.subsControlForm)
	{	totalChecked = 0; 
		totalElements = elements.length;
		for(i = 0; i < totalElements; i++)
		{	
			if (elements[i].type == 'checkbox')
			{	if (elements[i].checked) 
				{	totalChecked++;
					break;
				}
			}
		}		

		if (totalChecked == 0)
		{	alert("Select a record");
			return false;
		}

		return true;
	}
}

    </script>
    <script src="https://cdn.tiny.cloud/1/0t0cj5hclargfv8vcrc0sdnx2z1zbfa4086xi679kjgw3oa4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</body>

</html>
