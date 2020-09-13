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

/* /var/www/html/october/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm */
class __TwigTemplate_5649567294c95cf28346e386ffe5d571e88b423d5f33b2622db4e6e4f59633c0 extends \Twig\Template
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
        $tags = array("put" => 1, "component" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put', 'component'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slideshow"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "<!-- <div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div> -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 8,  74 => 7,  71 => 6,  69 => 1,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put jumbotron %}
  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
{% endput %}

{% component 'slideshow' %}
<!-- <div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div> -->", "/var/www/html/october/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm", "");
    }
}
