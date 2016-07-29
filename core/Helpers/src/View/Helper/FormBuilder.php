<?php

namespace Helpers\View\Helper;

use AbdPlatform\Extend\Form\FieldgroupInterface;
use AbdPlatform\Extend\Form\TabsetInterface;
use Zend\Form\Form;
use Zend\Form\ElementInterface;
use Zend\Form\FieldsetInterface;
use Zend\View\Helper\AbstractHelper;

class FormBuilder extends AbstractHelper {

    public function __invoke($form)
    {
        if ($form instanceOf Form)
        {
            return $this->renderFormWrapper($form);
        }
        elseif ($form instanceOf TabsetInterface)
        {
            return $this->renderTabsetWrapper($form);
        }
        elseif ($form instanceOf FieldsetInterface)
        {
            return $this->renderFieldsetWrapper($form);
        }
        elseif ($form instanceOf ElementInterface)
        {
            return $this->renderElementWrapper($form);
        }
    }

    private function renderFormWrapper(Form $form)
    {
        return $this->getView()->render('layout/pages/form-partials/form-wrapper', ['form' => $form]);
    }

    private function renderTabsetWrapper(TabsetInterface $tabset)
    {
        return $this->getView()->render('layout/pages/form-partials/tabset-wrapper', ['tabset' => $tabset]);
    }

    private function renderFieldsetWrapper(FieldsetInterface $fieldset)
    {
        return $this->getView()->render('layout/pages/form-partials/fieldset-wrapper', ['fieldset' => $fieldset]);
    }

    private function renderElementWrapper(ElementInterface $element)
    {
        return $this->getView()->render('layout/pages/form-partials/element-wrapper', ['element' => $element]);
    }

}