<?php
/**
 * An example handler for the per store.
 *
 * @author  Conduction.nl <info@conduction.nl>
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */

namespace CommonGateway\ZgwToOpenBelastingBundle\ActionHandler;

use CommonGateway\CoreBundle\ActionHandler\ActionHandlerInterface;
use CommonGateway\ZgwToOpenBelastingBundle\Service\OpenBelastingService;


class OpenBelastingHandler implements ActionHandlerInterface
{

    /**
     * The pet store service used by the handler
     *
     * @var OpenBelastingService
     */
    private OpenBelastingService $openBelastingService;


    /**
     * The constructor
     *
     * @param OpenBelastingService $zgwToOpenBelastingService The pet store service
     */
    public function __construct(OpenBelastingService $openBelastingService)
    {
        $this->openBelastingService = $openBelastingService;

    }//end __construct()


    /**
     * Returns the required configuration as a https://json-schema.org array.
     *
     * @return array The configuration that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/ActionHandler/ZgwToOpenBelastingHandler.ActionHandler.json',
            '$schema'     => 'https://docs.commongateway.nl/schemas/ActionHandler.schema.json',
            'title'       => 'ZgwToOpenBelasting ActionHandler',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];

    }//end getConfiguration()


    /**
     * This function runs the service.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @return array
     *
     * @SuppressWarnings("unused") Handlers ara strict implementations
     */
    public function run(array $data, array $configuration): array
    {
        return $this->openBelastingService->OpenBelastingService($data, $configuration);

    }//end run()


}//end class
