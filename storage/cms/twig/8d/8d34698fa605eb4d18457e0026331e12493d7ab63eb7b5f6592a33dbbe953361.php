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

/* C:\wamp64\www\acme/themes/responsiv-clean/pages/Contacts.htm */
class __TwigTemplate_fee3c8768b739f7f2648f5014a8ecc411ed4045535ba23582c5a33d5d7078c17 extends \Twig\Template
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
        return "C:\\wamp64\\www\\acme/themes/responsiv-clean/pages/Contacts.htm";
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
</form>", "C:\\wamp64\\www\\acme/themes/responsiv-clean/pages/Contacts.htm", "");
    }
}
