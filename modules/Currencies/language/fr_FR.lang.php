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
    'LBL_MODULE_NAME' => 'Devises',
    'LBL_LIST_FORM_TITLE' => 'Devises',
    'LBL_CURRENCY' => 'Devise',
    'LBL_ADD' => 'Ajouter',
    'LBL_MERGE' => 'Fusionner',
    'LBL_MERGE_TXT' => 'Veuillez s??lectionner les devises que vous voulez affecter ?? la devise s??lectionn??e. Ceci effacera toutes les devises coch??es et r??-assignera les valeurs associ??es ?? la devise s??lectionn??e.',
    'LBL_US_DOLLAR' => 'Dollar US',
    'LBL_DELETE' => 'Supprimer',
    'LBL_LIST_SYMBOL' => 'Symbole de la devise',
    'LBL_LIST_NAME' => 'Devise',
    'LBL_LIST_ISO4217' => 'Code devise ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Saisir un code ISO 4217 ?? trois lettres qui d??finit la devise et son symbole.',
    'LBL_UPDATE' => 'Enregistrer',
    'LBL_LIST_RATE' => 'Taux de conversion',
    'LBL_LIST_RATE_HELP' => 'Un taux de conversion de 0.5 par Euro signifie que 10 Dollars = 5 Euro.',
    'LBL_LIST_STATUS' => 'Statut',
    'LNK_NEW_CONTACT' => 'Nouveau Contact',
    'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
    'LNK_NEW_OPPORTUNITY' => 'Nouvelle Affaire',
    'LNK_NEW_CASE' => 'Nouveau Ticket',
    'LNK_NEW_NOTE' => 'Cr??er une note ou une pi??ce jointe',
    'LNK_NEW_CALL' => 'Nouvel appel',
    'LNK_NEW_EMAIL' => 'Nouvel E-mail',
    'LNK_NEW_MEETING' => 'Nouveau rendez-vous',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'NTC_DELETE_CONFIRMATION' => '??tes-vous certain de vouloir effacer cet enregistrement ? Tout enregistrement pr??c??dent utilisant cette devise sera converti en devis par d??faut. Il peut ??tre pr??f??rable d\'utiliser un statut "D??sactiv??".',
    'LBL_BELOW_MIN' => 'Le taux de conversion doit ??tre sup??rieur ?? 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Activ??',
            'Inactive' => 'D??sactiv??',
        ),
    'LBL_CREATED_BY' => 'Cr???? par',
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
);
