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
        echo "<br>
<div class=\"jumbotron\">
    <h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "getConfig", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_description", [], "any", false, false, false, 4), "html", null, true);
        echo "</p>
    <p>
        <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class=\"btn btn-primary\">Read More</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<br>
<div class=\"jumbotron\">
    <h1>{{ this.theme.getConfig.name }}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
        <a href=\"{{ 'about'|page }}\" class=\"btn btn-primary\">Read More</a>
    </p>
</div>", "C:\\wamp64\\www\\acme/themes/acme/pages/home.htm", "");
    }
}
