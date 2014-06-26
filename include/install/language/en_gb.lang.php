<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

$optionalModuleStrings = array(
	'CustomerPortal_description'=>'Management interface to control the behavior of Customer Portal Plugin',
	'FieldFormulas_description'=>'Setup rules for custom fields to update value on record save',
	'RecycleBin_description'=>'Module to manage deleted records, provides ability to restore or remove it completely',
	'Tooltip_description'=>'Configure tooltip to be shown for a field, which can be a combination of other fields',
	'Webforms_description'=>'Server side support to allow building client webforms to capture information easily',
	'SMSNotifier_description'=>'Sends SMS messages to Accounts, Contacts and Leads',
	'Assets_description'=>'Assets represent ownership of value that can be converted into cash',
	'ModComments_description' => 'Ability to add comments to any of the related modules',
	'Projects_description' => 'Adds the ability to manage Projects',
	'Dutch_description' => 'Dutch Language pack',
	'French_description' => 'French Language pack',
	'Hungarian_description' => 'Hungarian Language pack',
	'Spanish_description' => 'Spanish Language pack',
	'Deutsch_description' => 'German Language pack',
);

$installationStrings = array(
	'LBL_VTIGER_CRM_5' => 'vtiger CRM 5',
	'LBL_CONFIG_WIZARD' => 'Configuration Wizard',
	'LBL_WELCOME' => 'Welcome',
	'LBL_WELCOME_CONFIG_WIZARD' => 'Welcome to the Configuration Wizard',
	'LBL_ABOUT_CONFIG_WIZARD' => 'This configuration wizard helps you install vtiger CRM ',
	'LBL_ABOUT_VTIGER' => 'vtiger CRM is a community-driven, fully open source, CRM software project.<br /><br />
							The aim of the project is to provide the best and most open CRM solution with the lowest total cost of ownership to small and medium enterprises.<br /><br /> 
							The product is widely used throughout the world, with over a thousand downloads a day.<br /><br />
							vtiger CRM has an active community of developers and users, with contributors from many different countries.<br /><br />
							It is available in many languages, with a strong partner network in dozens of countries.',
	'LBL_INSTALL' => 'Install',
	'LBL_MIGRATE' => 'Migrate',
	'ERR_RESTRICTED_FILE_ACCESS' => 'Sorry! Attempt to access restricted file',
	'LBL_INSTALLATION_CHECK' => 'Installation Check',
	'LBL_BACK' => 'Back',
	'LBL_NEXT' => 'Next',
	'LBL_AGREE' => 'Agree',
	'LBL_REFRESH' => 'Refresh',
	'LBL_SYSTEM_CONFIGURATION'=> 'System Configuration',
	'LBL_INSTALLATION_CHECK' => 'Installation Check',
	'LBL_INSTALLING' => 'Installing...',
	'DoingStep' => 'Doing Step',
	'LBL_PRE_INSTALLATION_CHECK' => 'Pre Installation Check',
	'LBL_CHECK_AGAIN' => 'Check Again',
	'LBL_CONFIRM_SETTINGS' => 'Confirm Settings',
	'LBL_CONFIRM_CONFIG_SETTINGS' => 'Confirm Configuration Settings',
	'LBL_CONFIG_FILE_CREATION' => 'Config File Creation',
	'LBL_OPTIONAL_MODULES' => 'Optional Modules',
	'LBL_SELECT_OPTIONAL_MODULES_TO_install' => 'Select Optional Modules to Install',
	'LBL_SELECT_OPTIONAL_MODULES_TO_update' => 'Select Optional Modules to Update',
	'LBL_SELECT_OPTIONAL_MODULES_TO_copy' => 'Select Optional Modules to Copy',
	'MSG_CONFIG_FILE_CREATED' => 'Configuration file (config.inc.php) successfully created',
	'LBL_FINISH' => 'Finish',
	'LBL_CONFIG_COMPLETED' => 'Configuration Completed',
	'LBL_PHP_VERSION_GT_5' => 'PHP version >= 5.2',
	'LBL_YES' => 'Yes',
	'LBL_NO' => 'No',
	'LBL_NOT_CONFIGURED' => 'Not Configured',
	'LBL_IMAP_SUPPORT' => 'IMAP Support',
	'LBL_ZLIB_SUPPORT' => 'Zlib Support',
	'LBL_GD_LIBRARY' => 'GD graphics library',
	'LBL_RECOMMENDED_PHP_SETTINGS' => 'Recommended PHP Settings',
	'LBL_DIRECTIVE' => 'Directive',
	'LBL_RECOMMENDED' => 'Recommended',
	'LBL_PHP_INI_VALUE' => 'PHP.ini value',
	'LBL_READ_WRITE_ACCESS' => 'Read/Write Access',
	'LBL_NOT_RECOMMENDED' => 'Not Recommended',
	'LBL_PHP_DIRECTIVES_HAVE_RECOMMENDED_VALUES' => 'Your PHP directives have the recommended values',
	'MSG_PROVIDE_READ_WRITE_ACCESS_TO_PROCEED' => 'Provide Read/Write access to the files and directories listed to proceed',
	'WARNING_PHP_DIRECTIVES_NOT_RECOMMENDED_STILL_WANT_TO_PROCEED' => 'Some of the PHP settings do not meet the recommended values. This might affect some of the features of vtiger CRM. Are you sure you want to proceed?',
	'LBL_CHANGE' => 'Change',
	'LBL_DATABASE_INFORMATION' => 'Database Information',
	'LBL_CRM_CONFIGURATION' => 'CRM Configuration',
	'LBL_USER_CONFIGURATION' => 'User Configuration',
	'LBL_DATABASE_TYPE' => 'Database Type',
	'LBL_NO_DATABASE_SUPPORT' => 'No database support detected',
	'LBL_HOST_NAME' => 'Host Name',
	'LBL_USER_NAME' => 'User Name',
	'LBL_PASSWORD' => 'Password',
	'LBL_DATABASE_NAME' => 'Database Name',
	'LBL_CREATE_DATABASE' => 'Create Database',
	'LBL_DROP_IF_EXISTS' => 'Will drop if the database exists',
	'LBL_ROOT' => 'Root',
	'LBL_UTF8_SUPPORT' => 'UTF-8 Support',
	'LBL_URL' => 'URL',
	'LBL_CURRENCY_NAME' => 'Currency Name',
	'LBL_USERNAME' => 'Username',
	'LBL_EMAIL' => 'Email',
	'LBL_POPULATE_DEMO_DATA' => 'Populate database with demo data',
	'LBL_DATABASE' => 'Database',
	'LBL_SITE_URL' => 'Site Url',
	'LBL_PATH' => 'Path',
	'LBL_MISSING_REQUIRED_FIELDS' => 'Missing required fields',
	'ERR_ADMIN_EMAIL_INVALID' => 'The email address in the admin email field is invalid',
	'ERR_STANDARDUSER_EMAIL_INVALID' => 'The email address in the standard user email field is invalid',
	'WARNING_LOCALHOST_IN_SITE_URL' => 'Specify the exact host name instead of \"localhost\" in the Site URL field. Otherwise you will experience some issues while working with vtiger plug-ins. Do you wish to continue?',
	'LBL_DATABASE_CONFIGURATION' => 'Database Configuration',
	'LBL_ENABLED' => 'Enabled',
	'LBL_NOT_ENABLED' => 'Not Enabled',
	'LBL_SITE_CONFIGURATION' => 'Site Configuration',
	'LBL_DEFAULT_CHARSET' => 'Default Charset',
	'ERR_DATABASE_CONNECTION_FAILED' => 'Unable to connect to database server',
	'ERR_INVALID_MYSQL_PARAMETERS' => 'Invalid mySQL connection parameters specified',
	'MSG_LIST_REASONS' => 'This may be due to the following reasons',
	'MSG_DB_PARAMETERS_INVALID' => 'specified database user, password, hostname, database type, or port is invalid',
	'MSG_DB_USER_NOT_AUTHORIZED' => 'specified database user does not have access to connect to the database server from the host',
	'LBL_MORE_INFORMATION' => 'More Information',
	'ERR_INVALID_MYSQL_VERSION' => 'MySQL version is not supported, please use MySQL 4.1.x or above',
	'ERR_UNABLE_CREATE_DATABASE' => 'Unable to create database',
	'MSG_DB_ROOT_USER_NOT_AUTHORIZED' => 'Message: Specified database root user doesn\'t have permission to create database or the database name has special characters. Try changing the database settings',
	'ERR_DB_NOT_FOUND' => 'This database is not found.Try changing the database settings',
	'LBL_SUCCESSFULLY_INSTALLED' => 'Successfully Installed',
	'LBL_DEMO_DATA_IN_PROGRESS' => 'Installing the demo data',
	'LBL_PLEASE_WAIT' => 'Please Wait',
	'LBL_ALL_SET_TO_GO' => 'is all set to go!',
	'LBL_INSTALL_PHP_FILE_RENAMED' => 'Your install.php file has been renamed to',
	'LBL_MIGRATE_PHP_FILE_RENAMED' => 'Your migrate.php file has been renamed to',
	'LBL_INSTALL_DIRECTORY_RENAMED' => 'Your install directory too has been renamed to',
	'WARNING_RENAME_INSTALL_PHP_FILE' => 'We strongly suggest you to rename the install.php file',
	'WARNING_RENAME_MIGRATE_PHP_FILE' => 'We strongly suggest you to rename the migrate.php file',
	'WARNING_RENAME_INSTALL_DIRECTORY' => 'We strongly suggest you to rename the install directory',
	'LBL_LOGIN_USING_ADMIN' => 'Please log in using the "admin" user name and the password you entered in step 3 of 4',
	'LBL_SET_OUTGOING_EMAIL_SERVER' => 'Do not forget to set the outgoing emailserver (setup accessible from Settings-&gt;Outgoing Server)',
	'LBL_RENAME_HTACCESS_FILE' => 'Rename htaccess.txt file to .htaccess to control public file access',
	'MSG_HTACCESS_DETAILS' => 'This .htaccess file will work if "<b>AllowOverride All</b>" is set in the Apache server configuration file (httpd.conf) for the DocumentRoot or for the current vtiger path.<br />
				   				If AllowOverride is set to None ie., "<b>AllowOverride None</b>" then the .htaccess file will not take effect.<br />
				   				If AllowOverride is None then add the following configuration in the apache server configuration file (httpd.conf)<br />
				   				<b>&lt;Directory "C:/Program Files/vtigercrm/apache/htdocs/vtigerCRM"&gt;<br />Options -Indexes<br />&lt;/Directory&gt;</b><br />
				   				So that without the .htaccess file we can restrict the directory listing',
	'LBL_YOU_ARE_IMPORTANT' => 'You are very important to us!',
	'LBL_PRIDE_BEING_ASSOCIATED' => 'We take pride in being associated with you',
	'LBL_TALK_TO_US_AT_FORUMS' => 'Talk to us at <a href="http://forums.vtiger.com" target="_blank">forums</a>',
	'LBL_DISCUSS_WITH_US_AT_BLOGS' => 'Discuss with us at <a href="http://blogs.vtiger.com" target="_blank">blogs</a>',
	'LBL_WE_AIM_TO_BE_BEST' => 'We aim to be - simply the best',
	'LBL_SPACE_FOR_YOU' => 'Come on over, there is space for you too!',	
	'LBL_NO_OPTIONAL_MODULES_FOUND' => 'No Optional Modules found',
	'LBL_PREVIOUS_INSTALLATION_INFORMATION' => 'Previous Installation Information',
	'LBL_PREVIOUS_INSTALLATION_PATH' => 'Previous Installation Path',
	'LBL_PREVIOUS_INSTALLATION_VERSION' => 'Previous Installation Version',
	'LBL_MIGRATION_DATABASE_NAME' => 'Database Name for Migration',
	'LBL_IMPORTANT_NOTE' => 'Important Note',
	'MSG_TAKE_DB_BACKUP' => 'Make sure to take a <b>backup (dump) of your database</b> before proceeding further',
	'QUESTION_MIGRATE_USING_NEW_DB' => 'Migrate using new database',
	'MSG_CREATE_DB_WITH_UTF8_SUPPORT' => 'Create the database first with UTF-8 charset support',
	'LBL_EG' => 'eg',
	'MSG_COPY_DATA_FROM_OLD_DB' => '<b>Copy the data (dump)</b> from earlier database into this new one',
	'LBL_SELECT_PREVIOUS_INSTALLATION_VERSION' => 'Please Select Previous Installation Version',
	'LBL_SOURCE_CONFIGURATION' => 'Source Configuration',
	'LBL_OLD' => 'Old',
	'LBL_NEW' => 'New',
	'LBL_INNODB_ENGINE_CHECK' => 'InnoDB Engine Check',
	'LBL_FIXED' => 'Fixed',
	'LBL_NOT_FIXED' => 'Not Fixed',
	'LBL_NEW_INSTALLATION_PATH' => 'New Installation Path',
	'ERR_CANNOT_WRITE_CONFIG_FILE' => 'Failed to write to configuration file (config.inc.php ). Check permissions and restart installation',
	'ERR_DATABASE_NOT_FOUND' => 'ERR : This Database is not found. Provide the correct database name',
	'ERR_NO_CONFIG_FILE' => 'The source you have specified doesn\'t have a config file. Please provide a proper source',
	'ERR_NO_USER_PRIV_DIR' => 'The source specified doesn\'t have a user privileges directory. Please provide a proper source',
	'ERR_NO_STORAGE_DIR' => 'The source specified doesn\'t have a storage directory. Please provide a proper source',
	'ERR_NO_SOURCE_DIR' => 'The source specified doesn\'t seem to be present. Please provide a proper source',
	'ERR_NOT_VALID_USER' => 'Not a valid user. Please provide an Admin user, login details',
	'ERR_MIGRATION_DATABASE_IS_EMPTY' => 'This database is empty. Please copy the data from old database to migrate',
	'ERR_NOT_AUTHORIZED_TO_PERFORM_THE_OPERATION' => 'Not authorised to perform this operation',
	'LBL_DATABASE_CHECK' => 'Database Check',
	'MSG_TABLES_IN_INNODB' => 'Required tables were detected to be in proper engine type (InnoDB)',
	'MSG_CLOSE_WINDOW_TO_PROCEED' => 'You can close this window and proceed further with migration',
	'LBL_RECOMMENDATION_FOR_PROPERLY_WORKING_CRM' => 'For proper functionality of vtiger CRM, we recommend the following',
	'LBL_TABLES_SHOULD_BE_INNODB' => 'Tables to have InnoDB engine type',
	'QUESTION_WHAT_IS_INNODB' => 'What is InnoDB',
	'LBL_TABLES_CHARSET_TO_BE_UTF8' => 'To get complete UTF-8 support, tables should have default charset UTF-8',
	'LBL_FIX_ENGINE_FOR_ALL_TABLES' => 'Fix Engine For All Tables',
	'LBL_TABLE' => 'Table',
	'LBL_TYPE' => 'Type',
	'LBL_CHARACTER_SET' => 'Character Set',
	'LBL_CORRECT_ENGINE_TYPE' => 'Correct Engine Type',
	'LBL_FIX_NOW' => 'Fix Now',
	'LBL_CLOSE' => 'Close',
	'LBL_PRE_MIGRATION_TOOLS' => 'Pre-Migration Tools',
	'ERR_TABLES_NOT_INNODB' => 'Your database table engine is not the recommended engine "Innodb"',
	'MSG_CHANGE_ENGINE_BEFORE_MIGRATION' => 'Please make sure to change the engine before migration',
	'LBL_VIEW_REPORT' => 'View Report',
	'LBL_IMPORTANT' => 'Important',
	'LBL_DATABASE_BACKUP' => 'Database Backup',
	'LBL_DATABASE_COPY' => 'Database Copy',
	'LBL_DB_DUMP_DOWNLOAD' => 'DB Dump Download',
	'LBL_DB_COPY' => 'DB Copy',
	'QUESTION_NOT_TAKEN_BACKUP_YET' => 'Have not taken the database backup yet',
	'LBL_CLICK_FOR_DUMP_AND_SAVE' => '<b>&#171; Click</b> on the left icon to start the dump and <b>Save</b> the copy of output',
	'LBL_NOTE' => 'Note',
	'LBL_RECOMMENDED' => 'Recommended',
	'MSG_PROCESS_TAKES_LONGER_TIME_BASED_ON_DB_SIZE' => 'This process may take a long time depending on the database size',
	'QUESTION_MIGRATING_TO_NEW_DB' => 'Are you migrating to a new database',
	'LBL_CLICK_FOR_NEW_DATABASE' => '<b>&#171; Click</b> on the left icon to proceed if you have not setup new database with earlier data',
	'MSG_USE_OTHER_TOOLS_FOR_DB_COPY' => 'Use tools like (mysql, phpMyAdmin) to setup new database with data',
	'LBL_COPY_OLD_DB_TO_NEW_DB' => 'Copy your existing database into the new database to be used for migration',
	'LBL_IF_DATABASE_EXISTS_WILL_RECREATE' => 'If database exists it will be recreated',
	'LBL_SHOULD_BE_PRIVILEGED_USER' => 'Should have privilege to CREATE DATABASE',
	'ERR_FAILED_TO_FIX_TABLE_TYPES' => 'Failed to fix the table types',
	'ERR_SPECIFY_NEW_DATABASE_NAME' => 'Please specify new database name',
	'ERR_SPECIFY_ROOT_USER_NAME' => 'Please specify root user name',
	'ERR_DATABASE_COPY_FAILED' => '<span class="redColor">Failed</span> to copy database, please do it manually',
	'MSG_DATABASE_COPY_SUCCEDED' => 'Database copy was successful.<br />Click Next &#187; to proceed',
	'MSG_SUCCESSFULLY_FIXED_TABLE_TYPES' => 'Successfully changed tables to InnoDB engine',
	'LBL_MIGRATION' => 'Migration',
	'LBL_SOURCE_VERSION_NOT_SET' => 'Source version is not set. Please check vtigerversion.php and continue the patch process',
	'LBL_GOING_TO_APPLY_DB_CHANGES' => 'Going to apply the database changes',
	'LBL_DATABASE_CHANGES' => 'Database changes',
	'LBL_STARTS' => 'Starts',
	'LBL_ENDS' => 'Ends',
	'LBL_SUCCESS' => 'SUCCESS',
	'LBL_FAILURE' => 'FAILURE',
	'LBL_MIGRATION_FINISHED' => 'Migration successfully finished',
	'LBL_OLD_VERSION_IS_AT' => 'Your older version is available at : ',
	'LBL_CURRENT_SOURCE_PATH_IS' => 'Your current source path is : ',
	'LBL_DATABASE_EXTENSION' =>'Database Extension',
	'LBL_DOCUMENTATION_TEXT' => 'Documentation including the User Manual can be found at',
	'LBL_USER_PASSWORD_CHANGE_NOTE' => 'password of all users will be reset to user name. Please notify users and change passwords',
	'LBL_PASSWORD_FIELD_CHANGE_FAILURE' => "changing user's password field failed",
	'LBL_OPENSSL_SUPPORT' => 'OpenSSL Support',
	'LBL_OPTIONAL_MORE_LANGUAGE_PACK' => 'Additional language packs are available at',
	'LBL_GETTING_STARTED' => 'Getting Started:',
	'LBL_GETTING_STARTED_TEXT' => 'You can start using your CRM now.',
	'LBL_YOUR_LOGIN_PAGE' => 'Your login page:',
	'LBL_ADD_USERS' => 'To add more users, please visit the Settings page.',
	'LBL_SETUP_BACKUP' => "Setup 'Backup Server' so that your CRM data and files are archived to another location on a daily basis",
	'LBL_RECOMMENDED_STEPS' => 'Recommended Steps:',
	'LBL_RECOMMENDED_STEPS_TEXT' => 'It is important that you complete the following steps',
	'LBL_DOCUMENTATION_TUTORIAL' => 'Documentation And Tutorial',
	'LBL_WELCOME_FEEDBACK' => 'We welcome your feedback',
	'LBL_TUTORIAL_TEXT' => 'Video Tutorials are available at',
	'LBL_DROP_A_MAIL' => 'Drop us an email to',
	'LBL_LOGIN_PAGE' => 'Your login page: ',
);
?>
