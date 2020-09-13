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

/* /var/www/html/october/plugins/flosch/slideshow/components/slideshow/default.htm */
class __TwigTemplate_62d3feb5861519e34c84a3a649eca56c838fcaec00303aa5a23a55417724fc6b extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 5);
        $filters = array("escape" => 7, "raw" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "slideshow", [], "any", false, false, true, 1), "slides", [], "any", false, false, true, 1)) {
            // line 2
            echo "    <div id='slideshow' class='carousel slide' data-ride='carousel' data-interval='3500'>
        <div class='carousel-content'>
            <div class='carousel-inner' role='listbox'>
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "slideshow", [], "any", false, false, true, 5), "slides", [], "any", false, false, true, 5));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                // line 6
                echo "                    <div class='item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 6)) {
                    echo " active";
                }
                echo "'>
                        <img class='img-responsive' src='";
                // line 7
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, true, 7), "path", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "'>
                        ";
                // line 8
                if ((twig_get_attribute($this->env, $this->source, $context["slide"], "name", [], "any", false, false, true, 8) || twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, true, 8))) {
                    // line 9
                    echo "                            <div class='carousel-caption clearfix'>
                                ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, true, 10)) {
                        echo "<h4 class='carousel-caption-title'>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                        echo "</h4>";
                    }
                    // line 11
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, true, 11)) {
                        echo "<p>";
                        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, true, 11), 11, $this->source);
                        echo "</p>";
                    }
                    // line 12
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, true, 12)) {
                        echo "<a class='carousel-caption-link' href='";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                        echo "' target='_blank'>Learn more</a>";
                    }
                    // line 13
                    echo "                            </div>
                        ";
                }
                // line 15
                echo "                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            </div>
            <a class='left carousel-control' href='#slideshow' role='button' data-slide='prev'>
                <span class='icon icon-angle-left' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='right carousel-control' href='#slideshow' role='button' data-slide='next'>
                <span class='icon icon-angle-right' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>

        <ol class='carousel-indicators'>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "slideshow", [], "any", false, false, true, 29), "slides", [], "any", false, false, true, 29));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                // line 30
                echo "                <li data-target='#slideshow' data-slide-to='";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 30) - 1), "html", null, true);
                echo "'";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 30)) {
                    echo " class='active'";
                }
                echo "></li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </ol>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/flosch/slideshow/components/slideshow/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 32,  174 => 30,  157 => 29,  143 => 17,  128 => 15,  124 => 13,  117 => 12,  110 => 11,  104 => 10,  101 => 9,  99 => 8,  93 => 7,  86 => 6,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.slideshow.slides %}
    <div id='slideshow' class='carousel slide' data-ride='carousel' data-interval='3500'>
        <div class='carousel-content'>
            <div class='carousel-inner' role='listbox'>
                {% for i, slide in __SELF__.slideshow.slides %}
                    <div class='item{% if loop.first %} active{% endif %}'>
                        <img class='img-responsive' src='{{ slide.image.path }}' alt='{{ slide.image.title }}'>
                        {% if slide.name or slide.description %}
                            <div class='carousel-caption clearfix'>
                                {% if slide.title %}<h4 class='carousel-caption-title'>{{ slide.title }}</h4>{% endif %}
                                {% if slide.description %}<p>{{ slide.description|raw }}</p>{% endif %}
                                {% if slide.link %}<a class='carousel-caption-link' href='{{ slide.link }}' target='_blank'>Learn more</a>{% endif %}
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
            <a class='left carousel-control' href='#slideshow' role='button' data-slide='prev'>
                <span class='icon icon-angle-left' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='right carousel-control' href='#slideshow' role='button' data-slide='next'>
                <span class='icon icon-angle-right' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>

        <ol class='carousel-indicators'>
            {% for i, slide in __SELF__.slideshow.slides %}
                <li data-target='#slideshow' data-slide-to='{{ loop.index - 1 }}'{% if loop.first %} class='active'{% endif %}></li>
            {% endfor %}
        </ol>
    </div>
{% endif %}
", "/var/www/html/october/plugins/flosch/slideshow/components/slideshow/default.htm", "");
    }
}
