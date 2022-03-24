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

/* @apigee-kickstart/form/fieldset.twig */
class __TwigTemplate_6570f990086e65ea74b25fe19af0f76dbd4e7620ca71ed6ac90c382697df7a62 extends \Twig\Template
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
        // line 8
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper", 4 => "border", 5 => "mb-3"];
        // line 17
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        $context["legend_classes"] = [0 => "float-left", 1 => "py-2", 2 => "px-4", 3 => "mb-0", 4 => "border-bottom"];
        // line 27
        echo "  ";
        // line 28
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 30
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 31
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 34
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 34), "addClass", [0 => ($context["legend_classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        echo ">
      ";
        // line 36
        echo "      <span";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 36), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
        ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
      </span>

      <button class=\"btn-link\">
        <i class=\"fas fa-chevron-down d-md-none\"></i>
      </button>
  </legend>
  <div class=\"p-4 fieldset-wrapper\">
    ";
        // line 45
        if (($context["errors"] ?? null)) {
            // line 46
            echo "      <div>
        ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 47, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 50
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 51
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 51, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 53
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 53, $this->source), "html", null, true);
        echo "
    ";
        // line 54
        if (($context["suffix"] ?? null)) {
            // line 55
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 55, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 57
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 57)) {
            // line 58
            echo "      <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 58), "addClass", [0 => "description", 1 => "form-text", 2 => "text-muted"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</small>
    ";
        }
        // line 60
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/form/fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 60,  111 => 58,  108 => 57,  102 => 55,  100 => 54,  95 => 53,  89 => 51,  86 => 50,  80 => 47,  77 => 46,  75 => 45,  64 => 37,  59 => 36,  54 => 34,  52 => 31,  51 => 30,  50 => 28,  48 => 27,  46 => 19,  41 => 17,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/form/fieldset.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/form/fieldset.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 45);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
