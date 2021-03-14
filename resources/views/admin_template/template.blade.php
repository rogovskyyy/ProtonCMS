    @include('admin_template.header')
     
    <div class="container">
        <div class="row">
            <div class="col-sm text-left">
              <p style='float: left; margin-top: 12px; margin-left: 25px; font-size: 28px; color: #f0447d;'>
                  <img src="{{ asset('content/logo.svg') }}"> ProtonCMS
                </p>
            </div>
            <div class="col-sm ">
                <p style='float: right; margin-top: 14px; margin-right: 30px;'>
                  user : admin
                  <button type="button" class="button-logout" style='margin-left: 10px;'>Logout</button>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
              <div class='side-panel'>
                <p style='float: left; margin-top: 15px; font-size: 28px; color: #f0447d;'>
                   <ul class='padder'>
                     <div class='push-to-left-panel'><a href="../proton@dashboard/"><li><i class="fas fa-home"></i> Admin Dashboard</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~posts'><li><i class="fas fa-plus-square"></i> Posts</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~pages'><li><i class="fas fa-window-restore"></i> Pages</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~plugins'><li><i class="fas fa-plug"></i> Plugins</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~themes'><li><i class="fas fa-border-style"></i> Themes</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~categories'><li><i class="fas fa-th-list"></i> Categories</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~tags'><li><i class="fas fa-tags"></i> Tags</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~media-lib'><li><i class="fas fa-photo-video"></i> Media Library</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~menus'><li><i class="fas fa-compass"></i> Menus</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~widgets'><li><i class="fas fa-puzzle-piece"></i> Widgets</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~database'><li><i class="fas fa-database"></i> Database</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~users'><li><i class="fas fa-users"></i> Users</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~comments'><li><i class="fas fa-comments"></i> Comments</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~tools'><li><i class="fas fa-user-cog"></i> Tools</li></a></div>
                     <div class='push-to-left-panel'><a href='../proton@dashboard/~settings'><li><i class="fas fa-cog"></i> Settings</li></a></div>
                   </ul>
                </p>
              </div>
            </div>