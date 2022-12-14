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
    'LBL_ACCOUNT_ID' => 'Compte (ID) :',
    'LBL_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s ?? r??aliser',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville :',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays :',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal :',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - R??gion :',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2 :',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3 :',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1 :',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Tous les t??l??phones :',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ?? :',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur attribu??',
    'LBL_ASSISTANT_PHONE' => 'Assistant - T??l :',
    'LBL_ASSISTANT' => 'Assistant :',
    'LBL_BIRTHDATE' => 'Date de naissance??:',
    'LBL_CITY' => 'Ville :',
    'LBL_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_CONTACT_INFORMATION' => 'Aper??u', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom du contact :',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Affaire :',
    'LBL_CONTACT_ROLE' => 'R??le :',
    'LBL_CONTACT' => 'Contact :',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte cr????',
    'LBL_CREATED_CALL' => 'Nouvel Appel cr????',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact cr????',
    'LBL_CREATED_MEETING' => 'Nouvelle R??union cr????e',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Affaire cr????e',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Rapports directs',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_DUPLICATE' => 'Doublons de Contacts Possible',
    'LBL_EMAIL_ADDRESS' => 'Adresse ??lectronique :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilis??',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilis??',
    'LBL_EXISTING_OPPORTUNITY' => 'Affaire existante utilis??e',
    'LBL_FAX_PHONE' => 'Fax :',
    'LBL_FIRST_NAME' => 'Pr??nom :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'T??l??phone (domicile) :',
    'LBL_ID' => 'ID :',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Cr??er automatiquement un nouveau contact en important une carte de Visite de votre fichier syst??me.',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Rapports directs',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom du contact',
    'LBL_LIST_CONTACT_ROLE' => 'R??le',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Pr??nom',
    'LBL_LIST_FORM_TITLE' => 'Liste des Contacts',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'T??l??phone du bureau',
    'LBL_LIST_TITLE' => 'Intitul?? du poste',
    'LBL_MOBILE_PHONE' => 'T??l??phone mobile :',
    'LBL_MODIFIED' => 'Modifi?? par :',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'Contacts',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Contact',
    'LBL_NOTE_SUBJECT' => 'Objet de la Note',
    'LBL_OFFICE_PHONE' => 'T??l??phone du bureau :',
    'LBL_OPP_NAME' => 'Nom Affaire :',
    'LBL_OPPORTUNITY_ROLE_ID' => 'R??le pour cette Affaire (ID) :',
    'LBL_OPPORTUNITY_ROLE' => 'R??le pour cette Affaire',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre t??l??phone :',
    'LBL_PHONE' => 'T??l??phone :',
    'LBL_PORTAL_APP' => 'Demande de Portail :',
    'LBL_PORTAL_INFORMATION' => 'Information sur le Portail',
    'LBL_PORTAL_NAME' => 'Nom sur le portail :',
    'LBL_STREET' => 'Rue',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'R??gion (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',
    'LBL_PRODUCTS_TITLE' => 'Produits',
    'LBL_REPORTS_TO_ID' => 'Rend compte ?? (ID) :',
    'LBL_REPORTS_TO' => 'Rend compte ?? :',
    'LBL_RESOURCE_NAME' => 'Nom de la Resource',
    'LBL_SALUTATION' => 'Titre :',
    'LBL_SAVE_CONTACT' => 'Sauvegarder le Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Utiliser Contacts s??lectionn??s',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Utiliser Contacts s??lectionn??s',
    'LBL_STATE' => '??tat ou r??gion :',
    'LBL_SYNC_CONTACT' => 'Synchroniser pour Outlook&reg; :',
    'LBL_PROSPECT_LIST' => 'Liste des prospects',
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LNK_CONTACT_LIST' => 'Contacts',
    'LNK_IMPORT_VCARD' => 'Ins??rer une vCard',
    'LNK_NEW_ACCOUNT' => 'Cr??er un compte',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_CALL' => 'Journal d\'appel',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_CONTACT' => 'Cr??er Contact',
    'LNK_NEW_EMAIL' => 'Archiver E-mail',
    'LNK_NEW_MEETING' => 'Organiser une r??union',
    'LNK_NEW_NOTE' => 'Cr??er Note',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er une Affaire',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_SELECT_ACCOUNT' => "S??lectionner Compte",
    'NTC_DELETE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer cet enregistrement ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Cr??er une Affaire n??cessite un Compte associ??.<br /> Merci de le cr??er ou de le s??lectionner.',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer ce contact pour ce ticket?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copie de l&#39;adresse principale',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copie de l&#39;adresse secondaire',

    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECTS_RESOURCES' => 'Ressources projet',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_STATE' => 'R??gion',
    'LBL_HOMEPAGE_TITLE' => 'Mes Contacts',
    'LBL_OPPORTUNITIES' => 'Affaires',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LNK_IMPORT_CONTACTS' => 'Importer des contacts',

    // SNIP
    'LBL_USER_SYNC' => 'Synchro utilisateur',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => '??v??nements',

    'LBL_AOP_CASE_UPDATES' => 'Mises ?? jour du cas',
    'LBL_CREATE_PORTAL_USER' => 'Cr??er le portail utilisateur',
    'LBL_ENABLE_PORTAL_USER' => 'Activer le portail utilisateur',
    'LBL_DISABLE_PORTAL_USER' => 'D??sactiver le portail utilisateur',
    'LBL_CREATE_PORTAL_USER_FAILED' => '??chec de la cr??ation du portail utilisateur',
    'LBL_ENABLE_PORTAL_USER_FAILED' => '??chec de l\'activation du portail utilisateur',
    'LBL_DISABLE_PORTAL_USER_FAILED' => '??chec de la d??sactivation du portail utilisateur',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portail utilisateur cr????e',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur activ??',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur d??sactiv??',
    'LBL_NO_JOOMLA_URL' => 'Pas d\'URL sp??cifi??e pour le portail',
    'LBL_PORTAL_USER_TYPE' => 'Type de portail utilisateur',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Compte d??sactiv??',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID de compte Joomla',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_QUOTES' => 'Devis',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contacts du projet depuis le nom du projet',
    'LBL_LAST_MEETING' => 'Votre derni??re interaction a ??t?? une r??union le :',
    'LBL_LAST_CALL' => 'Votre derni??re interaction a ??t?? un appel le :',
    'LBL_LAST_EMAIL' => 'Votre derni??re interaction a ??t?? un email sur :',
    'LBL_NO_INTERACTION' => 'Vous n\'avez pas encore interagi avec ce contact.',
);
