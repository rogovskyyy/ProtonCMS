@include('admin_template.template')

<div class="col-sm-9">
  <div class='main-panel'>
    <p style='float: right; margin-top: 7px; margin-right: 25px;'>
      <div class='main-panel-content'>
        <h1> Posts </h1> <br />
        <table class="table table-sm table-borderless">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">mount_at</th>
                <th scope="col">custom_path</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">author</th>
                <th scope="col">date</th>
              </tr>
            </thead>
            <tbody>
              @foreach(App\Http\Controllers\Modules\Posts::action_get_all_posts() as $items)
                <tr>
                  <td>{{ $items->id }}</th>
                  <td>{{ $items->mount_at }}</td>
                  <td>{{ $items->custom_path }}</td>
                  <td>{{ $items->title }}</td>
                  <td>{{ $items->content }}</td>
                  <td>{{ $items->author }}</td>
                  <td>{{ $items->date }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </p>
  </div>
</div>

@include('admin_template.footer')