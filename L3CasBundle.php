<?php

namespace TelconetSSO\Bundle\CasBundle;

use TelconetSSO\Bundle\CasBundle\Security\CasFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class L3CasBundle extends Bundle {
    public function build(ContainerBuilder $container) {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new CasFactory());
    }

}
