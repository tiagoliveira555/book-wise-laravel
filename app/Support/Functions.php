<?php

function ratingAverage($ratings)
{
    $ratingsCount = count($ratings);
    $ratingSum = 0;

    foreach ($ratings as $rating) {
        $ratingSum += $rating->rate;
    }

    return round($ratingSum / $ratingsCount);
}
