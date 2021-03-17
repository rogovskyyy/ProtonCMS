@include('admin_template.template')

  <div class='main-panel'>
    <p style='float: right; margin-top: 7px; margin-right: 25px;'>
      <div class='main-panel-content'>
        <h1> Database </h1> <br />
        @php
          App\Http\Controllers\Modules\Database::is_connection();
        @endphp
      </div>
    </p>
  </div>
</div>
</div>

@include('admin_template.footer')