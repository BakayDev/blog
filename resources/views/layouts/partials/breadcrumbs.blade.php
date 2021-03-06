@if (count($breadcrumbs))
    <section style="padding-top: 80px;">
        <div class="container">
            <ul class="breadcrumb">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($breadcrumb->url && !$loop->last)
                        <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>

@endif
