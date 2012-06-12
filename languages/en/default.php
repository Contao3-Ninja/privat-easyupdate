<?php
if (!defined('TL_ROOT'))
	die('You can not access this file directly!');
/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 * PHP version 5
 * @copyright	Copyright easyupdate 2009
 * @author		Lutz Schoening
 * @package		easyupdate
 * @license		LGPL
 */
$GLOBALS['TL_LANG']['MOD']['easyupdate'] = array (
	'easyUpdate',
	'Update Typolight from the Backend'
);
$GLOBALS['TL_LANG']['easyupdate']['backBT'] = 'Go back';
$GLOBALS['TL_LANG']['easyupdate']['headline'] = 'easyUpdate your Typolight-version (current version: %s)';
$GLOBALS['TL_LANG']['easyupdate']['selectfile'] = 'Please select an archive (ZIP-file)';
$GLOBALS['TL_LANG']['easyupdate']['description'] = 'Please select an archive from the directory (tl_files/easyupdate). The script do not search sub folders an accepted only ZIP-files.';
$GLOBALS['TL_LANG']['easyupdate']['setfile'] = 'select';
$GLOBALS['TL_LANG']['easyupdate']['files']['original'] = 'Original files';
$GLOBALS['TL_LANG']['easyupdate']['files']['backup'] = 'Backup files';
$GLOBALS['TL_LANG']['easyupdate']['noupdate'] = 'Exclude files for update';
$GLOBALS['TL_LANG']['easyupdate']['demo'] = 'Demo Files';
$GLOBALS['TL_LANG']['easyupdate']['config_legend'] = 'Config Files';
$GLOBALS['TL_LANG']['easyupdate']['other_legend'] = 'other Files';
$GLOBALS['TL_LANG']['easyupdate']['all'] = 'Select all';
$GLOBALS['TL_LANG']['easyupdate']['noupdatetext'] = 'You can select files which are not updated. But the backup catch also these files.';
$GLOBALS['TL_LANG']['easyupdate']['updatex'] = 'version (%s) ======> version (%s)';
$GLOBALS['TL_LANG']['easyupdate']['update0'] = 'You will install an older version of Typolight. This is not impossible, are you sure? The version 2.7 have new passwords, so a update to a lower version can be become not so easy.';
$GLOBALS['TL_LANG']['easyupdate']['update1'] = 'You will install a newer version of Typolight.';
$GLOBALS['TL_LANG']['easyupdate']['update2'] = 'You will install the same version .';
$GLOBALS['TL_LANG']['easyupdate']['next'] = 'Next step';
$GLOBALS['TL_LANG']['easyupdate']['previous'] = 'Back to home';
$GLOBALS['TL_LANG']['easyupdate']['changelog']['headline'] = 'Changelog between the version %s and %s';
$GLOBALS['TL_LANG']['easyupdate']['changelog']['same'] = 'You try to install the same version. (Notice: There are no changes.)';
$GLOBALS['TL_LANG']['easyupdate']['changelog']['no'] = 'The changelog is unable to read. For more information you can ask in the Typolight-Community (http://www.typolight.org).';
$GLOBALS['TL_LANG']['easyupdate']['content'] = 'Content of the archive';
$GLOBALS['TL_LANG']['easyupdate']['backup'] = 'Backup your files';
$GLOBALS['TL_LANG']['easyupdate']['backuped'] = 'Backed up: ';
$GLOBALS['TL_LANG']['easyupdate']['update'] = 'Update your files';
$GLOBALS['TL_LANG']['easyupdate']['updated'] = 'Updated: ';
$GLOBALS['TL_LANG']['easyupdate']['skipped'] = 'Skipped: ';
$GLOBALS['TL_LANG']['easyupdate']['error'] = 'Error: ';
$GLOBALS['TL_LANG']['easyupdate']['exclude'] = 'exclude';
$GLOBALS['TL_LANG']['easyupdate']['readme']['headline'] = 'Please read it complete before use';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text1'] = '<h2>The update have 4 steps</h2> 
														<ul><li>List the files in the archive</li>
														<li>Backup your current files</li>
														<li>Update the files</li>
														<li>Run the install tool</li></ul>
														It is possible that you must update the typolight database, in this case you see the install tool.
														If you have delete the config file, the password for the install tool is: "typolight"';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text2'] = '<h2>Security notice</h2>
														<ul><li>Nothing is 100% secure. Be carefull with this tool.</li>
														<li>You should make a database backup before run this tool the first time.</li>
														<li>This tool change the file system, a data loss is possible.</li>
														<li>You make all on your own risk.</li></ul>';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text3']['left'] = '<h2>Check and run</h2>
																<ul><li>2.5.x ====> 2.5.x</li>
																<li>2.5.x ====> 2.6.x</li>
																<li>2.5.x ====> 2.7.x</li>
																<li>2.6.x ====> 2.6.x</li>
																<li>2.6.x ====> 2.7.x</li>
																<li>2.7.x ====> 2.7.x</li>
																<li>2.7.x ====> 2.8.x</li></ul>';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text3']['right'] = '<h2>Check and error</h2>
																<ul><li>2.6.x ====> 2.5.x</li>
																<li>2.7.x ====> 2.5.x</li>
																<li>2.7.x ====> 2.6.x</li>
																<li>2.8.x ====> 2.5.x</li>
																<li>2.5.x ====> 2.6.x</li>
                                                                <li>2.8.x ====> 2.7.x</li></ul>';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text4'] = 'The installation until to the Typolight version 2.8.1 was checked, but newer version should be run too.
														The work with a version bevore the 2.5 have not checked, but a update could be possible.
														If you see as the version information X.X.X the ZIP-file could be damaged.';
?>
