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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig */
class __TwigTemplate_86c4b92d5622ca34e8eb9dd8cb588d6f397082473ccfaf831abe71953d3dd21e extends \Twig\Template
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
        // line 14
        return "apigee-entity.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("apigee-entity.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
  ";
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "    <h2 class=\"card-title\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "label", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</h2>
  ";
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "  ";
        $context["image"] = (((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", true, true, true, 20) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 20)))) ? (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 20)) : (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_apidoc", [], "any", false, false, true, 20)));
        // line 21
        echo "
  ";
        // line 22
        $this->loadTemplate("@apigee-kickstart/card/card.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig", 22)->display(twig_array_merge($context, ["classes" => [0 => "api-card"], "url" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 24
($context["content"] ?? null), "field_apidoc_file_link", [], "any", false, false, true, 24)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), "title" =>         // line 25
($context["title"] ?? null), "image" =>         // line 26
($context["image"] ?? null), "body" => $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(        // line 27
($context["content"] ?? null), "title", "field_image", "field_image_apidoc", "field_apidoc_file_link", "field_apidoc_spec"), "footer" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 28
($context["content"] ?? null), "field_apidoc_file_link", [], "any", false, false, true, 28)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), "hover_shadow" => true]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  73 => 27,  72 => 26,  71 => 25,  70 => 24,  69 => 22,  66 => 21,  63 => 20,  57 => 18,  55 => 17,  52 => 16,  48 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig", "/var/www/devportal1/web/profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "include" => 22);
        static $filters = array("escape" => 18, "without" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['escape', 'without'],
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
