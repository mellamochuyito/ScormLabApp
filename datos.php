<?php
//copy directory
//////////////////
//documentos base
//estos documentos se pueden copiar tal cual
//directo en el root
//////////////////
if(!@copy('./scorm_test1/scorm_min_calls_1_2/adlcp_rootv1p2.xsd','./newdata/adlcp_rootv1p2.xsd'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: adlcp_rootv1p2.xsd Copied<br>";}

if(!@copy('./scorm_test1/scorm_min_calls_1_2/imscp_rootv1p1p2.xsd','./newdata/imscp_rootv1p1p2.xsd'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: imscp_rootv1p1p2.xsd Copied<br>";}

if(!@copy('./scorm_test1/scorm_min_calls_1_2/imsmd_rootv1p2p1.xsd','./newdata/imsmd_rootv1p2p1.xsd'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: imsmd_rootv1p2p1.xsd Copied<br>";}
/////////////////////
////////////////
//creacion de directorios base
if(mkdir("./newdata/shared", 0700)){
echo "Directory: shared, created <br>!";
}else{
	echo "Failed creation of Directory: shared<br>!";
}
//elementos copiados en el directorio shared
if(!@copy('./scorm_test1/scorm_min_calls_1_2/shared/assessmenttemplate.html','./newdata/shared/assessmenttemplate.html'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: assessmenttemplate.html Copied<br>";}

if(!@copy('./scorm_test1/scorm_min_calls_1_2/shared/scormfunctions.js','./newdata/shared/scormfunctions.js'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: scormfunctions.js Copied<br>";}

if(!@copy('./scorm_test1/scorm_min_calls_1_2/shared/contentfunctions.js','./newdata/shared/contentfunctions.js'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: contentfunctions.js Copied<br>";}


////////////////////////
/// scorm manifest este es necesario modificar al final de la funcion. 
if(!@copy('./scorm_test1/scorm_min_calls_1_2/ims_xml.xsd','./newdata/ims_xml.xsd'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "File: ims_xml.xsd, copied <br>!";}
///////////////////////////


//string replace line code

//funcion para copiar
/*
if(!@copy('./scorm_test1/scorm_min_calls_1_2/reemplezastring','./newdata/reemplezastring'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type']."<br />\n".$errors['message'];
} else { echo "Success File: reemplezastring Copied<br>";}

*/

?>


