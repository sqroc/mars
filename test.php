<?php
$doc = new DOMDocument(); 
$doc->load('http://www.worldcommunitygrid.org/verifyMember.do?name=zforz&code=47ed78eb77f96930afb74a01c84c1e2c');
$points = $doc->getElementsByTagName( "Points" )->item(0)->nodeValue;
echo $points;