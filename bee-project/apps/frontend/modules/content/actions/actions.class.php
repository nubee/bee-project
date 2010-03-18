<?php

class contentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
  }

  public function executeDoc(sfWebRequest $request)
  {
    $file = sfConfig::get('sf_data_dir') . '/docs/' . $request->getParameter('page') . '.txt';

    $this->html = sfMarkdown::doConvertFile($file);

    $this->getResponse()->setTitle('Bee Project');
  }
}
