<?

/** 
 * @file
 * template.php for Gallery Base theme.
 * 
 * Implements preprocess and hook alter functions in this file.
 */
 


/**
 * Preprocess functions for html.tpl.php.
 */
function base_creative_preprocess_html(&$vars){
	
	if(arg(0)=='node' && is_numeric(arg(1))) {
     $node = node_load(arg(1)); 

     if(isset($node->field_bg_image) && count($node->field_bg_image) > 0) {
     		$vars['classes_array'][] = "has-bg";
     }else{
     		$vars['classes_array'][] = "no-bg";
     }

  }else{
  		$vars['classes_array'][] = "no-bg";
  }

  //dpm($vars);

	
}


/**
 * Preprocess functions for page.tpl.php.
 */
function base_creative_preprocess_page(&$vars){
	//dpm($vars);
}
 

/**
 * Preprocess functions for node.tpl.php.
 */
 
function base_creative_preprocess_node(&$vars){
	$node = $vars['node'];
	$options = array('absolute' => true);
	$nid = $vars['vid']; // Node ID
	$url = url('node/' . $nid, $options);
	//kpr($vars);
	
	// Add general theme suggestions for all content types and view modes
	$vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];

	$vars['body'] =  render($vars['content']['body']);
	$vars['bg_body'] =  render($vars['content']['field_bg_body']);

	$vars['title'] = html_entity_decode($vars['title']);
	

	if(isset($vars['content']['field_bg_image'])){
		$vars['bg_image'] =  render($vars['content']['field_bg_image']);

		$bg_settings = array(
			'bg_image_url' => '/' . variable_get('file_public_path', conf_path() . '/files') . '/' . $vars['field_bg_image'][0]['filename'],
		);

		drupal_add_js(array('bg_settings' => $bg_settings), 'setting');
		//drupal_add_js(path_to_theme() . '/js/jquery.tubular.js');

	}
	

	// ARTICLE ====================================================
	if($vars['type'] == 'project'){
		$vars['services'] = render($vars['content']['field_services']);
		$vars['website'] = render($vars['content']['field_website_link']);
		$vars['service_links'] =  render($vars['content']['service_links']);


		if($vars['view_mode'] == 'teaser'){
			$vars['title'] = l($vars['title'], $url);
			$vars['cover'] = render($vars['content']['field_cover_image']);
		}
	}
}

/**
 * Preprocess functions for page.tpl.php.
 */
function base_creative_preprocess_entity(&$vars){
	
}




