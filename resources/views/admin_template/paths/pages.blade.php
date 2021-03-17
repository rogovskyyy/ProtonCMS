@include('admin_template.template')

  <div class='main-panel'>
    <p style='float: right; margin-top: 7px; margin-right: 25px;'>
      <div class='main-panel-content'>
        <h1> Pages </h1> <br />
        <table class="table table-sm table-borderless">
            <thead>
              <tr>
                <th scope="col">path</th>
                <th scope="col">filename</th>
              </tr>
            </thead>
            <tbody>
              @foreach(App\Http\Controllers\Modules\Pages::action_get_all_pages() as $items)
                <tr>
                  <td>{{ $items->path }}</th>
                  <td>{{ $items->filename }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </p>
  </div>
</div>
</div>

@include('admin_template.footer')