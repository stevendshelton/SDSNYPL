<?php
namespace Drupal\sdsnypl\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks if Sunday or Saturday selected
 *
 * Start or end date cannot be a weekend.
 *
 * @Constraint(
 *   id = "NoWeekends",
 *   label = @Translation("Start/End Time checking", context = "Validation")
 * )
 */
class NoWeekends extends Constraint {

  public $message = 'Dates must be weekdays only.';

}
