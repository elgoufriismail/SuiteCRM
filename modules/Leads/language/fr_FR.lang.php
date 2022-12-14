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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Un identifiant doit ??tre sp??cifi?? pour pouvoir supprimer le prospect.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Description compte',
    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s ?? r??aliser',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - R??gion',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Tous les t??l??phones :',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur attribu?? :',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACT_ID' => 'Contact (ID)',
    'LBL_CONTACT_INFORMATION' => 'Aper??u', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom du prospect :',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Prospect-Affaire :',
    'LBL_CONTACT_ROLE' => 'R??le :',
    'LBL_CONTACT' => 'Prospect :',
    'LBL_CONVERTED_ACCOUNT' => 'Compte converti :',
    'LBL_CONVERTED_CONTACT' => 'Contact converti :',
    'LBL_CONVERTED_OPP' => 'Affaire convertie :',
    'LBL_CONVERTED' => 'Converti',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir le prospect',
    'LBL_CONVERTLEAD' => 'Convertir le prospect',
    'LBL_CONVERTLEAD_WARNING' => 'Attention : Le statut du prospect que vous souhaitez convertir est "converti". Un contact et/ou un compte ont sans doute d??ja ??t?? cr????s ?? partir des informations de ce prospect. Si vous souhaitez tout de m??me convertir ce prospect, cliquez sur "sauvegarder". Sinon cliquez sur "annuler" pour retourner sur la page pr??c??dente.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact possible??: ',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATED_NEW' => 'Cr??ation',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte cr????',
    'LBL_CREATED_CALL' => 'Nouvel Appel cr????',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact cr????',
    'LBL_CREATED_MEETING' => 'Nouvelle R??union cr????e',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Affaire cr????e',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospects',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_DUPLICATE' => 'Prospects similaires',
    'LBL_EMAIL_ADDRESS' => 'Adresse ??lectronique :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilis??',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilis??',
    'LBL_EXISTING_OPPORTUNITY' => 'Affaire existante utilis??e',
    'LBL_FAX_PHONE' => 'Fax :',
    'LBL_FIRST_NAME' => 'Pr??nom :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'T??l??phone (domicile) :',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Cr??er automatiquement un nouveau prospect par import de vcard depuis votre syst??me.',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Rapports directs',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Description de la origine du prospect :',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut d&#39;acceptation',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom du Prospect',
    'LBL_LIST_CONTACT_ROLE' => 'R??le',
    'LBL_LIST_DATE_ENTERED' => 'Date de cr??ation',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Pr??nom',
    'LBL_LIST_FORM_TITLE' => 'Liste des Prospects',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Description origine principale',
    'LBL_LIST_LEAD_SOURCE' => 'Origine principale',
    'LBL_LIST_MY_LEADS' => 'Mes Prospects',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'T??l??phone du bureau',
    'LBL_LIST_REFERED_BY' => 'Fait r??f??rence ??',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'T??l??phone mobile :',
    'LBL_MODULE_NAME' => 'Prospects',
    'LBL_MODULE_TITLE' => 'Prospects : Accueil',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Prospect',
    'LBL_OFFICE_PHONE' => 'T??l??phone du bureau :',
    'LBL_OPP_NAME' => 'Nom Affaire :',
    'LBL_OPPORTUNITY_AMOUNT' => 'Montant Affaire :',
    'LBL_OPPORTUNITY_ID' => 'Affaire (ID)',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre t??l??phone :',
    'LBL_PHONE' => 'T??l??phone :',
    'LBL_PORTAL_APP' => 'Portail application',
    'LBL_PORTAL_INFORMATION' => 'Information sur le portail ',
    'LBL_PORTAL_NAME' => 'Nom sur le portail :',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_STREET' => 'Rue',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresse principale - Ville',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresse principale - Pays',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresse principale - Code Postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresse principale - R??gion',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresse principale - Rue 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresse principale - Rue 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse principale - Rue 1',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',
    'LBL_REFERED_BY' => 'Fait r??f??rence ?? :',
    'LBL_REPORTS_TO_ID' => 'Rend compte ?? (ID)',
    'LBL_REPORTS_TO' => 'Rend compte ?? :',
    'LBL_SALUTATION' => 'Civilit??',
    'LBL_MODIFIED' => 'Modifi?? par',
    'LBL_CREATED' => 'Cr???? par',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un prospect',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'S??lectionner prospects v??rifi??s',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'S??lectionner prospects v??rifi??s',
    'LBL_STATE' => '??tat ou r??gion :',
    'LBL_STATUS_DESCRIPTION' => 'Description Statut :',
    'LBL_STATUS' => 'Statut :',
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LNK_IMPORT_VCARD' => 'Ins??rer une vCard',
    'LNK_LEAD_LIST' => 'Voir les prospects',
    'LNK_NEW_ACCOUNT' => 'Cr??er un compte',
    'LNK_NEW_APPOINTMENT' => 'Planifier un Rendez-vous ou un Appel',
    'LNK_NEW_CONTACT' => 'Cr??ation du Contact',
    'LNK_NEW_LEAD' => 'Cr??er un prospect',
    'LNK_NEW_NOTE' => 'Cr??er Note',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_CALL' => 'Journal d\'appel',
    'LNK_NEW_MEETING' => 'Organiser une r??union',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er une nouvelle Affaire',
    'LNK_SELECT_ACCOUNTS' => ' <b>OU</b> S??lectionner un Compte',
    'LNK_SELECT_CONTACTS' => ' <b>Ou</b> S??lectionnez le Contact',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer ce prospect ?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribu??',
    'LBL_PROSPECT_LIST' => 'Liste des prospects',
    'LBL_CAMPAIGN_LEAD' => 'Campagne(s)',
    'LBL_BIRTHDATE' => 'Date de naissance??:',
    'LBL_ASSISTANT_PHONE' => 'T??l??phone assistant',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Requis',
    'LBL_CONVERT_SELECT' => 'S??lection',
    'LBL_CONVERT_COPY' => 'Copier',
    'LBL_CONVERT_EDIT' => 'Modifier',
    'LBL_CONVERT_DELETE' => 'Supprimer',
    'LBL_CONVERT_ADD_MODULE' => 'Ajouter Module',
    'LBL_CREATE' => 'Cr??ation',
    'LBL_SELECT' => '<b>OU</b> S??lectionner',
    'LBL_WEBSITE' => 'Site web',
    'LNK_IMPORT_LEADS' => 'Importer des prospects',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Le module dans lequel vous souhaitez cr??er un nouvel enregistrement.',
    'LBL_REQUIRED_TIP' => 'Les modules requis doivent ??tre cr????s ou s??lectionn??s avant de convertir le prospect.',
    'LBL_COPY_TIP' => 'Si la case est coch??e, les champs du prospect seront copi??s dans les champs ayant le m??me nom dans les enregistrements des modules de destination.',
    'LBL_SELECTION_TIP' => 'Les modules li??s avec le module contacts pourront ??tre s??lectionn??s plut??t que cr????s durant le processus de conversion des prospects.',
    'LBL_EDIT_TIP' => 'Modifier la mise en page de conversion pour ce module.',
    'LBL_DELETE_TIP' => 'Supprimer ce module de la mise en page de conversion.',

    'LBL_ACTIVITIES_MOVE' => 'D??placer les activit??s vers',
    'LBL_ACTIVITIES_COPY' => 'Copier les activit??s vers',
    'LBL_ACTIVITIES_MOVE_HELP' => "S??lectionner les enregistrements vers lesquels les activit??s du prospect seront d??plac??es lors de la conversion. Les activit??s de type t??ches, appels, r??unions, notes et E-mails seront d??plac??es vers ces enregistrement s??lectionn??s.",
    'LBL_ACTIVITIES_COPY_HELP' => "S??lectionner les enregistrements vers lesquels les activit??s du prospect seront copi??es lors de la conversion. Des activit??s de type t??ches, appels, r??unions et notes seront cr????s pour chacun des enregistrements s??lectionn??s. Les E-mails seront rattach??s aux enregistrements s??lectionn??s.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EDITLAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Pr??ciser la date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifier' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => '??v??nements',
);
