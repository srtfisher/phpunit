--TEST--
TestDox: Default output; Data Provider with string data set name; TestDox metadata with placeholders; Colorized
--XFAIL--
Colorized TestDox result printing has not been migrated to events yet.
See https://github.com/sebastianbergmann/phpunit/issues/5040 for details.
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-progress';
$_SERVER['argv'][] = '--testdox';
$_SERVER['argv'][] = '--colors=always';
$_SERVER['argv'][] = __DIR__ . '/_files/DataProviderWithNumericDataSetNameAndMetadataWithPlaceholdersTest.php';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime:       %s

Time: %s, Memory: %s

[4mText from class-level TestDox metadata[0m
 [32m✔[0m Text from method-level TestDox metadata for successful test with placeholders ([36mstring[0m, [36m0[0m, [36m0.0[0m [36marray[0m, [36mtrue[0m)
 [31m✘[0m Text from method-level TestDox metadata for failing test with placeholders ([36mstring[0m, [36m0[0m, [36m0.0[0m [36marray[0m, [36mtrue[0m)
   [31m┐[0m
   [31m├[0m [41;37mFailed asserting that false is true.[0m
   [31m│[0m
   [31m╵[0m %stests[2m/[22mend-to-end[2m/[22mtestdox[2m/[22m_files[2m/[22mDataProviderWithNumericDataSetNameAndMetadataWithPlaceholdersTest.php[2m:[22m[34m%d[0m
   [31m┴[0m

[37;41mFAILURES![0m
[37;41mTests: 2[0m[37;41m, Assertions: 2[0m[37;41m, Failures: 1[0m[37;41m.[0m
