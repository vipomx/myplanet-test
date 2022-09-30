<?php

namespace Drupal\movies\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that the Release Date is not in the future.
 *
 * @Constraint(
 *   id = "ReleaseTimeChecking",
 *   label = @Translation("Release date.", context = "Validation"),
 *   type = "string"
 * )
 */
class ReleaseTimeCheckingConstraint extends Constraint {

  // The message that will be shown if the value is not an integer.
  public $releaseDateInvalid = 'Release Date cannot be in the future.';

}