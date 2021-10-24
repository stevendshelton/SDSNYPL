<?php

namespace Drupal\sdsnypl\Plugin\Validation\Constraint;

use Drupal\Core\Datetime\DateHelper;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates start/end time.
 */
class NoWeekendsValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {

    $entity = $entity->getEntity();
    $date_range= $entity->get('field_exhibition_dates')->getString();

    $date_string = explode(',',$date_range);

    foreach($date_string as $date) {
      $dow = DateHelper::dayOfWeek($date);

      if (($dow == 0) || ($dow == 6)) {
        $this->context->addViolation($constraint->message);
      }
    }
  }

}
