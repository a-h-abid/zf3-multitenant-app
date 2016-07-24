<?php

namespace Helpers\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\FieldsetInterface;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class FormElementPartial extends AbstractHelper {

    public function __invoke(ElementInterface $element)
    {
        if ($element instanceOf FieldsetInterface)
        {
            $elementsCount = count($element);

            return $this->fieldGroupRenderer($element, $elementsCount);
        }
        else
        {
            return $this->elementRenderer($element);
        }
    }

    private function fieldGroupRenderer(ElementInterface $fields, $elementsCount)
    {
        $viewStr = '';
        $layoutPath = 'layout/pages/form-partials/field-group';
        foreach ($fields as $field)
        {
            $viewStr .= $this->getView()->render($layoutPath, ['field' => $field,'elementsCount' => $elementsCount]);
        }

        return $viewStr;
    }

    private function elementRenderer(ElementInterface $field)
    {
        $layoutPath = 'layout/pages/form-partials/'.str_replace('\\', '-', strtolower(get_class($field)));

        return $this->getView()->render($layoutPath, ['field' => $field]);
    }

}