<?php

use Carbon\Carbon;

function convertDateForHumans(string $date): string
{
    Carbon::setLocale('pt_BR');

    $humanDate = Carbon::parse($date)->diffForHumans();

    return ucfirst($humanDate);
}

function ratingAverage($ratings)
{
    $ratingsCount = count($ratings);
    $ratingSum = 0;

    foreach ($ratings as $rating) {
        $ratingSum += $rating->rate;
    }

    return round($ratingSum / $ratingsCount);
}
