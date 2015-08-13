<?php

namespace LabZone\GitBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use LabZone\GitBundle\DependencyInjection\LabZoneGitExtension;

/**
 * @author Dickriven Chellemboyee <jchellem@gmail.com>
 */
class LabZoneGitExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldLoadServiceDefinition()
    {
        $container = new ContainerBuilder();
        $extension = new LabZoneGitExtension();
        $extension->load(array(), $container);

        $this->assertTrue($container->hasDefinition('lab_zone_git'));
        $this->assertInstanceOf('PHPGit\Git', $container->get('lab_zone_git'));
    }
}
