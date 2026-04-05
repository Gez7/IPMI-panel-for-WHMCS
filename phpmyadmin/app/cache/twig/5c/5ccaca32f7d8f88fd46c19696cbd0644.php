<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* navigation/tree/node.twig */
class __TwigTemplate_d97c208f41591a8e10572d8311b36687 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp = (isset($context["show_node"]) || array_key_exists("show_node", $context) ? $context["show_node"] : (function () { throw new RuntimeError('Variable "show_node" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["li_classes"]) || array_key_exists("li_classes", $context) ? $context["li_classes"] : (function () { throw new RuntimeError('Variable "li_classes" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\">
    <div class=\"block\">
      <i";
            // line 4
            yield ((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })()) == "first")) ? (" class=\"first\"") : (""));
            yield "></i>
      ";
            // line 5
            if ((($tmp = (isset($context["node_is_group"]) || array_key_exists("node_is_group", $context) ? $context["node_is_group"] : (function () { throw new RuntimeError('Variable "node_is_group" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "        ";
                yield ((!CoreExtension::inFilter("last", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })()))) ? ("<b></b>") : (""));
                yield "
        <a class=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link_classes"]) || array_key_exists("link_classes", $context) ? $context["link_classes"] : (function () { throw new RuntimeError('Variable "link_classes" does not exist.', 7, $this->source); })()), "html", null, true);
                yield "\" href=\"#\">
          <span class=\"hide paths_nav\" data-apath=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 8, $this->source); })()), "a_path", [], "any", false, false, false, 8), "html", null, true);
                yield "\" data-vpath=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 8, $this->source); })()), "v_path", [], "any", false, false, false, 8), "html", null, true);
                yield "\" data-pos=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 8, $this->source); })()), "pos", [], "any", false, false, false, 8), "html", null, true);
                yield "\"></span>
          ";
                // line 9
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 9, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "            <span class=\"hide ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 10, $this->source); })()), "position", [], "any", false, false, false, 10), "html", null, true);
                    yield "\" data-name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 10, $this->source); })()), "data_name", [], "any", false, false, false, 10), "html", null, true);
                    yield "\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 10, $this->source); })()), "data_value", [], "any", false, false, false, 10), "html", null, true);
                    yield "\"></span>
          ";
                }
                // line 12
                yield "          ";
                yield (isset($context["node_icon"]) || array_key_exists("node_icon", $context) ? $context["node_icon"] : (function () { throw new RuntimeError('Variable "node_icon" does not exist.', 12, $this->source); })());
                yield "
        </a>
      ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(            // line 14
(isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 14, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "        <span class=\"hide ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 15, $this->source); })()), "position", [], "any", false, false, false, 15), "html", null, true);
                yield "\" data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 15, $this->source); })()), "data_name", [], "any", false, false, false, 15), "html", null, true);
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 15, $this->source); })()), "data_value", [], "any", false, false, false, 15), "html", null, true);
                yield "\"></span>
      ";
            }
            // line 17
            yield "    </div>
    ";
            // line 18
            if ((($tmp = (isset($context["node_is_container"]) || array_key_exists("node_is_container", $context) ? $context["node_is_container"] : (function () { throw new RuntimeError('Variable "node_is_container" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "      <div class=\"fst-italic\">
    ";
            }
            // line 21
            yield "
    ";
            // line 22
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 22, $this->source); })()), "isGroup", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "      <div class=\"block second";
                yield (((($tmp = (isset($context["has_second_icon"]) || array_key_exists("has_second_icon", $context) ? $context["has_second_icon"] : (function () { throw new RuntimeError('Variable "has_second_icon" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" double") : (""));
                yield "\">
        <u>";
                // line 24
                yield PhpMyAdmin\Html\Generator::getImage(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 24, $this->source); })()), "icon", [], "any", false, false, false, 24), "image", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 24, $this->source); })()), "icon", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24));
                yield "</u>
      </div>
      &nbsp;";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
                yield "
    ";
            } else {
                // line 28
                yield "      <div class=\"block second";
                yield (((($tmp = (isset($context["has_second_icon"]) || array_key_exists("has_second_icon", $context) ? $context["has_second_icon"] : (function () { throw new RuntimeError('Variable "has_second_icon" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" double") : (""));
                yield "\">
        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["icon_links"]) || array_key_exists("icon_links", $context) ? $context["icon_links"] : (function () { throw new RuntimeError('Variable "icon_links" does not exist.', 29, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 30
                    yield "          <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, $context["link"], "params", [], "any", false, false, false, 30));
                    yield "\" class=\"disableAjax\">";
                    // line 31
                    yield PhpMyAdmin\Html\Generator::getImage(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "image", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 31));
                    // line 32
                    yield "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "      </div>

      ";
                // line 36
                if ((($tmp = (isset($context["node_is_container"]) || array_key_exists("node_is_container", $context) ? $context["node_is_container"] : (function () { throw new RuntimeError('Variable "node_is_container" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "        &nbsp;<a class=\"hover_show_full disableAjax\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 37, $this->source); })()), "route", [], "any", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 37, $this->source); })()), "params", [], "any", false, false, false, 37));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
                    yield "</a>
      ";
                } elseif (CoreExtension::inFilter("index", CoreExtension::getAttribute($this->env, $this->source,                 // line 38
(isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 38, $this->source); })()), "classes", [], "any", false, false, false, 38))) {
                    // line 39
                    yield "        <a class=\"hover_show_full disableAjax\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 39, $this->source); })()), "route", [], "any", false, false, false, 39));
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 39, $this->source); })()), "params", [], "any", false, false, false, 39), ["is_from_nav" => true]));
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
                    yield "\">";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 40, $this->source); })()), "html", null, true);
                    // line 41
                    yield "</a>
      ";
                } else {
                    // line 43
                    yield "        <a class=\"hover_show_full disableAjax\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 43, $this->source); })()), "route", [], "any", false, false, false, 43), CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 43, $this->source); })()), "params", [], "any", false, false, false, 43));
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), "html", null, true);
                    yield "\">";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 44, $this->source); })()), "html", null, true);
                    // line 45
                    yield "</a>
      ";
                }
                // line 47
                yield "    ";
            }
            // line 48
            yield "
    ";
            // line 49
            yield (isset($context["control_buttons"]) || array_key_exists("control_buttons", $context) ? $context["control_buttons"] : (function () { throw new RuntimeError('Variable "control_buttons" does not exist.', 49, $this->source); })());
            yield "

    ";
            // line 51
            if ((($tmp = (isset($context["node_is_container"]) || array_key_exists("node_is_container", $context) ? $context["node_is_container"] : (function () { throw new RuntimeError('Variable "node_is_container" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "      </div>
    ";
            }
            // line 54
            yield "
    <div class=\"clearfloat\"></div>
";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        // line 56
(isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 56, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "  <span class=\"hide ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 57, $this->source); })()), "position", [], "any", false, false, false, 57), "html", null, true);
            yield "\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 57, $this->source); })()), "data_name", [], "any", false, false, false, 57), "html", null, true);
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 57, $this->source); })()), "data_value", [], "any", false, false, false, 57), "html", null, true);
            yield "\"></span>
";
        }
        // line 59
        yield "
";
        // line 60
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 60, $this->source); })()), "html", [], "any", false, false, false, 60)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 60, $this->source); })()), "has_wrapper", [], "any", false, false, false, 60))) {
            // line 61
            yield "  <div class=\"list_container\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 61, $this->source); })()), "is_hidden", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" style=\"display: none;\"") : (""));
            yield ">
    <ul>
";
        }
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 64, $this->source); })()), "html", [], "any", false, false, false, 64);
        yield "
";
        // line 65
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 65, $this->source); })()), "html", [], "any", false, false, false, 65)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 65, $this->source); })()), "has_wrapper", [], "any", false, false, false, 65))) {
            // line 66
            yield "    </ul>
  </div>
";
        }
        // line 69
        yield "
";
        // line 70
        if ((($tmp = (isset($context["has_siblings"]) || array_key_exists("has_siblings", $context) ? $context["has_siblings"] : (function () { throw new RuntimeError('Variable "has_siblings" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "  </li>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/node.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  256 => 71,  254 => 70,  251 => 69,  246 => 66,  244 => 65,  240 => 64,  233 => 61,  231 => 60,  228 => 59,  218 => 57,  216 => 56,  212 => 54,  208 => 52,  206 => 51,  201 => 49,  198 => 48,  195 => 47,  191 => 45,  189 => 44,  183 => 43,  179 => 41,  177 => 40,  169 => 39,  167 => 38,  160 => 37,  158 => 36,  154 => 34,  147 => 32,  145 => 31,  141 => 30,  137 => 29,  132 => 28,  127 => 26,  122 => 24,  117 => 23,  115 => 22,  112 => 21,  108 => 19,  106 => 18,  103 => 17,  93 => 15,  91 => 14,  85 => 12,  75 => 10,  73 => 9,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if show_node %}
  <li class=\"{{ li_classes }}\">
    <div class=\"block\">
      <i{{ class == 'first' ? ' class=\"first\"' }}></i>
      {% if node_is_group %}
        {{ 'last' not in class ? '<b></b>' }}
        <a class=\"{{ link_classes }}\" href=\"#\">
          <span class=\"hide paths_nav\" data-apath=\"{{ paths.a_path }}\" data-vpath=\"{{ paths.v_path }}\" data-pos=\"{{ paths.pos }}\"></span>
          {% if pagination_params is not empty %}
            <span class=\"hide {{ pagination_params.position }}\" data-name=\"{{ pagination_params.data_name }}\" data-value=\"{{ pagination_params.data_value }}\"></span>
          {% endif %}
          {{ node_icon|raw }}
        </a>
      {% elseif pagination_params is not empty %}
        <span class=\"hide {{ pagination_params.position }}\" data-name=\"{{ pagination_params.data_name }}\" data-value=\"{{ pagination_params.data_value }}\"></span>
      {% endif %}
    </div>
    {% if node_is_container %}
      <div class=\"fst-italic\">
    {% endif %}

    {% if node.isGroup %}
      <div class=\"block second{{ has_second_icon ? ' double' }}\">
        <u>{{ get_image(node.icon.image, node.icon.title) }}</u>
      </div>
      &nbsp;{{ node.name }}
    {% else %}
      <div class=\"block second{{ has_second_icon ? ' double' }}\">
        {% for link in icon_links %}
          <a href=\"{{ url(link.route, link.params) }}\" class=\"disableAjax\">
            {{- get_image(link.image, link.title) -}}
          </a>
        {% endfor %}
      </div>

      {% if node_is_container %}
        &nbsp;<a class=\"hover_show_full disableAjax\" href=\"{{ url(text_link.route, text_link.params) }}\">{{ node.name }}</a>
      {% elseif 'index' in node.classes %}
        <a class=\"hover_show_full disableAjax\" href=\"{{ url(text_link.route) }}\" data-post=\"{{ get_common(text_link.params|merge({'is_from_nav': true})) }}\" title=\"{{ text_link.title }}\">
          {{- displayName -}}
        </a>
      {% else %}
        <a class=\"hover_show_full disableAjax\" href=\"{{ url(text_link.route, text_link.params) }}\" title=\"{{ text_link.title }}\">
          {{- displayName -}}
        </a>
      {% endif %}
    {% endif %}

    {{ control_buttons|raw }}

    {% if node_is_container %}
      </div>
    {% endif %}

    <div class=\"clearfloat\"></div>
{% elseif pagination_params is not empty %}
  <span class=\"hide {{ pagination_params.position }}\" data-name=\"{{ pagination_params.data_name }}\" data-value=\"{{ pagination_params.data_value }}\"></span>
{% endif %}

{% if recursive.html is not empty and recursive.has_wrapper %}
  <div class=\"list_container\"{{ recursive.is_hidden ? ' style=\"display: none;\"' }}>
    <ul>
{% endif %}
{{ recursive.html|raw }}
{% if recursive.html is not empty and recursive.has_wrapper %}
    </ul>
  </div>
{% endif %}

{% if has_siblings %}
  </li>
{% endif %}
", "navigation/tree/node.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/node.twig");
    }
}
