		<table border=0 style="background-color: #fff; padding: 5px;" cellspacing=0>
		  <tr><td>
		  <img src="http://groups.google.com/groups/img/3nb/groups_bar.gif"
		         height=26 width=132 alt="Google Groups">
		  </td></tr>
		  <tr><td style="padding-left: 5px">
		  <b>Discussion Mailing List</b>
		  </td></tr>
		  <form action="http://groups.google.com/group/barcampphilly/boxsubscribe">
		  <tr><td style="padding-left: 5px;">
		  Email: <input type=text name=email>
		  <input type=submit name="sub" value="Subscribe">
		  </td></tr>
		</form>
		</table>
		
		<br />
		
		<table border=0 style="background-color: #fff; padding: 5px;" cellspacing=0>
		  <tr><td style="padding-left: 5px">
		  <b>Announcement Mailing List</b>
		  </td></tr>
		  <form action="http://groups.google.com/group/barcampphilly-announce/boxsubscribe">
		  <tr><td style="padding-left: 5px;">
		  Email: <input type=text name=email>
		  <input type=submit name="sub" value="Subscribe">
		  </td></tr>
		</form>

		</table>
		
		<h3>Archives</h3>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>

		<h3>Categories</h3>
		<ul>
		<?php wp_list_categories('show_count=1&title_li='); ?>
		</ul>
		
		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
		
		<h3>Links</h3>
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0'); ?>

		</ul>
		
		<?php } ?>