<?php
/************************************************
 * RS·FTP  - OC1.0
 * http://idc.sakura8888.moe/
 * Update:2020-10-10
 * 
 */


// --------------------------------------------------------------------------------
// PhpConcept Library (PCL) Error 1.0
// --------------------------------------------------------------------------------
// License GNU/GPL - Vincent Blavet - Mars 2001
// http://www.phpconcept.net & http://phpconcept.free.fr
// --------------------------------------------------------------------------------
// Fran鏰is :
//   La description de l'usage de la librairie PCL Error 1.0 n'est pas encore
//   disponible. Celle-ci n'est pour le moment distribu閑 qu'avec les
//   d関eloppements applicatifs de PhpConcept.
//   Une version ind閜endante sera bientot disponible sur http://www.phpconcept.net
//
// English :
//   The PCL Error 1.0 library description is not available yet. This library is
//   released only with PhpConcept application and libraries.
//   An independant release will be soon available on http://www.phpconcept.net
//
// --------------------------------------------------------------------------------
//
//   * Avertissement :
//
//   Cette librairie a 閠?cr殚e de fa鏾n non professionnelle.
//   Son usage est au risque et p閞il de celui qui l'utilise, en aucun cas l'auteur
//   de ce code ne pourra 阾re tenu pour responsable des 関entuels d間ats qu'il pourrait
//   engendrer.
//   Il est entendu cependant que l'auteur a r閍lis?ce code par plaisir et n'y a
//   cach?aucun virus, ni malveillance.
//   Cette libairie est distribu閑 sous la license GNU/GPL (http://www.gnu.org)
//
//   * Auteur :
//
//   Ce code a 閠?閏rit par Vincent Blavet (vincent@blavet.net) sur son temps
//   de loisir.
//
// --------------------------------------------------------------------------------

// ----- Look for double include
if (!defined("PCLERROR_LIB"))
{
  define( "PCLERROR_LIB", 1 );

  // ----- Version
  $g_pcl_error_version = "1.0";

  // ----- Internal variables
  // These values must only be change by PclError library functions
  $g_pcl_error_string = "";
  $g_pcl_error_code = 1;


  // --------------------------------------------------------------------------------
  // Function : PclErrorLog()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorLog($p_error_code=0, $p_error_string="")
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    $g_pcl_error_code = $p_error_code;
    $g_pcl_error_string = $p_error_string;

  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorFatal()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorFatal($p_file, $p_line, $p_error_string="")
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    $v_message =  "<html><body>";
    $v_message .= "<p align=center><font color=red bgcolor=white><b>PclError Library has detected a fatal error on file '$p_file', line $p_line</b></font></p>";
    $v_message .= "<p align=center><font color=red bgcolor=white><b>$p_error_string</b></font></p>";
    $v_message .= "</body></html>";
    die($v_message);
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorReset()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorReset()
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    $g_pcl_error_code = 1;
    $g_pcl_error_string = "";
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorCode()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorCode()
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;
    
    return($g_pcl_error_code);
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorString()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorString()
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    return($g_pcl_error_string." [code $g_pcl_error_code]");
  }
  // --------------------------------------------------------------------------------


// ----- End of double include look
}
?>
