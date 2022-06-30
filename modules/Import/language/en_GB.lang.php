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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'rows were not imported due to error',
    'LBL_UPDATE_SUCCESSFULLY' => 'records updated successfully',
    'LBL_SUCCESSFULLY_IMPORTED' => 'records were created',
    'LBL_STEP_4_TITLE' => 'Step {0}: Import File',
    'LBL_STEP_5_TITLE' => 'Step {0}: View Import Results',
    'LBL_CUSTOM_ENCLOSURE' => 'Fields Qualified By:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Unable to publish. There is another published Import map by the same name.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Unable to un-publish a map owned by another user. You own an Import map by the same name.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Imports aren\'t set up for this module type',
    'LBL_IMPORT_TYPE' => 'What would you like to do with the imported data?',
    'LBL_IMPORT_BUTTON' => 'Create new records only',
    'LBL_UPDATE_BUTTON' => 'Create new records and update existing records',
    'LBL_CREATE_BUTTON_HELP' => 'Use this option to create new records. Note: Rows in the import file containing values that match the IDs of existing records will not be imported if the values are mapped to the ID field.',
    'LBL_UPDATE_BUTTON_HELP' => 'Use this option to update existing records. The data in the import file will be matched to existing records based on the record ID in the import file.',
    'LBL_ERROR_INVALID_BOOL' => 'Invalid boolean value',
    'LBL_IMPORT_ERROR' => 'Import errors:',
    'LBL_ERROR' => 'Error',
    'LBL_FIELD_NAME' => 'Field Name',
    'LBL_VALUE' => 'Value',
    'LBL_NONE' => 'None',
    'LBL_REQUIRED_VALUE' => 'Required value missing',
    'LBL_ERROR_SYNC_USERS' => 'Invalid value to sync to Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID already exists in this table',
    'LBL_ASSIGNED_USER' => 'If the user does not exist use the current user',
    'LBL_ERROR_DELETING_RECORD' => 'Error deleting record:',
    'LBL_ERROR_INVALID_ID' => 'ID given is too long to fit in the field (maximum length is 36 characters)',
    'LBL_ERROR_INVALID_PHONE' => 'Invalid phone number',
    'LBL_ERROR_INVALID_NAME' => 'String too long to fit in the field',
    'LBL_ERROR_INVALID_VARCHAR' => 'String too long to fit in the field',
    'LBL_ERROR_INVALID_DATE' => 'Invalid date',
    'LBL_ERROR_INVALID_DATETIME' => 'Invalid datetime',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Invalid datetime',
    'LBL_ERROR_INVALID_TIME' => 'Invalid time',
    'LBL_ERROR_INVALID_INT' => 'Invalid integer value',
    'LBL_ERROR_INVALID_NUM' => 'Invalid numeric value',
    'LBL_ERROR_INVALID_EMAIL' => 'Invalid Email address',
    'LBL_ERROR_INVALID_USER' => 'Invalid user name or ID',
    'LBL_ERROR_INVALID_TEAM' => 'Invalid team name or ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Invalid account name or ID',
    'LBL_ERROR_INVALID_RELATE' => 'Invalid relational field',
    'LBL_ERROR_INVALID_CURRENCY' => 'Invalid currency value',
    'LBL_ERROR_INVALID_FLOAT' => 'Invalid floating point number',
    'LBL_ERROR_NOT_IN_ENUM' => 'Value not in dropDown list. Allowed values are: ',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'File was not uploaded successfully. It may be that the \'upload_max_filesize\' setting in your php.ini file is set to a small number',
    'LBL_MODULE_NAME' => 'Import',
    'LBL_TRY_AGAIN' => 'Try Again',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'The import file contains {0} rows. The optimal number of rows is {1}. More rows may slow the import process. Click OK to continue importing. Click Cancel to revise and re-upload the import file.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'You cannot import a system administrator user',
    'ERR_MULTIPLE' => 'Multiple columns have been defined with the same field name.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Missing required fields:',
    'ERR_SELECT_FILE' => 'Select a file to upload.',
    'LBL_SELECT_FILE' => 'Select file:',
    'LBL_EXTERNAL_SOURCE' => 'an external application or service',
    'LBL_CUSTOM_DELIMITER' => 'Fields Delimited By:',
    'LBL_DONT_MAP' => '-- Do not map this field --',
    'LBL_STEP_MODULE' => 'Which module do you want to import data into?',
    'LBL_STEP_1_TITLE' => 'Step 1: Select Data Source',
    'LBL_CONFIRM_TITLE' => 'Step {0}: Confirm Import File Properties',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'The custom mappings for Microsoft Outlook rely on the import file being comma-delimited (.csv). If your import file is tab-delimited, the mappings will not be applied as expected.',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'Publish',
    'LBL_DELETE' => 'Delete',
    'LBL_PUBLISHED_SOURCES' => 'To use pre-set import settings, select from below:',
    'LBL_UNPUBLISH' => 'Un-Publish',
    'LBL_NEXT' => 'Next >',
    'LBL_BACK' => '< Back',
    'LBL_STEP_2_TITLE' => 'Step {0}: Upload Import File',
    'LBL_HAS_HEADER' => 'Header Row:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notes:',
    'LBL_STEP_3_TITLE' => 'Step {0}: Confirm Field Mappings',
    'LBL_STEP_DUP_TITLE' => 'Step {0}: Check for Possible Duplicates',
    'LBL_DATABASE_FIELD' => 'Module Field',
    'LBL_HEADER_ROW' => 'Header Row',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Select if the top row of the import file is a Header Row containing field labels.',
    'LBL_ROW' => 'Row',
    'LBL_CONTACTS_NOTE_1' => 'Either Last Name or Full Name must be mapped.',
    'LBL_CONTACTS_NOTE_2' => 'If Full Name is mapped, then First Name and Last Name are ignored.',
    'LBL_CONTACTS_NOTE_3' => 'If Full Name is mapped, then the data in Full Name will be split into First Name and Last Name when inserted into the database.',
    'LBL_CONTACTS_NOTE_4' => 'Fields ending in Address Street 2 and Address Street 3 are concatenated together with the main Address Street Field when inserted into the database.',
    'LBL_ACCOUNTS_NOTE_1' => 'Fields ending in Address Street 2 and Address Street 3 are concatenated together with the main Address Street Field when inserted into the database.',
    'LBL_IMPORT_NOW' => 'Import Now',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Cannot open the imported file for reading',
    'LBL_NO_LINES' => 'There were no lines detected in your import file. Please make sure there are no empty lines in your file and try again.',
    'LBL_SUCCESS' => 'Success:',
    'LBL_LAST_IMPORT_UNDONE' => 'The import was undone.',
    'LBL_NO_IMPORT_TO_UNDO' => 'There was no import to undo.',
    'LBL_CREATED_TAB' => 'Created Records',
    'LBL_DUPLICATE_TAB' => 'Duplicates',
    'LBL_ERROR_TAB' => 'Errors',
    'LBL_IMPORT_MORE' => 'Import Again',
    'LBL_FINISHED' => 'Finished',
    'LBL_UNDO_LAST_IMPORT' => 'Undo Import',
    'LBL_DUPLICATES' => 'Duplicates Found',
    'LNK_DUPLICATE_LIST' => 'Download list of duplicates',
    'LNK_ERROR_LIST' => 'Download list of errors',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download list of rows that were not imported',
    'LBL_INDEX_USED' => 'Fields to Check:',
    'LBL_INDEX_NOT_USED' => 'Available Fields:',
    'LBL_IMPORT_FIELDDEF_ID' => 'Unique ID number',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Name or ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Phone Number',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Team Name or ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Any Text',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Any Text',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Any Text',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Time',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Date',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'User Name or ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' or \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'List',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'EMail Address',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numeric (No Decimal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeric (No Decimal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numeric (No Decimal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeric (Decimal Allowed)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeric (Decimal Allowed)',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_TIMEZONE' => 'Time Zone:',
    'LBL_ADD_ROW' => 'Add Field',
    'LBL_REMOVE_ROW' => 'Remove Field',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'View Import File Properties',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Hide Import File Properties',
    'LBL_SHOW_NOTES' => 'View Notes',
    'LBL_HIDE_NOTES' => 'Hide Notes',
    'LBL_SAVE_MAPPING_AS' => 'To save the import settings, provide a name for the saved settings:',
    'LBL_IMPORT_COMPLETE' => 'Exit',
    'LBL_IMPORT_COMPLETED' => 'Import Completed',
    'LBL_IMPORT_RECORDS' => 'Importing Records',
    'LBL_IMPORT_RECORDS_OF' => 'of',
    'LBL_IMPORT_RECORDS_TO' => 'to',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_CURRENCY_SIG_DIGITS' => 'Currency Significant Digits',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator:',
    'LBL_DECIMAL_SEP' => 'Decimal symbol:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Name Display Format',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Example',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Salutation, "f" First Name, "l" Last Name</i>',
    'LBL_CHARSET' => 'File Encoding:',
    'LBL_MY_SAVED_HELP' => 'Use this option to apply your pre-set import settings, including import properties, mappings, and any duplicate check settings, to this import.<br><br>Click <b>Delete</b> to delete a mapping for all users.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Use this option to apply your pre-set import settings, including import properties, mappings, and any duplicate check settings, to this import.<br><br>Click <b>Publish</b> to make the mapping available to other users.<br>Click <b>Un-Publish</b> to make the mapping unavailable to other users.<br>Click <b>Delete</b> to delete a mapping for all users.',
    'LBL_ENCLOSURE_HELP' => '<p>The <b>qualifier character</b> is used to enclose the intended field content, including any characters that are used as delimiters.<br><br>Example: If the delimiter is a comma (,) and the qualifier is a quotation mark ("),<br><b>"Cupertino, California"</b> is imported into one field in the application and appears as <b>Cupertino, California</b>.<br>If there are no qualifier characters, or if a different character is the qualifier,<br><b>"Cupertino, California"</b> is imported into two adjacent fields as <b>"Cupertino</b> and <b>"California"</b>.<br><br>Note: The import file might not contain any qualifier characters.<br>The default qualifier character for comma- and tab- delimited files created in Excel is a quotation mark.</p>',
    'LBL_DATABASE_FIELD_HELP' => 'This column displays all of the fields in the module. Select a field to map to the data in the import file rows.',
    'LBL_HEADER_ROW_HELP' => 'This column displays the labels in the header row of the import file.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indicate a value to use for the field in the created or updated record if the field in the import file contains no data.',
    'LBL_ROW_HELP' => 'This column displays the data in the first non-header row of the import file. If the header row labels are appearing in this column, click Back to specify the header row in the Import File Properties.',
    'LBL_SAVE_MAPPING_HELP' => 'Enter a name to save the import settings, including the field mappings and indexes used for the duplicate check. Saved import settings can be used for future imports.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'During the upload of your import file, some file properties might have been automatically detected. View and manage these properties, as<br> necessary. Note: The settings provided here pertain to this import<br> and will not override your overall User Settings.',
    'LBL_IMPORT_STARTED' => 'Import Started:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'The record could not be updated due to a permissions issue',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Are you sure you want to delete this saved set of import settings?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'If the import file data was exported from any of the following sources, select which one.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Select the source to automatically apply custom mappings in order to simplify the mapping process (next step).',
    'LBL_EXAMPLE_FILE' => 'Download Import File Template',
    'LBL_CONFIRM_IMPORT' => 'You have selected to update records during the import process. Updates made to existing records cannot be undone. However, records created during the import process can be undone (deleted), if desired. Click Cancel to select to create new records only, or click OK to continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Warning: You have already selected a custom mapping for this import, do you want to continue?',
    'LBL_SAMPLE_URL_HELP' => 'Download a sample import file containing a header row of the module fields. The file can be used as a template to create an import file containing the data that you would like to import.',
    'LBL_AUTO_DETECT_ERROR' => 'The field delimiter and qualifier in the import file could not be detected. Please verify the settings in the Import File Properties.',
    'LBL_MIME_TYPE_ERROR_1' => 'The selected file does not appear to contain a delimited list. Please check the file type. We recommend comma-delimited files (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'To proceed with importing the selected file, click OK. To upload a new file, click Try Again',
    'LBL_FIELD_DELIMETED_HELP' => 'The field delimiter specifies the character used to separate the field columns.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Select a file containing data that is separated by a delimiter, such as a comma- or tab- delimited file. Files of the type .csv are recommended.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache directory is not writable.',
    'LBL_ADD_FIELD_HELP' => 'Use this option to add a value to a field in all records created and/or updated. Select the field and then enter or select a value for that field in the Default Value column.',
    'LBL_MISSING_HEADER_ROW' => 'No Header Row Found',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SELECT_DS_INSTRUCTION' => 'Ready to start importing? Select the source of the data that you would like to import.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Select a file on your computer that contains the data that you would like to import, or download the template to get a head start on creating the import file.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Here is how the the first several rows of the import file appear with the detected file properties. If a header row was detected, it is displayed in the top row of the table. View the import file properties to make changes to the detected properties and to set additional properties. Updating the settings will update the data appearing in the table.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'To avoid creating duplicate records, select which of the mapped fields you would like to use to perform a duplicate check while data is being imported. Values within existing records in the selected fields will be checked against the data in the import file. If matching data is found, the rows in the import file containing the data will be displayed along with the import results (next page). You will then be able to select which of these rows to continue importing.',
    'LBL_DUP_HELP' => 'Here are the rows in the import file that were not imported because they contain data that matches values in existing records based on the duplicate check. The data that matches is highlighted. To re-import these rows, download the list, make changes and click <b>Import Again</b>.',
    'LBL_SUMMARY' => 'Summary',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Here are the rows in the import file that were not imported due to errors. To re-import these rows, download the list, make changes and click <b>Import Again</b>',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'To assign the new records to teams other than your default team(s), use the Default Value column to select different teams.',
);

global $timedate;
