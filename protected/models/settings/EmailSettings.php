<?php

class EmailSettings extends CiiSettingsModel
{
	protected $SMTPHost = NULL;

	protected $SMTPPort = NULL;

	protected $SMTPUser = NULL;

	protected $SMTPPass = NULL;

	protected $notifyName = NULL;

	protected $notifyEmail = NULL;

	protected $useTLS = 0;

	protected $useSSL = 0;

	public function rules()
	{
		return array(
			array('notifyName, notifyEmail', 'required'),
			array('notifyEmail', 'email'),
			array('useTLS, useSSL', 'boolean'),
			array('SMTPPort', 'numerical', 'integerOnly' => true, 'min' => 0),
			array('SMTPPass', 'password'),
			array('notifyName, SMTPPass, SMTPUser', 'length', 'max' => 255)
		);
	}

	public function attributeLabels()
	{
		return array(
			'SMTPHost' => Yii::t('ciims.models.email', 'SMTP Hostname'),
			'SMTPPort' => Yii::t('ciims.models.email', 'SMTP Port Number'),
			'SMTPUser' => Yii::t('ciims.models.email', 'SMTP Username'),
			'SMTPPass' => Yii::t('ciims.models.email', 'SMTP Password'),
			'useTLS' => Yii::t('ciims.models.email', 'Use TLS Connection'),
			'useSSL' => Yii::t('ciims.models.email', 'Use SSL Connection'),
			'notifyName' => Yii::t('ciims.models.email', 'System From Name'),
			'notifyEmail' => Yii::t('ciims.models.email', 'System Email Address')
		);
	}
}