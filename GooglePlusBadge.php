<?php
/**
 *GooglePlusBadge.php
 *
 * @author Rohit Suthar <rohit.suthar@gmail.com>
 * @copyright 2014 Rohit Suthar (Yii Expert)
 * @package GooglePlusBadge
 * @version 1.0
 * @Like Us on -  https://facebook.com/yiiexperts
 * @Follow Us on -  https://twitter.com/yiiexperts
 * @Mail -  yiiexpert@gmail.com
 * @For More Extension Visit -  www.yiiexpert.blogspot.io
 */
 

class GooglePlusBadge extends CInputWidget
{
	
	/**
	 * @var array available for google plus badge
	 */	
			
	public $gbadge = array(
			'url'=>'https://plus.google.com/114389194992381809226/',   //http://plus.google.com/gplus_page_id
			'width'=>'300', //Badge box width
			'theme'=>'light', //layout - light, dark
			'layout'=>'portrait', //layout - portrait, landscape
			'show_tagline'=>'true', //Display page tag line - true, false 
			'show_coverphoto'=>'true', //Show background cover photo - true, false
		  );
		  
		  
	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */

	public function init()
	{
		self::renderGplusBadge();
	}


	/**
	 * Render like box extension
	 *
	 * @return nothing
	 */

	 private function renderGplusBadge(){
		 
		  $rendered = array('url'=>$this->gbadge['url'],
							'width'=>$this->gbadge['width'],
							'theme'=>$this->gbadge['theme'],
							'layout'=>$this->gbadge['layout'],
							'show_tagline'=>$this->gbadge['show_tagline'],
							'show_coverphoto'=>$this->gbadge['show_coverphoto']
						);
		  
		echo $this->render('badge', array('rendered'=>$rendered));
	}
}

?>
