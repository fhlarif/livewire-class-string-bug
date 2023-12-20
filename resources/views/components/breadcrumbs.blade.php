@props(['breadcrumbs' => []])
<nav>
    <ol>
        @foreach ($breadcrumbs as $breadcrumb)
            <li>
                <a href="{{ $breadcrumb['url'] ?? '#' }}">
                    {{ $breadcrumb['name'] }}
                    </div>
                </a>
            </li>
        @endforeach

    </ol>
</nav>
