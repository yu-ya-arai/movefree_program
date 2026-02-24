<?php
declare(strict_types=1);

function getTrapezoidArea(float $top, float $bottom, float $height): float {
    return ($top + $bottom) * $height / 2;
}