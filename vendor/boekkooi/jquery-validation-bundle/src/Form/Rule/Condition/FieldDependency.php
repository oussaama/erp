<?php
namespace Boekkooi\Bundle\JqueryValidationBundle\Form\Rule\Condition;

use Boekkooi\Bundle\JqueryValidationBundle\Form\RuleCondition;
use Boekkooi\Bundle\JqueryValidationBundle\Form\Util\FormHelper;

/**
 * Class used to indicate that a rule will only be validated when a field other field is valid.
 */
class FieldDependency implements RuleCondition
{
    const FIELD_VALID = '=';
    const FIELD_INVALID = '!';

    /**
     * Dependent field
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $condition;

    public function __construct($field, $condition = self::FIELD_VALID)
    {
        $this->field = FormHelper::getFormName($field);
        $this->condition = $condition;
    }

    /**
     * {@inheritdoc}
     */
    public function macro()
    {
        return 'field_dependency';
    }
}
