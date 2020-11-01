<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ContentLine
{

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var boolean $bold
     */
    protected $bold = null;

    /**
     * @var boolean $paragraph
     */
    protected $paragraph = null;

    /**
     * @param boolean $bold
     * @param boolean $paragraph
     */
    public function __construct($bold = null, $paragraph = null)
    {
      $this->bold = $bold;
      $this->paragraph = $paragraph;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \Zuckerwelt\Dpdcloudapi\Model\ContentLine
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBold()
    {
      return $this->bold;
    }

    /**
     * @param boolean $bold
     * @return \Zuckerwelt\Dpdcloudapi\Model\ContentLine
     */
    public function setBold($bold)
    {
      $this->bold = $bold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParagraph()
    {
      return $this->paragraph;
    }

    /**
     * @param boolean $paragraph
     * @return \Zuckerwelt\Dpdcloudapi\Model\ContentLine
     */
    public function setParagraph($paragraph)
    {
      $this->paragraph = $paragraph;
      return $this;
    }

}
