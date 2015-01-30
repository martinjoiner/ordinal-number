<?php

/** 
 Takes a number in the range 1-9999 and converts it to a human readable sentence of it's ordinal form eg. 'Three thousand five hundred sixty first'
*/
class Ordinal{

	var $numWords = array( "one", "two", "three", "four", "five", "six", "seven", "eight", "nine" );
	var $titleCase = false;


	/** 
	 Converts a number to a sentence
	 @$num An integer to be converted
	 @$appendAnd - Boolean - Default: false - Places an 'and' before the final 2 parts if number above 101 or higher (eg. One hundred and first)
	 @$titleCase - Boolean - Default: false - Capitalises the first letter
	*/
	public function convert( $num, $appendAnd = false, $titleCase = false ){

		$titleCase;

		$strReturn = '';
		$strNum = (string)$num;
		$ordinalWords = array(	"first", 	"second", 		"third", 		"fourth", 		"fifth", 		"sixth", 		"seventh", 		"eighth", 	"ninth", "tenth", "eleventh", 
								"twelfth", 	"thirteenth", 	"fourteenth", 	"fifteenth", 	"sixteenth", 	"seventeenth", 	"eighteenth", 	"nineteenth" );

		$decOrds = array( "tenth", "twentieth", "thirtieth", "fortieth", "fiftieth", "sixtieth", "seventieth", "eightieth", "ninetieth" );
		$decWords = array( "" , "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety" );

		if( $num > 999 ){
			$strReturn .= $this->steppedOrd( $num, 1000, "thousandth", "thousand" );
		}

		if( $num > 99 ){
			$strReturn .= $this->steppedOrd( $num, 100, "hundredth", "hundred" );
		}


		if( $this->right($strNum,2) != "00" ){

			// Does the user want the "and" appended before the words that represent the last 2 digits?
			if( $num > 100 && $appendAnd ){
				$strReturn .= ' and ';
			}

			if( $this->right($strNum,2) % 10 == 0){
				$pointer = $this->right($strNum,2) / 10;
				$strReturn .= $decOrds[ $pointer - 1 ];
			} else if( $this->right($num,2) < 20 ){
				$pointer = $this->right($strNum,2);
				$strReturn .= $ordinalWords[ $pointer - 1 ];
			} else {
				$pointer = ( $this->right($num,2) - ( $this->right($num,2) % 10 ) ) / 10;
				$strReturn .= $decWords[ $pointer - 1 ];
				$pointer = $this->right($num,1);
				$strReturn .= ' ' . $ordinalWords[ $pointer - 1 ];
			} 
		}

		if( $titleCase ){
			$strReturn = ucfirst($strReturn);
		}

		return $strReturn;
	}


	/**
	 This handles the part of the sentence such as "two hundred...", or "five thousandth"
	 @num 			num  	The number we are converting
	 @stepSize 		num 	The size of the group we are counting eg. 100 for hundreds
	 @ordinalForm 	string 	The block in it's ordinal form eg. "thousandth"
	 @wordForm		strign	The block in it's word form eg. "hundred"
	*/
	private function steppedOrd( $num, $stepSize, $ordinalForm, $wordForm ){
		$strNum = (string)$num;
		$strStep = (string)$stepSize;

		$strReturn = '';
		
		$lenStrStep = strLen( $strStep );
		if( substr( $this->right($strNum, $lenStrStep), 0, 1) != 0){
			if( $this->right($strNum, $lenStrStep) % $stepSize == 0 ){
				$pointer = $this->right($strNum, $lenStrStep) / $stepSize;
				$strReturn .= $this->numWords[ $pointer - 1 ] . ' ' . $ordinalForm;
			} else {
				$pointer = ( $this->right($num, $lenStrStep) - ( $this->right($num, $lenStrStep) % $stepSize ) ) / $stepSize;
				$strReturn .= $this->numWords[ $pointer - 1 ];
				$strReturn .= ' ' . $wordForm . ' ';
				
			}
			return $strReturn;
		}
	}




	/**
	 PHP doesn't have a nice right() function like CF so we need to build one to keep our code clean
	*/
	private function right( $str, $len ){
		return substr($str, strlen($str)-$len);
	}

}
