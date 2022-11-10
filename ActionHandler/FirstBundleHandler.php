<?php

namespace NovaEBA\FirstTestBundle\ActionHandler;

use NovaEBA\FirstTestBundle\Service\FirstBundleService;

class FirstBundleHandler
{
    private FirstBundleService $firstBundleService;

    public function __construct(FirstBundleService $firstBundleService)
    {
        $this->firstBundleService = $firstBundleService;
    }

    /**
     *  This function returns the requered configuration as a [json-schema](https://json-schema.org/) array.
     *
     * @throws array a [json-schema](https://json-schema.org/) that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/person.schema.json',
            '$schema'     => 'https://json-schema.org/draft/2020-12/schema',
            'title'       => 'FirstBundle Action',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];
    }

    /**
     * This function runs the service.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @throws GatewayException
     * @throws CacheException
     * @throws InvalidArgumentException
     * @throws ComponentException
     *
     * @return array
     */
    public function run(array $data, array $configuration): array
    {
        return $this->firstBundleService->firstBundleHandler($data, $configuration);
    }
}
