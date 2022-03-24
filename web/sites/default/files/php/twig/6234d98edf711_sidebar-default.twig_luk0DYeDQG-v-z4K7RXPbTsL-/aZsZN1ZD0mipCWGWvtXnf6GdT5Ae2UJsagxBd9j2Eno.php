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

/* @apigee-kickstart/page/sidebar-default.twig */
class __TwigTemplate_4c3dd62ba22c5c789efd8ae93f25974605abc0bf954d8ba8cc7c5cf120812520 extends \Twig\Template
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
        // line 30
        echo "
";
        // line 31
        $context["content_classes"] = twig_array_merge([0 => (((        // line 32
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-5 offset-md-1") : ("")), 1 => (((        // line 33
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-md-8 offset-md-1") : ("")), 2 => ((( !        // line 34
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-8") : ("")), 3 => ((( !        // line 35
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-lg-7 col-xl-6") : (""))], ((        // line 36
array_key_exists("content_classes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 36, $this->source), [])) : ([])));
        // line 37
        echo "
";
        // line 38
        $context["content_no_sidebar_row_classes"] = ((array_key_exists("content_no_sidebar_row_classes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_row_classes"] ?? null), 38, $this->source), [])) : ([]));
        // line 39
        $context["content_no_sidebar_col_classes"] = twig_array_merge([0 => "col-md"], ((array_key_exists("content_no_sidebar_col_classes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_col_classes"] ?? null), 39, $this->source), [])) : ([])));
        // line 40
        echo "
";
        // line 41
        ob_start(function () { return ''; });
        // line 42
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 43
            echo "    ";
            if ((($context["sidebar_first"] ?? null) || ($context["sidebar_second"] ?? null))) {
                // line 44
                echo "      <div class=\"page__content ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 44, $this->source), " ")), "html", null, true);
                echo "\">
        ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "html", null, true);
                echo "
      </div>
    ";
            } else {
                // line 48
                echo "      ";
                ob_start(function () { return ''; });
                // line 49
                echo "        <div class=\"page__content ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_col_classes"] ?? null), 49, $this->source), " ")), "html", null, true);
                echo "\">
          ";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 50, $this->source), "html", null, true);
                echo "
        </div>
      ";
                $context["content_no_sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 53
                echo "
      ";
                // line 54
                if (($context["content_no_sidebar_row_classes"] ?? null)) {
                    // line 55
                    echo "        <div class=\"row ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_no_sidebar_row_classes"] ?? null), 55, $this->source), " ")), "html", null, true);
                    echo "\">
          ";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_no_sidebar"] ?? null), 56, $this->source), "html", null, true);
                    echo "
        </div>
      ";
                } else {
                    // line 59
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_no_sidebar"] ?? null), 59, $this->source), "html", null, true);
                    echo "
      ";
                }
                // line 61
                echo "    ";
            }
            // line 62
            echo "  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if (($context["sidebar_first"] ?? null)) {
            // line 65
            echo "    <aside class=\"sidebar sidebar-first col-md order-md-first\">
      ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first"] ?? null), 66, $this->source), "html", null, true);
            echo "
    </aside>
  ";
        }
        // line 69
        echo "
  ";
        // line 70
        if (($context["sidebar_second"] ?? null)) {
            // line 71
            echo "    <aside class=\"sidebar sidebar-second col-md order-md-last offset-md-1\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second"] ?? null), 72, $this->source), "html", null, true);
            echo "
    </aside>
  ";
        }
        $context["sidebar_default_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "
<div class=\"page-layout-sidebar-default\">
  ";
        // line 78
        if (($context["container"] ?? null)) {
            // line 79
            echo "    <div class=\"container py-5\">
      <div class=\"row\">
        ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_default_content"] ?? null), 81, $this->source), "html", null, true);
            echo "
      </div>
    </div>

  ";
        } else {
            // line 86
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_default_content"] ?? null), 86, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/page/sidebar-default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 88,  167 => 86,  159 => 81,  155 => 79,  153 => 78,  149 => 76,  142 => 72,  139 => 71,  137 => 70,  134 => 69,  128 => 66,  125 => 65,  123 => 64,  120 => 63,  117 => 62,  114 => 61,  108 => 59,  102 => 56,  97 => 55,  95 => 54,  92 => 53,  86 => 50,  81 => 49,  78 => 48,  72 => 45,  67 => 44,  64 => 43,  61 => 42,  59 => 41,  56 => 40,  54 => 39,  52 => 38,  49 => 37,  47 => 36,  46 => 35,  45 => 34,  44 => 33,  43 => 32,  42 => 31,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/page/sidebar-default.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/src/components/page/sidebar-default.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 42);
        static $filters = array("merge" => 36, "default" => 36, "escape" => 44, "trim" => 44, "join" => 44);
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
