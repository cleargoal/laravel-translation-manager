<?php

namespace Cleargoal\TranslationManager\Tests;

use Cleargoal\TranslationManager\Manager;

class ManagerTest extends TestCase
{
    public function testResolveManager(): void
    {
        /** @var Manager $manager */
        $manager = app(Manager::class);

        $this->assertIsArray($manager->getConfig());
    }

}
