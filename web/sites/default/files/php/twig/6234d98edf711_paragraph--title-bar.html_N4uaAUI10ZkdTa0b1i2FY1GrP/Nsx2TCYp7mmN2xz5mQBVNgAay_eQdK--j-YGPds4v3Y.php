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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig */
class __TwigTemplate_96cc24247c8c462ea09f70ea6848f570a5d7c7035411d714b72f1acb29a1cbb8 extends \Twig\Template
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
        // line 7
        $this->loadTemplate("profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig", 7, "1411132943")->display(twig_array_merge($context, ["classes" => [0 => "bg-lighter", 1 => "py-4"]]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig */
class __TwigTemplate_96cc24247c8c462ea09f70ea6848f570a5d7c7035411d714b72f1acb29a1cbb8___1411132943 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        return "paragraph.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("paragraph.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container\">
      <div class=\"d-flex align-items-center\">
        ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
        ";
        // line 12
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_text", [], "any", false, false, true, 12))) {
            // line 13
            echo "          <div class=\"title-bar__content border-left d-none d-lg-block pl-4 flex-grow-1\">
            ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 14, $this->source), "field_title", "field_icon"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 17
        echo "
        <div class=\"title-bar__icon ml-auto d-flex flex-shrink-0 justify-content-center align-items-center bg-light\">
          ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_icon", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 19,  147 => 17,  141 => 14,  138 => 13,  136 => 12,  132 => 11,  128 => 9,  124 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/paragraph/paragraph--title-bar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 11, "render" => 12, "without" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 'without'],
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
