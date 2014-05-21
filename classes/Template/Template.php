<?php

class Template implements \Template\ITemplate {
	private $content, $name, $title, $version;
	
	public function getContent() {
		return $this->content;
	}

	public function getName() {
		return $this->name;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getVersion() {
		return $this->version;
	}

	public function setContent($content) {
		$this->content = $content;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setVersion($version) {
		$this->version = $version;
	}

}
