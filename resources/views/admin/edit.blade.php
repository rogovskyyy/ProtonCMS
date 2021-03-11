@include('admin.header')

<body>
  <div class="d-flex" id="wrapper">

    @include('admin.sidebar_elements')

    <div id="page-content-wrapper">
      <div class="container-fluid">
        <h1 class="mt-4">Edit SPCMS (Single Page Content Management System)</h1>
        <form action='/admin/template/update' method='post'>
          @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Update template</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" style="width: 100%" rows="16" name="content">{{ $content }}</textarea>       
                <button type="submit" class="btn btn-primary">Update</button>
                asdasdasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
            </div>
        </form>
      </div>
    </div>
  </div>

@include('admin.footer')