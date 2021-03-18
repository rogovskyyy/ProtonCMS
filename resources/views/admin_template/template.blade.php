@include('admin_template.header')
<div class="container-fluid" style='width: 95%;'>
	<div class="row">
		<div class="col-sm-2" id="sticky-sidebar">
			<div class='side-panel sticky-top'>
				<div style='padding-bottom: 5px; text-align: center; padding-top: 35px;'> <img src="{{ asset('content/logo.svg') }}">
					<br /> ProtonCMS </div>
				<ul class='padder'>
					<div class='push-to-left-panel'>
						<a href="#main">
							<li><i class="fas fa-home"></i> Admin Dashboard</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#menus'>
							<li><i class="fas fa-compass"></i> Menus</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#pages'>
							<li><i class="fas fa-window-restore"></i> Pages</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#posts'>
							<li><i class="fas fa-plus-square"></i> Posts</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#comments'>
							<li><i class="fas fa-comments"></i> Comments</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#categories'>
							<li><i class="fas fa-th-list"></i> Categories</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#tags'>
							<li><i class="fas fa-tags"></i> Tags</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#themes'>
							<li><i class="fas fa-border-style"></i> Themes</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#plugins'>
							<li><i class="fas fa-plug"></i> Plugins</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#widgets'>
							<li><i class="fas fa-puzzle-piece"></i> Widgets</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#media-lib'>
							<li><i class="fas fa-photo-video"></i> Media Library</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#ug'>
							<li><i class="fas fa-users"></i> Users & Groups</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#database'>
							<li><i class="fas fa-database"></i> Database</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#tools'>
							<li><i class="fas fa-user-cog"></i> Tools</li>
						</a>
					</div>
					<div class='push-to-left-panel'>
						<a href='#settings'>
							<li><i class="fas fa-cog"></i> Settings</li>
						</a>
					</div>
				</ul>
				<br />
				<div style='text-align: center; font-size: 12px; padding-bottom: 15px;'> Powered by ProtonCMS - v18.03.2021.114400
					<br /> &copy; {{ now()->year }} <a href='https://github.com/rogovskyyy/' style='color: var(--default-font-color)'>rogovskyyy</a> - Made with <span style="color: #e25555;">&#9829;</span>
					<br /> </div>
			</div>
		</div>
		<div class="col-sm-10">
			<div class='header'>
				<form action='/dashboard/action:logout' method='post'> @csrf
					<p style='float: right; margin-top: 10px; margin-right: 30px;'> user : {{ Session::get('user') }}
						<button type="submit" class="button-logout"><i class="fas fa-sign-out-alt" style='margin-right: 5px; padding-top: 5px;'></i>Sign out</button>
					</p>
				</form>
			</div>