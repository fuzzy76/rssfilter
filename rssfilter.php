<?php

$xml =  simplexml_load_file($_GET['input']);

$ix = 0;
while ($ix < count($xml->channel->item) ) {
  if (!array_in_array($xml->channel->item[$ix]->category,$_GET['categories'])) {
    unset($xml->channel->item[$ix]);
  } else {
    $ix++;
  }
} 

echo $xml->asXML();

// in_array that accepts two arrays (and returns true if it finds any common value)
function array_in_array($a, $b) {
  if (!is_array($a))
    return in_array($a, $b);

  foreach ($a as $elem) {
    if (in_array($elem, $b))
      return true;
  }
  return false;
}

