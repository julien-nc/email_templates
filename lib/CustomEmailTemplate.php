<?php

namespace OCA\EmailTemplates;

use OC\Mail\EMailTemplate as ParentTemplate;

class CustomEmailTemplate extends ParentTemplate {

	public function setSubject(string $subject): void {
		if ($this->emailId === 'files_sharing.RecipientNotification') {
			$subject = vsprintf('[custom-title-1] %s was VERY kind to share %s with you', [$this->data['initiator'], $this->data['filename']]);
		} elseif ($this->emailId === 'circles.ShareNotification') {
			$subject = vsprintf('[custom-title-2] %s was VERY kind to share %s with you', [$this->data['author'], $this->data['filename']]);
		}
		parent::setSubject($subject);
	}

	public function addHeading(string $title, $plainTitle = ''): void {
		if ($this->emailId === 'files_sharing.RecipientNotification') {
			$title = vsprintf('[custom-heading-1] %s was SUPER kind to share %s with you', [$this->data['initiator'], $this->data['filename']]);
		} elseif ($this->emailId === 'circles.ShareNotification') {
			$title = vsprintf('[custom-heading-2] %s was SUPER kind to share %s with you', [$this->data['author'], $this->data['filename']]);
		}
		parent::addHeading($title, $plainTitle);
	}

	public function addBodyText(string $text, $plainText = ''): void {
		if ($this->emailId === 'circles.ShareNotification') {
			$text = vsprintf('[custom-body-2] %s was SUPER kind to share %s with a team you are a member of (%s)', [$this->data['author'], $this->data['filename'], $this->data['circleName']]);
			$plainText = vsprintf('[custom-body-plain-2] %s was SUPER kind to share %s with a team you are a member of (%s)', [$this->data['author'], $this->data['filename'], $this->data['circleName']]);
		}
		parent::addBodyText($text, $plainText);
	}
}
