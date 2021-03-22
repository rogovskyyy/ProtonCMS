@include('admin_template.template')
<div class='main-panel'>
	<div class='main-panel-content' id='main'>
		<h1>Admin dashboard</h1> </div>
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
								<div class="col-6">

									@php
										echo "<a href='/dashboard/action:pages:update/".$items->name."'>";
									@endphp

									<button class="button-styler" style='border: none;'><i class="fas fa-edit"></i> Edit</button>
								</a>
								</div>
								<div class="col-6">
								<form action='/dashboard/action:pages:delete' method='post'>
								@csrf
									@php
										echo "<input type='hidden' name='pathway' value='".$items->name."'>";
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
	<div class='main-panel-content' id='posts'>
		<h1>Posts</h1>
		<br />
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
			<tbody> @foreach(App\Http\Controllers\Modules\Posts::action_get_all_posts() as $items)
				<tr>
					<td>{{ $items->id }}</td>
					<td>{{ $items->mount_at }}</td>
					<td>{{ $items->custom_path }}</td>
					<td>{{ $items->title }}</td>
					<td>{{ $items->content }}</td>
					<td>{{ $items->author }}</td>
					<td>{{ $items->date }}</td>
				</tr> @endforeach </tbody>
		</table>
	</div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='comments'>
		<h1>Comments</h1>
		<br /> Lorem ipsum </div>
</div>
<div class="row">
	<div class="col">
		<div class='main-panel'>
			<div class='main-panel-content' id='categories'>
				<h1>Categories</h1>
				<br /> Lorem Ipsum </div>
			</p>
		</div>
	</div>
	<div class="col">
		<div class='main-panel'>
			<div class='main-panel-content' id='tags'>
				<h1>Tags</h1>
				<br /> Lorem Ipsum </div>
		</div>
	</div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='themes'>
		<h1>Themes</h1>
		<br /> Lorem Ipsum </div>
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
		</table> @php print \App\Plugins\HelloWorld\HelloWorld::main(); @endphp @php print \App\Plugins\CurrentTime\CurrentTime::main(); @endphp </div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='widgets'>
		<h1>Widgets</h1>
		<br /> Lorem Ipsum </div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='media-lib'>
		<h1>Media Library</h1>
		<br /> Lorem Ipsum </div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='database'>
		<h1>Database</h1>
		<br /> @php App\Http\Controllers\Modules\Database::is_connection(); @endphp </div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='tools'>
		<h1>Tools</h1>
		<br /> Lorem Ipsum </div>
</div>
<div class='main-panel'>
	<div class='main-panel-content' id='settings'>
		<h1>Settings</h1>
		<br /> Lorem Ipsum </div>
</div>
</div>
</div> @include('admin_template.footer')