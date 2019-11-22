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

/* C:\wamp64\www\acme/themes/acme/pages/contact.htm */
class __TwigTemplate_1a61cef5b9e28c58b838fc675a6c511215c58e48e3cd12a01accdaf2b0c64f7d extends \Twig\Template
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
        echo "<h1>Contact Us</h1>
<form action=\"\">
    <div class=\"form-group\">
        <label for=\"\">Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"\">Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"\">Message</label>
        <textarea type=\"text\" class=\"form-control\"></textarea>
    </div>
    <button class=\"submit\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\acme/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Contact Us</h1>
<form action=\"\">
    <div class=\"form-group\">
        <label for=\"\">Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"\">Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"\">Message</label>
        <textarea type=\"text\" class=\"form-control\"></textarea>
    </div>
    <button class=\"submit\">Submit</button>
</form>", "C:\\wamp64\\www\\acme/themes/acme/pages/contact.htm", "");
    }
}
