<div class="card mb-3 border-info">
    <div class="card-header bg-transparent border-info">
        <h5 class="text-muted text-center">公告</h5>
    </div>
    <div class="card-body">
        <article class="text-muted">
            追梦人的博客于2018年11月3号19:00已萌萌哒运行<br>
            <!--  博客开通距离现在已有<span id="span_dt_dt"></span><br> -->
        </article>
    </div>
</div>

<div class="card border-info mb-3">
    <div class="card-header bg-transparent border-info">
        <h5 class="text-muted text-center">归档</h5>
    </div>
    @if(count($archives))
        <ul class="list-group list-group-flush">
            @foreach($archives as $archive)
                <li class="list-group-item @if(request()->has('year') && request()->year == $archive->year) bg-light @endif">
                    <a href="{{ route('posts.index') }}?year={{ $archive->year }}@if(request()->has('order'))&order={{ request()->order }}@endif" 
                        class="text-center text-info font-weight-bold">
                        <center>{{ $archive->year }} ( {{ $archive->total }} )</center>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>