<!-- LEFT SIDEBAR -->
<?php
$menus = DB::select('select * from menus m order by app_id, parent_id, sort');

// Buat array kosong untuk menampung menu berjenjang
$nestedMenus = [];

// Iterasi setiap menu dari hasil query, convert data menjadi Nested Array
foreach ($menus as $menu) {
	// Jika parent_id NULL, maka menu ini adalah parent utama
	if ($menu->parent_id === 0) {
		$nestedMenus[$menu->id] = [
			'name' => $menu->menu,
			'caption' => $menu->caption,
			'url' => $menu->url,
			'icon' => $menu->icon,
			'class' => $menu->class,
			'report' => $menu->report,
			'target' => $menu->target,
			'is_sparator' => $menu->is_sparator,
			'children' => []
		];
	} else {
		// Jika memiliki parent, tambahkan sebagai child pada parent yang sesuai
		$nestedMenus[$menu->parent_id]['children'][] = [
			'name' => $menu->menu,
			'caption' => $menu->caption,
			'url' => $menu->url,
			'icon' => $menu->icon,
			'class' => $menu->class,
			'report' => $menu->report,
			'target' => $menu->target,
			'is_sparator' => $menu->is_sparator,                    
			'id' => $menu->id
		];
	}
}

?>
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@foreach ($nestedMenus as $menu)
					@if (!empty($menu['children']))
					<li>
						<a href="#{{ $menu['name'] }}" data-toggle="collapse" class="collapsed" target="{{ $menu['target'] }}">
							<i class="{{ $menu['class'] }}"></i> 
								<span>{{ $menu['caption'] }}</span>
								<i class="icon-submenu lnr lnr-chevron-left">
							</i>
						</a>
						<div id="{{ $menu['name'] }}" class="collapse">
							<ul class="nav"> 
								@foreach ($menu['children'] as $child)
									<li>
										@if($child['report'] === '' )
											<a href="{{ route($child['url']) }}" target="{{ $menu['target'] }}">
										@else
											<a href="{{ route($child['url'], ['rpt' => $child['report'], 'caption' => $child['caption']]) }}" target="{{ $menu['target'] }}">
										@endif										
											<i class="{{ $child['class'] }}"></i> {{ $child['caption'] }}
										</a>
									</li>
								@endforeach
							</ul>
						</div>
					</li>		
					@else
						<li>
							@if($menu['report'] === '' )
								<a href="{{ route($menu['url']) }}" class="" target="{{ $menu['target'] }}">
							@else
								<a href="{{ route($menu['url'], ['rpt' => $menu['report'], 'caption' => $menu['caption'] ]) }}" class="" target="{{ $menu['target'] }}">
							@endif								
							<i class="{{ $menu['class'] }}""></i><span>{{ $menu['caption'] }}</span></a>
						</li>
					@endif						
				@endforeach							
			</ul>
		</nav>
	</div>
</div>
<!-- END LEFT SIDEBAR -->