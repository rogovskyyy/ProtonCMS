    @include('admin_template.header')
     
    <div class="container-fluid" style='width: 95%;'>
        <div class="row">
        <div class="col-sm-2" id="sticky-sidebar">
              <div class='side-panel'>
                <p style='float: left; margin-top: 15px; font-size: 28px; color: #f0447d;'>
                  
                    <div style='padding-bottom: 5px; text-align: center; padding-top: 35px;'>
                      <img src="{{ asset('content/logo.svg') }}"><br />
                      ProtonCMS
                    </div>
                    <ul class='padder'>
                     <div class='push-to-left-panel'><a href="../pcms-admin/"><li><i class="fas fa-home"></i> Admin Dashboard</li></a></div>
                     <div class='push-to-left-panel'><a href='../pcms-admin/menus'><li><i class="fas fa-compass"></i> Menus</li></a></div>
                     <div class='push-to-left-panel'><a href='../pcms-admin/pages'><li><i class="fas fa-window-restore"></i> Pages</li></a></div>
                     <div class='push-to-left-panel'><a href='../pcms-admin/posts'><li><i class="fas fa-plus-square"></i> Posts</li></a></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-comments"></i> Comments</span></li></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-th-list"></i> Categories</span></li></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-tags"></i> Tags</span></li></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-border-style"></i> Themes</span></li></div>
                     <div class='push-to-left-panel'><a href='../pcms-admin/plugins'><li><i class="fas fa-plug"></i> Plugins</li></a></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-puzzle-piece"></i> Widgets</span></li></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-photo-video"></i> Media Library</li></a></div>
                     <div class='push-to-left-panel'><a href='../pcms-admin/users'><li><i class="fas fa-users"></i> Users & Groups</li></a></div>
                     <div class='push-to-left-panel'><a href='../pcms-admin/database'><li><i class="fas fa-database"></i> Database</li></a></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-user-cog"></i> Tools</span></li></div>
                     <div class='push-to-left-panel'><li><span class='disabled'><i class="fas fa-cog"></i> Settings</span></li></div>
                   </ul> <br />
                   <div style='text-align: center; font-size: 12px; padding-bottom: 15px;'>
                   Powered by ProtonCMS - v16.03.2021.222700<br />
                   &copy; {{ now()->year }} <a href='https://github.com/rogovskyyy/' style='color: var(--default-font-color)'>rogovskyyy</a> - Made with <span style="color: #e25555;">&#9829;</span><br />
                                
                    </div>
                </p>
              </div>
            </div>
            <div class="col-sm-10">
              <div class='header'>
              <form action='/pcms-admin/action:logout' method='post'>
              @csrf
                <p style='float: right; margin-top: 10px; margin-right: 30px;'>
                    user : {{ Session::get('user') }}
                    <button type="submit" class="button-logout">Sign out</button>
                </p>
                </form>
            </div>