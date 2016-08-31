<?php
/**
 * @author Ashley Schroder (aschroder.com)
 * @copyright  Copyright (c) 2014 Ashley Schroder
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Aschroder_SMTPPro_Model_System_Config_Source_Ses_Endpoint extends Varien_Object
{
    public function toOptionArray()
    {
        $helper = Mage::helper('smtppro');

        $options = array(
            'https://email.us-east-1.amazonaws.com' => $helper->__('US East (N. Virginia)'),
            'https://email.us-west-2.amazonaws.com' => $helper->__('US West (Oregon)'),
            'https://email.eu-west-1.amazonaws.com' => $helper->__('EU (Ireland)')
        );

        return $options;
    }
}
