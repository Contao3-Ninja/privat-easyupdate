<?php

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
 * @author		Glen Langer - offline fork 
 * @package		easyupdate
 * @license		LGPL
 */
$GLOBALS['TL_LANG']['MOD']['easyupdate'] = array (
	'easyUpdate',
	'Installieren Sie eine neue Version aus dem Backend heraus.'
);
$GLOBALS['TL_LANG']['easyupdate']['backBT'] = 'Zurück';
$GLOBALS['TL_LANG']['easyupdate']['headline'] = 'easyUpdate einer Contao-Version (aktuelle Version: %s)';
$GLOBALS['TL_LANG']['easyupdate']['selectfile'] = 'Bitte wählen Sie ein Archiv aus (ZIP-Datei)';
$GLOBALS['TL_LANG']['easyupdate']['description'] = 'Wählen Sie hier ein Archiv aus, welches im Verzeichnis (tl_files/easyupdate) abgelegt werden muss (ev. vorhandene Unterverzeichnisse werden nicht durchsucht). Es werden nur ZIP-Dateien unterstützt.';
$GLOBALS['TL_LANG']['easyupdate']['setfile'] = 'Auswählen';
$GLOBALS['TL_LANG']['easyupdate']['files']['original'] = 'Originaldateien';
$GLOBALS['TL_LANG']['easyupdate']['files']['backup'] = 'Backupdateien';
$GLOBALS['TL_LANG']['easyupdate']['noupdate'] = 'Dateien vom Update ausschließen';
$GLOBALS['TL_LANG']['easyupdate']['demo'] = 'Demo Dateien';
$GLOBALS['TL_LANG']['easyupdate']['config_legend'] = 'Config Dateien';
$GLOBALS['TL_LANG']['easyupdate']['other_legend'] = 'andere Dateien';
$GLOBALS['TL_LANG']['easyupdate']['all'] = 'Alle auswählen';
$GLOBALS['TL_LANG']['easyupdate']['noupdatetext'] = 'Die hier ausgewählten Dateien werden beim Aktualisieren nicht überschrieben bzw überspielt. In das Backup werde Sie aber trotzdem übernommen.';
$GLOBALS['TL_LANG']['easyupdate']['updatex'] = 'Version (%s) ======> Version (%s)';
$GLOBALS['TL_LANG']['easyupdate']['update0'] = 'Sie versuchen, eine ältere Version zu installieren. Dies ist zwar nicht ausgeschlossen, jedoch nicht empfehlenswert und auch nicht immer möglich. Es kann zu Problemen beim Login führen, da ab der TYPOlight-Version 2.7 die Passwörter zusätzlich gesalzen werden.';
$GLOBALS['TL_LANG']['easyupdate']['update1'] = 'Sie versuchen, eine neuere Version zu installieren.';
$GLOBALS['TL_LANG']['easyupdate']['update2'] = 'Sie versuchen, die gleiche Version zu installieren. Sind Sie sich sicher?';
$GLOBALS['TL_LANG']['easyupdate']['next'] = 'Nächsten Schritt ausführen';
$GLOBALS['TL_LANG']['easyupdate']['previous'] = 'Zurück zum Hauptbildschirm';
$GLOBALS['TL_LANG']['easyupdate']['settings'] = 'Einstellungen';
$GLOBALS['TL_LANG']['easyupdate']['changelog']['headline'] = 'Changelog zwischen der Version %s und %s';
$GLOBALS['TL_LANG']['easyupdate']['changelog']['same'] = 'Sie installieren die gleiche Version, daher auch keine Änderungen.';
$GLOBALS['TL_LANG']['easyupdate']['changelog']['no'] = 'Der Changelog ist leider nicht lesbar. Weitere Informationen zu den Änderungen können Sie auf der Contao-Homepage (http://www.contao.org/) nachlesen.';
$GLOBALS['TL_LANG']['easyupdate']['content'] = 'Inhalt der Archiv-Datei';
$GLOBALS['TL_LANG']['easyupdate']['backup'] = 'Sicherung der aktuellen Dateien';
$GLOBALS['TL_LANG']['easyupdate']['backuped'] = 'Gesichert: ';
$GLOBALS['TL_LANG']['easyupdate']['update'] = 'Aktualisierung der Dateien';
$GLOBALS['TL_LANG']['easyupdate']['updated'] = 'Aktualisiert: ';
$GLOBALS['TL_LANG']['easyupdate']['skipped'] = 'Übersprungen: ';
$GLOBALS['TL_LANG']['easyupdate']['error'] = 'Fehler:';
$GLOBALS['TL_LANG']['easyupdate']['exclude'] = 'auschlossen';
$GLOBALS['TL_LANG']['easyupdate']['readme']['headline'] = 'Bitte aufmerksam und vollständig vor der Benutzung lesen';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text1'] = '<h2>Die Installation besteht aus vier verschiedenen Schritten:</h2> 
														<ul><li>Auflistung der Dateien im Archiv, welches importiert werden soll</li>
														<li>Backup der aktuellen Dateien, damit man diese im Fehlerfall wiederherstellen kann</li>
														<li>Aktualisierung der erforderlichen Dateien</li>
														<li>Ausführung des Install-Tools</li></ul>
														Für den 4. Schritt wird das Install-Tool verwendet. Es kann vorkommen, dass die Datenbank aktualisiert muss; darauf wird man im Install-Tool hingewiesen.														
														Bitte beachten: Sofern die Config-Dateien überschrieben wurden, lautet das Passwort des Install-Tools "contao".';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text2'] = '<h2>Sicherheitshinweise:</h2>
														<ul><li>Es gibt keine 100%-ige Sicherheit, dass alles einwandfrei funktioniert. Seien Sie sich also bewusst, was Sie tun!</li>
														<li>Machen Sie bei der ersten Verwendung dieses Tools ruhig eine zusätzliche Sicherung der Datenbank.</li>
														<li>Das Tool greift auf das Dateisystem zu, das kann zu DATENVERLUST führen!</li>
														<li>Alles was Sie machen, tun Sie auf eigene Gefahr.</li></ul>';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text3']['left'] = '<h2>Getestete und funktionierende Vorgänge:</h2>
																<ul><li>2.9.x ====> 2.10.x</li>
																<li>2.10.x ====> 2.11.x</li></ul>';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text3']['right'] = '<h2>Getestete und fehlerhafte Vorgänge:</h2>
																<ul><li>2.6.x ====> 2.5.x</li>
																<li>2.7.x ====> 2.5.x</li>
																<li>2.7.x ====> 2.6.x</li>
																<li>2.8.x ====> 2.5.x</li>
																<li>2.5.x ====> 2.6.x</li>
                                                                <li>2.8.x ====> 2.7.x</li></ul>';
$GLOBALS['TL_LANG']['easyupdate']['readme']['text4'] = 'Getestet wurde eine Installation bis zur Contao Version 2.11. Nicht mit Contao 3.x möglich!
														Wenn eine Versionsnummer X.X.X erscheint, dann ist wahrscheinlich die ZIP-Datei beschädigt.';
?>