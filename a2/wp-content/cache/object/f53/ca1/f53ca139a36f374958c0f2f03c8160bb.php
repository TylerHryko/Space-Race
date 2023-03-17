�X�Y<?php exit; ?>a:1:{s:7:"content";O:7:"WP_Post":24:{s:2:"ID";i:545;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2017-10-31 21:37:06";s:13:"post_date_gmt";s:19:"2017-11-01 04:37:06";s:12:"post_content";s:18240:"<strong>Assignment 2 documentation:</strong>

<strong>PLEASE NOTE: DARK COLOR SCHEME IN THE CUSTOMIZER *MUST* BE ENABLED AFTERWARDS IF THE SITE IS BEING MIGRATED TO A NEW PLATFORM.</strong>

<strong>New page added! </strong>
<ul>
 	<li>to cut down on redundancy while still maintaining a level of content, I have added the <em>People</em> page, intended to be a compendium of persons crucial to the space race. It uses the <em>AWSM</em> team plugin for the barebones date management/template, but the CSS is entirely from scratch. It has more or less doubled the length of the stylesheet, so the new CSS has been separated from assignment 1's in the documentation.</li>
</ul>
<strong>PHP/JS modifications:</strong>
<ul>
 	<li>Gutted footer, as it doesn't need anything other than the social links menu. Widgets, etc. just add more PHP calls than are necessary.</li>
 	<li>Pared down front page to remove panel system (again, to allow for fewer PHP calls/faster loading)</li>
 	<li>Added customized 404 page, requiring a new 404.php</li>
</ul>
<strong>Misc. Modifications:</strong>
<ul>
 	<li>Front page header video has been migrated to a 1080P youtube video. While this allows for a crisper image, the drawback is that the youtube video plays in an embedded iframe, leaving rather large black bars on either side. These cannot be removed due to the way an iframe works.</li>
</ul>
<strong>UPDATED CSS modifications:</strong>

@font-face {
font-family: 'kanit-bold';
src: url(fonts/Kanit-Bold.ttf) format('ttf');
font-weight: bold;
font-style: normal;
}
/*changes title font to custom one*/

.site-title {
font-family: 'Kanit', sans-serif;
}
.entry-title {
font-family: 'Kanit', sans-serif !important;
}

/*globally changes captions to the blue color used throughout the rest of the theme.*/

.wp-caption-text {
color: #24e7ff;
}

/*Changes bold and nav text to be bright white, for added EXTRA BOLD emphasis. UPDATE: CHANGES FONT TO KANIT.*/

b,
.nav-subtitle {
color: #ffffff !important;
}
.entry-title {
color: #ffffff !important;
font-weight: 600;
font-family: 'Kanit', sans-serif;
}

/*
Replaces the boring little colored circle or squares with a cute little 40px moon icon. Low cost modification, icon is less than 1kb.
UPDATE: PATH MODIFIED TO FUNCTION WITH CHILD THEME.*/

.dark-style:not(.show-icon) .wpex-timeline &gt; li .wpex-timeline-icon .fa {
background-image: url('custom-assets/moon-40.png') !important;
width: 40px;
/*WIDTH of the icon*/

height: 40px;
/*HEIGHT of the icon*/

display: inline-block;
background-position: center;
background-size: cover;
box-shadow: none;
border: none;
background-color: transparent;
z-index: 2;
}

/*changes timeline date font to libre franklin, modifies weight and such to match main entry font.
also kicks it down a bit for better spacing.*/

.wpex-timeline-time span:not(.info-h) {
font-family: 'Libre Franklin', sans-serif;
text-transform: uppercase;
font-size: 90% !important;
font-weight: bold;
letter-spacing: 0.5px;
padding-top: 5px !important;
}

/*adds hover color to main nav links.*/

#top-menu a:hover {
color: #24e7ff !important;
}

/*changes hover color of "learn more" text for legibility*/

.wpex .timeline-details .wptl-readmore &gt; a:hover {
color: black !important;
}

/*adjusts spacing on timeline page to get a better gap between entries.
(compensates for thicker date font)*/

.wp-timeline {
padding-bottom: 80px !important;
}

/*kicks the social links menu over to the center of the page*/

.site-footer .social-navigation {
text-align: center;
width: 100%;
}

/*The next two rules combine to make the people page single-column
without affecting the rest of the site.*/

#post-522 .entry-header {
display: none !important;
}
/*see above*/

#post-522 .entry-content {
width: 100% !important;
}

/*Changes color of main descriptor text on people page*/

.awsm-personal-info {
color: #24e7ff;
}

/*changes person names to uppercase, changes font color to white for contrast/theme homogeny*/

.awsm-personal-info h3 {
color: #ffffff !important;
text-transform: uppercase;
font-weight: bold;
letter-spacing: 1px;
}

/*Changes body text for biographies to white*/

.awsm-contact-info p {
color: #ffffff;
font-family: 'Source Sans Pro', sans-serif;
}

/*Adds dashed border between title information and body text*/

.awsm-contact-info p:first-of-type {
border-top: 2px dashed;
border-color: dimgray;
padding-top: 15px;
}

/*adds a nice rounded shape/background to the biography "Card".*/

.awsm-grid-wrapper figcaption {
padding: 27px 30px;
background-color: #555;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.15);
border: 1px solid rgba(0, 0, 0, 0.15);
border-radius: 5px;
}

/*adds blue border to biography thumbs in keeping with the color scheme so far.*/

.awsm-grid-card figure img {
border: 2px solid #24e7ff;
border-radius: 5px;
}

/*Adds a dashed blue line between each entry on the people page other than the last*/

.entry-content .awsm-grid-card:not(:last-child) {
margin-bottom: 40px !important;
border-bottom: 1px dashed #24e7ff !important;
padding-bottom: 40px;
}

/*Eliminates a little bit of the HUGE space between the bottom entry and the footer
as well as the top and nav.*/

.page-id-522 #content {
padding-bottom: 0px !important;
margin-bottom: 0px;
padding-top: 65px !important;
}

/*Adds  styling to 404 page.*/

.error404 video{
border: 2px solid #24e7ff;
border-radius: 4px;
}

&nbsp;

/*Makes the "About" page single-column.*/
.page-id-26 .entry-content{
width: 100% !important;

}

/*adds a border to the featured image on the about page.*/
.page-id-26 .single-featured-image-header{
border: 2px solid #24e7ff !important;
border-radius: 4px;
margin-top: 50px;

}

/*changes the borders on the contact forms to fit the rest of the theme.*/

.colors-dark input[type="text"], .colors-dark input[type="email"], .colors-dark input[type="url"], .colors-dark input[type="password"], .colors-dark input[type="search"], .colors-dark input[type="number"], .colors-dark input[type="tel"], .colors-dark input[type="range"], .colors-dark input[type="date"], .colors-dark input[type="month"], .colors-dark input[type="week"], .colors-dark input[type="time"], .colors-dark input[type="datetime"], .colors-dark input[type="datetime-local"], .colors-dark input[type="color"], .colors-dark textarea, .colors-dark select, .colors-dark fieldset, .colors-dark .widget .tagcloud a:hover, .colors-dark .widget .tagcloud a:focus, .colors-dark .widget.widget_tag_cloud a:hover, .colors-dark .widget.widget_tag_cloud a:focus, .colors-dark .wp_widget_tag_cloud a:hover, .colors-dark .wp_widget_tag_cloud a:focus{
border-color: #24e7ff !important;
}

<hr />

<strong>Assignment 1 documentation:</strong>

<strong>Location of requested feature demonstrations:</strong>
<ul>
 	<li>A video as the featured image can be found on either the <a href="http://localhost/the-first-satellite-sputnik-1/" target="_blank" rel="noopener">Sputnik</a>, <a href="http://localhost/freedom-7-alan-shepard-blasts-off/" target="_blank" rel="noopener">Freedom 7</a> or <a href="http://localhost/john-f-kennedy-we-choose-to-go-to-the-moon/" target="_blank" rel="noopener">JFK Speech</a> pages.</li>
 	<li>Inline videos can be found on the <a href="http://localhost/john-f-kennedy-we-choose-to-go-to-the-moon/" target="_blank" rel="noopener">JFK</a> or <a href="http://localhost/apollo-11-the-world-watches-as-neil-armstrong-takes-his-small-step/" target="_blank" rel="noopener">Apollo 11 </a></li>
 	<li>pages.</li>
 	<li>Inline audio files can be found on the <a href="http://localhost/apollo-11-the-world-watches-as-neil-armstrong-takes-his-small-step/" target="_blank" rel="noopener">Apollo 11</a> and <a href="http://localhost/gagarin-the-first-human-in-space/" target="_blank" rel="noopener">Yuri Gagarin</a> pages.</li>
 	<li>Links can be found on the <a href="http://localhost/von-brauns-satellite-explorer-1/" target="_blank" rel="noopener">Explorer 1</a> and <a href="http://localhost/gemini-8-meet-agena/" target="_blank" rel="noopener">Gemini 8</a> pages.</li>
 	<li>An image gallery can be found on the <a href="http://localhost/apollo-11-the-world-watches-as-neil-armstrong-takes-his-small-step/" target="_blank" rel="noopener">Apollo 11</a> page.</li>
 	<li>All blog pages have category, archive and search widgets.</li>
 	<li>Categories currently used (with descriptions) are: USA, USSR, Main Events, People and Misc.</li>
</ul>
<strong>List of Pages:</strong>
<ul>
 	<li>Home: Acts are the gateway to the other portions of the site. Currently consists of an introductory blurb, menus, and a large animated video background.</li>
 	<li>The Race to Space: Contains a timeline, which lays out the events covered by the blog in a chronological, digestible and stylish fashion.</li>
 	<li>Articles: The "Blog" portion of the website. Contains all of the websites' posts in loose-leaf format.</li>
 	<li>About: Contains a lorem ipsum biography, image, and functioning contact form.</li>
</ul>
<strong>General Settings:</strong>
<ul>
 	<li>Default post category is set to "Main Events".</li>
 	<li>Default post type is set to "default".</li>
 	<li>Blog posts will display on the "Articles" page.</li>
 	<li>The front page is static, and acts only as a gateway.</li>
 	<li>Featured videos are set to not autoplay, because <em>why would you even consider doing that.</em></li>
 	<li>Comments are disabled.</li>
 	<li>Permalinks are set to human-readable - For example, "http://Thryko.imgd.ca/a1/documentation" for the "Documentation" page.</li>
 	<li>Intuitive post order is currently set to only modify posts, and will not currently modify timelines.</li>
 	<li>Timelines are set to be in descending order based on the set post ID.</li>
 	<li>Timelines are set to use the dark, flat theme, and are currently being heavily modified by custom CSS. it is not advisable to change the theme at this time, as this will likely break the custom CSS, as well as not match the website aesthetic.</li>
</ul>
<strong>Users:</strong>
<ul>
 	<li>Currently, only an administrator and editor are enabled.</li>
 	<li>New registrations are currently disabled.</li>
 	<li>The default registration role is set to Subscriber.</li>
</ul>
<strong>Plugins Used:</strong>
<ul>
 	<li>Akismet Anti-Spam is currently <strong>disabled.</strong> Comments have been disabled, so it would only serve to bloat the website backend.</li>
 	<li>Contact Form 7 - Allows for neat, customization contact form.</li>
 	<li>Disable Comments - Disables Comments.</li>
 	<li>Featured Video Plus - Allows for intuitive addition of video media to posts other than video type. (allows for full preview on blog page)</li>
 	<li>Intuitive Custom Post Order - Allows for re-arranging of posts as desired.</li>
 	<li>W3 Total Cache - Allows for chacheing of website to increase performance on a client-by-client basis.</li>
 	<li>WP timeline - Creates custom post type and page type consisting of chronological or sequential timelines. In this implementation, the timeline links directly to blog posts. Documentation <a href="http://localhost/wp-content/plugins/WP%20Timelines%20-%20Responsive%20Vertical%20and%20horizontal%20timeline%20plugin/documentation/index.html">here.</a></li>
 	<li>ARI Fancy Lightbox - Adds lightbox functionality to wordpress default galleries without excess bloat, while being responsive.</li>
 	<li>MonsterInsights Google Analytics - Allows for direct viewing of google analytics data from the wordpress dashboard.</li>
</ul>
<strong>Custom CSS rules:</strong>

/* hides overly large featured image on home page - DEPRICATED */
.home page .header-image img {
visibility: hidden;
}

/* Allows for tweaking of header media for text legibility purposes - NOT IN USE CURRENTLY, LEFT IN JUST IN CASE*/
div.custom-header-media img {
filter: brightness(100%);
}

/* Makes site description font bolder for legibility. */
p.site-description {
font-weight: bolder;
}

/* Adjusts header spacing on timeline page to align with vertical line of timeline. Rough solution, but works (more or less) on most widths. Mobile is a little sketchy, may implement specific rule for that later.*/
.post-113 .entry-header {
margin-left: 6% !important;
}

/*Hides featured image on single timeline posts - currently setting it up so timeline links to blog format posts instead, as single timeline format is a little ugly without significant CSS rework.*/
body.wp-timeline-template-default .single-featured-image-header {
display: none !important;
}

/*
Removes superfluous space above timeline page headers. I have no idea why there was an extra 80px there, but it looked awful.
*/
body.wp-timeline-template-default .site-content-contain .site-content {
padding: unset !important;
}

/*
forces timeline to be full-width of the content section.
*/
.post-113 .entry-content {
width: 100% !important;
}

/* shrinks padding around timeline label, which was a little superfluous.*/
.wpex-timeline &gt;
li .wpex-timeline-label {
padding-top: 10px;
}

/*shrinks featured image on single post pages. It's long, because responsive breakpoints.*/
@media only screen and (max-width: 3280px) {
.single-featured-image-header {
width: 36%;
margin-left: auto;
margin-right: auto;
}
}
@media only screen and (max-width: 2560px) {
.single-featured-image-header {
width: 36%;
margin-left: auto;
margin-right: auto;
}
}
@media only screen and (max-width: 1980px) {
.single-featured-image-header {
width: 48%;
margin-left: auto;
margin-right: auto;
}
}
@media only screen and (max-width: 1600px) {
.single-featured-image-header {
width: 57%;
margin-left: auto;
margin-right: auto;
}
}
@media only screen and (max-width: 1440px) {
.single-featured-image-header {
width: 63%;
margin-left: auto;
margin-right: auto;
}
}
@media only screen and (max-width: 1280px) {
.single-featured-image-header {
width: 71%;
margin-left: auto;
margin-right: auto;
}
}
@media only screen and (max-width: 1024px) {
.single-featured-image-header {
width: 90%;
margin-left: auto;
margin-right: auto;
}
}

/*
Replaces the boring little colored circle or squares with a cute little 40px moon icon. Low cost modification, icon is less than 1kb.
*/
.dark-style:not(.show-icon) .wpex-timeline &gt;
li .wpex-timeline-icon .fa {
background-image: url('../custom-assets/moon-40.png') !important;
width: 40px; //WIDTH of the icon
height: 20px; //HEIGHT of the icon
display: inline-block;
background-position: center;
background-size: cover;
box-shadow: none;
border: none;
background-color: transparent;
z-index: 2;
}

/*
Changes dark-style line to be actually visible with TwentySeventeen's dark theme. Matches header text and bottom buttons.
*/
.dark-style .wpex-timeline &gt;
li:after,
.dark-style .wpex-timeline &gt;
li:first-child:before {
background: #ddd !important;
}

/*
Changes timeline dark-style background to a lighter grey for a little more contrast.
*/
.wpex-timeline-list.dark-style .wpex-timeline &gt;
li .wpex-timeline-label {
background: #555;
}

/*
Changes dark-style timeline text to a lighter shade for more contrast. Legibility, yo!
*/
.wpex-timeline-list.dark-style .wpex-timeline &gt;
li .wpex-timeline-label {
color: #dedede !important;
}
.wpex-timeline-list.dark-style .wpex-timeline &gt;
li .wpex-timeline-label .link-more {
display: none;
}

/*
dispite the godawfully long selector, all this does is change links in the timeline label cards to white for legibility. Also changes the font to match the rest of the website theme.
*/
.dark-style .timeline-details .wptl-readmore &gt;
a,
.dark-style .wpex-timeline &gt;
li .wpex-timeline-label h2 a,
.dark-style li .wptl-readmore-center &gt;
a,
.wpex-timeline-list.dark-style .wpex-taxonomy-filter li a:not(.active):not(:hover),
.wpex.horizontal-timeline.dark-style .wpex-timeline-label h2 a {
color: #ffffff !important;
font-family: Libre Franklin;
font-weight: bold;
font-size: 70%;
letter-spacing: 1px;
}

/*
Even scarier selector. Changes sidebar links, poster names and dates to a nice bright blue to match the timeline page and bring about increased visual coherency.
*/
.colors-dark .entry-title a,
.colors-dark .entry-meta a,
.colors-dark.blog .entry-meta a.post-edit-link,
.colors-dark.archive .entry-meta a.post-edit-link,
.colors-dark.search .entry-meta a.post-edit-link,
.colors-dark .page-links a,
.colors-dark .page-links a .page-number,
.colors-dark .entry-footer a,
.colors-dark .entry-footer .cat-links a,
.colors-dark .entry-footer .tags-links a,
.colors-dark .edit-link a,
.colors-dark .post-navigation a,
.colors-dark .logged-in-as a,
.colors-dark .comment-navigation a,
.colors-dark .comment-metadata a,
.colors-dark .comment-metadata a.comment-edit-link,
.colors-dark .comment-reply-link,
.colors-dark a .nav-title,
.colors-dark .pagination a,
.colors-dark .comments-pagination a,
.colors-dark .widget .widget-title a,
.colors-dark .widget ul li a,
.colors-dark .site-footer .widget-area ul li a,
.colors-dark .site-info a {
color: #24e7ff
}

/*Changes bold and nav text to be bright white, for added EXTRA BOLD emphasis.*/
b,
.nav-subtitle {
color: #ffffff !important;
}
.entry-title {
color: #ffffff !important;
font-weight: 600;
}

/*changes small text on left of timeline to slightly larger size and white. You can see where this is going.*/
.info-h {
color: #ffffff !important;
font-size: smaller !important;
}
.social-navigation a {
color: #24e7ff !important;
}

/*Changes emphasized links to be more... emphasized.*/
em a,
em a:visited {
color: #24e7ff !important;
font-weight: bold;
text-decoration: none;
}

/*Changes contact form labels to match the rest of the theme.*/
.wpcf7 p {
font-family: Libre Franklin;
text-transform: uppercase;
font-size: 90%;
letter-spacing: 0.5px;
color: white;
}

/*deletes "Proudly Powered by Wordpress" with extreme prejudice.*/
.site-splay:none;
}";s:10:"post_title";s:13:"Documentation";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"inherit";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:15:"484-revision-v1";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2017-10-31 21:37:06";s:17:"post_modified_gmt";s:19:"2017-11-01 04:37:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:484;s:4:"guid";s:33:"http://localhost/484-revision-v1/";s:10:"menu_order";i:0;s:9:"post_type";s:8:"revision";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}