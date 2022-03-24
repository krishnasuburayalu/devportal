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

/* @apigee-kickstart/card/collapsible-card.twig */
class __TwigTemplate_1d34bb0b335049df119890d29ab6e4454f850b4bae417d67d7757370a9138969 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 14
        $context["classes"] = twig_array_merge([0 => "collapsible-card", 1 => "collapsible-card--collapsed"], ((        // line 17
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 19
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">

  <div class=\"collapsible-card__header\">
    <button class=\"collapsible-card__toggle border-0 d-flex d-flex justify-content-between align-items-center w-100 px-4 py-3 bg-light\">
      ";
        // line 23
        if (($context["title"] ?? null)) {
            // line 24
            echo "        <span class=\"btn btn-link px-0\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "    </button>
  </div>

  <div class=\"collapsible-card__content p-4\">
    ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "  </div>
</div>
";
    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 28, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 35, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/card/collapsible-card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  92 => 34,  85 => 28,  81 => 27,  75 => 37,  73 => 34,  67 => 30,  65 => 27,  62 => 26,  56 => 24,  54 => 23,  46 => 19,  44 => 17,  43 => 14,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/card/collapsible-card.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/card/collapsible-card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 23, "block" => 27);
        static $filters = array("merge" => 17, "escape" => 19);
        static $functions = array("create_attribute" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape'],
                ['create_attribute']
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
