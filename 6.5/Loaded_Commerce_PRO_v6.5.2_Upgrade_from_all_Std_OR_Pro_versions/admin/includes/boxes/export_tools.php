<?php
/*
  $Id: tools.php,v 1.1 2008/06/11 00:18:17 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
?>
<!-- exporttools //-->
          <tr>
            <td>
<?php
$heading = array();
$contents = array();
$heading[] = array('text'  => BOX_HEADING_EXPORTTOOLS,
                   'link'  => tep_href_link(FILENAME_EMAILEXPORT, 'selected_box=exporttools'));
if ($_SESSION['selected_box'] == 'exporttools' || MENU_DHTML == 'True') {
  //RCI start
  $returned_rci_top = $cre_RCI->get('exporttools', 'boxestop');
  $returned_rci_bottom = $cre_RCI->get('exporttools', 'boxesbottom');
  $contents[] = array('text'  => $returned_rci_top .
                                 tep_admin_files_boxes(FILENAME_EMAILEXPORT, BOX_TOOLS_EMAILEXPORT, 'SSL','','2') .
                                 $returned_rci_bottom);
  }
  $box = new box;
  echo $box->menuBox($heading, $contents);
?>
            </td>
          </tr>
<!-- exporttools_eof //-->