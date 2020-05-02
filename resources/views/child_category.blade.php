{{-- <li>{{ $child_category->name }}</li>
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif --}}

{{-- <li class="dropdown-submenu"><a href="#">{{ $child_category->name }}</a>
    @if ($child_category->categories)
    <ul class="dropdown-menu zoomIn">
        <li><a href="home-style-one.html">
            @foreach ($child_category->categories as $childCategory)
              @include('child_category', ['child_category' => $childCategory])
            @endforeach
        </a></li>
    </ul>
    @endif
</li> --}}

<ul class="dropdown-menu zoomIn">
    <li><a href="home-style-one.html">
        {{$child_category->name}}
    </a></li>
</ul>