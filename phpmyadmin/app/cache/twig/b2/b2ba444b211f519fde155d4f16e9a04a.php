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

/* server/binlog/index.twig */
class __TwigTemplate_496d21bdddd4c9880974021068bcfb79 extends Template
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
        yield "<h2>
  ";
        // line 2
        yield PhpMyAdmin\Html\Generator::getImage("s_tbl");
        yield "
  ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Binary log"), "html", null, true);
        yield "
</h2>

<form action=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
        yield "\" method=\"post\" class=\"card\">
  ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
        yield "
  <div class=\"card-header\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select binary log to view"), "html", null, true);
        yield "</div>

  <div class=\"card-body\">
    ";
        // line 11
        $context["full_size"] = 0;
        // line 12
        yield "    <select name=\"log\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["binary_logs"]) || array_key_exists("binary_logs", $context) ? $context["binary_logs"] : (function () { throw new RuntimeError('Variable "binary_logs" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["each_log"]) {
            // line 14
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "Log_name", [], "array", false, false, false, 14), "html", null, true);
            yield "\"";
            // line 15
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "Log_name", [], "array", false, false, false, 15) == (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 15, $this->source); })()))) ? (" selected") : (""));
            yield ">
          ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "Log_name", [], "array", false, false, false, 16), "html", null, true);
            yield "
          ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", true, true, false, 17)) {
                // line 18
                yield "            (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", false, false, false, 18), 3, 2), " "), "html", null, true);
                yield ")
            ";
                // line 19
                $context["full_size"] = ((isset($context["full_size"]) || array_key_exists("full_size", $context) ? $context["full_size"] : (function () { throw new RuntimeError('Variable "full_size" does not exist.', 19, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", false, false, false, 19));
                // line 20
                yield "          ";
            }
            // line 21
            yield "        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['each_log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </select>
    ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["binary_logs"]) || array_key_exists("binary_logs", $context) ? $context["binary_logs"] : (function () { throw new RuntimeError('Variable "binary_logs" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "
    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Files"), "html", null, true);
        yield ",
    ";
        // line 26
        if (((isset($context["full_size"]) || array_key_exists("full_size", $context) ? $context["full_size"] : (function () { throw new RuntimeError('Variable "full_size" does not exist.', 26, $this->source); })()) > 0)) {
            // line 27
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(PhpMyAdmin\Util::formatByteDown((isset($context["full_size"]) || array_key_exists("full_size", $context) ? $context["full_size"] : (function () { throw new RuntimeError('Variable "full_size" does not exist.', 27, $this->source); })())), " "), "html", null, true);
            yield "
    ";
        }
        // line 29
        yield "  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
</form>

";
        // line 36
        yield (isset($context["sql_message"]) || array_key_exists("sql_message", $context) ? $context["sql_message"] : (function () { throw new RuntimeError('Variable "sql_message" does not exist.', 36, $this->source); })());
        yield "

<table class=\"table table-striped table-hover align-middle\" id=\"binlogTable\">
  <thead>
    <tr>
      <td colspan=\"6\" class=\"text-center\">
        ";
        // line 42
        if ((($tmp = (isset($context["has_previous"]) || array_key_exists("has_previous", $context) ? $context["has_previous"] : (function () { throw new RuntimeError('Variable "has_previous" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "          ";
            if ((($tmp = (isset($context["has_icons"]) || array_key_exists("has_icons", $context) ? $context["has_icons"] : (function () { throw new RuntimeError('Variable "has_icons" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon((isset($context["previous_params"]) || array_key_exists("previous_params", $context) ? $context["previous_params"] : (function () { throw new RuntimeError('Variable "previous_params" does not exist.', 44, $this->source); })()), "", false);
                yield "\" title=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                yield "\">
              &laquo;
            </a>
          ";
            } else {
                // line 49
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon((isset($context["previous_params"]) || array_key_exists("previous_params", $context) ? $context["previous_params"] : (function () { throw new RuntimeError('Variable "previous_params" does not exist.', 49, $this->source); })()), "", false);
                yield "\">
              ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                yield " &laquo;
            </a>
          ";
            }
            // line 53
            yield "          -
        ";
        }
        // line 55
        yield "
        ";
        // line 56
        if ((($tmp = (isset($context["is_full_query"]) || array_key_exists("is_full_query", $context) ? $context["is_full_query"] : (function () { throw new RuntimeError('Variable "is_full_query" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "          <a href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon((isset($context["full_queries_params"]) || array_key_exists("full_queries_params", $context) ? $context["full_queries_params"] : (function () { throw new RuntimeError('Variable "full_queries_params" does not exist.', 57, $this->source); })()), "", false);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Truncate shown queries"), "html", null, true);
            yield "\">
            <img src=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("s_partialtext.png"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Truncate shown queries"), "html", null, true);
            yield "\">
          </a>
        ";
        } else {
            // line 61
            yield "          <a href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon((isset($context["full_queries_params"]) || array_key_exists("full_queries_params", $context) ? $context["full_queries_params"] : (function () { throw new RuntimeError('Variable "full_queries_params" does not exist.', 61, $this->source); })()), "", false);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show full queries"), "html", null, true);
            yield "\">
            <img src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("s_fulltext.png"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show full queries"), "html", null, true);
            yield "\">
          </a>
        ";
        }
        // line 65
        yield "
        ";
        // line 66
        if ((($tmp = (isset($context["has_next"]) || array_key_exists("has_next", $context) ? $context["has_next"] : (function () { throw new RuntimeError('Variable "has_next" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "          -
          ";
            // line 68
            if ((($tmp = (isset($context["has_icons"]) || array_key_exists("has_icons", $context) ? $context["has_icons"] : (function () { throw new RuntimeError('Variable "has_icons" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon((isset($context["next_params"]) || array_key_exists("next_params", $context) ? $context["next_params"] : (function () { throw new RuntimeError('Variable "next_params" does not exist.', 69, $this->source); })()), "", false);
                yield "\" title=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                yield "\">
              &raquo;
            </a>
          ";
            } else {
                // line 74
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon((isset($context["next_params"]) || array_key_exists("next_params", $context) ? $context["next_params"] : (function () { throw new RuntimeError('Variable "next_params" does not exist.', 74, $this->source); })()), "", false);
                yield "\">
              ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                yield " &raquo;
            </a>
          ";
            }
            // line 78
            yield "        ";
        }
        // line 79
        yield "      </td>
    </tr>
    <tr class=\"text-nowrap\">
      <th>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log name"), "html", null, true);
        yield "</th>
      <th>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Position"), "html", null, true);
        yield "</th>
      <th>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Event type"), "html", null, true);
        yield "</th>
      <th>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server ID"), "html", null, true);
        yield "</th>
      <th>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Original position"), "html", null, true);
        yield "</th>
      <th>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Information"), "html", null, true);
        yield "</th>
    </tr>
  </thead>

  <tbody>
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 93
            yield "      <tr class=\"noclick\">
        <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Log_name", [], "array", false, false, false, 94), "html", null, true);
            yield "</td>
        <td class=\"text-end\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Pos", [], "array", false, false, false, 95), "html", null, true);
            yield "</td>
        <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Event_type", [], "array", false, false, false, 96), "html", null, true);
            yield "</td>
        <td class=\"text-end\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Server_id", [], "array", false, false, false, 97), "html", null, true);
            yield "</td>
        <td class=\"text-end\">";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Orig_log_pos", [], "array", true, true, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Orig_log_pos", [], "array", false, false, false, 99), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "End_log_pos", [], "array", false, false, false, 99), "html", null, true)));
            // line 100
            yield "</td>
        <td>";
            // line 101
            yield PhpMyAdmin\Html\Generator::formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Info", [], "array", false, false, false, 101),  !(isset($context["is_full_query"]) || array_key_exists("is_full_query", $context) ? $context["is_full_query"] : (function () { throw new RuntimeError('Variable "is_full_query" does not exist.', 101, $this->source); })()));
            yield "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "  </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/binlog/index.twig";
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
        return array (  332 => 104,  323 => 101,  320 => 100,  318 => 99,  314 => 97,  310 => 96,  306 => 95,  302 => 94,  299 => 93,  295 => 92,  287 => 87,  283 => 86,  279 => 85,  275 => 84,  271 => 83,  267 => 82,  262 => 79,  259 => 78,  253 => 75,  246 => 74,  239 => 70,  233 => 69,  231 => 68,  228 => 67,  226 => 66,  223 => 65,  215 => 62,  206 => 61,  198 => 58,  189 => 57,  187 => 56,  184 => 55,  180 => 53,  174 => 50,  167 => 49,  160 => 45,  154 => 44,  151 => 43,  149 => 42,  140 => 36,  133 => 32,  128 => 29,  122 => 27,  120 => 26,  116 => 25,  112 => 24,  109 => 23,  102 => 21,  99 => 20,  97 => 19,  92 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  71 => 12,  69 => 11,  63 => 8,  59 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>
  {{ get_image('s_tbl') }}
  {{ t('Binary log') }}
</h2>

<form action=\"{{ url('/server/binlog') }}\" method=\"post\" class=\"card\">
  {{ get_hidden_inputs(url_params) }}
  <div class=\"card-header\">{{ t('Select binary log to view') }}</div>

  <div class=\"card-body\">
    {% set full_size = 0 %}
    <select name=\"log\">
      {% for each_log in binary_logs %}
        <option value=\"{{ each_log['Log_name'] }}\"
          {{- each_log['Log_name'] == log ? ' selected' }}>
          {{ each_log['Log_name'] }}
          {% if each_log['File_size'] is defined %}
            ({{ format_byte_down(each_log['File_size'], 3, 2)|join(' ') }})
            {% set full_size = full_size + each_log['File_size'] %}
          {% endif %}
        </option>
      {% endfor %}
    </select>
    {{ binary_logs|length }}
    {{ t('Files') }},
    {% if full_size > 0 %}
      {{ format_byte_down(full_size)|join(' ') }}
    {% endif %}
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
  </div>
</form>

{{ sql_message|raw }}

<table class=\"table table-striped table-hover align-middle\" id=\"binlogTable\">
  <thead>
    <tr>
      <td colspan=\"6\" class=\"text-center\">
        {% if has_previous %}
          {% if has_icons %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(previous_params, '', false) }}\" title=\"
                {{- t('Previous', context = 'Previous page') }}\">
              &laquo;
            </a>
          {% else %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(previous_params, '', false) }}\">
              {{ t('Previous', context = 'Previous page') }} &laquo;
            </a>
          {% endif %}
          -
        {% endif %}

        {% if is_full_query %}
          <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(full_queries_params, '', false) }}\" title=\"{{ t('Truncate shown queries') }}\">
            <img src=\"{{ image('s_partialtext.png') }}\" alt=\"{{ t('Truncate shown queries') }}\">
          </a>
        {% else %}
          <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(full_queries_params, '', false) }}\" title=\"{{ t('Show full queries') }}\">
            <img src=\"{{ image('s_fulltext.png') }}\" alt=\"{{ t('Show full queries') }}\">
          </a>
        {% endif %}

        {% if has_next %}
          -
          {% if has_icons %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(next_params, '', false) }}\" title=\"
                {{- t('Next', context = 'Next page') }}\">
              &raquo;
            </a>
          {% else %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(next_params, '', false) }}\">
              {{ t('Next', context = 'Next page') }} &raquo;
            </a>
          {% endif %}
        {% endif %}
      </td>
    </tr>
    <tr class=\"text-nowrap\">
      <th>{{ t('Log name') }}</th>
      <th>{{ t('Position') }}</th>
      <th>{{ t('Event type') }}</th>
      <th>{{ t('Server ID') }}</th>
      <th>{{ t('Original position') }}</th>
      <th>{{ t('Information') }}</th>
    </tr>
  </thead>

  <tbody>
    {% for value in values %}
      <tr class=\"noclick\">
        <td>{{ value['Log_name'] }}</td>
        <td class=\"text-end\">{{ value['Pos'] }}</td>
        <td>{{ value['Event_type'] }}</td>
        <td class=\"text-end\">{{ value['Server_id'] }}</td>
        <td class=\"text-end\">
          {{- value['Orig_log_pos'] is defined ? value['Orig_log_pos'] : value['End_log_pos'] -}}
        </td>
        <td>{{ format_sql(value['Info'], not is_full_query) }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "server/binlog/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/binlog/index.twig");
    }
}
