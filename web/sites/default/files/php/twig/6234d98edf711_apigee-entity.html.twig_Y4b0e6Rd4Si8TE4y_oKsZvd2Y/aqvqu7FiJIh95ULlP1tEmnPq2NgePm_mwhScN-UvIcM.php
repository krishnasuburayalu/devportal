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

/* apigee-entity.html.twig */
class __TwigTemplate_d973f6159b1494a5baa6a012492963d97ae6bec9c69fd1021fcafcf2e3844932 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'apigee_entity' => [$this, 'block_apigee_entity'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
";
        // line 49
        $context["classes"] = twig_array_merge([0 => "apigee-entity", 1 => ((        // line 51
($context["view_mode"] ?? null)) ? (("apigee-entity--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 51, $this->source)))) : ("")), 2 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 52
($context["entity"] ?? null), "getEntityTypeId", [], "any", false, false, true, 52), 52, $this->source)), 3 => ((        // line 53
($context["view_mode"] ?? null)) ? (((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getEntityTypeId", [], "any", false, false, true, 53), 53, $this->source)) . "--view-mode-") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 53, $this->source)))) : (""))], ((        // line 54
array_key_exists("classes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 54, $this->source), [])) : ([])));
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('apigee_entity', $context, $blocks);
    }

    public function block_apigee_entity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "  <article role=\"article\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 58, $this->source), "role"), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        echo ">

    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
  </article>
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 61, $this->source), "html", null, true);
        echo "
      ";
        // line 62
        if ((($context["label"] ?? null) && (($context["view_mode"] ?? null) != "full"))) {
            // line 63
            echo "        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 63, $this->source), "html", null, true);
            echo ">
          ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 64, $this->source), "html", null, true);
            echo "
        </h2>
      ";
        }
        // line 67
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 67, $this->source), "html", null, true);
        echo "

      <div";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 69, $this->source), "html", null, true);
        echo ">
        ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 70, $this->source), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "apigee-entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 70,  102 => 69,  96 => 67,  90 => 64,  85 => 63,  83 => 62,  78 => 61,  74 => 60,  68 => 73,  66 => 60,  60 => 58,  53 => 57,  50 => 56,  48 => 54,  47 => 53,  46 => 52,  45 => 51,  44 => 49,  41 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "apigee-entity.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "block" => 57, "if" => 62);
        static $filters = array("merge" => 54, "clean_class" => 51, "default" => 54, "escape" => 58, "without" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['merge', 'clean_class', 'default', 'escape', 'without'],
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
