@include('admin_template.template')

  <div class='main-panel'>
    <p style='float: right; margin-top: 7px; margin-right: 25px;'>
      <div class='main-panel-content'>
        <h1> Users </h1> <br />
          <table class="table table-sm table-borderless">
            <thead>
              <tr>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">group</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach(App\Http\Controllers\Modules\Users::action_get_all_users() as $user)
                <tr>
                  <td>{{ $user->username }}</th>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->groups }}</td>
                  <td><button type="button" class="button-action">Small button</button></td>
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