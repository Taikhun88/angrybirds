<?php

namespace ContainerF5MKO2e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Twig_Command_Debug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.twig.command.debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.twig.command.debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:twig', [], 'Show a list of twig functions, filters, globals and tests', false, function () use ($container): \Symfony\Bridge\Twig\Command\DebugCommand {
            return ($container->privates['twig.command.debug'] ?? $container->load('getTwig_Command_DebugService'));
        });
    }
}
