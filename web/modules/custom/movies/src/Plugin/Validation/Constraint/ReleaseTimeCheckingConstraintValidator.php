<?php

namespace Drupal\movies\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the Release date constraint.
 */
class ReleaseTimeCheckingConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
    // Get release date timestamp
    //print_r($entity->field_release_date->isEmpty()); exit;
    $release_date = ($entity->field_release_date->date != null) ? $entity->field_release_date->date->getTimestamp() : null;
    $today = strtotime("today");

    // Validate release date.
    if ($release_date && $release_date > $today) {
      $this->context->addViolation($constraint->releaseDateInvalid);
    }
  }

}