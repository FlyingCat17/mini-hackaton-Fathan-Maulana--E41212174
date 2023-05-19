@if (session()->has('flash'))
    @php
        $type = session('flash')['type'];
    @endphp

    <div class="alert 
    @switch($type)
        @case('success')
        alert-success
            @break
        @case('danger')
        alert-danger
            @break
        @default
        
    @endswitch"
        role="alert">
        {{ session('flash')['msg']  }}
    </div>
@endif
