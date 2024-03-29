<?php

/**
 * This file is part of "LoTGD Bundle Fund Drive".
 *
 * @see https://github.com/lotgd-core/bundle-fund-drive
 *
 * @license https://github.com/lotgd-core/bundle-fund-drive/blob/main/LICENSE
 * @author IDMarinas
 *
 * @since 0.1.0
 */

namespace Lotgd\Bundle\FundDriveRewards;

use Lotgd\Bundle\Contract\LotgdBundleInterface;
use Lotgd\Bundle\Contract\LotgdBundleTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LotgdFundDriveRewardsBundle extends Bundle implements LotgdBundleInterface
{
    use LotgdBundleTrait;

    /**
     * @inheritDoc
     */
    public function getLotgdVersion(): string
    {
        return '0.1.3';
    }

    /**
     * @inheritDoc
     */
    public function getLotgdIcon(): ?string
    {
        return 'gift';
    }

    /**
     * @inheritDoc
     */
    public function getLotgdDescription(): string
    {
        return 'Give rewards to players based on Fund Drive Goal in your LoTGD server.';
    }

    /**
     * @inheritDoc
     */
    public function getLotgdDownload(): ?string
    {
        return 'https://github.com/lotgd-core/bundle-fund-drive-rewards';
    }
}
