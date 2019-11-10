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

/* C:\wamp64\www\acme/themes/acme/partials/site/footer.htm */
class __TwigTemplate_f527455b0bdff04a848ec91798594426f97be89517e4ece4c1027f8f97f4de3c extends \Twig\Template
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
        echo "<p class=\"text\">Coppyright &copy; 2019 Acme Services</p>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\acme/themes/acme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"text\">Coppyright &copy; 2019 Acme Services</p>", "C:\\wamp64\\www\\acme/themes/acme/partials/site/footer.htm", "");
    }
}
