<?php

namespace BisquidsTin\Utilities;

abstract class FaveBiscuitDataProcessor
{
  public static function getFaveBiscuitData(array $dunkedFlunkedData): string
  {
    if ($dunkedFlunkedData !== []) {
      $faveBiscuitData = [];
      foreach ($dunkedFlunkedData as $dunkedData => $bool) {
        if ($bool === true) {
          $faveBiscuitData[] = $dunkedData;
        }
      }
      $faveBiscuitIds = implode(',', $faveBiscuitData);
      return $faveBiscuitIds;
    } else {
      return 'No data available';
    }
  }
}
