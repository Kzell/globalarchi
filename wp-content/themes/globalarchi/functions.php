<?php
	register_nav_menus( array(
		'menu-header' => 'First - Navigation',
	) );

	function languages_list_footer(){
        $languages = icl_get_languages('skip_missing=0&orderby=code');
        if(!empty($languages)){
            echo '<div id="langages">';
                echo '<ul>';
                foreach($languages as $l){
                    if($l['active']){
                        $active = $l['native_name'];
                    }else{
                        echo '<li><a href="'.$l['url'].'">';
                            echo $l['native_name'];
                        echo '</a></li>';
                    }
                }
                echo '</ul>';
                echo '<a id="currentLangage" href="">'.$active.'<span></span></a>';
            echo '</div>';
        }
    }
?>