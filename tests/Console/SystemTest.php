<?php

/**
 * Copyright (C) 2016-19 Benjamin Heisig
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Benjamin Heisig <https://benjamin.heisig.name/>
 * @copyright Copyright (C) 2016-19 Benjamin Heisig
 * @license http://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License (AGPL)
 * @link https://github.com/bheisig/i-doit-api-client-php
 */

declare(strict_types=1);

namespace bheisig\idoitapi\tests\Console;

use \Exception;
use bheisig\idoitapi\Console\System;
use bheisig\idoitapi\tests\BaseTest;

/**
 * @group API-57
 */
class SystemTest extends BaseTest {

    /**
     * @var System
     */
    protected $system;

    /**
     * @throws Exception on error
     */
    public function setUp(): void {
        parent::setUp();

        $this->system = new System($this->api);
    }

    /**
     * @throws Exception on error
     */
    public function testPurgeUnfinishedObjects() {
        $result = $this->system->purgeUnfinishedObjects();

        $this->assertIsArray($result);
        $this->isOutput($result);
    }

    /**
     * @throws Exception on error
     */
    public function testPurgeArchivedObjects() {
        $result = $this->system->purgeArchivedObjects();

        $this->assertIsArray($result);
        $this->isOutput($result);
    }

    /**
     * @throws Exception on error
     */
    public function testPurgeDeletedObjects() {
        $result = $this->system->purgeDeletedObjects();

        $this->assertIsArray($result);
        $this->isOutput($result);
    }

}
