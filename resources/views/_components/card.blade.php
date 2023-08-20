<?php

    $fecha = new DateTime();
    $currentDateTime = $fecha->format('Y-m-d H:i:s');

?>

<div class="card">
    <img src="{{$url}}" alt="">
    <h4>{{ $tag }}</h4>
    <p>{{ $title }}</p>
    <p id="currentDate"><small><?php echo $currentDateTime; ?></small></p>
</div>