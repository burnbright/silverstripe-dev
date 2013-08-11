<?php

/**
* Kitchen Sink - all form elements in one
*/
class KitchenSinkForm extends Form{
	
	function __construct($controller, $name = "KitchenSinkForm"){
		$fields = $this->generateFields();
		$actions = $this->generateActions();
		parent::__construct($controller, $name, $fields, $actions);
	}

	function generateFields(){
		return new FieldList(
			HeaderField::create("Header"),
			TextField::create("Text"),
			TextareaField::create("Textarea"),
			CheckboxField::create("Checkbox","Checkbox",true),
			CheckboxSetField::create("Checkboxes","Checkboxes",$this->src(),'pears'),
			OptionSetField::create("Options","Options",$this->src(),'pears'),
			DropdownField::create("Dropdown","Dropdown",$this->src(),'pears'),
			CurrencyField::create("Currency","Currency",1240.34),
			//CreditCardField::create("CreditCard","CreditCard"),
			DateField::create("Date","Date",'2010-03-31'),
			DatetimeField::create("Datetime","Datetime"),
			EmailField::create("Email","Email","joe.smith@blah.co"),
			FileField::create("File","File"),
			GroupedDropdownField::create("GroupedDropdown","GroupedDropdown",$this->src(array('grouped' => true)))
		);
	}

	function generateActions(){
		return new FieldList(
			FormAction::create('submit')
		);
	}

	private function src($options = array()){

		$fruit =  array(
			'apples' => 'Apples',
			'bananas' => 'Bananas',
			'pears' => 'Pears',
			'grapes' => 'Grapes'
		);

		if(isset($options['grouped'])){
			return array(
				'numbers' => array(
					"1" => "One",
					"2" => "Two",
					"3" => "Three"
				),
				'fruit' => $fruit
			);
		}

		return $fruit;
	}

}