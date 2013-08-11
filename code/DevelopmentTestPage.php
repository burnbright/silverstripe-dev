<?php

class DevelopmentTestPage_Controller extends Page_Controller{

	function getTitle(){
		return "Test";
	}

	function getContent(){
		return "<p>Some content.</p>";
	}

	function Form(){
		return new KitchenSinkForm($this);
	}

}