<?php foreach(['primary','success','warning','danger','info'] as $color): ?>
@if( session($color) )
<div class="alert alert-{{ $color }} text-center">{!! session($color) !!}</div>
@endif
<?php endforeach ?>
