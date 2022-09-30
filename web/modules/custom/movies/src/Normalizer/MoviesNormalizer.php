<?php

namespace Drupal\movies\Normalizer;
use Drupal\serialization\Normalizer\ContentEntityNormalizer;

/**
 * {@inheritdoc}
 */
class MoviesNormalizer extends ContentEntityNormalizer {
/**
   * {@inheritdoc}
   */
  public function normalize($entity, $format = NULL, array $context = []) {
    if ($entity->bundle() == 'movies') {
      $data = [
        'id' => $entity->id(),
        'title' => (!$entity->field_title->isEmpty()) ? $entity->field_title->getValue()[0]['value'] : '',
        'release_date' => (!$entity->field_release_date->isEmpty()) ? $entity->field_release_date->getValue()[0]['value'] : '',
        'genre' => (!$entity->field_genre->isEmpty()) ?  $entity->field_genre->referencedEntities()[0]->label() : '', 
      ];

      return $data;
    }
  }
}
