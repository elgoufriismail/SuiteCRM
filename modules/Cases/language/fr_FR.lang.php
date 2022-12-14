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
    'ERR_DELETE_RECORD' => 'Un num??ro d&#39;enregistrement doit ??tre sp??cifi?? pour toute suppression.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Suggestions bases de connaissances',
    'LBL_TOOL_TIP_TITLE' => 'Titre :',
    'LBL_TOOL_TIP_BODY' => 'Corps :',
    'LBL_TOOL_TIP_INFO' => 'Informations additionnelles :',
    'LBL_TOOL_TIP_USE' => 'Utilis?? comme :',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'Aucune suggestion',
    'LBL_RESOLUTION_BUTTON' => 'R??solution',
    'LBL_SUGGESTION_BOX_STATUS' => 'Statut',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titre',
    'LBL_SUGGESTION_BOX_REL' => 'Pertinence',
    'LBL_TOTAL_CASES_FOR_THIS_ACCOUNT' => ' Total des dossiers pour ce compte : ',


    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s ?? R??aliser',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',
    'LBL_CASE_NUMBER' => 'Num??ro du Ticket :',
    'LBL_CASE' => 'Ticket :',
    'LBL_CONTACT_NAME' => 'Nom du contact :',
    'LBL_CONTACT_ROLE' => 'R??le :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tickets',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_INVITEE' => 'Contacts',
    'LBL_MEMBER_OF' => 'Compte',
    'LBL_MODULE_NAME' => 'Tickets',
    'LBL_MODULE_TITLE' => 'Tickets',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Ticket',
    'LBL_NUMBER' => 'Num??ro :',
    'LBL_PRIORITY' => 'Priorit?? :',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_RESOLUTION' => 'R??solution??:',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Ticket',
    'LBL_STATUS' => 'Statut :',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribu??',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_ASSIGNED' => 'Assign?? ??',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_FORM_TITLE' => 'Liste des Tickets',
    'LBL_LIST_LAST_MODIFIED' => 'Date de modification',
    'LBL_LIST_MY_CASES' => 'Mes Tickets ouverts',
    'LBL_LIST_NUMBER' => 'Num??ro',
    'LBL_LIST_PRIORITY' => 'Priorit??',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_SUBJECT' => 'Sujet',

    'LNK_CASE_LIST' => 'Tickets',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LBL_LIST_DATE_CREATED' => 'Date de cr??ation',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Log de travail',
    'LNK_IMPORT_CASES' => 'Import Tickets',

    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_CASE_INFORMATION' => 'Aper??u', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Mettre le texte ?? jour', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Mise ?? jour en interne',
    'LBL_AOP_CASE_UPDATES' => 'Mises ?? jour du cas',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Fil de mises ?? jour du cas',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Tout refermer',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Tout ouvrir',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Pi??ces jointes :',

    'LBL_AOP_CASE_EVENTS' => '??v??nements du Cas',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Pi??ces jointes au cas',
    'LBL_ADD_CASE_FILE' => 'Ajouter un fichier',
    'LBL_REMOVE_CASE_FILE' => 'Supprimer un fichier',
    'LBL_SELECT_CASE_DOCUMENT' => 'Choisir un document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Effacer le document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Document interne',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Fichier externe',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Cr???? par le contact',
    'LBL_CONTACT_CREATED_BY' => 'Cr???? par',
    'LBL_CASE_UPDATE_FORM' => 'Actualiser le formulaire attach??', //Form for attachments on case updates
    'LBL_SINCE' => 'Depuis:',
    'LBL_OPEN_CASES' => 'Dossiers ouverts',
);
