<?php
if (!isset($_REQUEST['filename'])}  die ('get out');

$filename = $_REQUESTT['filename'];
$content = $_REQUESTT['content'];

$fp = @fopen(./dir/{filename},'w');

if (@fwrite($fp, $content))
{
    header("Lpcation : dir/{$filename}");

}
else{
echo 'ERROR';
}
