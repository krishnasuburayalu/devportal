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

/* modules/contrib/apigee_edge/templates/app-credential.html.twig */
class __TwigTemplate_8b41e5a5ce4353271580464bce0bbc971e7231c2b8df9ea66c9e779211ab6637 extends \Twig\Template
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
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("apigee_edge/apigee_edge.app_credential"), "html", null, true);
        echo "

";
        // line 30
        $context["classes"] = twig_array_merge([0 => "app-credential"], ((        // line 32
array_key_exists("classes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 32, $this->source), [])) : ([])));
        // line 34
        echo "
<fieldset ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
  <legend>
    ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Credential"));
        echo "
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["operations"] ?? null), 40, $this->source), "html", null, true);
        echo "
    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_wrapper"] ?? null), 41, $this->source), "html", null, true);
        echo "
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_wrapper"] ?? null), 42, $this->source), "html", null, true);
        echo "
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/apigee_edge/templates/app-credential.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 42,  65 => 41,  61 => 40,  55 => 37,  50 => 35,  47 => 34,  45 => 32,  44 => 30,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/apigee_edge/templates/app-credential.html.twig", "/var/www/devportal1/web/modules/contrib/apigee_edge/templates/app-credential.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30);
        static $filters = array("escape" => 27, "merge" => 32, "default" => 32, "t" => 37);
        static $functions = array("attach_library" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'merge', 'default', 't'],
                ['attach_library']
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
