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

namespace bheisig\idoitapi\tests\Issues;

use \Exception;
use bheisig\idoitapi\tests\BaseTest;

/**
 * @group issues
 * @group API-163
 * @group unreleased
 * @see https://i-doit.atlassian.net/browse/API-163
 */
class API163Test extends BaseTest {

    /**
     * @throws Exception on error
     */
    public function testIssue() {
        /**
         * Create test data:
         */

        $objecID = $this->createServer();
        $this->isID($objecID);

        /**
         * Run tests:
         */

        $sysid = $this->generateRandomString();

        $entryID = $this->cmdbCategory->save(
            $objecID,
            'C__CATG__GLOBAL',
            [
                'sysid' => $sysid
            ]
        );
        $this->isID($entryID);

        /**
         * Double check:
         */

        $object = $this->cmdbObject->read($objecID);

        $this->assertArrayHasKey('sysid', $object);
        $this->assertIsString($object['sysid']);
        $this->assertSame($sysid, $object['sysid']);
    }

}