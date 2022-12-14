<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ACCEPT_THIS' => 'Accepter ?',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter des participants',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Cr???? par',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_DATE_TIME' => 'Date et Heure d??but :',
    'LBL_DATE' => 'Date de d??but :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'R??unions',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DIRECTION' => 'Sens du tri :',
    'LBL_DURATION_HOURS' => 'Dur??e en heures :',
    'LBL_DURATION_MINUTES' => 'Dur??e en minutes :',
    'LBL_DURATION' => 'Dur??e :',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Pr??nom',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(heures/minutes)',
    'LBL_INVITEE' => 'Participants',
    'LBL_LAST_NAME' => 'Nom',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ?? :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribu??',
    'LBL_LIST_CLOSE' => 'Cl??turer',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
    'LBL_LIST_DATE' => 'Date de d??but',
    'LBL_LIST_DIRECTION' => 'Sens',
    'LBL_LIST_DUE_DATE' => 'Date pr??vue',
    'LBL_LIST_FORM_TITLE' => 'Liste des R??unions',
    'LBL_LIST_MY_MEETINGS' => 'Mes Rendez-vous',
    'LBL_LIST_RELATED_TO' => 'Relatif ??',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_LOCATION' => 'Localisation :',
    'LBL_MINSS_ABBREV' => 'min',
    'LBL_MODIFIED_BY' => 'Modifi?? par',
    'LBL_MODULE_NAME' => 'R??unions',
    'LBL_MODULE_TITLE' => 'R??unions',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_FORM_TITLE' => 'Planifier R??union',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Fr??quence de mise ?? jour de la r??union',
    'LBL_PHONE' => 'T??l??phone du bureau :',
    'LBL_REMINDER_TIME' => 'Heure de la notification',
    'LBL_EMAIL_REMINDER_SENT' => 'Notification par E-mail envoy??e',
    'LBL_REMINDER' => 'Rappels :',
    'LBL_REMINDER_POPUP' => 'Rappel utilisateurs',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Envoyer un E-mail ?? tous les invit??s',
    'LBL_EMAIL_REMINDER' => 'Notification par E-mail',
    'LBL_EMAIL_REMINDER_TIME' => 'Horaire notification par E-mail',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
    'LBL_SEARCH_BUTTON' => 'Rechercher',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une R??union',
    'LBL_SEND_BUTTON_LABEL' => 'Enregistrer & envoyer des invitations',
    'LBL_SEND_BUTTON_TITLE' => 'Enregistrer & envoyer des invitations',
    'LBL_STATUS' => 'Statut :',
    'LBL_TYPE' => 'Type',
    'LBL_PASSWORD' => 'Mot de passe',
    'LBL_URL' => 'D??marrer/rejoindre la r??union',
    'LBL_HOST_URL' => 'URL h??te',
    'LBL_DISPLAYED_URL' => 'URL affich??e',
    'LBL_CREATOR' => 'Cr???? par',
    'LBL_EXTERNALID' => 'ID application externe',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_TIME' => 'Heure de d??but :',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_PARENT_TYPE' => 'Type de parent',
    'LBL_PARENT_ID' => 'Parent (ID)',
    'LNK_MEETING_LIST' => 'R??unions',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_MEETING' => 'Organiser une r??union',
    'LNK_IMPORT_MEETINGS' => 'Import R??unions',

    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'NOTICE_DURATION_TIME' => 'La dur??e doit ??tre sup??rieur ?? 0',
    'LBL_MEETING_INFORMATION' => 'Aper??u', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Joindre la r??union',
    'LBL_ACCEPT_STATUS' => 'Statut acceptation',
    'LBL_ACCEPT_LINK' => 'Lien acceptation',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Vous n&#39;??tes pas autoris?? ?? joindre cette r??union car vous n&#39;??tes pas un des participants de celle-ci.',
    'LBL_EXTNOT_RECORD_LINK' => 'Voir la r??union',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Vous ne pouvez pas d??marrer cette r??union car vous ??tes ni un administrateur ni le responsable de cette r??union.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Cr??er un invit??',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Comme un prospect',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Cr??er et Ajouter',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'D??sol??, aucun r??sultat trouv??. Veuillez cr??er un invit?? ci-dessous.',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun acc??s pour cr??er $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'R??p??tition type',
    'LBL_REPEAT_INTERVAL' => 'R??p??tition intervalle',
    'LBL_REPEAT_DOW' => 'R??p??tition depuis',
    'LBL_REPEAT_UNTIL' => 'R??p??ter jusqu&#39;??',
    'LBL_REPEAT_COUNT' => 'R??p??tition occurences',
    'LBL_REPEAT_PARENT_ID' => 'R??p??tition ID parent',
    'LBL_RECURRING_SOURCE' => 'Source r??currence',

    'LBL_SYNCED_RECURRING_MSG' => 'Cette r??union provient d\'une application externe et a ??t?? synchronis?? avec SuiteCRM. Une fois ??diter dans SuiteCRM, cette r??union ne sera plus synchronis??e avec cette application externe.',
    'LBL_RELATED_TO' => 'Relatif ?? :',

    // for reminders
    'LBL_REMINDERS' => 'Rappel par d??faut',
    'LBL_REMINDERS_ACTIONS' => 'Actions',
    'LBL_REMINDERS_POPUP' => 'Rappel utilisateurs',
    'LBL_REMINDERS_EMAIL' => 'E-mail invit??s',
    'LBL_REMINDERS_WHEN' => 'Quand :',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Supprimer le rappel',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Ajouter tous les invit??s',
    'LBL_REMINDERS_ADD_REMINDER' => 'Ajouter un rappel',

    // for google sync
    'LBL_GSYNC_ID' => 'ID d?????v??nement Google',
    'LBL_GSYNC_LASTSYNC' => 'Dernier horodatage de Google Sync',
);
