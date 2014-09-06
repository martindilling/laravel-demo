<?php
/**
 * Color
 * =====
 * You can use the following solid colors:
 *     aqua
 *     black
 *     blue
 *     fuchsia
 *     green
 *     light-blue
 *     lime,
 *     maroon
 *     navy
 *     olive
 *     orange
 *     purple
 *     red
 *     teal
 *     yellow.
 *
 * And the following gradients:
 *     aqua-gradient
 *     black-gradient
 *     blue-gradient
 *     green-gradient
 *     light-blue-gradient
 *     maroon-gradient
 *     purple-gradient
 *     red-gradient
 *     teal-gradient
 *     yellow-gradient
 *
 *
 * Ionicons, v1.4.0
 * =======
 * You can find the icons here: http://ionicons.com/
 * Pass the class name, but without "ion-".
 * Fx. if you want the icon "ion-chatbubble" just set the icon to "chatbubble".
 */

isset($link)      ?: $link      = '#link-missing';
isset($color)     ?: $color     = 'aqua';
isset($header)    ?: $header    = '0';
isset($text)      ?: $text      = 'Default text';
isset($ionicon)   ?: $ionicon   = 'bag';
isset($more_text) ?: $more_text = 'More info';

?>

<!-- small box -->
<div class="small-box bg-{{ $color }}">
    <div class="inner">
        <h3>{{ $header }}</h3>
        <p>{{ $text }}</p>
    </div>
    <div class="icon">
        <i class="ion ion-{{ $ionicon }}"></i>
    </div>
    <a href="{{ $link }}" class="small-box-footer">
        {{ $more_text }} <i class="fa fa-arrow-circle-right"></i>
    </a>
</div>