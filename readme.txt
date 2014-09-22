=== Plugin Name ===
Contributors: ben.meredith@gmail.com
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HDSGWRJYFQQNJ
Tags: date remover, old post, evergreen, plugin, meta, posts, single, CSS, wp_enqueue_style
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 2.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes the date stamp from older posts (you choose how old), while leaving the date stamp on newer posts. Ideal for blogs with evergreen content.

== Description ==

The WP Old Post Date Remover is designed to remove the distractingly old date from otherwise perfectly good evergreen content on your WordPress blog.

You spent time creating it, and now potential readers and customers are getting sidetracked by the fact that it is 13 months old.

Install the WP Old Post Date Remover plugin, activate it, and pick the length of days you'd like to show the dates on your posts. 
  
Please rate the plugin, and don't be afraid of the donate button! I am active in the support forums if you need assistance.

== Installation ==

1. Download and unzip wp-old-post-date-remover.zip, producing a `wp-old-post-date-remover` folder.

1. Upload the `wp-old-post-date-remover`folder to the `/wp-content/plugins/` directory of your web server.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Navigate to the WP Old Post Date Remover settings page at /wp-admin/options-general.php?page=wp_old_post_date_remover and select the length (in days) of time you'd like to show the date on new posts.
1. Done!

== Frequently Asked Questions ==

= What do I do if I install the plugin and it's not working? =

I am active in patching the plugin to work for as many themes as possible. Please check out [The Plugin Site](http://benandjacq.com/wordpress-plugin-wp-old-post-date-remover/ "the plugin site") for some troubleshooting, and contact me on the support forums (where I will actively answer).

= Can I customize the length of time the date shows? =

Yes! as of version 2.0 you can now customize the length of time (in days) in the WP Old Post Date Remover settings page.

= Can I do other cool things to older posts using this plugin? =

Yes, you can make any css style changes to older posts that you would like. Modify the OPDRstyle.css file with anything you'd like to show up on those older posts.

= Does this plugin affect Google ranking? =

No, because it simply hides the date from readers using CSS, it has no effect whatsoever on Google or other Search engines. Loading the extra TINY stylesheet on older posts should not affect page load time.

== Screenshots ==

1. Before WP Old Post Date Remover
1. After WP Old Post Date Remover
1. Settings page (version 2.0)
== Changelog ==

= 2.0.2 = 
* added `span.date` for compatibility with the Twenty Thirteen theme.
* updated plugin website with troubleshooting for the Twenty Twelve theme

= 2.0.1 =
* added `span.post-date` to the classes to exclude

= 2.0 =
* added customization options, user can now select specific number of days to show date on newer posts on the newly created Settings page.
* made the plugin only affect single pages and posts, as opposed to the front page of the blog or category pages. Previous versions deleted all dates regardless of age of the post on home/front pages and category pages.
* added a direct link to the new plugin settings page from the WP Old Post Date Remover entry on wp-admin/plugins.php


= 1.0.1 =

* added `post-date` to the classes to exclude in the custom CSS

= 1.0 =
* first release! Fire when ready.