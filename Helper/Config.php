<?php
/**
 * @category  Crankycyclops
 * @package   Crankycyclops_RedditPixel
 * @author    James Colannino
 * @copyright Copyright (c) 2018 James Colannino
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License v3
 */

namespace Crankycyclops\RedditPixel\Helper;

class Config extends \Magento\Framework\App\Helper\AbstractHelper {

	/**
	 * @var \Magento\Framework\App\Config\ScopeConfigInterface
	 */
	public $scopeConfig;

	/**
	 * Constructor
	 *
	 * @param \Magento\Framework\App\Helper\Context $context
	 * @param \Magento\Framework\Module\ModuleListInterface $moduleList
	 */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context,
		\Magento\Framework\Module\ModuleListInterface $moduleList
	) {
		$this->scopeConfig = $context->getScopeConfig();
		parent::__construct($context);
	}

	/**
	 * Based on provided configuration path returns configuration value.
	 *
	 * @param string $configPath
	 * @param string|int $scope
	 * @return string
	 */
	public function getConfig($configPath, $scope = 'default') {

		return $this->scopeConfig->getValue(
			$configPath,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE,
			$scope
		);
	}
}

