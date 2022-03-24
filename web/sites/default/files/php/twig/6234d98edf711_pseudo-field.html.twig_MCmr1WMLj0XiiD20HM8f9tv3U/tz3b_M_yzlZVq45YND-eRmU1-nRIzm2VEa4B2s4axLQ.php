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

/* profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig */
class __TwigTemplate_e187220369ff3b7a61bcb206db44a1e6c483b30cdbca50772c379cc15f8de818 extends \Twig\Template
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
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, true, 9)) {
            // line 10
            echo "  <div class=\"field field-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
            echo "\">
    ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 11)) {
                // line 12
                echo "      <div class=\"field__label\">
        ";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo ":
      </div>
    ";
            }
            // line 16
            echo "
    <div>
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  57 => 16,  51 => 13,  48 => 12,  46 => 11,  41 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("escape" => 10, "clean_class" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'clean_class'],
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
