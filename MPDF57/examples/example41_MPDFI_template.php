<?php

/* This script examines your font directory. 
   Point your browser to 
   http://your.domain/your_path_to _mpdf/utils/font_names.php
   By default this will examine the folder /ttfonts/ (or the default font
   directory defined by _MPDF_TTFONTPATH.
   You can optionally define an alternative folder to examine by setting 
   the variable checkdir below (must be a relative path, or filesystem path).
   You can optionally output just the font samples as a PDF file by setting $pdf=true.
*/


$checkdir = '';

$pdf = false;

/////////////////