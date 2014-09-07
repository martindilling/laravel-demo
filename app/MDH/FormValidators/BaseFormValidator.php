<?php namespace MDH\FormValidators;

use Laracasts\Validation\FormValidator;
use MDH\Exceptions\RuleNeedAnEntityId;

abstract class BaseFormValidator extends FormValidator
{
    /**
     * @var int
     */
    protected $entityId;

    /**
     * @var string
     */
    protected $idIdentifier = '{id}';

    /**
     * Set an id
     *
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->entityId = $id;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRules()
    {
        if (is_numeric($this->entityId)) {
            $this->rules = $this->updateRulesWithId($this->rules);
        } else {
            $this->checkForMissingId($this->rules);
        }

        return $this->rules;
    }

    /**
     * Update the rules by replacing "{id}" with the entityId
     *
     * @param array $rules
     *
     * @return array
     */
    protected function updateRulesWithId($rules)
    {
        foreach ($rules as $key => $value) {
            $rules[$key] = str_replace($this->$idIdentifier, $this->entityId, $rules[$key]);
        }

        return $rules;
    }

    private function checkForMissingId($rules)
    {
        foreach ($rules as $key => $value) {
            if (strpos($key, $this->idIdentifier) !== false) {
                throw new RuleNeedAnEntityId('Rule: "' . $key . '"');
            }
        }
    }
}