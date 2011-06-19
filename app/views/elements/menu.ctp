<?php
/*
* kdos
* Creates menu based on the array provided in default.ctp
*
* Compare the rendered link with the current URL and assign css classes accordingly
* Should become a "Component" in future version 
*/


foreach ($menu as $k => $v){
	if(is_array($menu[$k])){
		foreach($menu[$k] as $key => $val){
			$url = $this->Html->link($k, array('controller' => $key, 'action'=> $val));
			//Check: Does the created link contain the router url OR does the current router url contain the controller name?
			
			if(((strstr($url, Router::url("", false)) !== FALSE) 
			|| (strstr(Router::url("", false), $key) !== FALSE)) 
			&& (Router::url("", false) != '/'.Configure::read('APP_NAME').'/')
			){
				$liSelected = 'li-selected';
				$spanSelected = 'span-selected';
			}
			else{
				$liSelected = '';
				$spanSelected = '';
			}
			echo '<li class="'.$liSelected.'" ><span class="'.$spanSelected.'">'.$url.'</span></li>';
		}
	}
	else{
		//Check: Does the created link contain the router url? Hint: those are static pages with no actions
		if((strstr($this->Html->link($k, '/'.$v), Router::url("", false)) !== FALSE) )
		{
			$liSelected = 'li-selected';
			$spanSelected = 'span-selected';
		}
		else{
			$liSelected = '';
			$spanSelected = '';
		}
		echo '<li class="'.$liSelected.'"><span class="'.$spanSelected.'">'.$this->Html->link($k, '/'.$v).'</span></li>';//static entities - as defined in /app/config/routes
	}
}

?>