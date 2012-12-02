(function(){tinymce.create("tinymce.plugins.wpFullscreenPlugin",{init:function(a,c){var d=this,g=0,e={},f=tinymce.DOM;a.addCommand("wpFullScreenClose",function(){if(a.getParam("wp_fullscreen_is_enabled")){f.win.setTimeout(function(){tinyMCE.remove(a);f.remove("wp_mce_fullscreen_parent");tinyMCE.settings=tinyMCE.oldSettings},10)}});a.addCommand("wpFullScreenSave",function(){var h=tinyMCE.get("wp_mce_fullscreen"),i;h.focus();i=tinyMCE.get(h.getParam("wp_fullscreen_editor_id"));i.setContent(h.getContent({format:"raw"}),{format:"raw"})});a.addCommand("wpFullScreenInit",function(){var j,h,i;a=tinyMCE.activeEditor;j=a.getDoc();h=j.body;tinyMCE.oldSettings=tinyMCE.settings;tinymce.each(a.settings,function(k,l){e[l]=k});e.id="wp_mce_fullscreen";e.wp_fullscreen_is_enabled=true;e.wp_fullscreen_editor_id=a.id;e.theme_advanced_resizing=false;e.theme_advanced_statusbar_location="none";e.content_css=e.content_css?e.content_css+","+e.wp_fullscreen_content_css:e.wp_fullscreen_content_css;e.height=tinymce.isIE?h.scrollHeight:h.offsetHeight;tinymce.each(a.getParam("wp_fullscreen_settings"),function(m,l){e[l]=m});i=new tinymce.Editor("wp_mce_fullscreen",e);i.onInit.add(function(k){var m=tinymce.DOM,l=m.select("a.mceButton",m.get("wp-fullscreen-buttons"));if(!a.isHidden()){k.setContent(a.getContent())}else{k.setContent(switchEditors.wpautop(k.getElement().value))}setTimeout(function(){k.onNodeChange.add(function(o,n,p){tinymce.each(l,function(s){var r,q;if(r=m.get("wp_mce_fullscreen_"+s.id.substr(6))){q=r.className;if(q){s.className=q}}})})},1000);k.dom.addClass(k.getBody(),"wp-fullscreen-editor");k.focus()});i.render();if("undefined"!=fullscreen){i.dom.bind(i.dom.doc,"mousemove",function(k){fullscreen.bounder("showToolbar","hideToolbar",2000,k)})}});if("undefined"!=fullscreen){a.addButton("wp_fullscreen",{title:"fullscreen.desc",onclick:function(){fullscreen.on()}})}if(a.getParam("fullscreen_is_enabled")||!a.getParam("wp_fullscreen_is_enabled")){return}function b(){var j=a.getDoc(),i=tinymce.DOM,k,h;if(tinymce.isWebKit){h=j.body.offsetHeight}else{h=j.body.scrollHeight}k=(h>300)?h:300;if(g!=k){i.setStyle(i.get(a.id+"_ifr"),"height",k+"px");g=k;a.getWin().scrollTo(0,0)}}a.onInit.add(function(i,h){i.onChange.add(b);i.onSetContent.add(b);i.onPaste.add(b);i.onKeyUp.add(b);i.onPostRender.add(b);i.getBody().style.overflowY="hidden"});if(a.getParam("autoresize_on_init",true)){a.onLoadContent.add(function(i,h){setTimeout(function(){b()},1200)})}a.addCommand("wpAutoResize",b)},getInfo:function(){return{longname:"WP Fullscreen",author:"WordPress",authorurl:"http://wordpress.org",infourl:"",version:"1.0"}}});tinymce.PluginManager.add("wpfullscreen",tinymce.plugins.wpFullscreenPlugin)})();