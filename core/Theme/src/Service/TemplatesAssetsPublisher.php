<?php

namespace Theme\Service;

use Theme\Module as ThemeModule;
use Zend\ServiceManager\ServiceManager;

class TemplatesAssetsPublisher
{
    protected $sm;

    protected $templatesConfig;

    protected $templatesAssetsToPublish = [];

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;

        $this->templatesConfig = $this->sm->get('configuration')['template'];

        $frontendSource = $this->templatesConfig['templates_path'].'/frontend/'.$this->templatesConfig['defaults']['frontend'].'/assets';
        $frontendDest   = 'public/assets/frontend/'.$this->templatesConfig['defaults']['frontend'];

        $backendSource = $this->templatesConfig['templates_path'].'/backend/'.$this->templatesConfig['defaults']['backend'].'/assets';
        $backendDest   = 'public/assets/backend/'.$this->templatesConfig['defaults']['backend'];

        $this->templatesAssetsToPublish[$frontendSource] = $frontendDest;
        $this->templatesAssetsToPublish[$backendSource] = $backendDest;
    }


    public function publish()
    {
        foreach ($this->templatesAssetsToPublish as $source => $dest)
        {
            xcopy($source, $dest);
        }
    }


}