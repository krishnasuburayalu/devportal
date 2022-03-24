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

/* @radix/badge/badge.twig */
class __TwigTemplate_64d012b3c1a515aefacfd6b73804f43d713613c78cf124f4e36191f9f15575a1 extends \Twig\Template
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
        // line 14
        $context["classes"] = twig_array_merge([0 => "badge", 1 => ((        // line 16
($context["type"] ?? null)) ? (("badge-" . $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 16, $this->source))) : (""))], ((        // line 17
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 18
        echo "
";
        // line 19
        $context["html_tag"] = (($context["html_tag"]) ?? ("span"));
        // line 20
        echo "
";
        // line 21
        if (($context["url"] ?? null)) {
            // line 22
            echo "  ";
            $context["html_tag"] = "a";
            // line 23
            echo "  ";
            $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 23, $this->source));
        }
        // line 25
        echo "
";
        // line 26
        if (($context["content"] ?? null)) {
            // line 27
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 27, $this->source), "html", null, true);
            echo " ";
            ((($context["url"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("href=" . ($context["url"] ?? null)), "html", null, true))) : (print ("")));
            echo " class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 27, $this->source), " "), "html", null, true);
            echo "\">

  ";
            // line 29
            $this->displayBlock('content', $context, $blocks);
            // line 32
            echo "
  </";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 33, $this->source), "html", null, true);
            echo ">
";
        }
        // line 35
        echo "

";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 30, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@radix/badge/badge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  92 => 29,  86 => 35,  81 => 33,  78 => 32,  76 => 29,  66 => 27,  64 => 26,  61 => 25,  57 => 23,  54 => 22,  52 => 21,  49 => 20,  47 => 19,  44 => 18,  42 => 17,  41 => 16,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/badge/badge.twig", "/var/www/devportal1/web/themes/contrib/radix/src/components/badge/badge.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 21, "block" => 29);
        static $filters = array("merge" => 17, "render" => 23, "escape" => 27, "join" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'render', 'escape', 'join'],
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
