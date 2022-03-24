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

/* themes/contrib/radix/templates/menu/menu.html.twig */
class __TwigTemplate_686236891d5083a1417951f688817084ef5cf66c69ffa495995120c02c937a19 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->loadTemplate("@radix/nav/nav.twig", "themes/contrib/radix/templates/menu/menu.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/menu/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/menu/menu.html.twig", "/var/www/devportal1/web/themes/contrib/radix/templates/menu/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
