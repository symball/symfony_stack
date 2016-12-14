<?php
namespace AppBundle\Service;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Filesystem\Filesystem;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Tutorial {
  private $highlighter;
  private $templating;
  private $assetPath;

  private $reference;
  private $internalReference;

  public function __construct($highlighter, $templating, $assetPath) {
    $this->highlighter = $highlighter;
    $this->templating = $templating;
    $this->assetPath = $assetPath;
  }

  public function set($reference) {

    $this->internalReference = str_replace('-', '_', $reference);
    $this->$reference = explode('/', $reference);
    $this->$reference = end($this->$reference);

    // Check whether the tutorial exists
    if (!$this->templating->exists($this->internalReference.'.html.twig')) {
      throw new NotFoundHttpException('The template could not be found: '.$reference);
    }
    return $this;
  }

  public function getAssets() {
    $finder = new Finder();
    $fileSystem = new Filesystem();
    $path = __DIR__.'/../Resources/public/code/'.$this->reference;
    // echo $path;die();
    // Check if the tutorial has any assets
    if(!$fileSystem->exists($path)) {
      return false;
    }

    $finder->files()->in($path);

    $assets = array();
    foreach ($finder as $file) {
      switch ($file->getExtension()) {

        case 'html':
          $reference = $file->getBasename('.html');
          $type = 'html';
          break;

        case 'twig':
          $reference = $file->getBasename('.html.twig');
          $type = 'html';
          break;

        case 'php':
          $reference = $file->getBasename('.php');
          $type = 'php';
          break;

        default:
          # code...
          break;
      }
      $assets[$reference] = $this->highlighter->highlight($file->getContents(), $type);
    }
    return $assets;
  }
  public function getInternalReference() {
    return $this->internalReference;
  }
  public function getReference() {
    return $this->reference;
  }

}
