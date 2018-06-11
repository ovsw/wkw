
	<nav class="navbar navbar-fixed-top navbar-default" id="nav-wrapper">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<a class="logo" href="index.html"><img src="<?= $config->urls->templates ?>images/wkw-logo-t.png" class="full-width" alt="Crocus"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">

				<button type="button" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>

				<div id="search">
					<form>
						<div class="input-div"><input type="text" name="search" value="" placeholder="Search"></div>
						<a href="#" class="search-icon fa fa-search"></a>
					</form>
				</div>
				<a href="#" id="header-mail"><span class="fa fa-envelope"></span></a>

				<?php 
					$treeMenu = $modules->get("MarkupSimpleNavigation");

					$options = array(
						'parent_class' => 'parent',
						'current_class' => 'current_page_item',
						'has_children_class' => 'hasSub',
						'levels' => false,
						'levels_prefix' => 'level-',
						'max_levels' => null,
						'firstlast' => false,
						'collapsed' => false,
						'show_root' => false,
						'selector' => 'parent!=1156',
						'selector_field' => 'nav_selector',
						'outer_tpl' => '<ul class="nav navbar-nav">||</ul>',
						'inner_tpl' => '<ul class="sub-menu">||</ul>',
						'list_tpl' => '<li%s>||</li>',
						'list_field_class' => '',
						'item_tpl' => '<a href="{url}">{title}</a>',
						'item_current_tpl' => '<a href="{url}">{title}</a>',
						'xtemplates' => '',
						'xitem_tpl' => '<a href="{url}">{title}</a>',
						'xitem_current_tpl' => '<span>{title}</span>',
						'date_format' => 'Y/m/d',
						'code_formatting' => false,
						'debug' => true
					);
					
					$homePage = $pages->get('1');
					$menuPages = $homePage->main_menu_items;
					$menuPages = $menuPages->prepend($homePage);
					echo $treeMenu->render($options, null, $menuPages); 
					?>

			</div>		
		</div>
	</nav>