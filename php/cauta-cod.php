<html>
<head>
<title>Find String</title>
</head>
<body>
<?php
// Cauta cod malitios in fisierele PHP

// Most hosting services will have a time limit on how long a php script can run, typically 30 seconds.
// On large sites with a lot of files this script may not be able to find and check all files within the time limit.
// If you get a time out error you can try over riding the default time limits by removing the // in the front of these two lines.

// ini_set('max_execution_time', '0');
// ini_set('set_time_limit', '0');


find_files('.');

function find_files($seed) {
	if(! is_dir($seed)) return false;
	$files = array();
	$dirs = array($seed);
	while(NULL !== ($dir = array_pop($dirs))) {
		if($dh = opendir($dir)) {
			while( false !== ($file = readdir($dh))) {
				if($file == '.' || $file == '..') continue;
				$path = $dir . '/' . $file;
			if(is_dir($path)) { $dirs[] = $path; }

// the line below tells the script to only check the content of files with a .php extension.
// the if{} statement says if you "match" php[\d]? at the end of the file name then check the contents
// of the file. The [\d]? part means also match if there is a digit \d such as .php4 in the file extension

// else { if(preg_match('/\/*\.php[\d]?$/i', $path)) { check_files($path); }}

// 07/26/2011 Based on some recent Pharma hacks I have changed the default to check php, js and txt files
else { if(preg_match('/^.*\.(php[\d]?|js|txt)$/i', $path)) { check_files($path); }}

// if you would like to check other (all) file types you can comment out/un-comment and or modify
// the following lines as needed. You can only have one of the else{} statements un-commented.
// The first example contains a leng
thy OR (the | means OR) statement, the part inside the (),
// (php[\d]?|htm|html|shtml|js|asp|aspx) You can add/remove filetypes by modifying this part
// (php[\d]?|htm|html|shtml) will only check .php, .htm, .html, .shtml files.

// else { if(preg_match('/^.*\.(php[\d]?|htm|html|shtml|js|asp|aspx)$/i', $path)) { check_files($path); }}
// In the next else{} statement there is no if{}, no checking of the file extension every file will be checked
// else { check_files($path); } // will check all file types for the code
}
closedir($dh);
}}} function check_files($this_file)
{
// the variable $str_to_find is an array that contains the strings to search for inside the single quotes.
// if you want to search for other strings replace base64_decode with the string you want to search for.

$str_to_find[]='base64_decode';
$str_to_find[]='edoced_46esab'; // base64_decode reversed
$str_to_find[]='preg_replace';
$str_to_find[]='HTTP_REFERER'; // checks for referrer based conditions
$str_to_find[]='HTTP_USER_AGENT'; // checks for user agent based conditions
$str_to_find[]='assert('; $str_to_find[]='create_function('; $str_to_find[]='$_REQUEST['; if(!($content = file_get_contents($this_file)))
{ echo("<p>Could not check $this_file You should check the contents manually!</p>\n"); }
else
{
while(list(,$value)=each($str_to_find))
{
if (stripos($content, $value) !== false)
{
echo("<p>$this_file -> contains $value</p>\n");
}
}
}
unset($content);
}?>
</body>
</html>