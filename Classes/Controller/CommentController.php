<?php

class Tx_TlPhotoblog_Controller_CommentController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @param Tx_TlPhotoblog_Domain_Model_Comment $comment
	 * @param Tx_TlPhotoblog_Domain_Model_Article $article
	 * @return void
	 */
	public function commentAction(Tx_TlPhotoblog_Domain_Model_Comment $comment, Tx_TlPhotoblog_Domain_Model_Article $article) {

		$article->addComment($comment);

		$this->redirect('show', 'Article', 'tlphotoblog', array('article'=>$article->getUid()));
	}

	protected function getErrorFlashMessage() {
		return 'Please fill out all required fields!!';
	}

	

}
