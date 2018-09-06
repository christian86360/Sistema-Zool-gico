		if (preg_match('/^(.*)-extb/',$fname, $fm)) {
			if (isset($tempfontdata[($fm[1])]) && $tempfontdata[($fm[1])]) {
				$tempfontdata[($fm[1])]['sip-ext'] = $fname;
				if (!$pdf) echo 'INFO - Font file '.$fname.' has been defined as a CJK ext-B for '.($fm[1]).'<br />';
			}
			else if (isset($tempfontdata[($fm[1].'-exta')]) && $tempfontdata[($fm[1].'-exta')]) {
				$tempfontdata[($fm[1].'-exta')]['sip-ext'] = $fname;
				if (!$pdf) echo 'INFO - Font file '.$fname.' has been defined as a CJK ext-B for '.($fm[1].'-exta').'<br />';
			}
		}
		// else { unset($tempfontdata[$fname]['sip']); }
	}
	unset($tempfontdata[$fname]['sip']);
	unset($tempfontdata[$fname]['smp']); 
}

$mpdf->fontdata = array_merge($tempfontdata ,$mpdf->fontdata);

	$mpdf->available_unifonts = array();
	foreach ($mpdf->fontdata AS $f => $fs) {
		if (is