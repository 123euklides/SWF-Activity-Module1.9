<?php
/*
*    Copyright (C) 2009  Matt Bury - matbury@gmail.com - http://matbury.com/
*
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * This script contains the English language strings throughout the SWF Activity Module
 * pages. If you can, please translate this page and the mod/swf/lang/en_utf8/help/ into
 * other languages.
 *
 * @author Matt Bury - matbury@gmail.com - http://matbury.com/
 * @version $Id: grade.php,v 1.0 2010/02/10 matbury Exp $
 * @licence http://www.gnu.org/copyleft/gpl.html GNU Public Licence
 * @package swf
 **/

// Default module labels
$string['swf'] = 'SWF';
$string['modulename'] = 'SWF';
$string['modulenameplural'] = 'SWFs';
// Titles for mod/swf/mod_form.php sections
$string['swfname'] = 'Name';
$string['swfintro'] = 'Description';
//---------------------------------------------------------------------------------------------
// Labels for mod/swf/swfs_form.php
// Required
$string['swfrequired'] = 'SWF Parameters'; // header
//
$string['swfurl'] = 'Application or file';
$string['swfurlinfo'] = 'Use the default Moodle file picker or restrict to a drop down list of Flash applications in course moodledata /swf/ directory only.';
$string['dataroot'] = 'Alternative dataroot';
$string['datarootinfo'] = 'Set an alternative PHP dataroot path to course directories, e.g. /home/sites/yoursite.com/public_html/altdata. On some non-standard Moodle installations, scripts in moodle/lib/amfphp/services/ may not be able to write files in the standard dataroot. Changing this setting is a last resort after IT support cannot resolve the issue on the server configuration. Affects moodle/lib/amfphp/services/ only; \$CFG->dataroot remains unchanged. WARNING: If you change this and you don\'t know what you\'re doing, the sky will fall on your head!';
$string['wwwroot'] = 'Alternative wwwroot';
$string['wwwrootinfo'] = 'If you\'ve changed swf_dataroot, change swf_wwwroot to match the HTTP URL path. This is only used in specific scripts in moodle/lib/amfphp/services/ that require fwrite access if swf_dataroot is different to \$CFG->dataroot. Regular access to moodledata course directories via the SWF Activity Module remains unaffected.';
$string['width'] = 'Width';
$string['height'] = 'Height';
$string['fullbrowser'] = 'Full Browser';
$string['fullbrowserinfo'] = 'Set width and height of Flash app to fill browser window (requires Javascript)';
$string['version'] = 'Version';
// Optional
//XML
$string['xml'] = 'XML Learning Interaction Data';
$string['xmlurl'] = 'XML File';
//FlashVars
$string['flashvars'] = 'FlashVars Learning Interaction Data';
$string['name'] = 'Name';
$string['value'] = 'Value';
//Extras
$string['extras'] = 'Extras';
$string['notes'] = 'Notes';
// Grading
$string['grading'] = 'Grading';
$string['gradetype'] = 'Grade Type';
$string['scale'] = 'Scale';
$string['grademax'] = 'Maximum Grade';
$string['grademin'] = 'Minimum Grade';
$string['gradepass'] = 'Pass Grade';
$string['sequenced'] = 'Conditional sequencing';
$string['sequencedheader'] = 'You must completed these activities in the following order:';
$string['sequencednext'] = 'Go to ';
$string['sequencedcompleted'] = 'You have successfully completed all these activities.';
$string['sequencedinfo'] = 'User must successfully complete each module instance in sequence before attempting next. CAUTION: Only works with Flash apps that push grades.';
$string['allowreview'] = 'Allow review';
$string['allowreviewinfo'] = 'If SWF instance is in a sequence, learners can review it once passed.';
$string['gradeupdate'] = '[Edit via grade book]';
$string['gradedisplaytype'] = 'Grade Display Type';
$string['gradenotfound'] = '[Not found]';
$string['decimalpoints'] = 'Decimal Points';
$string['feedback'] = 'Feedback Text';
$string['feedbacklink'] = 'Feedback Link';
//Advanced
$string['advanced'] = 'Advanced Parameters'; // header
$string['skin'] = 'Skin';
$string['apikey'] = 'API Key';
$string['align'] = 'Align';
$string['play'] = 'Auto Play';
$string['loop'] = 'Loop Playback';
$string['menu'] = 'Menu';
$string['quality'] = 'Quality';
$string['scale'] = 'Scale Mode';
$string['salign'] = 'Stage Align';
$string['wmode'] = 'Window Mode';
$string['bgcolor'] = 'Background Color';
$string['devicefont'] = 'Use Device Font';
$string['seamlesstabbing'] = 'Seamless Tabbing';
$string['allowfullscreen'] = 'Allow Full Screen';
$string['allowscriptaccess'] = 'Allow Script Access';
$string['allownetworking'] = 'Allow Networking';
$string['configxml'] = 'SWF Config File';
//---------------------------------------------------------------------------------------------
// SWF embed alternative content error message for mod/swf/view.php
$string['embederror1'] = '<h1>Oops!</h1>
<h2>There was a problem with this activity.</h2>
<h3>Possible causes:</h3>
<h3>1. This activity is misconfigured.</h3>
<h3>2. Javascript is disabled in your web browser.</h3>
<h3>3. Flash Player is disabled in your web browser.</h3>
<h3>4. This activity requires Flash Player ';
$string['embederror2'] = ' or later.</h3>';
//---------------------------------------------------------------------------------------------
// Reports and grades
$string['report'] = 'Report';
$string['reportstudent'] = 'Grade Report';
$string['reportlastattempt'] = 'Last attempt';
$string['reportallattempts'] = 'Attempt history';
$string['reportattempts'] = '#';
$string['reportsection'] = '';
$string['reportactivity'] = 'Activity';
$string['reportuser'] = 'User';
$string['reportdate'] = 'Date';
$string['reporttime'] = 'Time';
$string['reportgrade'] = 'Final grade';
$string['reportduration'] = 'Duration';
$string['reportdurationtotal'] = 'Duration';
$string['reportdurationtotalhistory'] = '';
$string['reportaveragegradehistory'] = 'Grade';
$string['reportaveragegrade'] = 'Grades';
$string['reportfeedback'] = 'Feedback';
$string['reporterror'] = 'Error Report';
$string['reportnogrades'] = 'No grades found.';
$string['reportnoinstances'] = 'No SWF Activities found.';
//---------------------------------------------------------------------------------------------
// AMFPHP messages
$string['amfenabled'] = 'This feature is enabled.';
$string['amfnotenabled'] = 'This feature is not enabled.';
//
?>