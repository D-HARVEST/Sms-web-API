@if (!($withoutBarner ?? false) == true)
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="mb-0 text-dark fw-bolder">{!! $pagetitle ?? ''!!}</h4>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                {{-- <li class="breadcrumb-item active">Agent List</li> --}}
                @foreach ($breadcrumbs ?? [] as $bkey => $bvalue)
                    <li class="breadcrumb-item " @if ($loop->last) aria-current="page" @endif>
                        <a class="text-muted text-decoration-none" href="{{$bvalue}}">
                            {{ $bkey }}
                        </a>
                    </li>
                    
                @endforeach
            </ol>
        </div>
    </div>
</div>
    
@endif