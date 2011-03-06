// activate jquery plugin for gallery images
$(document).ready( function () {
	$('div.tx-tlphotoblog-pi1 div.gallery a').lightBox();
});

function showCommentForm() {
	$('div.comment-form').toggle(500);
}
