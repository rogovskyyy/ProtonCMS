@include('admin_template.template')

<div class='my-content'>
	<div class='main-panel'>
		<div class='main-panel-content' id='main'>
		<h3>Welcome {{ Session::get('user') }}</h3>
			<form action='/dashboard/action:logout' method='post'> @csrf
					<button type="submit" class="button-logout" style='float: right; margin-top: -40px;'>
						<i class="fas fa-sign-out-alt" style='margin-right: 5px; padding-top: 5px; font-size: 14px;'></i>Sign out</button>
			</form>
		</div>
	</div>

<div class='main-panel'>
	<div class='main-panel-content' id='menus'>
		<div class='main-panel-content-box'>
			<h1>Menus</h1>
			<a href='/dashboard/action:menus:add' style='text-decoration: none; color: white;'>
				<div class='add-button'>
					<div class='items'>
						<i class="fas fa-plus" style='font-size: 12px;'></i> Add
					</div>
				</div>
			</a>
		</div>
		<br />
		<div class="row"> @foreach(App\Http\Controllers\Modules\Menus::action_get_all_menus() as $items)
			<div class="col-2">
				<div class='main-panel-content-item'>
					<div class='main-panel-content-item-padding'>
						<h4>{{ $items->name }}</h4>
						<url-path>{{ $items->pathway }}</url-path>
						<br />
						<div class='menu-type'> @php $color = ['red', 'yellow']; $txt = ''; if($items->type == 'page' ) { echo '
							<red>'.$items->type.'</red>'; } else if ($items->type == 'post') { echo '
							<blue>'.$items->type.'</blue>'; } @endphp </div>
						<description>{{ $items->description }}</description>
						<actions>
							<div class="row">
								<div class="col-6">

									@php
										echo "<a href='/dashboard/action:menus:update/".$items->name."'>";
									@endphp

									<button class="button-styler" style='border: none;'><i class="fas fa-edit"></i> Edit</button>
								</a>
								</div>
								<div class="col-6">
								<form action='/dashboard/action:menus:delete' method='post'>
								@csrf
									@php
										echo "<input type='hidden' name='pathway' value='".$items->pathway."'>";
									@endphp

									<button type="submit" class="button-styler" style='border: none;'><i class="far fa-trash-alt"></i> Delete</button>
									
								</form>
							</div>
							</div>
						</actions>
						<br /> 
					</div>
				</div>
			</div> 
			@endforeach
		</div>
	</div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='pages'>
		<div class='main-panel-content-box'>
		<h1>Pages</h1>
		<a href='/dashboard/action:pages:add' style='text-decoration: none; color: white;'>
				<div class='add-button'>
					<div class='items'>
						<i class="fas fa-plus" style='font-size: 12px;'></i> Add
					</div>
				</div>
			</a>
		</div>
		<br />
		<div class="row"> @foreach(App\Http\Controllers\Modules\Pages::action_get_all_pages() as $items)
			<div class="col-2">
				<div class='main-panel-content-item'>
					<div class='main-panel-content-item-padding'>
						<h4>{{ $items->name }}</h4>
						<url-path>attached to: {{ $items->path }}</url-path> <br />
						<description>used file: {{ $items->filename }}</description>
						<br />
						<actions>
							<div class="row">
								<div class="col">
								<form action='/dashboard/action:pages:delete' method='post'>
								@csrf
									@php
										echo "<input type='hidden' name='pages_delete_name' value='".$items->path."'>";
									@endphp

									<button type="submit" class="button-styler" style='border: none;'><i class="far fa-trash-alt"></i> Delete</button>
									
								</form>
							</div>
							</div>
						</actions>
						<br /> 
					</div>
				</div>
			</div> 
			@endforeach
		</div>
	</div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='pages'>
		<div class='main-panel-content-box'>
		<h1>Posts</h1>
		<a href='/dashboard/action:posts:add' style='text-decoration: none; color: white;'>
				<div class='add-button'>
					<div class='items'>
						<i class="fas fa-plus" style='font-size: 12px;'></i> Add
					</div>
				</div>
			</a>
		</div>
		<br />
		<table class="table table-sm table-borderless">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">mount_at</th>
					<th scope="col">custom_path</th>
					<th scope="col">title</th>
					<th scope="col">author</th>
					<th scope="col">date</th>
					<th scope="col">edit</th>
					<th scope="col">delete</th>
				</tr>
			</thead>
			<tbody> @foreach(App\Http\Controllers\Modules\Posts::action_get_all_posts() as $items)
				<tr>
					<td>{{ $items->id }}</td>
					<td>{{ $items->mount_at }}</td>
					<td>{{ $items->custom_path }}</td>
					<td>{{ $items->title }}</td>
					<td>{{ $items->author }}</td>
					<td>{{ $items->date }}</td>
					<td><a href='/dashboard/action:posts:update/{{ $items->id }}'><button class="button-styler-no-margin" style='border: none;'><i class="fas fa-edit"></i> Edit</button></a></td>
					<td>
						<form action='/dashboard/action:posts:delete' method='post'>
						@csrf
							<input type='hidden' name='post_id' value='{{ $items->id }}'>
							<button type="submit" class="button-styler-no-margin" style='border: none;'>
								<i class="far fa-trash-alt"></i> Delete
							</button>
						</form>
					</td>
				</tr> @endforeach </tbody>
		</table>
	</div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='pages'>
		<div class='main-panel-content-box'>
		<h1>Themes</h1>
		<a href='/dashboard/action:themes:add' style='text-decoration: none; color: white;'>
				<div class='add-button'>
					<div class='items'>
						<i class="fas fa-plus" style='font-size: 12px;'></i> Add
					</div>
				</div>
			</a>
		</div>
		<br />
		<table class="table table-sm table-borderless">
			<thead>
				<tr>
					<th scope="col">theme</th>
					<th scope="col">filename</th>
					<th scope="col">update</th>
					<th scope="col">delete</th>
				</tr>
			</thead>
			<tbody> 
				@php
					App\Http\Controllers\Modules\Themes::get_all_files();
				@endphp
			</tbody>
		</table>
</div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='plugins'>
		<h1>Plugins</h1>
		<br />
		<table class="table table-sm table-borderless">
			<thead>
				<tr>
					<th scope="col">name</th>
					<th scope="col">description</th>
					<th scope="col">author</th>
					<th scope="col">version</th>
				</tr>
			</thead>
			<tbody> @foreach(\App\Http\Controllers\Modules\Plugin::scan_for_file() as $value)
				<tr>
					<td> {{ $value['name'] }}</td>
					<td> {{ $value['description'] }}</td>
					<td> {{ $value['author'] }}</td>
					<td> {{ $value['version'] }}</td>
				</tr> @endforeach </tbody>
		</table></div>
</div>
</div>
</div>
</div> @include('admin_template.footer')