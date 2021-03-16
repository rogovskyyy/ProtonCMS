@include('admin_template.template')

<div class="col-sm-9">
  <div class='main-panel'>
    <p style='float: right; margin-top: 7px; margin-right: 25px;'>
      <div class='main-panel-content'>
        <h1> Menus </h1> <br />
        <table class="table table-sm table-borderless">
            <thead>
              <tr>
                <th scope="col">name</th>
                <th scope="col">mount at</th>
                <th scope="col">type</th>
              </tr>
            </thead>
            <tbody>
              @foreach(App\Http\Controllers\Modules\Menus::action_get_all_menus() as $items)
                <tr>
                  <td>{{ $items->name }}</th>
                  <td>{{ $items->pathway }}</td>
                  <td>{{ $items->type }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </p>
  </div>
</div>

@include('admin_template.footer')