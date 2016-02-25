<div id="sidebar-menu" class="sidebar-module sidebar-module-inset">
	<ul>
	<?php if(!$post -> post_parent){
			$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo = 0&link_before=<span>&link_after</span>");
		}
		else{
			if($post -> ancestors){
				$ancestors = end($post->ancestors);
				$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo = 0&link_before=<span>&link_after</span>");
			}
		}
		if ($children) {
		?>
		<ul><?php echo $children; ?></ul>
	<?php } ?>
	</ul>
</div>