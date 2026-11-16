<?php

namespace Moonsea\Fields\Contracts;

use Moonsea\Fields\Options\OptionContext;

interface OptionSource
{
    /** @return array<string, string> */
    public function options(OptionContext $context): array;
}
