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

/* table/tracking/main.twig */
class __TwigTemplate_769b38bcf5ce4c504204e4592e5f1812 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["selectable_tables_entries"]) || array_key_exists("selectable_tables_entries", $context) ? $context["selectable_tables_entries"] : (function () { throw new RuntimeError('Variable "selectable_tables_entries" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
            yield "\">
        ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()));
            yield "
        <select name=\"table\" class=\"autosubmit\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["selectable_tables_entries"]) || array_key_exists("selectable_tables_entries", $context) ? $context["selectable_tables_entries"] : (function () { throw new RuntimeError('Variable "selectable_tables_entries" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 6), "html", null, true);
                yield "\"";
                // line 7
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 7) == (isset($context["selected_table"]) || array_key_exists("selected_table", $context) ? $context["selected_table"] : (function () { throw new RuntimeError('Variable "selected_table" does not exist.', 7, $this->source); })()))) ? (" selected") : (""));
                yield ">
                    ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 8, $this->source); })()), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 8), "html", null, true);
                yield "
                    ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "active", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "                        (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("active"), "html", null, true);
                    yield ")
                    ";
                } else {
                    // line 12
                    yield "                        (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not active"), "html", null, true);
                    yield ")
                    ";
                }
                // line 14
                yield "                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
";
        }
        // line 20
        yield "<br>
";
        // line 21
        if (((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 21, $this->source); })()) > 0)) {
            // line 22
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
            yield "\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        ";
            // line 23
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 23, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 23, $this->source); })()));
            yield "
        <table id=\"versions\" class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Version"), "html", null, true);
            yield "</th>
                    <th>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Created"), "html", null, true);
            yield "</th>
                    <th>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Updated"), "html", null, true);
            yield "</th>
                    <th>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Status"), "html", null, true);
            yield "</th>
                    <th>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
                    <th>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show"), "html", null, true);
            yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 38
                yield "                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 41));
                yield "\"
                                value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 42));
                yield "\">
                        </td>
                        <td>
                            <label for=\"selected_versions_";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 45));
                yield "\">
                                <b>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 46));
                yield "</b>
                            </label>
                        </td>
                        <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "date_created", [], "array", false, false, false, 49));
                yield "</td>
                        <td>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "date_updated", [], "array", false, false, false, 50));
                yield "</td>
                        ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["version"], "tracking_active", [], "array", false, false, false, 51) == 1)) {
                    // line 52
                    yield "                            ";
                    $context["last_version_status"] = 1;
                    // line 53
                    yield "                            <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("active"), "html", null, true);
                    yield "</td>
                        ";
                } else {
                    // line 55
                    yield "                            ";
                    $context["last_version_status"] = 0;
                    // line 56
                    yield "                            <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not active"), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 58
                yield "                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"";
                // line 59
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 60
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 60, $this->source); })()), ["version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["version"], "version", [], "array", false, false, false, 61), "submit_delete_version" => true]), "", false);
                // line 63
                yield "\">
                                ";
                // line 64
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete version"));
                yield "
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 69
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 69, $this->source); })()), ["version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["version"], "version", [], "array", false, false, false, 70), "report" => "true"]), "", false);
                // line 72
                yield "\">
                                ";
                // line 73
                yield PhpMyAdmin\Html\Generator::getIcon("b_report", \_gettext("Tracking report"));
                yield "
                            </a>
                            <a href=\"";
                // line 75
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 76
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 76, $this->source); })()), ["version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 77
$context["version"], "version", [], "array", false, false, false, 77), "snapshot" => "true"]), "", false);
                // line 79
                yield "\">
                                ";
                // line 80
                yield PhpMyAdmin\Html\Generator::getIcon("b_props", \_gettext("Structure snapshot"));
                yield "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['version'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "            </tbody>
        </table>
        ";
            // line 87
            yield from $this->load("select_all.twig", 87)->unwrap()->yield(CoreExtension::toArray(["form_name" => "versionsForm"]));
            // line 90
            yield "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete version"), "html", null, true);
            yield "\">
            ";
            // line 91
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete version"));
            yield "
        </button>
    </form>
    ";
            // line 94
            $context["last_version_element"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 94, $this->source); })()));
            // line 95
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 95, $this->source); })()));
            yield "\" class=\"card\">
      ";
            // line 96
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 96, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 96, $this->source); })()));
            yield "
      <div class=\"card-header\">
        ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["last_version_element"]) || array_key_exists("last_version_element", $context) ? $context["last_version_element"] : (function () { throw new RuntimeError('Variable "last_version_element" does not exist.', 98, $this->source); })()), "tracking_active", [], "array", false, false, false, 98) == 0)) {
                // line 99
                yield "          ";
                $context["legend"] = \_gettext("Activate tracking for %s");
                // line 100
                yield "          ";
                $context["value"] = "activate_now";
                // line 101
                yield "          ";
                $context["button"] = \_gettext("Activate now");
                // line 102
                yield "        ";
            } else {
                // line 103
                yield "          ";
                $context["legend"] = \_gettext("Deactivate tracking for %s");
                // line 104
                yield "          ";
                $context["value"] = "deactivate_now";
                // line 105
                yield "          ";
                $context["button"] = \_gettext("Deactivate now");
                // line 106
                yield "        ";
            }
            // line 107
            yield "
        ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 108, $this->source); })()), (((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 108, $this->source); })()) . ".") . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 108, $this->source); })()))), "html", null, true);
            yield "
      </div>
      <div class=\"card-body\">
        <input type=\"hidden\" name=\"version\" value=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"toggle_activation\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 112, $this->source); })()), "html", null, true);
            yield "\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\">
      </div>
    </form>
";
        }
        // line 117
        yield from $this->load("create_tracking_version.twig", 117)->unwrap()->yield(CoreExtension::toArray(["route" => "/table/tracking", "url_params" =>         // line 119
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 119, $this->source); })()), "last_version" =>         // line 120
(isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 120, $this->source); })()), "db" =>         // line 121
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 121, $this->source); })()), "selected" => [        // line 122
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 122, $this->source); })())], "type" =>         // line 123
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 123, $this->source); })()), "default_statements" =>         // line 124
(isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 124, $this->source); })())]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/tracking/main.twig";
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
        return array (  339 => 124,  338 => 123,  337 => 122,  336 => 121,  335 => 120,  334 => 119,  333 => 117,  326 => 113,  322 => 112,  318 => 111,  312 => 108,  309 => 107,  306 => 106,  303 => 105,  300 => 104,  297 => 103,  294 => 102,  291 => 101,  288 => 100,  285 => 99,  283 => 98,  278 => 96,  273 => 95,  271 => 94,  265 => 91,  260 => 90,  258 => 87,  254 => 85,  243 => 80,  240 => 79,  238 => 77,  237 => 76,  234 => 75,  229 => 73,  226 => 72,  224 => 70,  223 => 69,  220 => 68,  213 => 64,  210 => 63,  208 => 61,  207 => 60,  204 => 59,  201 => 58,  195 => 56,  192 => 55,  186 => 53,  183 => 52,  181 => 51,  177 => 50,  173 => 49,  167 => 46,  163 => 45,  157 => 42,  153 => 41,  148 => 38,  144 => 37,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  109 => 23,  104 => 22,  102 => 21,  99 => 20,  93 => 16,  86 => 14,  80 => 12,  74 => 10,  72 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if selectable_tables_entries|length > 0 %}
    <form method=\"post\" action=\"{{ url('/table/tracking', url_params) }}\">
        {{ get_hidden_inputs(db, table) }}
        <select name=\"table\" class=\"autosubmit\">
            {% for entry in selectable_tables_entries %}
                <option value=\"{{ entry.name }}\"
                    {{- entry.name == selected_table ? ' selected' }}>
                    {{ db }}.{{ entry.name }}
                    {% if entry.active %}
                        ({{ t('active') }})
                    {% else %}
                        ({{ t('not active') }})
                    {% endif %}
                </option>
            {% endfor %}
        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
{% endif %}
<br>
{% if last_version > 0 %}
    <form method=\"post\" action=\"{{ url('/table/tracking') }}\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        {{ get_hidden_inputs(db, table) }}
        <table id=\"versions\" class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>{{ t('Version') }}</th>
                    <th>{{ t('Created') }}</th>
                    <th>{{ t('Updated') }}</th>
                    <th>{{ t('Status') }}</th>
                    <th>{{ t('Action') }}</th>
                    <th>{{ t('Show') }}</th>
                </tr>
            </thead>
            <tbody>
                {% for version in versions %}
                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_{{- version['version']|escape }}\"
                                value=\"{{- version['version']|escape }}\">
                        </td>
                        <td>
                            <label for=\"selected_versions_{{- version['version']|escape }}\">
                                <b>{{ version['version']|escape }}</b>
                            </label>
                        </td>
                        <td>{{ version['date_created']|escape }}</td>
                        <td>{{ version['date_updated']|escape }}</td>
                        {% if version['tracking_active'] == 1 %}
                            {% set last_version_status = 1 %}
                            <td>{{ t('active') }}</td>
                        {% else %}
                            {% set last_version_status = 0 %}
                            <td>{{ t('not active') }}</td>
                        {% endif %}
                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"{{ url('/table/tracking') }}\" data-post=\"
                                {{- get_common(url_params|merge({
                                    'version': version['version'],
                                    'submit_delete_version': true
                                }), '', false) }}\">
                                {{ get_icon('b_drop', t('Delete version')) }}
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ url('/table/tracking') }}\" data-post=\"
                                {{- get_common(url_params|merge({
                                    'version': version['version'],
                                    'report': 'true'
                                }), '', false) }}\">
                                {{ get_icon('b_report', t('Tracking report')) }}
                            </a>
                            <a href=\"{{ url('/table/tracking') }}\" data-post=\"
                                {{- get_common(url_params|merge({
                                    'version': version['version'],
                                    'snapshot': 'true'
                                }), '', false) }}\">
                                {{ get_icon('b_props', t('Structure snapshot')) }}
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        {% include 'select_all.twig' with {
            'form_name': 'versionsForm',
        } only %}
        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"{{ t('Delete version') }}\">
            {{ get_icon('b_drop', t('Delete version')) }}
        </button>
    </form>
    {% set last_version_element = versions|first %}
    <form method=\"post\" action=\"{{ url('/table/tracking', url_params) }}\" class=\"card\">
      {{ get_hidden_inputs(db, table) }}
      <div class=\"card-header\">
        {% if last_version_element['tracking_active'] == 0 %}
          {% set legend = t('Activate tracking for %s') %}
          {% set value = 'activate_now' %}
          {% set button = t('Activate now') %}
        {% else %}
          {% set legend = t('Deactivate tracking for %s') %}
          {% set value = 'deactivate_now' %}
          {% set button = t('Deactivate now') %}
        {% endif %}

        {{ legend|format(db ~ '.' ~ table) }}
      </div>
      <div class=\"card-body\">
        <input type=\"hidden\" name=\"version\" value=\"{{ last_version }}\">
        <input type=\"hidden\" name=\"toggle_activation\" value=\"{{ value }}\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"{{ button }}\">
      </div>
    </form>
{% endif %}
{% include 'create_tracking_version.twig' with {
    'route': '/table/tracking',
    'url_params': url_params,
    'last_version': last_version,
    'db': db,
    'selected': [table],
    'type': type,
    'default_statements': default_statements,
} only %}
", "table/tracking/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/main.twig");
    }
}
