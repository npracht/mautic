<?php

/*
 * @copyright   2018 Mautic Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://www.mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
namespace MauticPlugin\MauticIntegrationsBundle\Helpers\SyncProcess;

use MauticPlugin\MauticIntegrationsBundle\DAO\Mapping\MappingManualDAO;
use MauticPlugin\MauticIntegrationsBundle\Facade\SyncDataExchangeService\SyncDataExchangeInterface;
use MauticPlugin\MauticIntegrationsBundle\Helpers\SyncJudge\SyncJudgeInterface;

/**
 * Interface SyncProcessFactoryInterface
 */
interface SyncProcessFactoryInterface
{
    /**
     * @param $fromTimestamp
     * @param SyncJudgeInterface $syncJudgeService
     * @param MappingManualDAO $integrationMappingManual
     * @param SyncDataExchangeInterface $internalSyncDataExchange
     * @param SyncDataExchangeInterface $integrationSyncDataExchange
     *
     * @return SyncProcess
     */
    public function create(
        $fromTimestamp,
        SyncJudgeInterface $syncJudgeService,
        MappingManualDAO $integrationMappingManual,
        SyncDataExchangeInterface $internalSyncDataExchange,
        SyncDataExchangeInterface $integrationSyncDataExchange
    );
}
