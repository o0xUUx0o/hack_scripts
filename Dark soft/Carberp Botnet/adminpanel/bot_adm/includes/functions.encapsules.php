<?php

function encapsules($st){
    $st = preg_replace('[0-9!@#$%^&*()]','', $st);
    $a = array('А'=>'A', 'Б'=>'B','В'=>'V','Г'=>'G','Д'=>'D','Е'=>'E','Ё'=>'JO','Ж'=>'ZH','З'=>'Z','И'=>'I','Й'=>'J','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N','О'=>'O','П'=>'P','Р'=>'R','С'=>'S','Т'=>'T','У'=>'U','Ф'=>'F','Х'=>'KH','Ц'=>'TS','Ч'=>'CH','Ш'=>'SH','Щ'=>'SCH','Ъ'=>'','Ы'=>'Y','Ь'=>'','Э'=>'E','Ю'=>'JU','Я'=>'JA',' '=>'_');
    $b = array('а'=>'a', 'б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'jo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'j','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'kh','ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'','ы'=>'y','ь'=>'','э'=>'e','ю'=>'ju','я'=>'ja','|'=>'',' '=>'_','('=>'',')'=>'');
    $st = strtr($st, $a);
    $st = strtr($st, $b);
    return $st;
}

?>