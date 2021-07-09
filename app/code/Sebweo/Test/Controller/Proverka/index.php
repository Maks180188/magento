<?php
namespace Sebweo\Test\Controller\Proverka;
class index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo 'Привет, мир!';
        exit();
    }
}
