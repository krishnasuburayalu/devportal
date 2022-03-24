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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig */
class __TwigTemplate_bbb99aa15766202b0985b835f59147fa281564cd1cfa2ef2f8f4870cfd5f1b81 extends \Twig\Template
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
        $context["statuses"] = ["approved" => "success", "active" => "success", "revoked" => "danger", "expired" => "warning", "pending" => "warning"];
        // line 20
        echo "
";
        // line 21
        $this->loadTemplate("@radix/badge/badge.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig", 21)->display(twig_array_merge($context, ["type" => ((twig_get_attribute($this->env, $this->source,         // line 22
($context["statuses"] ?? null), twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "value", [], "any", false, false, true, 22))), [], "array", true, true, true, 22)) ? (_twig_default_filter((($__internal_compile_0 = ($context["statuses"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "value", [], "any", false, false, true, 22)))] ?? null) : null), "info")) : ("info")), "content" => twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 23
($context["element"] ?? null), "value", [], "any", false, false, true, 23))]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  45 => 22,  44 => 21,  41 => 20,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/status-property.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 21);
        static $filters = array("default" => 22, "lower" => 22, "trim" => 22, "capitalize" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['default', 'lower', 'trim', 'capitalize'],
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
