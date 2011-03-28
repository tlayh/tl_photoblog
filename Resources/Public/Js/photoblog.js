// activate jquery plugin for gallery images
jQuery(document).ready( function () {
	if(jQuery('div.tx-tlphotoblog-pi1 div.content a')) {
		jQuery('div.tx-tlphotoblog-pi1 div.content a').lightBox();
	}
});

function showCommentForm() {
	if(jQuery('div.comment-form')) {
		jQuery('div.comment-form').toggle(500);
	}
}
