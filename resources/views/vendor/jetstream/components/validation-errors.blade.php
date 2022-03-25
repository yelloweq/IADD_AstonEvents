@if ($errors->any())
    <div {{ $attributes }}>
        <ul class="list-group" >
            @foreach ($errors->all() as $error)
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 text-wrap">{{ $error }}
                    <span class="badge badge-danger badge-pill">!</span></li>
            @endforeach
        </ul>
    </div>
@endif
