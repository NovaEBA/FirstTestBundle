<?php

// src/Service/FirstBundleService.php

namespace NovaEBA\FirstTestBundle\Service;

class FirstBundleService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function firstBundleHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your FirstBundleBundle works'];
    }
}
