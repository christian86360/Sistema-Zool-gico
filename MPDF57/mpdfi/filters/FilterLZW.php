\xa8\xe9\xa6\x99\xe6\xb8\xaf\xef\xbc\x8c\xe5\xae\x83\xe6\x9b\xbe\xe7\x8d\xb2\xe9\x81\xb8\xe7\x82\xba\xe3\x80\x8c2004\xe5\xb9\xb4\xe5\x8d\x81\xe5\xa4\xa7\xe5\x81\xa5\xe5\xba\xb7\xe7\xb6\xb2\xe7\xab\x99\xe3\x80\x8d\xe4\xb9\x8b\xe4\xb8\x80\xef\xbc\x8c\xe8\xa9\xb2\xe9\xa0\x85\xe9\x81\xb8\xe8\x88\x89\xe8\x87\xaa2005\xe5\xb9\xb4\xe8\xb5\xb7\xe6\x94\xb9\xe5\x90\x8d\xe7\x8f\xbe\xe6\x99\x82\xe7\x9a\x84\xe3\x80\x8c\xe5\x84\xaa\xe7\xa7\x80\xe7\xb6\xb2\xe7\xab\x99\xe9\x81\xb8\xe8\x88\x89\xe3\x80\x8d\xe3\x80\x82\xe5\x85\xb6\xe8\xb2\xa2\xe7\x8d\xbb\xe5\x9c\xa8\xe5\x9c\x8b\xe9\x9a\x9b\xe9\x96\x93\xe4\xba\xa6\xe5\x82\x99\xe5\x8f\x97\xe8\x82\xaf\xe5\xae\x9a\xef\xbc\x8c2005\xe5\xb9\xb4\xef\xbc\x8c\xe8\xa9\xb2\xe7\xb6\xb2\xe7\xab\x99\xe6\xa6\xae\xe7\x8d\xb2\xe7\xac\xac\xe5\x85\xab\xe5\xb1\x86\xe3\x80\x8c\xe4\xba\x9e\xe6\xb4\xb2\xe5\x89\xb5\xe6\x96\xb0\xe5\xa4\xa7\xe7\x8d\x8e\xe3\x80\x8d\xe9\x8a\x80\xe7\x8d\x8e\xe3\x80\x82</p>



<bookmark content=\"\xed\x82\xa4\xec\x8a\xa4\xec\x9d\x98\">
<h4>Korean</h4>
<p style=\"font-family: UHC\">\xed\x82\xa4\xec\x8a\xa4\xec\x9d\x98 \xea\xb3\xa0\xec\x9c\xa0\xec\xa1\xb0\xea\xb1\xb4\xec\x9d\x80 \xec\x9e\x85\xec\x88\xa0\xeb\x81\xbc\xeb\xa6\xac \xeb\xa7\x8c\xeb\x82\x98\xec\x95\xbc \xed\x95\x98\xea\xb3\xa0 \xed\x8a\xb9\xeb\xb3\x84\xed\x95\x9c \xea\xb8\xb0\xec\x88\xa0\xec\x9d\x80 \xed\x95\x84\xec\x9a\x94\xec\xb9\x98 \xec\x95\x8a\xeb\x8b\xa4. </p>



</div>
";

//==============================================================
//==============================================================
//==============================================================

include("../mpdf.php");

$mpdf=new mPDF('+aCJK','A4','','',32,25,27,25,16,13); 
$mpdf->SetDisplayMode('fullpage');

$mpdf->SetTitle($utxt['zh-CN']);
$mpdf->SetAuthor($utxt['zh-CN']);

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
//==============================================================
//==============================================================
//==============================================================


?>                                                                                                                                                                                                                                                                                                                             eTypeFontSubSet.class�x[e���ͽ��ݚf�[C[����Ik�"�I۵[Yی&[ɦ�Yrۆ�IHn�v�XEy#�lS�!T��66|"�V|#�E��E�9��IC��I����s����3�y�4 �d�lp%<Xo�O�$��|���	|F��mP�l �q�<b�Gaʆ��i'<F�q'I��=!�i"�x��ge��z��2|��/��/I!�)_&� {��W��UZ}��׉��o��[�m:�;���d�A"�'��%����n���#�?��Jx�$~B�y��S�zA����s��~I�W^��M�7�d�6��^�Wh�U~G�ߓ�?���ޟ��	�E����7�������k6�'�K��e������@fLfE2��L��Ub"���zB#Z�I�4vu]�j���C�~=��e0F�m$�dP:�h�S!��zjܯŴ��H���Dn������mK{�V��n������;B�Q͂���PI_G��=@<��u��ll!^��[�[6�w��Z�;|��-�<�UԖ���M�-=����[z���|����p_{�����-�����vǬ�v�P��׽������Š<'��7�Q����k�>_k����jS4�1�)52:�Gc�[B���PSZ�d��N�4��BCQ�Q����dd��7�$FZ�a-���4_�%�
���<5���Q�P%�x86ь*���l��˄e�K�C��DJ����a�mC���pz{Z�`��3�M�ټ0�;�^�m��$�Lk(�ĵ}]3VK�IߨN��jH�ڠ)U6�]�j��?��x9�fxRbT�H�ъ4�h���"�tg]�E�Q}�`��<���(_�Ν�;m�y�L%H	5���},�%�(���$�4�Nk#�ᷥ���SZH���EFn������iJsI<��'%�{\'�6�|��a-��Sm��d"�5�t�e?�w�P*bd��{��})�%y�`9F'�P:���4�[�£��FΥGGXkv���$�ׅc�N
�w)�x����
��8 �(p����o˂��T+FmfS`�-��)d���>B������}
�we�r�sUS`7("��A�M��g����+0�2;+S�hn p*pܣ�Qa�(�1�_�`R�i�&��Ca�B��(��Ř�9=��r�d�tN�nJ�GGp��e�hv�[G����c��h�O讐KO�j.}<��h�4(��UQ��W��̩�j�R�^�����0v�j�y�D�pE�aN����qT�������r=v�fg˲�s߱��!r{9sJ�B��`5
��J��Mu(l�6�e-+U��M���Q~�qH��N��dS��f���s.�x[��R::���[��&֌�	����C#�+L�}�Hh��Li��|>#���8��\�֊��(�u
`���5��O-/��p\d{7�h���u��G�e5�y�Y�^;k�Xm�]ר��Ժ73��Kjx�5K