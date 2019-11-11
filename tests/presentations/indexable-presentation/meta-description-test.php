<?php

namespace Yoast\WP\Free\Tests\Presentations\Indexable_Presentation;

use Yoast\WP\Free\Tests\TestCase;

/**
 * Class Meta_Description_Test
 *
 * @coversDefaultClass \Yoast\WP\Free\Presentations\Indexable_Presentation
 *
 * @group presentations
 */
class Meta_Description_Test extends TestCase {
	use Presentation_Instance_Builder;

	/**
	 * Sets up the test class.
	 */
	public function setUp() {
		parent::setUp();

		$this->set_instance();
	}

	/**
	 * Tests the situation where the meta description is given.
	 *
	 * @covers ::generate_meta_description
	 */
	public function test_generate_meta_description_when_meta_description_is_given() {
		$this->indexable->description = 'Example of meta description';

		$this->assertEquals( 'Example of meta description', $this->instance->generate_meta_description() );
	}

	/**
	 * Tests the situation where an empty value is returned.
	 *
	 * @covers ::generate_meta_description
	 */
	public function test_generate_meta_description_with_empty_return_value() {
		$this->assertEmpty( $this->instance->generate_meta_description() );
	}
}
