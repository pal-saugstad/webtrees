<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleCeLatn - Chechen
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleCeLatn extends LocaleCe {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Chechen';
	}

	/** {@inheritdoc} */
	public function endonymSortable() {
		return 'CHECHEN';
	}

	/** {@inheritdoc} */
	public function script() {
		return new ScriptLatn;
	}
}