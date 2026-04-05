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

/* server/status/queries/index.twig */
class __TwigTemplate_bcdc74e449f027ef3d4adeede839b683 extends Template
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
        $context["active"] = "queries";
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
        yield "  <div class=\"container\">
    ";
        // line 5
        if ((($tmp =  !(isset($context["is_data_loaded"]) || array_key_exists("is_data_loaded", $context) ? $context["is_data_loaded"] : (function () { throw new RuntimeError('Variable "is_data_loaded" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "      ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Not enough privilege to view query statistics."));
            yield "
    ";
        } else {
            // line 8
            yield "      <h3>
        ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Questions is the name of a MySQL Status variable
\_gettext("Questions since startup:")
, "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 9, $this->source); })()), "total", [], "any", false, false, false, 9), 0), "html", null, true);
            yield "
        ";
            // line 10
            yield PhpMyAdmin\Html\MySQLDocumentation::show("server-status-variables", false, null, null, "statvar_Questions");
            yield "
      </h3>

      <div class=\"row\">
        <ul>
          <li>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(
// l10n: Average per hour
\_gettext("ø per hour: %s")
, PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()), "per_hour", [], "any", false, false, false, 15), 0)), "html", null, true);
            yield "</li>
          <li>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(
// l10n: Average per minute
\_gettext("ø per minute: %s")
, PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "per_minute", [], "any", false, false, false, 16), 0)), "html", null, true);
            yield "</li>
          ";
            // line 17
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 17, $this->source); })()), "per_second", [], "any", false, false, false, 17) >= 1)) {
                // line 18
                yield "            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(
// l10n: Average per second
\_gettext("ø per second: %s")
, PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "per_second", [], "any", false, false, false, 18), 0)), "html", null, true);
                yield "</li>
          ";
            }
            // line 20
            yield "        </ul>
      </div>

      <div class=\"row\">
        <table id=\"serverStatusQueriesDetails\" class=\"table table-striped table-hover col\">
          <colgroup>
            <col class=\"namecol\">
            <col class=\"valuecol\" span=\"3\">
          </colgroup>

          <thead>
            <tr>
              <th scope=\"col\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Statements"), "html", null, true);
            yield "</th>
              <th class=\"text-end\" scope=\"col\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: # = Amount of queries
\_gettext("#")
, "html", null, true);
            yield "</th>
              <th class=\"text-end\" scope=\"col\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Average per hour
\_gettext("ø per hour")
, "html", null, true);
            yield "</th>
              <th class=\"text-end\" scope=\"col\">%</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["queries"]) || array_key_exists("queries", $context) ? $context["queries"] : (function () { throw new RuntimeError('Variable "queries" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 41
                yield "              <tr>
                <th scope=\"row\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "name", [], "any", false, false, false, 42), "html", null, true);
                yield "</th>
                <td class=\"font-monospace text-end\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "value", [], "any", false, false, false, 43), 5, 0, true), "html", null, true);
                yield "</td>
                <td class=\"font-monospace text-end\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "per_hour", [], "any", false, false, false, 44), 4, 1, true), "html", null, true);
                yield "</td>
                <td class=\"font-monospace text-end\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "percentage", [], "any", false, false, false, 45), 0, 2), "html", null, true);
                yield "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['query'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "          </tbody>
        </table>

        <div class=\"col\">
          <canvas id=\"query-statistics-chart\" data-chart-data=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["chart_data"]) || array_key_exists("chart_data", $context) ? $context["chart_data"] : (function () { throw new RuntimeError('Variable "chart_data" does not exist.', 52, $this->source); })())), "html_attr");
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pie chart with the most frequent statements."), "html", null, true);
            yield "\" role=\"img\"></canvas>
        </div>
      </div>
    ";
        }
        // line 56
        yield "  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/queries/index.twig";
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
        return array (  197 => 56,  188 => 52,  182 => 48,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  158 => 41,  154 => 40,  142 => 34,  135 => 33,  131 => 32,  117 => 20,  108 => 18,  106 => 17,  99 => 16,  92 => 15,  84 => 10,  75 => 9,  72 => 8,  66 => 6,  64 => 5,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'queries' %}
{% block content %}
  <div class=\"container\">
    {% if not is_data_loaded %}
      {{ t('Not enough privilege to view query statistics.')|error }}
    {% else %}
      <h3>
        {{ t('Questions since startup:', notes = 'Questions is the name of a MySQL Status variable') }} {{ format_number(stats.total, 0) }}
        {{ show_mysql_docu('server-status-variables', false, null, null, 'statvar_Questions') }}
      </h3>

      <div class=\"row\">
        <ul>
          <li>{{ t('ø per hour: %s', notes = 'Average per hour')|format(format_number(stats.per_hour, 0)) }}</li>
          <li>{{ t('ø per minute: %s', notes = 'Average per minute')|format(format_number(stats.per_minute, 0)) }}</li>
          {% if stats.per_second >= 1 %}
            <li>{{ t('ø per second: %s', notes = 'Average per second')|format(format_number(stats.per_second, 0)) }}</li>
          {% endif %}
        </ul>
      </div>

      <div class=\"row\">
        <table id=\"serverStatusQueriesDetails\" class=\"table table-striped table-hover col\">
          <colgroup>
            <col class=\"namecol\">
            <col class=\"valuecol\" span=\"3\">
          </colgroup>

          <thead>
            <tr>
              <th scope=\"col\">{{ t('Statements') }}</th>
              <th class=\"text-end\" scope=\"col\">{{ t('#', notes = '# = Amount of queries') }}</th>
              <th class=\"text-end\" scope=\"col\">{{ t('ø per hour', notes = 'Average per hour') }}</th>
              <th class=\"text-end\" scope=\"col\">%</th>
            </tr>
          </thead>

          <tbody>
            {% for query in queries %}
              <tr>
                <th scope=\"row\">{{ query.name }}</th>
                <td class=\"font-monospace text-end\">{{ format_number(query.value, 5, 0, true) }}</td>
                <td class=\"font-monospace text-end\">{{ format_number(query.per_hour, 4, 1, true) }}</td>
                <td class=\"font-monospace text-end\">{{ format_number(query.percentage, 0, 2) }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>

        <div class=\"col\">
          <canvas id=\"query-statistics-chart\" data-chart-data=\"{{ chart_data|json_encode|e('html_attr') }}\" aria-label=\"{{ t('Pie chart with the most frequent statements.') }}\" role=\"img\"></canvas>
        </div>
      </div>
    {% endif %}
  </div>
{% endblock %}
", "server/status/queries/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/queries/index.twig");
    }
}
