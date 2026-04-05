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

/* server/status/variables/index.twig */
class __TwigTemplate_c53d71854ece4db56e17e0d0b41094f3 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "variables";
        // line 1
        $this->parent = $this->load("server/status/base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
";
        // line 5
        if ((($tmp = (isset($context["is_data_loaded"]) || array_key_exists("is_data_loaded", $context) ? $context["is_data_loaded"] : (function () { throw new RuntimeError('Variable "is_data_loaded" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filters"), "html", null, true);
            yield "</div>
  <div class=\"card-body\">
    <form action=\"";
            // line 9
            yield PhpMyAdmin\Url::getFromRoute("/server/status/variables");
            yield "\" method=\"post\" class=\"row row-cols-lg-auto g-3 align-items-center\">
      ";
            // line 10
            yield PhpMyAdmin\Url::getHiddenInputs();
            yield "

      <label class=\"col-12 col-form-label\" for=\"filterText\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Containing the word:"), "html", null, true);
            yield "</label>
      <div class=\"col-12\">
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filter_text"]) || array_key_exists("filter_text", $context) ? $context["filter_text"] : (function () { throw new RuntimeError('Variable "filter_text" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\">
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"filterAlert\" id=\"filterAlert\"";
            // line 19
            yield (((($tmp = (isset($context["is_only_alerts"]) || array_key_exists("is_only_alerts", $context) ? $context["is_only_alerts"] : (function () { throw new RuntimeError('Variable "is_only_alerts" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"filterAlert\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show only alert values"), "html", null, true);
            yield "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <label class=\"visually-hidden\" for=\"filterCategory\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filter by category…"), "html", null, true);
            yield "</label>
        <select class=\"form-select\" id=\"filterCategory\" name=\"filterCategory\">
          <option value=\"\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filter by category…"), "html", null, true);
            yield "</option>
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "is_selected", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29), "html", null, true);
                yield "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        </select>
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"dontFormat\" id=\"dontFormat\"";
            // line 36
            yield (((($tmp = (isset($context["is_not_formatted"]) || array_key_exists("is_not_formatted", $context) ? $context["is_not_formatted"] : (function () { throw new RuntimeError('Variable "is_not_formatted" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"dontFormat\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show unformatted values"), "html", null, true);
            yield "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh"), "html", null, true);
            yield "\">
      </div>
    </form>
  </div>
</div>

  <div id=\"linkSuggestions\" class=\"defaultLinks hide\">
    <p class=\"alert alert-primary\" role=\"alert\">
      ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Related links:"), "html", null, true);
            yield "
      ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 52
                yield "        <span class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 52), "html", null, true);
                yield "\">
          ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "links", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["link_name"] => $context["link_url"]) {
                    // line 54
                    yield "            ";
                    if (($context["link_name"] == "doc")) {
                        // line 55
                        yield "              ";
                        yield PhpMyAdmin\Html\MySQLDocumentation::show($context["link_url"]);
                        yield "
            ";
                    } else {
                        // line 57
                        yield "              <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link_url"], "url", [], "any", false, false, false, 57), "html", null, true);
                        yield "\"";
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["link_url"], "params", [], "any", false, false, false, 57))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " data-post=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link_url"], "params", [], "any", false, false, false, 57), "html", null, true);
                            yield "\"";
                        }
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["link_name"], "html", null, true);
                        yield "</a>
            ";
                    }
                    // line 59
                    yield "            |
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['link_name'], $context['link_url'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "        </span>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "    </p>
  </div>

  <div class=\"responsivetable row\">
    <table class=\"table table-striped table-hover table-sm\" id=\"serverStatusVariables\">
      <colgroup>
        <col class=\"namecol\">
        <col class=\"valuecol\">
        <col class=\"descrcol\">
      </colgroup>
      <thead>
        <tr>
          <th scope=\"col\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Variable"), "html", null, true);
            yield "</th>
          <th scope=\"col\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
            yield "</th>
          <th scope=\"col\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Description"), "html", null, true);
            yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 82
                yield "          <tr";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "class", [], "any", false, false, false, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " class=\"s_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "class", [], "any", false, false, false, 82), "html", null, true);
                    yield "\"";
                }
                yield ">
            <th class=\"name\">
              ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 84), ["_" => " "]), "html", null, true);
                yield "
              ";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "doc", [], "any", false, false, false, 85);
                yield "
            </th>

            <td class=\"value font-monospace text-end\">
              <span class=\"formatted\">
                ";
                // line 90
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 91
                    yield "                  <span class=\"";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "is_alert", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
                    yield "\">
                ";
                }
                // line 93
                yield "
                ";
                // line 94
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 94)) && is_string($_v1 = "%") && str_ends_with($_v0, $_v1))) {
                    // line 95
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 95), 0, 2), "html", null, true);
                    yield " %
                ";
                } elseif (CoreExtension::inFilter("Uptime", CoreExtension::getAttribute($this->env, $this->source,                 // line 96
$context["variable"], "name", [], "any", false, false, false, 96))) {
                    // line 97
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::timespanFormat(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 97)), "html", null, true);
                    yield "
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 98
$context["variable"], "is_numeric", [], "any", false, false, false, 98) && (CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 98) >= 1000))) {
                    // line 99
                    yield "                  <abbr title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 99), 0), "html", null, true);
                    yield "\">
                    ";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 100), 3, 1), "html", null, true);
                    yield "
                  </abbr>
                ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 102
$context["variable"], "is_numeric", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 103
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 103), 3, 1), "html", null, true);
                    yield "
                ";
                } else {
                    // line 105
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 105), "html", null, true);
                    yield "
                ";
                }
                // line 107
                yield "
                ";
                // line 108
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                  </span>
                ";
                }
                // line 111
                yield "              </span>
              <span class=\"original hide\">
                ";
                // line 113
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "                  <span class=\"";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "is_alert", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
                    yield "\">
                ";
                }
                // line 116
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 116), "html", null, true);
                yield "
                ";
                // line 117
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 118
                    yield "                  </span>
                ";
                }
                // line 120
                yield "              </span>
            </td>

            <td class=\"w-50\">
              ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "description", [], "any", false, false, false, 124), "html", null, true);
                yield "
              ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "description_doc", [], "any", false, false, false, 125));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 126
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "name", [], "any", false, false, false, 126) == "doc")) {
                        // line 127
                        yield "                  ";
                        yield PhpMyAdmin\Html\MySQLDocumentation::show(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "url", [], "any", false, false, false, 127));
                        yield "
                ";
                    } else {
                        // line 129
                        yield "                  <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "url", [], "any", false, false, false, 129), "url", [], "any", false, false, false, 129), "html", null, true);
                        yield "\" data-post=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "url", [], "any", false, false, false, 129), "params", [], "any", false, false, false, 129), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["doc"], "name", [], "any", false, false, false, 129), "html", null, true);
                        yield "</a>
                ";
                    }
                    // line 131
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['doc'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                yield "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['variable'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "      </tbody>
    </table>
  </div>
";
        } else {
            // line 139
            yield "  ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Not enough privilege to view status variables."));
            yield "
";
        }
        // line 141
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/variables/index.twig";
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
        return array (  415 => 141,  409 => 139,  403 => 135,  395 => 132,  389 => 131,  379 => 129,  373 => 127,  370 => 126,  366 => 125,  362 => 124,  356 => 120,  352 => 118,  350 => 117,  345 => 116,  339 => 114,  337 => 113,  333 => 111,  329 => 109,  327 => 108,  324 => 107,  318 => 105,  312 => 103,  310 => 102,  305 => 100,  300 => 99,  298 => 98,  293 => 97,  291 => 96,  286 => 95,  284 => 94,  281 => 93,  275 => 91,  273 => 90,  265 => 85,  261 => 84,  251 => 82,  247 => 81,  240 => 77,  236 => 76,  232 => 75,  218 => 63,  211 => 61,  204 => 59,  190 => 57,  184 => 55,  181 => 54,  177 => 53,  172 => 52,  168 => 51,  164 => 50,  153 => 42,  145 => 37,  141 => 36,  134 => 31,  121 => 29,  117 => 28,  113 => 27,  108 => 25,  100 => 20,  96 => 19,  88 => 14,  83 => 12,  78 => 10,  74 => 9,  69 => 7,  66 => 6,  64 => 5,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'variables' %}
{% block content %}

{% if is_data_loaded %}
<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">{{ t('Filters') }}</div>
  <div class=\"card-body\">
    <form action=\"{{ url('/server/status/variables') }}\" method=\"post\" class=\"row row-cols-lg-auto g-3 align-items-center\">
      {{ get_hidden_inputs() }}

      <label class=\"col-12 col-form-label\" for=\"filterText\">{{ t('Containing the word:') }}</label>
      <div class=\"col-12\">
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"{{ filter_text }}\">
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"filterAlert\" id=\"filterAlert\"{{ is_only_alerts ? ' checked' }}>
          <label class=\"form-check-label\" for=\"filterAlert\">{{ t('Show only alert values') }}</label>
        </div>
      </div>

      <div class=\"col-12\">
        <label class=\"visually-hidden\" for=\"filterCategory\">{{ t('Filter by category…') }}</label>
        <select class=\"form-select\" id=\"filterCategory\" name=\"filterCategory\">
          <option value=\"\">{{ t('Filter by category…') }}</option>
          {% for category in categories %}
            <option value=\"{{ category.id }}\"{{ category.is_selected ? ' selected' }}>{{ category.name }}</option>
          {% endfor %}
        </select>
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"dontFormat\" id=\"dontFormat\"{{ is_not_formatted ? ' checked' }}>
          <label class=\"form-check-label\" for=\"dontFormat\">{{ t('Show unformatted values') }}</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"{{ t('Refresh') }}\">
      </div>
    </form>
  </div>
</div>

  <div id=\"linkSuggestions\" class=\"defaultLinks hide\">
    <p class=\"alert alert-primary\" role=\"alert\">
      {{ t('Related links:') }}
      {% for link in links %}
        <span class=\"{{ link.name }}\">
          {% for link_name, link_url in link.links %}
            {% if link_name == 'doc' %}
              {{ show_mysql_docu(link_url) }}
            {% else %}
              <a href=\"{{ link_url.url }}\"{% if link_url.params is not empty %} data-post=\"{{ link_url.params }}\"{% endif %}>{{ link_name }}</a>
            {% endif %}
            |
          {% endfor %}
        </span>
      {% endfor %}
    </p>
  </div>

  <div class=\"responsivetable row\">
    <table class=\"table table-striped table-hover table-sm\" id=\"serverStatusVariables\">
      <colgroup>
        <col class=\"namecol\">
        <col class=\"valuecol\">
        <col class=\"descrcol\">
      </colgroup>
      <thead>
        <tr>
          <th scope=\"col\">{{ t('Variable') }}</th>
          <th scope=\"col\">{{ t('Value') }}</th>
          <th scope=\"col\">{{ t('Description') }}</th>
        </tr>
      </thead>
      <tbody>
        {% for variable in variables %}
          <tr{% if variable.class is not empty %} class=\"s_{{ variable.class }}\"{% endif %}>
            <th class=\"name\">
              {{ variable.name|replace({'_': ' '}) }}
              {{ variable.doc|raw }}
            </th>

            <td class=\"value font-monospace text-end\">
              <span class=\"formatted\">
                {% if variable.has_alert %}
                  <span class=\"{{ variable.is_alert ? 'text-danger' : 'text-success' }}\">
                {% endif %}

                {% if variable.name ends with '%' %}
                  {{ format_number(variable.value, 0, 2) }} %
                {% elseif 'Uptime' in variable.name %}
                  {{ timespan_format(variable.value) }}
                {% elseif variable.is_numeric and variable.value >= 1000 %}
                  <abbr title=\"{{ format_number(variable.value, 0) }}\">
                    {{ format_number(variable.value, 3, 1) }}
                  </abbr>
                {% elseif variable.is_numeric %}
                  {{ format_number(variable.value, 3, 1) }}
                {% else %}
                  {{ variable.value }}
                {% endif %}

                {% if variable.has_alert %}
                  </span>
                {% endif %}
              </span>
              <span class=\"original hide\">
                {% if variable.has_alert %}
                  <span class=\"{{ variable.is_alert ? 'text-danger' : 'text-success' }}\">
                {% endif %}
                {{ variable.value }}
                {% if variable.has_alert %}
                  </span>
                {% endif %}
              </span>
            </td>

            <td class=\"w-50\">
              {{ variable.description }}
              {% for doc in variable.description_doc %}
                {% if doc.name == 'doc' %}
                  {{ show_mysql_docu(doc.url) }}
                {% else %}
                  <a href=\"{{ doc.url.url }}\" data-post=\"{{ doc.url.params }}\">{{ doc.name }}</a>
                {% endif %}
              {% endfor %}
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% else %}
  {{ t('Not enough privilege to view status variables.')|error }}
{% endif %}

{% endblock %}
", "server/status/variables/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/variables/index.twig");
    }
}
