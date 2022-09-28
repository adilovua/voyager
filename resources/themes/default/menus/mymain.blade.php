<ul class="navbar-nav ms-auto py-4 py-lg-0">
@foreach($items as $menu_item)
        <li class="nav-item"><a href="{{ $menu_item->link() }}" class="nav-link px-lg-3 py-3 py-lg-4">{{ $menu_item->title }}</a></li>
@endforeach
</ul>
