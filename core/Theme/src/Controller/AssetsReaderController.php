<?php

namespace Theme\Controller;

use Application\Controller\BaseController;

class AssetsReaderController extends BaseController
{

    public function readAction()
    {
        $params = $this->params()->fromRoute();

        $assetPath = 'template/'.$params['type'].'/'.$params['name'].'/assets/'.$params['segments'].'.'.$params['format'];

        if ( ! file_exists($assetPath))
        {
            $this->getResponse()->setStatusCode(404);
            return;
        }

        $headers = $this->getResponse()->getHeaders();

        switch ($params['format'])
        {
            case 'css':
                $headers->addHeaderLine('Content-Type','text/css');
                break;
            case 'js':
                $headers->addHeaderLine('Content-Type','text/javascript');
                break;
            case 'png':
            case 'jpeg':
            case 'jpg':
            case 'gif':
                $headers->addHeaderLine('Content-Type','image/'.$params['format']);
                break;
        }

        $this->getResponse()->setHeaders($headers);

        return $this->raw(file_get_contents($assetPath));
    }

}