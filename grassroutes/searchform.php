<form action="<?php bloginfo('url'); ?>/" method="get" accept-charset="utf-8">
  <div>
    <input type="text" name="s" id="search" value="Search the Site" onfocus="if(this.value=='Search the Site'){this.value=''};" onblur="if(this.value==''){this.value='Search the Site'};" />
    <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/images/search_button.png" />
  </div>
</form>