<?php
/**
 * Copyright © Markus Korporal,All rights reserved.
 * See LICENSE for license details.
 */
 
namespace Zuckerwelt\Dpdcloudapi\Model;

class LabelResponseType
{

    /**
     * @var string $LabelPDF
     */
    public $LabelPDF = null;

    /**
     * @var ArrayOfLabelDataType $LabelDataList
     */
    public $LabelDataList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLabelPDF()
    {
      return $this->LabelPDF;
    }

    /**
     * @param string $LabelPDF
     * @return \Zuckerwelt\Dpdcloudapi\Model\LabelResponseType
     */
    public function setLabelPDF($LabelPDF)
    {
      $this->LabelPDF = $LabelPDF;
      return $this;
    }

    /**
     * @return ArrayOfLabelDataType
     */
    public function getLabelDataList()
    {
      return $this->LabelDataList;
    }

    /**
     * @return LabelData [];
     */
    public function getLabelData()
	{
	return $this->LabelDataList->getLabelData();
	}

    /**
     * @param ArrayOfLabelDataType $LabelDataList
     * @return \Zuckerwelt\Dpdcloudapi\Model\LabelResponseType
     */
    public function setLabelDataList($LabelDataList)
    {
      $this->LabelDataList = $LabelDataList;
      return $this;
    }

}
