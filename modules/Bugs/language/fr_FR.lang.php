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
    'LBL_MODULE_NAME' => 'Anomalies',
    'LBL_MODULE_TITLE' => 'Suivi de Anomalies : Accueil',
    'LBL_MODULE_ID' => 'Anomalies',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Bug',
    'LBL_LIST_FORM_TITLE' => 'Liste des Anomalies',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Bug',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_NUMBER' => 'Num??ro :',
    'LBL_STATUS' => 'Statut :',
    'LBL_PRIORITY' => 'Priorit?? :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_CONTACT_NAME' => 'Nom du contact :',
    'LBL_CONTACT_ROLE' => 'R??le :',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_PRIORITY' => 'Priorit??',
    'LBL_LIST_RESOLUTION' => 'R??solution',
    'LBL_LIST_LAST_MODIFIED' => 'Date de modification',
    'LBL_INVITEE' => 'Contacts',
    'LBL_TYPE' => 'Type :',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => 'R??solution??:',
    'LBL_RELEASE' => 'Version :',
    'LNK_NEW_BUG' => 'Signaler Bug',
    'LNK_BUG_LIST' => 'Voir Anomalies',
    'ERR_DELETE_RECORD' => 'un num??ro d&#39;enregistrement doit ??tre sp??cifi?? pour toute suppression.',
    'LBL_LIST_MY_BUGS' => 'Mes Anomalies',
    'LNK_IMPORT_BUGS' => 'Importer des Anomalies',
    'LBL_FOUND_IN_RELEASE' => 'Trouv?? dans la version??:',
    'LBL_FIXED_IN_RELEASE' => 'Corrig??s dans la version??:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Fix?? en Release',
    'LBL_WORK_LOG' => 'Historique de travail :',
    'LBL_SOURCE' => 'Source :',
    'LBL_PRODUCT_CATEGORY' => 'Cat??gorie :',

    'LBL_CREATED_BY' => 'Cr???? par :',
    'LBL_MODIFIED_BY' => 'Modifi?? par :',

    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse ??lectronique',
    'LBL_LIST_CONTACT_NAME' => 'Nom du contact',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_PHONE' => 'T??l??phone',
    'NTC_DELETE_CONFIRMATION' => 'Etes-vous s??r(e) de vouloir supprimer ce Contact du Bug ?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Suivi Anomalies',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s ?? R??aliser',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribu??',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',

    'LBL_BUG_INFORMATION' => 'Aper??u', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
