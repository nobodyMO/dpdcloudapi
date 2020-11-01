<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class ContentItem
{

    /**
     * @var ContentLine $label
     */
    protected $label = null;

    /**
     * @var ContentLine[] $content
     */
    protected $content = null;

    /**
     * @var string $linkTarget
     */
    protected $linkTarget = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentLine
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param ContentLine $label
     * @return \Zuckerwelt\Dpdcloudapi\Model\ContentItem
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return ContentLine[]
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param ContentLine[] $content
     * @return \Zuckerwelt\Dpdcloudapi\Model\ContentItem
     */
    public function setContent(array $content = null)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkTarget()
    {
      return $this->linkTarget;
    }

    /**
     * @param string $linkTarget
     * @return \Zuckerwelt\Dpdcloudapi\Model\ContentItem
     */
    public function setLinkTarget($linkTarget)
    {
      $this->linkTarget = $linkTarget;
      return $this;
    }

}
