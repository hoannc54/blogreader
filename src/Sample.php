<?php
/**
 * Viết một vài class base để mường tượng ra hệ thống sẽ có gì, như thế sẽ dễ viết test hơn
 * User: hocvt
 * Date: 2/26/18
 * Time: 11:56
 */

namespace Dok123\Sample;


class Sample {
	
	/**
	 * Một function để thử, có thể fake output để test và để người thực hiện chi tiết dễ hiểu được input output
	 *
	 * @param $argument
	 *
	 * @return bool
	 */
	public function sample_function( $argument ) {
		return true;
	}
}