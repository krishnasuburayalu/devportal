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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-secret.html.twig */
class __TwigTemplate_cfe322f08132bfb6fe43768f06e718726b4146a89c4b6c1174f05da2f52c2c9c extends \Twig\Template
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
        // line 12
        echo "
";
        // line 13
        $context["id"] = ("secret-id-" . twig_random($this->env));
        // line 14
        echo "
";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("apigee_edge/apigee_edge.secret"), "html", null, true);
        echo "
<div class=\"secret field__item\" id=";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 16, $this->source), "html", null, true);
        echo ">
  <div class=\"secret__value\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 17, $this->source), "html", null, true);
        echo "</div>
  <div class=\"secret__value__hidden\" aria-hidden=\"true\">••••••••••••••••</div>
  <br/>
  <button class=\"secret__toggle\" title=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle key visibility"));
        echo "\" aria-controls=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 20, $this->source), "html", null, true);
        echo "\">
    <a class=\"secret__toggle__show\" href=\"#\"><i class=\"fas fa-eye secret__toggle__show\"></i></a>
    <a class=\"secret__toggle__hide\" href=\"#\"><i class=\"fas fa-eye-slash secret__toggle__hide\"></i></a>
  </button>

  <div class=\"secret__copy\">
    <span class=\"badge badge-light\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copied"));
        echo "</span>
    <button class=\"secret__copy\" data-value=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 27, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click to copy"));
        echo "\">
      <i class=\"fas fa-paste\"></i>
    </button>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  72 => 26,  61 => 20,  55 => 17,  51 => 16,  47 => 15,  44 => 14,  42 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-secret.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/apigee/apigee-secret.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13);
        static $filters = array("escape" => 15, "t" => 20);
        static $functions = array("random" => 13, "attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 't'],
                ['random', 'attach_library']
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
