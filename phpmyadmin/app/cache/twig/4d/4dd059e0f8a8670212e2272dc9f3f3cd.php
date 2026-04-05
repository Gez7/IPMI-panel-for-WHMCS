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

/* sql/no_results_returned.twig */
class __TwigTemplate_babe6f9ba75332d1077c1c05b042d58a extends Template
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
        yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1, $this->source); })());
        yield "

";
        // line 3
        yield (isset($context["sql_query_results_table"]) || array_key_exists("sql_query_results_table", $context) ? $context["sql_query_results_table"] : (function () { throw new RuntimeError('Variable "sql_query_results_table" does not exist.', 3, $this->source); })());
        yield "

";
        // line 5
        yield (isset($context["profiling_chart"]) || array_key_exists("profiling_chart", $context) ? $context["profiling_chart"] : (function () { throw new RuntimeError('Variable "profiling_chart" does not exist.', 5, $this->source); })());
        yield "

";
        // line 7
        if ((($tmp =  !(isset($context["is_procedure"]) || array_key_exists("is_procedure", $context) ? $context["is_procedure"] : (function () { throw new RuntimeError('Variable "is_procedure" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query results operations"), "html", null, true);
            yield "</div>
    <div class=\"card-body\">
      <span>
        ";
            // line 12
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>             // line 14
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 14, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "printview" => "1", "sql_query" => (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 14, $this->source); })())], PhpMyAdmin\Html\Generator::getIcon("b_view_add", \_gettext("Create view"), true), ["class" => "create_view ajax btn"]);
            // line 17
            yield "
      </span>
    </div>
  </div>
";
        }
        // line 22
        yield "
";
        // line 23
        yield (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new RuntimeError('Variable "bookmark" does not exist.', 23, $this->source); })());
        yield "

";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/no_results_returned.twig";
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
        return array (  86 => 25,  81 => 23,  78 => 22,  71 => 17,  69 => 14,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ message|raw }}

{{ sql_query_results_table|raw }}

{{ profiling_chart|raw }}

{% if not is_procedure %}
  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">{{ t('Query results operations') }}</div>
    <div class=\"card-body\">
      <span>
        {{ link_or_button(
          url('/view/create'),
          {'db': db, 'table': table, 'printview': '1', 'sql_query': sql_query},
          get_icon('b_view_add', t('Create view'), true),
          {'class': 'create_view ajax btn'}
        ) }}
      </span>
    </div>
  </div>
{% endif %}

{{ bookmark|raw }}

{{ include('modals/create_view.twig') }}
", "sql/no_results_returned.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/no_results_returned.twig");
    }
}
