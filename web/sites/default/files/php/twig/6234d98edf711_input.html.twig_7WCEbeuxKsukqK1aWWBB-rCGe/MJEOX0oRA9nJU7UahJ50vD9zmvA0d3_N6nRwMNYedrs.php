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

/* themes/contrib/radix/templates/form/input.html.twig */
class __TwigTemplate_ab307ed3be6bbbb13a160ff8410497cc55968bf4bc4efc411aabbae60783ad3f extends \Twig\Template
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
        // line 13
        if ((($context["type"] ?? null) != "file")) {
            // line 14
            echo "  ";
            // line 15
            $context["classes"] = [0 => "form-control", 1 => ((twig_get_attribute($this->env, $this->source,             // line 17
($context["attributes"] ?? null), "hasClass", [0 => "error"], "method", false, false, true, 17)) ? ("is-invalid") : (""))];
        }
        // line 21
        echo "
<input";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), "removeClass", [0 => "form-text"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo " />";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 22, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  47 => 21,  44 => 17,  43 => 15,  41 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/form/input.html.twig", "/var/www/devportal1/web/themes/contrib/radix/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "set" => 15);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
