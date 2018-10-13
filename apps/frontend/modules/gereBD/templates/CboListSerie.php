<?php
$dataCbo = "{listeSeries: [{id: '1', nom: 'Asterix'},{id: '2', nom: 'Tintin'},{id: '3', nom: 'titeuf'}]}";
	
/*  $dataCbo = array();

	    $dataCbo[0]['id']='1';
	    $dataCbo[0]['nom']='Asterix';
	    $dataCbo[1]['id']='2';
	    $dataCbo[1]['nom']='Tintin';
	    $dataCbo[2]['id']='3';
	    $dataCbo[2]['nom']='titeuf';
	    
    $dataCbo = json_encode($dataCbo);

    $this->getResponse()->setHttpHeader("X-JSON", '()'); // set a header, (although it is empty, it is nicer than without a correct header. Filling the header with the result will not be parsed by extjs as far as I have seen).
    return $this->renderText($dataCbo);  // so return the result in the content, but without using symfony-templates.
*/
die ('{"listeSeries":[{"id":"1","nom":"Asterix"}]}');

?>