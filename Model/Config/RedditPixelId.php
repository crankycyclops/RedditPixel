<?php
/**
 * @category  Crankycyclops
 * @package   Crankycyclops_RedditPixel
 * @author    James Colannino
 * @copyright Copyright (c) 2018 James Colannino
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License v3
 */

namespace Crankycyclops\RedditPixel\Model\Config;

use Magento\Framework\Exception\LocalizedException;

class RedditPixelId extends \Magento\Framework\App\Config\Value {

	/**
	 * @return $this
	 * @throws \Magento\Framework\Exception\LocalizedException
	 */
	public function beforeSave() {

		$value     = $this->getValue();
		$validator = \Zend_Validate::is($value, 'Regex', ['pattern' => '/^[a-z0-9]+_[a-z0-9]+$/']);

		if (!$validator) {
			throw new LocalizedException(__('Please input a valid Reddit Pixel ID.'));
		}

		return $this;
	}
}

