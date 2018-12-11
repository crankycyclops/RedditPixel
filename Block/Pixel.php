<?php

/**
 * @category  Crankycyclops
 * @package   Crankycyclops_RedditPixel
 * @author    James Colannino
 * @copyright Copyright (c) 2018 James Colannino
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License v3
 */

namespace Crankycyclops\RedditPixel\Block;

class Pixel extends \Magento\Framework\View\Element\Template {

	/**
	 * Constructor
	 *
	 * @param \Magento\Framework\App\Helper\Context $context
	 * @param \Crankycyclops\RedditPixel\Helper\Config $helper
	 * @param \Magento\Framework\Registry $coreRegistry
	 * @param \Magento\Catalog\Helper\Data $catalogHelper
	 * @param \Magento\Tax\Model\Config $taxConfig
	 * @param array $data
	 */
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Crankycyclops\RedditPixel\Helper\Config $helper,
		\Magento\Framework\Registry $coreRegistry,
		\Magento\Catalog\Helper\Data $catalogHelper,
		\Magento\Tax\Model\Config $taxConfig,
		array $data = []
	) {
		$this->storeManager  = $context->getStoreManager();
		$this->helper        = $helper;
		$this->coreRegistry  = $coreRegistry;
		$this->catalogHelper = $catalogHelper;
		$this->taxConfig     = $taxConfig;
		parent::__construct($context, $data);
	}

	/**
	 * Returns Reddit Pixel's configuration values
	 *
	 * @return array
	 */
	public function getPixelConfig() {

		return [
			'pixel_id' => $this->helper->getConfig('crankycyclops_redditpixel_general/general/pixel_id')
		];
	}

	/**
	 * Returns the requested action.
	 *
	 * @return string
	 */
	public function getAction() {

		return $this->getRequest()->getFullActionName();
	}
}
