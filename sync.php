<?PHP 
$user = exec('whoami');
if ($user != 'root'){
 die('Cron Job Only');
}


$cookie = '';
$myFile = "/gitbox/fiddlersway.pos";
$command = "/gitbox/fiddlersway.sh";
$fh = fopen($myFile, 'r');
$preTest = fgets($fh);
fclose($fh);
$show=0;
$loginURL = "https://github.com/api/v2/json/commits/list/insidenothing/Fiddlers-Way/master";
$curl = curl_init();
curl_setopt ($curl, CURLOPT_URL, $loginURL);
curl_setopt ($curl, CURLOPT_TIMEOUT, '5');
curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, true );
curl_setopt( $curl, CURLOPT_COOKIEJAR, $cookie );
curl_setopt( $curl, CURLOPT_ENCODING, "" );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_AUTOREFERER, true );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
$buffer = curl_exec ($curl);
$buffer = json_decode($buffer, true);
foreach ($buffer as $key => $value){
foreach ($value as $key2 => $value2){
$test = $value2[id];
break;
}}
if (($preTest != $test ) && $test != ''){
exec($command, $retval);
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $test);
fclose($fh);
mail('patrick@fiddlersway.com','Site Updated','The site has be auto updated from github.');
}






?>