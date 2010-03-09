<?php

class contentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $file = sfConfig::get('sf_data_dir') . '/content/index.txt';

    $this->html = sfMarkdown::doConvertFile($file);

    $this->getResponse()->setTitle('Homepage');
  }
}
