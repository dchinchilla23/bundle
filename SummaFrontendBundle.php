<?php

namespace Summa\FrontendBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SummaFrontendBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'OroFrontendBundle';
    }
}