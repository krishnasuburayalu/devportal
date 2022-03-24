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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view--apigee-api-catalog--page-1.html.twig */
class __TwigTemplate_a0f2ce9c479b018737c38f08b2d2c19f610e430979cab11a49baf768a87bd185 extends \Twig\Template
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
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["id"] ?? null), 12, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 13
($context["id"] ?? null), 13, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 14
($context["display_id"] ?? null), 14, $this->source)), 4 => ((        // line 15
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 15, $this->source))) : (""))];
        // line 18
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 20, $this->source), "html", null, true);
        echo "
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
        echo "

  ";
        // line 23
        if (($context["header"] ?? null)) {
            // line 24
            echo "    <header>
      ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 25, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 28
        echo "
  <div class=\"row\">
    <div class=\"col-md-4 col-lg-3\">
      ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 31, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"col-md-8 col-lg-9\">
      ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 35, $this->source), "html", null, true);
        echo "

      ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 37, $this->source), "html", null, true);
        echo "

      ";
        // line 39
        if (($context["empty"] ?? null)) {
            // line 40
            echo "        <div class=\"p-4 text-center text-muted\">
          ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 41, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 44
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 44, $this->source), "html", null, true);
        echo "

      ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 46, $this->source), "html", null, true);
        echo "
      ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 47, $this->source), "html", null, true);
        echo "
    </div>
  </div>

  ";
        // line 51
        if (($context["footer"] ?? null)) {
            // line 52
            echo "    <footer>
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 57, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view--apigee-api-catalog--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 57,  135 => 56,  129 => 53,  126 => 52,  124 => 51,  117 => 47,  113 => 46,  107 => 44,  101 => 41,  98 => 40,  96 => 39,  91 => 37,  86 => 35,  79 => 31,  74 => 28,  68 => 25,  65 => 24,  63 => 23,  58 => 21,  54 => 20,  50 => 19,  45 => 18,  43 => 15,  42 => 14,  41 => 13,  40 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view--apigee-api-catalog--page-1.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view--apigee-api-catalog--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 23);
        static $filters = array("clean_class" => 12, "escape" => 18);
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
