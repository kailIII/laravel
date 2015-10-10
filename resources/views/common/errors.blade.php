@if($errors->any())
  <div class="card-panel white-text red lighten-1 z-depth-3">
        @foreach($errors->all() as $error)
            <p>{!! $error !!}</p>
        @endforeach
  </div>
@endif
