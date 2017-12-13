#   Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).


##  [Unreleased]


### Added

-   More assertions in unit tests


### Changed

-   Method `cmdb.category.create`, `cmdb.category_info.read` (and others, too) do not need parameters `catg` or `cats`. Parameter `category` seems to be sufficient.
-   Return empty array for reports with no results (class `CMDBReports`)
-   Remove many dependencies from unit tests


### Fixed

-   Use correct setting for proxy type and check if username is set


##  [0.3] – 2017-07-25


### Added

-   Check whether connection timed out or i-doit host sends HTTP status code that indicates something went wrong
-   Throw more useful exceptions when connection to Web server failed
-   Throw exception in method `CMDBObject::load()` when object not found
-   Limit batch requests in `Select::find()`


##  [0.2] – 2017-04-05


### Added

-   Upload image files with class Image
-   Get last server response with method `API::getLastResponse()`
-   Find more objects by their attributes with method `Select::find()`
-   Script for debugging purposes in `README.md`
-   Many more unit tests


### Fixed

-   Broken batch request in method `Image::batchAdd()`
-   Broken error message in method `CMDBCategory::batchCreate()`
-   In a batch request sub results have no key id in method `CMDBCategory::batchCreate()`
-   Broken Exception message in `CMDBObject::upsert()`
-   Typos in `README.md`


##  [0.1] – 2017-02-09

Initial release


[Unreleased]: https://github.com/bheisig/i-doit-api-client-php/compare/0.3...HEAD
[0.3]: https://github.com/bheisig/i-doit-api-client-php/compare/0.2...0.3
[0.2]: https://github.com/bheisig/i-doit-api-client-php/compare/0.1...0.2