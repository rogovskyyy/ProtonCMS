<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">BlazingShipCMS</div>
      <div class="list-group list-group-flush">
        <a href="/admin" class="list-group-item list-group-item-action bg-light">Strona główna</a>
        <a href="/admin/template" class="list-group-item list-group-item-action bg-light">Template</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    
    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-auto">
            <li class="nav-item active">
              <a class="nav-link float-right" href="#">Zalogowany jako: admin</a>
            </li>
          </ul>
          <form action='/admin/logout' method='post'>
            @csrf
            <button type="submit" class="btn btn-primary">Wyloguj</button>
          </form>
        </div>
      </nav>
