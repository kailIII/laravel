@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="card-panel white-text blue lighten-1 z-depth-3 alert-{!! Session::get('flash_notification.level') !!}">

            {!! Session::get('flash_notification.message') !!}
        </div>
    @endif
@endif
