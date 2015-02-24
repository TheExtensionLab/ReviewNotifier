<?php class TheExtensionLab_ReviewNotifier_Test_Config_Main extends EcomDev_PHPUnit_Test_Case_Config
{
    public function testClassAiases()
    {
        $this->assertModelAlias('theextensionlab_reviewnotifier/observer','TheExtensionLab_ReviewNotifier_Model_Observer');
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