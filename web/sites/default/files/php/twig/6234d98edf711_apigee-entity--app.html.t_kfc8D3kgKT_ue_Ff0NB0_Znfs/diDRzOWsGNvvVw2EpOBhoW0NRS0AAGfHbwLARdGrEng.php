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

/* apigee-entity--app.html.twig */
class __TwigTemplate_dfad6da1c0e02ac205bdcf22926fc1fa4555b260d76a74d80969977a8678f06d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
";
        // line 43
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getEntityTypeId", [], "any", false, false, true, 43), [0 => "developer_app", 1 => "team_app"])) {
            // line 44
            echo "  ";
            $context["classes"] = [0 => "apigee-entity--app", 1 => ("apigee-entity--app--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 46
($context["view_mode"] ?? null), 46, $this->source)))];
        }
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">

    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "warnings", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "

    ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 55)) {
            // line 56
            echo "      <div class=\"tab-pane show active\" id=\"credentials-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_suffix"] ?? null), 56, $this->source), "html", null, true);
            echo "\">
        <div class=\"card apigee-entity--app__details\">
          <h4 class=\"card-header bg-white\">
            ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Details");
            echo "
          </h4>
          <div class=\"card-body\">
            ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 62, $this->source), "credentials", "warnings", "add_keys"), "html", null, true);
            echo "
          </div>
        </div>

        <div class=\"card apigee-entity--app__credentials\">
          <h4 class=\"card-header bg-white\">
            ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Credentials"));
            echo "
            ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "add_keys", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
          </h4>
          <div class=\"card-body pb-0\">
            ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 72), "approved", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
          </div>
        </div>

        ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 76), "revoked", [], "any", false, false, true, 76)) {
                // line 77
                echo "          <div class=\"apigee-entity--app__credentials\">
            ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "credentials", [], "any", false, false, true, 78), "revoked", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 81
            echo "      </div>
    ";
        }
        // line 83
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "apigee-entity--app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 83,  123 => 81,  117 => 78,  114 => 77,  112 => 76,  105 => 72,  99 => 69,  95 => 68,  86 => 62,  80 => 59,  73 => 56,  71 => 55,  66 => 53,  60 => 51,  53 => 50,  50 => 49,  47 => 46,  45 => 44,  43 => 43,  40 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "apigee-entity--app.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-entity--app.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43, "set" => 44, "block" => 50);
        static $filters = array("clean_class" => 46, "escape" => 51, "without" => 62, "t" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['clean_class', 'escape', 'without', 't'],
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
