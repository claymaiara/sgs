<?php

namespace system\core;

class Button implements IButton
{
	
	private $buttonTitle;
	
	private $buttonColor = 'default';
	
	private $buttonType = 'button';
	
	private $buttonIco;
	
	private $buttonUrl;
	
	
	
	
	/**
	 * 
	 * @param string $title
	 * @return \system\core\Grid
	 * 
	 * @example primary -
				success -
				info -
				warning -
				danger -
				default
	 */
	public function setButtonColor($buttonColor='default')
	{
		$this->buttonColor = $buttonColor;
		return $this;
	}
	
	private function getButtonColor()
	{
		return $this->buttonColor;
	}
	
	public function setButtonType($buttonType='button')
	{
		$this->buttonType = $buttonType;
		return $this;
	}
	
	private function getButtonType()
	{
		return $this->buttonType;
	}
	
	public function setButtonTitle($title='')
	{
		$this->buttonTitle = $title;
		return $this;
	}
	
	private function getButtonTitle()
	{
		return $this->buttonTitle;
	}
	
	public function setButtonIco($buttonIco='')
	{
		$this->buttonIco = $buttonIco;
		return $this;
	}

	private function getButtonIco()
	{
		return $this->buttonIco;		
	}
	
	public function setButtonUrl($buttonUrl='')
	{
		$this->buttonUrl = $buttonUrl;
		return $this;
	}
	
	private function getButtonUrl()
	{
		return $this->buttonUrl;
	}


	
	public function show($show=true)
	{
		if($show){
			
		
		echo("<button type='{$this->getButtonType()}' class=' btn btn-{$this->getButtonColor()}'>
					<span class='glyphicon glyphicon-{$this->getButtonIco()}'></span>
					{$this->getButtonTitle()} </button>");
			
		}
	
	}
}
?>