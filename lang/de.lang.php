<?php

/*
 * PHP Server Monitor v2.0.1
 * Monitor your servers with error notification
 * http://phpservermon.sourceforge.net/
 *
 * Copyright (c) 2008-2011 Pepijn Over (ipdope@users.sourceforge.net)
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 */

$sm_lang = array(
	'system' => array(
		'title' => 'Server Monitor',
		'servers' => 'Server',
		'users' => 'Benutzer',
		'log' => 'Log',
		'update' => 'Updates',
		'config' => 'Einstellungen',
		'help' => 'Hilfe',
		'action' => 'Aktion',
		'save' => 'Speichern',
		'edit' => 'Bearbeiten',
		'delete' => 'L&ouml;schen',
		'deleted' => 'Eintrag wurde gel&ouml;scht',
		'date' => 'Datum',
		'message' => 'Meldung',
		'yes' => 'Ja',
		'no' => 'Nein',
		'edit' => 'Bearbeiten',
		'insert' => 'Einf&uuml;gen',
		'add_new' => 'Neuen Eintrag erstellen?',
		'update_available' => 'Ein neues Update ist verf&uuml;gbar auf <a href="http://phpservermon.sourceforge.net" target="_blank">http://phpservermon.sourceforge.net</a>.',
	),
	'users' => array(
		'user' => 'Benutzer',
		'name' => 'Name',
		'mobile' => 'Mobil',
		'email' => 'Email',
		'updated' => 'Benutzer bearbeitet.',
		'inserted' => 'Benutzer eingetragen.',
	),
	'log' => array(
		'title' => 'Log Eintr&auml;ge',
		'type' => 'Type',
		'status' => 'Status',
		'email' => 'Email',
		'sms' => 'SMS',
	),
	'servers' => array(
		'server' => 'Server',
		'label' => 'Beschriftung',
		'domain' => 'Domain/IP',
		'port' => 'Port',
		'type' => 'Type',
		'last_check' => 'Letzter Check',
		'last_online' => 'Letztes mal Online',
		'monitoring' => 'Monitoring',
		'send_email' => 'Email',
		'send_sms' => 'SMS',
		'updated' => 'Server aktualisiert.',
		'inserted' => 'Server eingetragen.',
		'rtime' => 'Antwortzeit',
	),
	'config' => array(
		'general' => 'General',
		'language' => 'Sprache',
		'show_update' => 'Updats w&ouml;chentlich pr&uuml;fen?',
		'english' => 'English',
		'dutch' => 'Dutch',
		'french' => 'French',
		'german' => 'German',
		'email_status' => 'Email senden erlauben?',
		'email_from_email' => 'Email from address',
		'email_from_name' => 'Email from name',
		'sms_status' => 'SMS Nachricht senden erlauben?',
		'sms_gateway' => 'SMS Gateway',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
		'sms_gateway_username' => 'Gateway Benutzername',
		'sms_gateway_password' => 'Gateway Passwort',
		'sms_from' => 'SMS Sendernummer',
		'alert_type' =>
			'Wann m&ouml;chten Sie benachrichtig werden?<br/>'.
			'<div class="small">'.
 			'1) ...  wenn sich der Status &auml;ndert<br/>'.
			'z.B. online -> offline oder offline -> online.<br/>'.
			 '2) Offline<br/>'.
			'Sie bekommen eine Benachrichtigung, wenn ein Server Offline ist.<br/>'.
			'Es wird nur eine Mitteilung versendet.<br/>'.
			'3) Immer<br/>'.
			'Sie werden jedesmal wenn der CronJob oder das Script ausgef&uuml;hrt wird benachrichtigt,<br>'.
			'auch wenn der Dienst mehreres Stunden offline ist'.
			'</div>',

		'alert_type_status' => 'Status ge&auml;ndert',
		'alert_type_offline' => 'Offline',
		'alert_type_always' => 'Immer',
		'log_status' => 'Log Status<br/><div class="small">Ist der Log Status auf TRUE (ein Hacken) gesetzt, wird jeder Status protokolliert</div>',
		'log_email' => 'Email Log per Script senden?',
		'log_sms' => 'SMS Log per Script senden?',
		'updated' => 'Die Einstellungen wurden gespeichert.',
		'settings_email' => 'Email',
		'settings_sms' => 'SMS Nachricht',
		'settings_notification' => 'Benachrichtigung',
		'settings_log' => 'Log',
		'auto_refresh_servers' =>
			'Auto-refresh servers page<br/>'.
			'<div class="small">'.
			'Time in seconds, if 0 the page won\'t refresh.'.
			'</div>',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => 'Server \'%LABEL%\' ist Offline: ip=%IP%, port=%PORT%. Fehler=%ERROR%',
		'off_email_subject' => 'Wichtig: Server \'%LABEL%\' ist Offline',
		'off_email_body' => "Kann keine Verbindung zum Server aufbauen:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Fehler: %ERROR%<br/>Datum: %DATE%",
		'on_sms' => 'Server \'%LABEL%\' ist wieder Online: ip=%IP%, port=%PORT%',
		'on_email_subject' => 'Wichtig: Server \'%LABEL%\' ist wieder Online',
		'on_email_body' => "Server '%LABEL%' l&auml;uft wieder:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Datum: %DATE%",
	),
);

?>