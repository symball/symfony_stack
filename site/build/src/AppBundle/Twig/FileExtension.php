<?php

namespace AppBundle\Twig;

use Symfony\Component\Finder\Finder;
// use Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper;

class FileExtension extends \Twig_Extension
{
  private $assetPath;
  private $highlighter;

  public function __construct($highlighter, $assetPath) {
    $this->assetPath = $assetPath;
    $this->highlighter = $highlighter;

  }
    public function getFunctions()
    {
        return array(
          'file' => new \Twig_SimpleFunction('file', array($this, 'presentFile')),
          'files' => new \Twig_SimpleFunction('files', array($this, 'presentFiles'))
        );
    }

    public function getName()
    {
        return 'file_extension';
    }
    public function presentFiles($pageKey, $fileName) {

      // Display multiple files at once
      if(is_array($fileName)) {

        $count = 0;
        $time = time();

        // Create the tab headings
        $htmlHeading = ['<ul class="tabs" data-tabs id="autotab_'.$time.'">'];
        $htmlBody = ['<div class="tabs-content" data-tabs-content="autotab_'.$time.'">'];

        foreach ($fileName as $display => $individualFile) {
          $htmlId = str_replace('.','',$individualFile).$count;
          $htmlId = filter_var($htmlId, FILTER_SANITIZE_STRING);

          // Only use the key if a string, otherwise use the filename
          if(is_integer($display)) {
            $display = $individualFile;
          }

          $htmlHeading[] = '
          <li class="tabs-title">
            <a href="#'.$htmlId.'">'.$display.'</a>
          </li>';

          $htmlBody[] = '
          <div class="tabs-panel" id="'.$htmlId.'">
          '.$this->getFileCode($pageKey, $individualFile).'
          </div>';

          $first = '';
          $count++;
        }

        $html = implode('',$htmlHeading).'</ul>'.implode('',$htmlBody).'</div>';
        return $html;
      }
    }
    public function presentFile($pageKey, $fileName, $display='') {
      if(!$display) { $display = $fileName; }
      return '
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">'.$display.'</a>
          <div class="accordion-content" data-tab-content>
          '.$this->getFileCode($pageKey, $fileName).'
          </div>
        </li>
      </ul>';
    }

    private function getFileCode($pageKey, $fileName) {
      $realPath = __DIR__.'/../Resources/public/code/'.$pageKey;
      // $projectName = explode('/',$fileName);
      // $projectName = end($projectName);
      $finder = new Finder();
      $finder->in($realPath)->name($fileName);

      foreach ($finder as $file) {
        switch ($file->getExtension()) {

          case 'html':
            $type = 'html';
            break;

          case 'twig':
            $type = 'twig';
            break;

          case 'php':
            $type = 'php';
            break;

          case 'xml':
            $type = 'xml';
            break;

          case 'yml':
            $type = 'script';
            break;

          default:
            return 'Type not defined in extension: '.$file->getExtension();
            break;
        }
      }
      return $this->highlighter->highlight($file->getContents(),$type);
    }
}
