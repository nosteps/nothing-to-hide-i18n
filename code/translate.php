<?php


//TODO change from static string to fontfile place and encode on the fly to base64
define("FONTBASE64", "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");


//define("STYLESTRING", "@font-face { font-family: Ostrich Sans; src: url(\"data:application/font-woff;charset=utf-8;base64,"+FONTBASE64+"\"); }");


$filelist=array(
	"FINAL/cutscene/pics/establishing_fg.svg" /*,
	"FINAL/game/assets/propaganda/dont_help_hiders.svg",
	"FINAL/game/assets/propaganda/error.svg",
	"FINAL/game/assets/propaganda/intro_pics.svg",
	"FINAL/game/assets/propaganda/needs_dummy.svg",
	"FINAL/game/assets/propaganda/nobody_messes.svg",
	"FINAL/game/assets/propaganda/nobody_the_wall.svg",
	"FINAL/game/assets/propaganda/nobody_the_wall_2.svg",
	"FINAL/game/assets/propaganda/pickup_gardner.svg",
	"FINAL/game/assets/propaganda/pickup_lookout.svg",
	"FINAL/game/assets/propaganda/puzzle_mock.svg",
	"FINAL/game/assets/propaganda/puzzle_psa.svg",
	"FINAL/game/assets/propaganda/questions.svg",
	"FINAL/game/assets/propaganda/smile.svg",
	"FINAL/game/assets/propaganda/stream_wall.svg",
	"FINAL/game/assets/propaganda/stream_wall_2.svg",
	"FINAL/game/assets/propaganda/tut_carpet.svg",
	"FINAL/game/assets/propaganda/tut_darker.svg",
	"FINAL/game/assets/propaganda/tut_pickup.svg",
	"FINAL/game/assets/propaganda/tut_power.svg",
	"FINAL/game/assets/propaganda/tut_reminder.svg",
	"FINAL/game/assets/propaganda/tut_slidewalk.svg",
	"FINAL/game/assets/propaganda/tut_slow.svg",
	"FINAL/game/assets/propaganda/tut_walk.svg",
	"FINAL/game/assets/propaganda/unsecret_ballot.svg",
	"FINAL/game/img/share_big.svg",
	"FINAL/menu/assets/propaganda/title.svg",
	"FINAL/menu/img/share_big.svg"*/
);

$action = "";
if (count($argv)>1){
	$action = $argv[1];
}

//TODO replace by file list which is read from "locales" directory instead of a static list
$langList=array("en","de","nl","ru");
if 	($action==="doTranslate"||$action==="")
	$languages = getLanguages($langList);


foreach ($filelist as $file){
	switch ($action){
		case "updateFont":
			updateFont($file);
			//TODO probably also add doTranslate, so all translation get updated by itself
			break;
		case "extractStrings":
			extractStrings($file);
			break;
		case "doTranslate":
		case "":
		case null:
			doTranslate($file,$langList,$languages);
			break;
		case "?": case "help": 
			printHelp();
			break 2;
		default:
			echo "You entered an invalid command\n\n";
			printHelp();
			break 2;
	}
}

/**
 * returns an array of all languages from the JSON files, given an array of language codes
 */
function getLanguages($langList){
	$languages = array();
	foreach ($langList as $lang){
		$json=file_get_contents ("FINAL/locales/translation-$lang.json");
		//we want an associative array, thus second parameter is true
		$languages[$lang] = json_decode($json,true);
		//print_r($obj);
	}
	return $languages;
}


function explodeFile($file){
	$pos = strrpos($file, '/')+1;
	$filename = substr($file, $pos);
	$filepath = substr($file, 0, $pos);
	return array($filepath,$filename);
}

function extractStrings($file){
	$filenamepart=explodeFile($file);
	echo "'".$filenamepart[1]."': {\n";
    $buffer=file_get_contents ($file);
	//echo $buffer;
    $pos=0;
    $notfirst=false;
    while ($pos!==false){
        $pos = getNextText($buffer,$pos);
        //echo "text $pos\n";
        if ($pos==false) {break;}
        $pos = getNextTSpan($buffer,$pos);
        //echo "tspan $pos\n";
        if ($pos==false) {break;}
        $posL = getNextGt($buffer,$pos);
        //echo "gt $posL\n";
        $posR = getNextLt($buffer,$posL);
        //echo "lt $posR\n";
        $text = getTextBetweenGtAndLt($buffer,$posL,$posR);
        $pos = $posR;
        
        if ($notfirst) { echo ","; $notfirst=true;}
        //echo $text."-".$pos."\n";
        echo "    '$text': '$text'\n";
        
   }
   echo "},\n";
}

function printHelp(){
	global $argv;
	echo "Usage: php ".$argv[0]." <action>\n";
	echo "<action> can be: \n";
	echo "* (empty) or 'doTranslate': translates all images given the current language files\n";
	echo "* 'updateFont': updates all SVGs with Ostrich-Sans text to use a different BASE64 code after changing it in the source of this script\n";
	echo "* 'extractStrings': tries to extract all strings from the SVGs, printing them as JSON code. Experimental! Don't rely solely on it.\n";
}

//TODO to be implemented
//TODO add to all SVGs this attributes: data-i18n, textLength (visually from Inkscape), lengthAdjust="spacingAndGlyphs"
//TODO add smart loading of ressources in code of config.js files: load from subdirectories, depending on selected language
/* general approach: 
	- read in translation files from locales
	- find text occurence of data-i18n attribute in DOM tags
	- translate text in that DOM tag from locales files, similar to i18next for all translation files
	- create files in subdirectories of the actual SVG (e.g. "FINAL/cutscene/pics/establishing_fg.svg" => "FINAL/cutscene/pics/XX/establishing_fg.svg" where XX is "en", "de", "ru", etc.
* */
function doTranslate($file,$langList,$languages){
	echo "\n\n=============================\n";
	echo "Translating $file\n";
	echo "=============================\n";
	$filenamepart=explodeFile($file);
	$buffer=file_get_contents($file);
	//loop through the languages
	foreach ($langList as $key){
		echo "-----------------------------\n";
		echo "Language $key\n";
		echo "-----------------------------\n";
		$lang = $languages[$key];
		$posR=0;
		$pos=0;
		//$notfirst=false;
		$translated = "";
		while (true){//$posR!==false){
			//echo $posR;
			$pos1 = getNextDataI18N($buffer,$posR+1);
			//echo "text $pos\n";
			if ($pos1==false) {break;}
			$pos2 = getNextQuote($buffer,$pos1+1);
			//echo "tspan $pos\n";
			//if ($pos2==false) {break;}
			$name = getTextBetweenQuotes($buffer,$pos1,$pos2);
			$replaceText = getI18nText($name,$lang);
echo "$name=$replaceText\n";			
			//getDataI18N = 
			
			$posL = getNextGt($buffer,$pos2);
			//echo "gt $posL\n";
			$translated .= getTextBeforeGt($buffer,$posR-1,$posL+1);
			$posR = getNextLt($buffer,$posL);
			//echo "lt $posR\n";
			$text = $replaceText;//getTextBetweenGtAndLt($buffer,$posL,$posR);

			$translated .= $text;
			$pos1 = $posR;
			
			//if ($notfirst) { echo ","; $notfirst=true;}
			//echo $text."-".$pos."\n";
			//echo "    '$text': '$text'\n";
			
		}
		$translated .= substr($buffer,$posR,-1);
		$newFile=$filenamepart[0]."$key/".$filenamepart[1];
		file_put_contents($newFile,$translated);
		
	}
	/*
	$filenamepart=explodeFile($file);
	echo "'".$filenamepart[1]."': {\n";
    $buffer=file_get_contents ($file);
	//echo $buffer;
    $pos=0;
    $notfirst=false;
    while ($pos!==false){
        $pos = getNextText($buffer,$pos);
        //echo "text $pos\n";
        if ($pos==false) {break;}
        $pos = getNextTSpan($buffer,$pos);
        //echo "tspan $pos\n";
        if ($pos==false) {break;}
        $posL = getNextGt($buffer,$pos);
        //echo "gt $posL\n";
        $posR = getNextLt($buffer,$posL);
        //echo "lt $posR\n";
        $text = getTextBetweenGtAndLt($buffer,$posL,$posR);
        $pos = $posR;
        
        if ($notfirst) { echo ","; $notfirst=true;}
        //echo $text."-".$pos."\n";
        echo "    '$text': '$text'\n";
        
   }
   echo "},\n";
   * //fputs stuff here for each language
	*/
	
}

/**
 * Gets the corresponding text from a string like "key1.key2.key3";
 */
function getI18nText($name,$lang) {
	//explode into parts
	$nameparts=explode(".",$name);
	for ($i=0;$i<count($nameparts);$i++){
		$name = $nameparts[$i];
		//echo "$name.";
		//print_r($lang);
		$lang = $lang[$name];
	}
	//echo "== $lang\n";
	return $lang;
}

//TODO
function updateFont($file){
	$filenamepart=explodeFile($file);
	
	//STYLESTRING
}

function getNextDataI18N($buffer,$pos){
	$a = strpos($buffer,'data-i18n="',$pos);
	if ($a!==false) {$a+=strlen('data-i18n="')-1;}
	return $a;
}

function getNextQuote($buffer,$pos){
	return strpos($buffer,'"',$pos);
}

function getNextText($buffer, $pos){
	return strpos($buffer,"<text",$pos);
}

function getNextTSpan($buffer, $pos){
	return strpos($buffer,"<tspan",$pos);
}

function getNextLt($buffer,$pos){
	return strpos($buffer,"<",$pos);
}

function getNextGt($buffer,$pos){
	return strpos($buffer,">",$pos);
}

function getTextBetweenGtAndLt($buffer,$pos1,$pos2){
	return substr($buffer, $pos1+1, $pos2-$pos1-1);
}

//just an alias of function above
function getTextBeforeGt($buffer,$pos1,$pos2){
	return getTextBetweenGtAndLt($buffer,$pos1,$pos2);
}

//just an alias of function above
function getTextBetweenQuotes($buffer,$pos1,$pos2){
	return getTextBetweenGtAndLt($buffer,$pos1,$pos2);
}
