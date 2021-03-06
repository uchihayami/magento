<?php
/**
 * About file
 * php version 7.1.27
 * Magento version 2.2.6
 *
 * @category HFW_Sample
 * @package  HFW_Sample
 * @author   Hafuwit <hafuwit@gmail.com>
 * @license  New BSD License
 * @link     https://www.hafuwit.com
 */
namespace HFW\Sample\Controller\Adminhtml\Config;
/**
 * About class
 *
 * @category HFW_Sample
 * @package  HFW_Sample
 * @author   Hafuwit <hafuwit@gmail.com>
 * @license  New BSD License
 * @link     https://www.hafuwit.com
 */
class About extends \HFW\Sample\Controller\Adminhtml\AbstractController
{
    /**
     * About execute
     *
     * @return null
     */
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
