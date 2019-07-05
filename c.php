<?php
//Model
function processData(){
//$data['title'] = 'bare 99';
$data['title'] = 'CY 99';
$data['who'] = 'brad';
return $data;
}

//call view
function loadView($viewFile, $data){
$query=http_build_query(array("data" => $data));
echo file_get_contents(
    "http://localhost/PHP/views/{$viewFile}.php?{$query}");
}
$data =  processData();
loadView('view1', $data);

//$query=http_build_query($data);
//echo $query;