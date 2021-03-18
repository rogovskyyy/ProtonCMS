@include('admin_template.template')

  <div class='main-panel'>
    <p style='float: right; margin-top: 7px; margin-right: 25px;'>
      <div class='main-panel-content'>
        <h1> Plugins </h1> <br />
        <table class="table table-sm table-borderless">
            <thead>
              <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">author</th>
                <th scope="col">version</th>
              </tr>
            </thead>
            <tbody>
              @foreach(\App\Http\Controllers\Modules\Plugin::scan_for_file() as $value)
              <tr>
                <td> {{ $value['name'] }}</td>
                <td> {{ $value['description'] }}</td>
                <td> {{ $value['author'] }}</td>
                <td> {{ $value['version'] }}</td>
              </tr>
              @endforeach

              @php
                print \App\Plugins\HelloWorld\HelloWorld::main();
              @endphp

              @php
                print \App\Plugins\CurrentTime\CurrentTime::main();
              @endphp
            </tbody>
          </table>
      </div>
    </p>
  </div>
</div>
</div>

@include('admin_template.footer')