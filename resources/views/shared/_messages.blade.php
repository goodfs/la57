@foreach(['danger','warning','success','info'] as $msg)

    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert-{{$msg}} alert">
                {{session()->get($msg)}}
            </p>

        </div>

    @endif

@endforeach