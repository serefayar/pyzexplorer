<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Setup;

use Spryker\Zed\Cache\Communication\Console\EmptyAllCachesConsole;
use Spryker\Zed\Installer\Communication\Console\InitializeDatabaseConsole;
use Spryker\Zed\Propel\Communication\Console\PropelInstallConsole;
use Spryker\Zed\Search\Communication\Console\SearchConsole;
use Spryker\Zed\Setup\Communication\Console\EmptyGeneratedDirectoryConsole;
use Spryker\Zed\Setup\SetupConfig as SprykerSetupConfig;
use Spryker\Zed\Transfer\Communication\Console\GeneratorConsole;
use Spryker\Zed\ZedNavigation\Communication\Console\BuildNavigationConsole;

class SetupConfig extends SprykerSetupConfig
{
    /**
     * @return array
     */
    public function getSetupInstallCommandNames()
    {
        return [
            EmptyAllCachesConsole::COMMAND_NAME,
            EmptyGeneratedDirectoryConsole::COMMAND_NAME,
            PropelInstallConsole::COMMAND_NAME,
            GeneratorConsole::COMMAND_NAME,
            InitializeDatabaseConsole::COMMAND_NAME,
            BuildNavigationConsole::COMMAND_NAME,
            SearchConsole::COMMAND_NAME,
        ];
    }
}
