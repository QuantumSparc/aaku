<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "http://172.31.28.44";
    public $DB_USER     = "root";
    public $DB_PASSWORD = "Aakash7152";
    public $DB_NAME     = "etron_diy";

    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
    public $SECURITY_CODE = "secure_code";

}

?>
