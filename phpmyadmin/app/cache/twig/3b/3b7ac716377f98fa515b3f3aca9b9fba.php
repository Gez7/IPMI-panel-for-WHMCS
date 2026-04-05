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

/* server/status/processes/list.twig */
class __TwigTemplate_bb60146f73a0f935260c0bd9214e358c extends Template
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
        yield "<div class=\"responsivetable row\">
  <table id=\"tableprocesslist\" class=\"table table-striped table-hover sortable w-auto\">
    <thead>
      <tr>
        <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Processes"), "html", null, true);
        yield "</th>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            yield "          <th scope=\"col\">
            <a href=\"";
            // line 8
            yield PhpMyAdmin\Url::getFromRoute("/server/status/processes");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "params", [], "any", false, false, false, 8), "", false);
            yield "\" class=\"sortlink\">
              ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 9), "html", null, true);
            yield "
              ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_sorted", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "                <img class=\"icon ic_s_desc soimg\" alt=\"";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Descending"), "html", null, true);
                yield "\" src=\"themes/dot.gif\" style=\"display: ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_order", [], "any", false, false, false, 12) == "DESC")) ? ("none") : ("inline"));
                yield "\">
                <img class=\"icon ic_s_asc soimg hide\" alt=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ascending"), "html", null, true);
                yield "\" src=\"themes/dot.gif\" style=\"display: ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_order", [], "any", false, false, false, 14) == "DESC")) ? ("inline") : ("none"));
                yield "\">
              ";
            }
            // line 16
            yield "            </a>
            ";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "has_full_query", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "              <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/status/processes");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon((isset($context["refresh_params"]) || array_key_exists("refresh_params", $context) ? $context["refresh_params"] : (function () { throw new RuntimeError('Variable "refresh_params" does not exist.', 18, $this->source); })()), "", false);
                yield "\">
                ";
                // line 19
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_full", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "                  ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_partialtext", \_gettext("Truncate shown queries"), ["class" => "icon_fulltext"]);
                    // line 24
                    yield "
                ";
                } else {
                    // line 26
                    yield "                  ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_fulltext", \_gettext("Show full queries"), ["class" => "icon_fulltext"]);
                    // line 30
                    yield "
                ";
                }
                // line 32
                yield "              </a>
            ";
            }
            // line 34
            yield "          </th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "      </tr>
    </thead>

    <tbody>
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            yield "        <tr>
          <td>
            <a class=\"ajax kill_process\" href=\"";
            // line 43
            yield PhpMyAdmin\Url::getFromRoute(("/server/status/processes/kill/" . CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 43)));
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["kill" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 43)], "", false);
            yield "\">
              ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Kill"), "html", null, true);
            yield "
            </a>
          </td>
          <td class=\"font-monospace text-end\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
          <td>
            ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 49) != "system user")) {
                // line 50
                yield "              <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                 // line 51
$context["row"], "user", [], "any", false, false, false, 51), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["row"], "host", [], "any", false, false, false, 52), "dbname" => CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["row"], "db", [], "any", false, false, false, 53), "tablename" => "", "routinename" => ""]);
                // line 56
                yield "\">
                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 57), "html", null, true);
                yield "
              </a>
            ";
            } else {
                // line 60
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 60), "html", null, true);
                yield "
            ";
            }
            // line 62
            yield "          </td>
          <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "host", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
          <td>
            ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "db", [], "any", false, false, false, 65) != "")) {
                // line 66
                yield "              <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/structure", ["db" => CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["row"], "db", [], "any", false, false, false, 67)]);
                // line 68
                yield "\">
                ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "db", [], "any", false, false, false, 69), "html", null, true);
                yield "
              </a>
            ";
            } else {
                // line 72
                yield "              <em>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
                yield "</em>
            ";
            }
            // line 74
            yield "          </td>
          <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "command", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
          <td class=\"font-monospace text-end\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
          <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "state", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
          ";
            // line 78
            if ((($tmp = (isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "            <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, false, 79), "html", null, true);
                yield "</td>
          ";
            }
            // line 81
            yield "          <td>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "info", [], "any", false, false, false, 81);
            yield "</td>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "    </tbody>
  </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/processes/list.twig";
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
        return array (  240 => 83,  231 => 81,  225 => 79,  223 => 78,  219 => 77,  215 => 76,  211 => 75,  208 => 74,  202 => 72,  196 => 69,  193 => 68,  191 => 67,  189 => 66,  187 => 65,  182 => 63,  179 => 62,  173 => 60,  167 => 57,  164 => 56,  162 => 53,  161 => 52,  160 => 51,  158 => 50,  156 => 49,  151 => 47,  145 => 44,  139 => 43,  135 => 41,  131 => 40,  125 => 36,  118 => 34,  114 => 32,  110 => 30,  107 => 26,  103 => 24,  100 => 20,  98 => 19,  91 => 18,  89 => 17,  86 => 16,  79 => 14,  73 => 12,  71 => 11,  69 => 10,  65 => 9,  59 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"responsivetable row\">
  <table id=\"tableprocesslist\" class=\"table table-striped table-hover sortable w-auto\">
    <thead>
      <tr>
        <th>{{ t('Processes') }}</th>
        {% for column in columns %}
          <th scope=\"col\">
            <a href=\"{{ url('/server/status/processes') }}\" data-post=\"{{ get_common(column.params, '', false) }}\" class=\"sortlink\">
              {{ column.name }}
              {% if column.is_sorted %}
                <img class=\"icon ic_s_desc soimg\" alt=\"
                  {{- t('Descending') }}\" src=\"themes/dot.gif\" style=\"display: {{ column.sort_order == 'DESC' ? 'none' : 'inline' }}\">
                <img class=\"icon ic_s_asc soimg hide\" alt=\"
                  {{- t('Ascending') }}\" src=\"themes/dot.gif\" style=\"display: {{ column.sort_order == 'DESC' ? 'inline' : 'none' }}\">
              {% endif %}
            </a>
            {% if column.has_full_query %}
              <a href=\"{{ url('/server/status/processes') }}\" data-post=\"{{ get_common(refresh_params, '', false) }}\">
                {% if column.is_full %}
                  {{ get_image(
                    's_partialtext',
                    t('Truncate shown queries'),
                    {'class': 'icon_fulltext'}
                  ) }}
                {% else %}
                  {{ get_image(
                    's_fulltext',
                    t('Show full queries'),
                    {'class': 'icon_fulltext'}
                  ) }}
                {% endif %}
              </a>
            {% endif %}
          </th>
        {% endfor %}
      </tr>
    </thead>

    <tbody>
      {% for row in rows %}
        <tr>
          <td>
            <a class=\"ajax kill_process\" href=\"{{ url('/server/status/processes/kill/' ~ row.id) }}\" data-post=\"{{ get_common({'kill': row.id}, '', false) }}\">
              {{ t('Kill') }}
            </a>
          </td>
          <td class=\"font-monospace text-end\">{{ row.id }}</td>
          <td>
            {% if row.user != 'system user' %}
              <a href=\"{{ url('/server/privileges', {
                  'username': row.user,
                  'hostname': row.host,
                  'dbname': row.db,
                  'tablename': '',
                  'routinename': '',
                }) }}\">
                {{ row.user }}
              </a>
            {% else %}
              {{ row.user }}
            {% endif %}
          </td>
          <td>{{ row.host }}</td>
          <td>
            {% if row.db != '' %}
              <a href=\"{{ url('/database/structure', {
                  'db': row.db,
                }) }}\">
                {{ row.db }}
              </a>
            {% else %}
              <em>{{ t('None') }}</em>
            {% endif %}
          </td>
          <td>{{ row.command }}</td>
          <td class=\"font-monospace text-end\">{{ row.time }}</td>
          <td>{{ row.state }}</td>
          {% if is_mariadb %}
            <td>{{ row.progress }}</td>
          {% endif %}
          <td>{{ row.info|raw }}</td>
      {% endfor %}
    </tbody>
  </table>
</div>
", "server/status/processes/list.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/processes/list.twig");
    }
}
