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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/form/form-element--checkbox.html.twig */
class __TwigTemplate_01a0498797e778ecc0a550e3f8786c6619d1ac2b656689b2606a92bb189bb04f extends \Twig\Template
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
        // line 10
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["type"] ?? null), 13, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 14
($context["name"] ?? null), 14, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 15
($context["name"] ?? null), 15, $this->source))), 5 => ((!twig_in_filter(        // line 16
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 17
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 18
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 8 => "form-check"];
        // line 23
        $context["description_classes"] = [0 => "description", 1 => "form-text", 2 => "text-muted", 3 => (((        // line 27
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 30
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
  ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 31, $this->source), "html", null, true);
        echo "

  <i class=\"fas fa-check-square\"></i>
  <i class=\"far fa-square\"></i>

  ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 36, $this->source), "html", null, true);
        echo "

  ";
        // line 38
        if (($context["errors"] ?? null)) {
            // line 39
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 40, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 44)) {
            // line 45
            echo "    <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 45), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo ">
      ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
    </small>
  ";
        }
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/form/form-element--checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 49,  89 => 46,  84 => 45,  82 => 44,  79 => 43,  73 => 40,  70 => 39,  68 => 38,  63 => 36,  55 => 31,  50 => 30,  48 => 27,  47 => 23,  45 => 18,  44 => 17,  43 => 16,  42 => 15,  41 => 14,  40 => 13,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/form/form-element--checkbox.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/form/form-element--checkbox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 38);
        static $filters = array("clean_class" => 13, "escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
