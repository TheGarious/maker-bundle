<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Tests\Maker;

use Symfony\Bundle\MakerBundle\Maker\MakeCommand;
use Symfony\Bundle\MakerBundle\Maker\MakeEntity;
use Symfony\Bundle\MakerBundle\Maker\MakeRepository;
use Symfony\Bundle\MakerBundle\Test\MakerTestCase;
use Symfony\Bundle\MakerBundle\Test\MakerTestDetails;

class MakeRepositoryTest extends MakerTestCase
{
    public function getTestDetails()
    {
        yield 'repository_new' => [MakerTestDetails::createTest(
            $this->getMakerInstance(MakeRepository::class),
            [
                // entity class name
                'User'
            ])
            ->setFixtureFilesPath(__DIR__.'/../fixtures/MakeRepository')
            ->configureDatabase()
            ->updateSchemaAfterCommand()
            ->setRequiredPhpVersion(70100),
        ];
    }
}
