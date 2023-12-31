<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgramTypesFixture
 */
class ProgramTypesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'program_type_id' => 1,
                'program_type_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
