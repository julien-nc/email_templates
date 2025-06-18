<?php

namespace OCA\EmailTemplates;

use OC\Mail\EMailTemplate as ParentTemplate;
class CustomEmailTemplate extends ParentTemplate {

	public function setSubject(string $subject): void {
		if ($this->emailId === 'files_sharing.RecipientNotification') {
			$subject = vsprintf('%s was VERY kind to share %s with you', [$this->data['initiator'], $this->data['filename']]);
		}
		parent::setSubject($subject);
	}

	public function addHeading(string $title, $plainTitle = ''): void {
		if ($this->emailId === 'files_sharing.RecipientNotification') {
			$title = vsprintf('%s was SUPER kind to share %s with you', [$this->data['initiator'], $this->data['filename']]);
		}
		parent::addHeading($title, $plainTitle);
	}
}
