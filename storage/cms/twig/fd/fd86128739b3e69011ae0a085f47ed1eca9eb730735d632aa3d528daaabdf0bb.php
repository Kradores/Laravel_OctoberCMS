<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\acme/themes/acme/pages/home.htm */
class __TwigTemplate_5d9f14f80eae2ca874de8b9e29e8b48a8dbadf9593c308469d0cd4eaf676633b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1>Welcome</h1>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\acme/themes/acme/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Welcome</h1>", "C:\\wamp64\\www\\acme/themes/acme/pages/home.htm", "");
    }
}
