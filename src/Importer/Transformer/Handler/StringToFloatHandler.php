<?php

declare(strict_types=1);

namespace FriendsOfSylius\SyliusImportExportPlugin\Importer\Transformer\Handler;

use FriendsOfSylius\SyliusImportExportPlugin\Importer\Transformer\Handler;

final class StringToFloatHandler extends Handler
{
    /**
     * {@inheritdoc}
     */
    protected function process(?string $type, string $value): float
    {
        return (float) $value;
    }

    protected function allows(?string $type, string $value): bool
    {
        return $type === 'float' || $type === 'percent';
    }
}
