<?php namespace MDH\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function getName()
    {
        $name = trim($this->firstname . ' ' . $this->lastname);

        if (empty($name)) {
            return '(unknown)';
        }

        return $name;
    }

    public function getCreatedAt()
    {
        return $this->created_at->format('d-m-Y');
    }
}