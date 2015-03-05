<?php
/**
 * Configuration Tests
 *
 * @category    TheExtensionLab
 * @package     TheExtensionLab_ReviewNotifier
 * @copyright   Copyright (c) TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */
class TheExtensionLab_ReviewNotifier_Test_Config_Main
    extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     *
     */
    public function testClassAiases()
    {
        $this->assertModelAlias(
            'theextensionlab_reviewnotifier/observer',
            'TheExtensionLab_ReviewNotifier_Model_Observer'
        );
        $this->assertHelperAlias(
            'theextensionlab_reviewnotifier',
            'TheExtensionLab_ReviewNotifier_Helper_Data'
        );
    }

    public function testObserverConfig()
    {
        $this->assertEventObserverDefined(
            'global',
            'review_save_after',
            'theextensionlab_reviewnotifier/observer',
            'reviewSaveAfter'
        );
    }
}