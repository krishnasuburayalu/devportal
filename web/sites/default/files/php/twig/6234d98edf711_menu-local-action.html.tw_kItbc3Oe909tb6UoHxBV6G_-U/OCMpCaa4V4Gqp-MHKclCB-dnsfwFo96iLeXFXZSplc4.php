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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig */
class __TwigTemplate_37f1efe03baf4a804a8f337afc20399519d96e1631b17664af6d14f5ad522b0a extends \Twig\Template
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
        // line 7
        echo "
";
        // line 8
        $context["show_title"] = twig_in_filter(($context["route_name"] ?? null), [0 => "entity.commerce_payment_method.collection"]);
        // line 11
        echo "
";
        // line 12
        $context["classes"] = twig_array_merge([0 => "my-4", 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 =         // line 14
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#link"] ?? null) : null), "url", [], "any", false, false, true, 14), "routeParameters", [], "any", false, false, true, 14), "node_type", [], "any", false, false, true, 14) == "forum")) ? ("forum__add") : ("")), 2 => ((        // line 15
($context["show_title"] ?? null)) ? ("d-flex justify-content-between align-items-center") : (""))], ((        // line 16
array_key_exists("classes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 16, $this->source), [])) : ([])));
        // line 17
        echo "
<div class=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 18, $this->source), " ")), "html", null, true);
        echo "\">
    ";
        // line 19
        if (($context["show_title"] ?? null)) {
            // line 20
            echo "        <h4 class=\"mb-0\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 20, $this->source), "html", null, true);
            echo "</h4>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 23, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  67 => 22,  61 => 20,  59 => 19,  55 => 18,  52 => 17,  50 => 16,  49 => 15,  48 => 14,  47 => 12,  44 => 11,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 19);
        static $filters = array("merge" => 16, "default" => 16, "escape" => 18, "trim" => 18, "join" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'default', 'escape', 'trim', 'join'],
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
