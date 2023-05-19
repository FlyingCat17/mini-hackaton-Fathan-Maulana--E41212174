@if (session()->has('flash'))
    @php
        $type = session('flash')['type'];
    @endphp
    <div
        class="alert 
    @if ($type == 'success') bg-green-200 text-green-800 border-green-300 
    @elseif($type == 'danger') 
    bg-red-200 text-red-800 border-red-300 
    @else bg-yellow-200 text-yellow-800 border-yellow-300 @endif
    shadow-lg">
        <div>
            <i
                class="fa-solid {{ $type == 'success' ? 'fa-circle-check' : ($type == 'error' ? 'fa-circle-xmark' : 'fa-triangle-exclamation') }}"></i>
            <span class="text-sm">{{ session('flash')['msg'] }}</span>
        </div>
    </div>
@endif
{{-- <div class="alert">

</div> --}}


{{-- <div class="alert alert-error shadow-lg">
    <div>
        <i class="material-icons">warning</i>
        <span>Username or Password is incorrect! Try Again!</span>
    </div>
</div> --}}
