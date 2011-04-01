// activate jquery plugin for gallery images
jQuery(document).ready(function () {
	
	// init lightbox for photoblog
	if (jQuery('div.tx-tlphotoblog-pi1 div.content a')) {
		jQuery('div.tx-tlphotoblog-pi1 div.content a').lightBox();
	}

	// init onChange for selectbox
	if (jQuery('.category-select')) {
		jQuery('.category-select').change(function() {
			jQuery('#category').submit();
		});
	}
	
});

function showCommentForm() {
	if (jQuery('div.comment-form')) {
		jQuery('div.comment-form').toggle(500);
	}
}
