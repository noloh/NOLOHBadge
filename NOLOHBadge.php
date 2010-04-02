<?php
class NOLOHBadge extends Panel
{
	private $VersionLabel;
	
	function NOLOHBadge($left=0, $top=0, $textOnly = false, $showVersion = true)
	{
		parent::Panel($left, $top, null, null);
		$this->ToolTip = 'powered by NOLOH';
		$imagePath = GetRelativePath(dirname($_SERVER['SCRIPT_FILENAME']), dirname(__FILE__) .'/Images');
		if($textOnly)
		{
			$poweredBy = new Link('http://www.noloh.com', 'powered by noloh');
			$poweredBy->Height = 18;
			$poweredBy->Width = 105;
			$poweredBy->CSSFontSize = '12px';
			$poweredBy->CSSFontFamily = 'helvetica, arial';
		}
		else
		{
			$link = new Image(GetRelativePath(dirname($_SERVER['SCRIPT_FILENAME']), dirname(__FILE__) .'/Images') .'/PoweredBy.png');
			$poweredBy = new Link('http://www.noloh.com', $link);
		}
		$poweredBy->Target = Link::Blank;
		$this->Controls->Add($poweredBy);
			
		if($showVersion)
		{
			$this->Controls->Add($this->VersionLabel = new Label(GetNOLOHVersion(), $poweredBy->Right, 0));
			$this->VersionLabel->ReflectAxis('y');
			$this->VersionLabel->Color = '#011f43';
			$this->VersionLabel->CSSFontSize = '12px';
			$this->VersionLabel->CSSFontFamily = 'helvetica, arial';
		}
		$this->Height = $poweredBy->Height;
		$this->Width = $this->VersionLabel->Right;
	}
	function GetVersionLabel()	{return $this->VersionLabel;}
}
?>