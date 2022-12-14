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

    'LBL_SHAREDWEEK' => 'Semaine partag??e',
    'LBL_SHAREDMONTH' => 'Mois partag??',

    'LBL_MODULE_NAME' => 'Calendrier',
    'LBL_MODULE_TITLE' => 'Calendrier',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Organiser une r??union',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_CALL_LIST' => 'Appels',
    'LNK_MEETING_LIST' => 'R??unions',
    'LNK_TASK_LIST' => 'T??ches',
    'LNK_TASK' => 'T??che',
    'LNK_TASK_VIEW' => 'Voir la t??che',
    'LNK_EVENT' => 'Ev??nement',
    'LNK_EVENT_VIEW' => 'Voir l\'??v??nement',
    'LNK_VIEW_CALENDAR' => 'Aujourd&#39;hui',
    'LNK_IMPORT_CALLS' => 'Import des Appels',
    'LNK_IMPORT_MEETINGS' => 'Import des R??unions',
    'LNK_IMPORT_TASKS' => 'Importer des t??ches',
    'LBL_MONTH' => 'Mois',
    'LBL_AGENDADAY' => 'Jour',
    'LBL_YEAR' => 'Ann??e',

    'LBL_AGENDAWEEK' => 'Semaine',
    'LBL_PREVIOUS_MONTH' => 'Mois Pr??c??dent',
    'LBL_PREVIOUS_DAY' => 'Jour Pr??c??dent',
    'LBL_PREVIOUS_YEAR' => 'Ann??e Pr??c??dente',
    'LBL_PREVIOUS_WEEK' => 'Sem. pr??c??dente',
    'LBL_NEXT_MONTH' => 'Mois Suivant',
    'LBL_NEXT_DAY' => 'Jour Suivant',
    'LBL_NEXT_YEAR' => 'Ann??e Suivante',
    'LBL_NEXT_WEEK' => 'Sem. suivante',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planifi??',
    'LBL_BUSY' => 'Occup??',
    'LBL_CONFLICT' => 'Conflit',
    'LBL_USER_CALENDARS' => 'Calendriers des utilisateurs',
    'LBL_SHARED' => 'Partag??',
    'LBL_PREVIOUS_SHARED' => 'Pr??c??dent',
    'LBL_NEXT_SHARED' => 'Suivant',
    'LBL_SHARED_CAL_TITLE' => 'Calendrier partag??',
    'LBL_USERS' => 'Assign?? ??',
    'LBL_REFRESH' => 'Rafra??chir',
    'LBL_EDIT_USERLIST' => 'Liste des Utilisateurs',
    'LBL_SELECT_USERS' => 'S??lectionner les utilisateurs ?? afficher sur le calendrier',
    'LBL_FILTER_BY_TEAM' => 'Filtrer la liste des utilisateurs par ??quipe :',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_DATE' => 'Date et Heure de d??but',
    'LBL_CREATE_MEETING' => 'Organiser une r??union',
    'LBL_CREATE_CALL' => 'Journal d\'appel',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_SETTINGS' => 'Param??tres',
    'LBL_CREATE_NEW_RECORD' => 'Cr??er une activit??',
    'LBL_LOADING' => 'Chargement...',
    'LBL_SAVING' => 'Sauvegarde...',
    'LBL_SENDING_INVITES' => 'Sauver et envoyer des invitations...',
    'LBL_CONFIRM_REMOVE' => 'Etes vous s??r de vouloir supprimer cet enregistrement ?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Etes vous s??r de vouloir supprimer tous les enregistrements r??currents ?',
    'LBL_EDIT_RECORD' => 'Editer activit??',
    'LBL_ERROR_SAVING' => 'Erreur lors de la sauvegarde',
    'LBL_ERROR_LOADING' => 'Erreur lors du chargement',
    'LBL_GOTO_DATE' => 'Aller ?? la date',
    'NOTICE_DURATION_TIME' => 'La dur??e doit ??tre sup??rieure ?? 0',
    'LBL_STYLE_BASIC' => 'Basique', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avanc??e', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Aucune correspondance pour le champ : attribu?? ??',
    'LBL_SUBJECT' => 'Sujet',
    'LBL_DURATION' => 'Dur??e',
    'LBL_STATUS' => 'Statut',
    'LBL_PRIORITY' => 'Priorit??',

    'LBL_SETTINGS_TITLE' => 'Param??tres',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Afficher les cr??neaux horaires dans les vues Jour et Semaine :',
    'LBL_SETTINGS_TIME_STARTS' => 'Heure de d??but :',
    'LBL_SETTINGS_TIME_ENDS' => 'Heure fin :',
    'LBL_SETTINGS_CALLS_SHOW' => 'Voir les appels :',
    'LBL_SETTINGS_TASKS_SHOW' => 'Voir les t??ches :',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Voir les r??union, appels et t??ches termin??s :',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Calendrier partag?? distinct??:',

    'LBL_SAVE_BUTTON' => 'Sauvegarder',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_APPLY_BUTTON' => 'Appliquer',
    'LBL_SEND_INVITES' => 'Enregistrer & envoyer des invitations',
    'LBL_CANCEL_BUTTON' => 'Annuler',
    'LBL_CLOSE_BUTTON' => 'Cl??turer',

    'LBL_GENERAL_TAB' => 'D??tails',
    'LBL_PARTICIPANTS_TAB' => 'Participants',
    'LBL_REPEAT_TAB' => 'R??currence',

    'LBL_REPEAT_TYPE' => 'R??p??ter',
    'LBL_REPEAT_INTERVAL' => 'Intervalle',
    'LBL_REPEAT_END' => 'Fin',
    'LBL_REPEAT_END_AFTER' => 'Apr??s',
    'LBL_REPEAT_OCCURRENCES' => 'r??currences',
    'LBL_REPEAT_END_BY' => 'Le',
    'LBL_REPEAT_DOW' => 'Le',
    'LBL_REPEAT_UNTIL' => 'R??p??ter jusqu&#39;??',
    'LBL_REPEAT_COUNT' => 'Nombre de r??currences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Votre requ??te allait cr??er plus de $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les r??currences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les r??currences',

    'LBL_DATE_END_ERROR' => 'La date de fin est avant la date de d??but',
    'ERR_YEAR_BETWEEN' => 'D??sol??, le calendrier ne peut pas afficher l&#039;ann??e que vous avez demand??e<br>Ann??e doit ??tre compris entre 1970 et 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non d??finit pour cette vue',
    'LBL_NO_ITEMS_MOBILE' => 'Votre calendrier est libre pour la semaine.',
    'LBL_GENERAL_SETTINGS' => 'Param??tres g??n??raux',
    'LBL_COLOR_SETTINGS' => 'Param??tres des couleurs',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Corps',
    'LBL_BORDER' => 'Bordure',
    'LBL_TEXT' => 'Texte',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Dim",
            '1' => "Lun",
            '2' => "Mar",
            '3' => "Mer",
            '4' => "Jeu",
            '5' => "Ven",
            '6' => "Sam",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Le dimanche",
            '1' => "Le lundi",
            '2' => "Le mardi",
            '3' => "Le mercredi",
            '4' => "Le jeudi",
            '5' => "Le vendredi",
            '6' => "Le samedi",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "F??v",
            '3' => "Mars",
            '4' => "Avr",
            '5' => "Mai",
            '6' => "Juin",
            '7' => "Juil",
            '8' => "Ao??t",
            '9' => "Sept",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "D??c",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Janvier",
            '2' => "F??vrier",
            '3' => "Mars",
            '4' => "Avril",
            '5' => "Mai",
            '6' => "Juin",
            '7' => "Juillet",
            '8' => "Ao??t",
            '9' => "Septembre",
            '10' => "Octobre",
            '11' => "Novembre",
            '12' => "D??cembre",
        ),
);
