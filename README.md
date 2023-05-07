[![tests11i3](https://github.com/sbuerk/tf7-test-extension/actions/workflows/tests11i3.yml/badge.svg)](https://github.com/sbuerk/tf7-test-extension/actions/workflows/tests11i3.yml)[![tests11i4](https://github.com/sbuerk/tf7-test-extension/actions/workflows/tests11i4.yml/badge.svg)](https://github.com/sbuerk/tf7-test-extension/actions/workflows/tests11i4.yml)[![tests12](https://github.com/sbuerk/tf7-test-extension/actions/workflows/tests12.yml/badge.svg)](https://github.com/sbuerk/tf7-test-extension/actions/workflows/tests12.yml)

TestingFramework 7 - Extension Test
===================================

## Description

This is a basic TYPO3 extension, which targets to test work on the `typo3/testing-framework` v7 against different
use cases. It's not meant to be used as example or skeleton for own extension development, albeit some things can be
looked up.

See: [typo3/testing-framework repository](https://github.com/typo3/testing-framework)

Similar test extension for TF8 (TYPO3 v12/v13) see: (sbuerk/t8-test-extension)[https://github.com/sbuerk/tf8-test-extension]

## Maintainer

* Stefan Bürk: stefan@buerk.tech

## TYPO3 `Build/Scripts/runTests.sh`

This extension contains the well known `Build/Scripts/runTests.sh` docker/docker-compose based script wrapping script.

Provided commands/test-suits:

* `-s acceptance`: Execute acceptance tests (not implemented yet)
* `-s clean`: Clean unnecessary files and folders
* `-s cgl`: Ensure code-style guideline rules.
* `-s composerUpdate`: Run composer update
* `-s composerValidate`: Validate composer.json
* `-s functional`: Execute functional tests
* `-s lint`: Lint `*.php` files for syntax errors
* `-s phpstan`: Execute static code analyzer PHPStan
* `-s phpstanGenerateBaseline`: Generate baseline for PHPStan. Can be used to manage temporarily unsolvable reports.
