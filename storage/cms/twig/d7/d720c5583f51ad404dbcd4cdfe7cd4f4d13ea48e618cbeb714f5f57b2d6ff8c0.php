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

/* C:\wamp64\www\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_6602f0b7281b2827a6de81b1bc7ec5ec21d815e06847471467b3b91b24519bed extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>
    </div>
</nav>", "C:\\wamp64\\www\\acme/themes/acme/partials/site/header.htm", "");
    }
}
