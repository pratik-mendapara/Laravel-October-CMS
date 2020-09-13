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

/* /var/www/html/october/themes/hambern-hambern-blank-bootstrap-4/pages/features.htm */
class __TwigTemplate_62b2201fcc391ab2bc8ad1da6a810a1aff924ee2743a0bf9bb7bd93b99435dad extends \Twig\Template
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
        $tags = array("put" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
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
        echo "  <h1 class=\"display-3\">Bootstrap 4</h1>
  <p class=\"lead\">This is a simple Bootstrap 4 template for October CMS</p>
  <p>It supports several useful features right out of the box. All you have to do is to put it to work</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
<div data-type=\"youtube\" data-video-id=\"1J5WeBhhO2k\" data-plyr='{\"autoplay\":true}'></div>

<h1 class=\"display-4 wow animated zoomInDown m-t-3\">Features</h1>

<dl class=\"row m-t-3 wow animated zoomInUp\" data-wow-delay=\".1s\">
  <dt class=\"col-sm-3\">Bootstrap 4</dt>
  <dd class=\"col-sm-9\">Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://v4-alpha.getbootstrap.com\">http://v4-alpha.getbootstrap.com</a></dd>

  <dt class=\"col-sm-3\">jQuery</dt>
  <dd class=\"col-sm-9\">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://jquery.com\">https://jquery.com</a></dd>

  <dt class=\"col-sm-3\">Font Awesome</dt>
  <dd class=\"col-sm-9\">Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://fontawesome.io\">http://fontawesome.io</a></dd>

  <dt class=\"col-sm-3\">Animate.css</dt>
  <dd class=\"col-sm-9\">Just-add-water CSS animations.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://daneden.github.io/animate.css\">https://daneden.github.io/animate.css</a></dd>

  <dt class=\"col-sm-3\">Wow.js</dt>
  <dd class=\"col-sm-9\">Reveal Animations When You Scroll. Very Animate.css Friend :-) Easily customize animation settings: style, delay, length, offset, iterations...</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://mynameismatthieu.com/WOW\">http://mynameismatthieu.com/WOW</a></dd>

  <dt class=\"col-sm-3\">Holder.js</dt>
  <dd class=\"col-sm-9\">Holder renders image placeholders entirely in browser.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://holderjs.com\">http://holderjs.com</a></dd>

  <dt class=\"col-sm-3\">Plyr</dt>
  <dd class=\"col-sm-9\">A simple, accessible and customizable HTML5, YouTube and Vimeo media player.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://plyr.io\">https://plyr.io</a></dd>

  <dt class=\"col-sm-3\">Bower updatable</dt>
  <dd class=\"col-sm-9\">Everything is updatable with a simple <code>\$ bower update</code> in the themes root folder.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://bower.io\">https://bower.io</a></dd>
</dl>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/hambern-hambern-blank-bootstrap-4/pages/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 6,  69 => 1,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put jumbotron %}
  <h1 class=\"display-3\">Bootstrap 4</h1>
  <p class=\"lead\">This is a simple Bootstrap 4 template for October CMS</p>
  <p>It supports several useful features right out of the box. All you have to do is to put it to work</p>
{% endput %}

<div data-type=\"youtube\" data-video-id=\"1J5WeBhhO2k\" data-plyr='{\"autoplay\":true}'></div>

<h1 class=\"display-4 wow animated zoomInDown m-t-3\">Features</h1>

<dl class=\"row m-t-3 wow animated zoomInUp\" data-wow-delay=\".1s\">
  <dt class=\"col-sm-3\">Bootstrap 4</dt>
  <dd class=\"col-sm-9\">Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://v4-alpha.getbootstrap.com\">http://v4-alpha.getbootstrap.com</a></dd>

  <dt class=\"col-sm-3\">jQuery</dt>
  <dd class=\"col-sm-9\">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://jquery.com\">https://jquery.com</a></dd>

  <dt class=\"col-sm-3\">Font Awesome</dt>
  <dd class=\"col-sm-9\">Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://fontawesome.io\">http://fontawesome.io</a></dd>

  <dt class=\"col-sm-3\">Animate.css</dt>
  <dd class=\"col-sm-9\">Just-add-water CSS animations.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://daneden.github.io/animate.css\">https://daneden.github.io/animate.css</a></dd>

  <dt class=\"col-sm-3\">Wow.js</dt>
  <dd class=\"col-sm-9\">Reveal Animations When You Scroll. Very Animate.css Friend :-) Easily customize animation settings: style, delay, length, offset, iterations...</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://mynameismatthieu.com/WOW\">http://mynameismatthieu.com/WOW</a></dd>

  <dt class=\"col-sm-3\">Holder.js</dt>
  <dd class=\"col-sm-9\">Holder renders image placeholders entirely in browser.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://holderjs.com\">http://holderjs.com</a></dd>

  <dt class=\"col-sm-3\">Plyr</dt>
  <dd class=\"col-sm-9\">A simple, accessible and customizable HTML5, YouTube and Vimeo media player.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://plyr.io\">https://plyr.io</a></dd>

  <dt class=\"col-sm-3\">Bower updatable</dt>
  <dd class=\"col-sm-9\">Everything is updatable with a simple <code>\$ bower update</code> in the themes root folder.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://bower.io\">https://bower.io</a></dd>
</dl>", "/var/www/html/october/themes/hambern-hambern-blank-bootstrap-4/pages/features.htm", "");
    }
}
