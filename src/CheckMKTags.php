<?php

/**
 * Copyright (C) 2016-18 Benjamin Heisig
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
 * @copyright Copyright (C) 2016-18 Benjamin Heisig
 * @license http://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License (AGPL)
 * @link https://github.com/bheisig/i-doit-api-client-php
 */

namespace bheisig\idoitapi;

/**
 * Requests for API namespace 'checkmk.tags'
 */
class CheckMKTags extends Request {

    /**
     * Read host tags for an object
     *
     * @param int $objectID Object identifier
     *
     * @return array
     *
     * @throws \Exception on error
     */
    public function read($objectID) {
        return $this->api->request(
            'checkmk.tags.read',
            [
                'objID' => $objectID
            ]
        );
    }

    /**
     * Read host tags for one or more objects
     *
     * @param int[] $objectIDs List of object identifiers
     *
     * @return array
     *
     * @throws \Exception on error
     */
    public function batchRead(array $objectIDs) {
        $requests = [];

        foreach ($objectIDs as $objectID) {
            if (!is_int($objectID) || $objectID <= 0) {
                throw new \BadMethodCallException('Invalid object identifiers');
            }

            $requests[] = [
                'method' => 'checkmk.tags.read',
                'params' => [
                    'objID' => $objectID
                ]
            ];
        }

        return $this->api->batchRequest($requests);
    }

}