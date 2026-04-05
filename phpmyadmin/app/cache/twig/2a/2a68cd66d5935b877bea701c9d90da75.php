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

/* list_navigator.twig */
class __TwigTemplate_c4ae3b2556a369834b612276dfc72b7a extends Template
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
        if (((isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 1, $this->source); })()) < (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "<div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 2, $this->source); })()), " "), "html", null, true);
            yield "\">
  ";
            // line 3
            if (((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 3, $this->source); })()) != "frame_navigation")) {
                // line 4
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Page number:"), "html", null, true);
                yield "
  ";
            }
            // line 6
            yield "
  ";
            // line 7
            if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 7, $this->source); })()) > 0)) {
                // line 8
                yield "    <a href=\"";
                yield (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 8, $this->source); })());
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 8, $this->source); })()), [ (string)(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 8, $this->source); })()) => 0]), "", false);
                yield "\"";
                yield ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 8, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("First page", "Begin"), "html", null, true);
                yield "\">
      ";
                // line 9
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "        &lt;&lt;
      ";
                }
                // line 12
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("First page", "Begin"), "html", null, true);
                    yield "
      ";
                }
                // line 15
                yield "    </a>
    <a href=\"";
                // line 16
                yield (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 16, $this->source); })());
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 16, $this->source); })()), [ (string)(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 16, $this->source); })()) => ((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 16, $this->source); })()) - (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 16, $this->source); })()))]), "", false);
                yield "\"";
                yield ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 16, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                yield "\">
      ";
                // line 17
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 18
                    yield "        &lt;
      ";
                }
                // line 20
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                    yield "
      ";
                }
                // line 23
                yield "    </a>
  ";
            }
            // line 25
            yield "
  <form action=\"";
            // line 26
            yield (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 26, $this->source); })());
            yield "\" method=\"post\">
    ";
            // line 27
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 27, $this->source); })()));
            yield "

    ";
            // line 29
            yield (isset($context["page_selector"]) || array_key_exists("page_selector", $context) ? $context["page_selector"] : (function () { throw new RuntimeError('Variable "page_selector" does not exist.', 29, $this->source); })());
            yield "
  </form>

  ";
            // line 32
            if ((((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 32, $this->source); })()) + (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 32, $this->source); })())) < (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 32, $this->source); })()))) {
                // line 33
                yield "    <a href=\"";
                yield (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 33, $this->source); })());
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 33, $this->source); })()), [ (string)(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 33, $this->source); })()) => ((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 33, $this->source); })()) + (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 33, $this->source); })()))]), "", false);
                yield "\"";
                yield ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 33, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                yield "\">
      ";
                // line 34
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                    yield "
      ";
                }
                // line 37
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 38
                    yield "        &gt;
      ";
                }
                // line 40
                yield "    </a>
    ";
                // line 41
                $context["last_pos"] = ((int) floor(((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 41, $this->source); })()) / (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 41, $this->source); })()))) * (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 41, $this->source); })()));
                // line 42
                yield "    <a href=\"";
                yield (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 42, $this->source); })());
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 42, $this->source); })()), [ (string)(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 42, $this->source); })()) => ((((isset($context["last_pos"]) || array_key_exists("last_pos", $context) ? $context["last_pos"] : (function () { throw new RuntimeError('Variable "last_pos" does not exist.', 42, $this->source); })()) == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()))) ? (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()) - (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 42, $this->source); })()))) : ((isset($context["last_pos"]) || array_key_exists("last_pos", $context) ? $context["last_pos"] : (function () { throw new RuntimeError('Variable "last_pos" does not exist.', 42, $this->source); })())))]), "", false);
                yield "\"";
                yield ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 42, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Last page", "End"), "html", null, true);
                yield "\">
      ";
                // line 43
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Last page", "End"), "html", null, true);
                    yield "
      ";
                }
                // line 46
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "        &gt;&gt;
      ";
                }
                // line 49
                yield "    </a>
  ";
            }
            // line 51
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "list_navigator.twig";
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
        return array (  201 => 51,  197 => 49,  193 => 47,  190 => 46,  184 => 44,  182 => 43,  171 => 42,  169 => 41,  166 => 40,  162 => 38,  159 => 37,  153 => 35,  151 => 34,  140 => 33,  138 => 32,  132 => 29,  127 => 27,  123 => 26,  120 => 25,  116 => 23,  110 => 21,  107 => 20,  103 => 18,  101 => 17,  91 => 16,  88 => 15,  82 => 13,  79 => 12,  75 => 10,  73 => 9,  62 => 8,  60 => 7,  57 => 6,  51 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if max_count < count %}
<div class=\"{{ classes|join(' ') }}\">
  {% if frame != 'frame_navigation' %}
    {{ t('Page number:') }}
  {% endif %}

  {% if position > 0 %}
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): 0}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{{ t('Begin', context = 'First page') }}\">
      {% if show_icons('TableNavigationLinksMode') %}
        &lt;&lt;
      {% endif %}
      {% if show_text('TableNavigationLinksMode') %}
        {{ t('Begin', context = 'First page') }}
      {% endif %}
    </a>
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): position - max_count}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{{ t('Previous', context = 'Previous page') }}\">
      {% if show_icons('TableNavigationLinksMode') %}
        &lt;
      {% endif %}
      {% if show_text('TableNavigationLinksMode') %}
        {{ t('Previous', context = 'Previous page') }}
      {% endif %}
    </a>
  {% endif %}

  <form action=\"{{ script|raw }}\" method=\"post\">
    {{ get_hidden_inputs(url_params) }}

    {{ page_selector|raw }}
  </form>

  {% if position + max_count < count %}
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): position + max_count}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{{ t('Next', context = 'Next page') }}\">
      {% if show_text('TableNavigationLinksMode') %}
        {{ t('Next', context = 'Next page') }}
      {% endif %}
      {% if show_icons('TableNavigationLinksMode') %}
        &gt;
      {% endif %}
    </a>
    {% set last_pos = (count // max_count) * max_count %}
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): (last_pos == count ? count - max_count : last_pos)}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{{ t('End', context = 'Last page') }}\">
      {% if show_text('TableNavigationLinksMode') %}
        {{ t('End', context = 'Last page') }}
      {% endif %}
      {% if show_icons('TableNavigationLinksMode') %}
        &gt;&gt;
      {% endif %}
    </a>
  {% endif %}
</div>
{% endif %}
", "list_navigator.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/list_navigator.twig");
    }
}
