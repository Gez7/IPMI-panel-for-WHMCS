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

/* database/search/results.twig */
class __TwigTemplate_3999a66ed604a41274544a21384c1775 extends Template
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
        yield "<table class=\"table table-striped caption-top w-auto\">
    <caption>";
        // line 3
        yield Twig\Extension\CoreExtension::sprintf("Search results for \"<em>%s</em>\" %s:", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(        // line 4
(isset($context["criteria_search_string"]) || array_key_exists("criteria_search_string", $context) ? $context["criteria_search_string"] : (function () { throw new RuntimeError('Variable "criteria_search_string" does not exist.', 4, $this->source); })())),         // line 5
(isset($context["search_type_description"]) || array_key_exists("search_type_description", $context) ? $context["search_type_description"] : (function () { throw new RuntimeError('Variable "search_type_description" does not exist.', 5, $this->source); })()));
        // line 7
        yield "</caption>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            yield "        <tr class=\"noclick\">
            <td>
              ";
            // line 11
            yield Twig\Extension\CoreExtension::sprintf(\_ngettext("%1\$s match in <strong>%2\$s</strong>", "%1\$s matches in <strong>%2\$s</strong>", CoreExtension::getAttribute($this->env, $this->source, $context["row"], "result_count", [], "any", false, false, false, 11)), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "result_count", [], "any", false, false, false, 11), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "table", [], "any", false, false, false, 11)));
            yield "
            </td>";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "result_count", [], "any", false, false, false, 13) > 0)) {
                // line 14
                $context["url_params"] = ["db" =>                 // line 15
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 15, $this->source); })()), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 16
$context["row"], "table", [], "any", false, false, false, 16), "goto" => PhpMyAdmin\Url::getFromRoute("/database/sql"), "pos" => 0, "is_js_confirmed" => 0];
                // line 21
                yield "<td><button
                        class=\"btn btn-link p-0 ajax browse_results\"
                        data-href=\"";
                // line 23
                yield PhpMyAdmin\Url::getFromRoute("/sql", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 23, $this->source); })()));
                yield "\"
                        data-browse-sql=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_search_sqls", [], "any", false, false, false, 24), "select_columns", [], "any", false, false, false, 24), "html", null, true);
                yield "\"
                        data-table-name=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "table", [], "any", false, false, false, 25), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browse"), "html", null, true);
                yield "</button>
                </td>
                <td><button
                        class=\"btn btn-link p-0 ajax delete_results\"
                        data-href=\"";
                // line 29
                yield PhpMyAdmin\Url::getFromRoute("/sql", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 29, $this->source); })()));
                yield "\"
                        data-delete-sql=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_search_sqls", [], "any", false, false, false, 30), "delete", [], "any", false, false, false, 30), "html", null, true);
                yield "\"
                        data-table-name=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "table", [], "any", false, false, false, 31), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
                yield "</button>
                </td>";
            } else {
                // line 34
                yield "<td></td>
                <td></td>";
            }
            // line 37
            yield "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "</table>

";
        // line 41
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["criteria_tables"]) || array_key_exists("criteria_tables", $context) ? $context["criteria_tables"] : (function () { throw new RuntimeError('Variable "criteria_tables" does not exist.', 41, $this->source); })())) > 1)) {
            // line 42
            yield "    <p>
        ";
            // line 43
            yield Twig\Extension\CoreExtension::sprintf(\_ngettext("<strong>Total:</strong> <em>%s</em> match", "<strong>Total:</strong> <em>%s</em> matches", (isset($context["result_total"]) || array_key_exists("result_total", $context) ? $context["result_total"] : (function () { throw new RuntimeError('Variable "result_total" does not exist.', 43, $this->source); })())), (isset($context["result_total"]) || array_key_exists("result_total", $context) ? $context["result_total"] : (function () { throw new RuntimeError('Variable "result_total" does not exist.', 43, $this->source); })()));
            yield "
    </p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/search/results.twig";
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
        return array (  126 => 43,  123 => 42,  121 => 41,  117 => 39,  110 => 37,  106 => 34,  99 => 31,  95 => 30,  91 => 29,  82 => 25,  78 => 24,  74 => 23,  70 => 21,  68 => 16,  67 => 15,  66 => 14,  64 => 13,  60 => 11,  56 => 9,  52 => 8,  49 => 7,  47 => 5,  46 => 4,  45 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-striped caption-top w-auto\">
    <caption>
        {{- 'Search results for \"<em>%s</em>\" %s:'|format(
            criteria_search_string|e,
            search_type_description
        )|raw -}}
    </caption>
    {% for row in rows %}
        <tr class=\"noclick\">
            <td>
              {{ t('%1\$s match in <strong>%2\$s</strong>', '%1\$s matches in <strong>%2\$s</strong>', row.result_count)|format(row.result_count, row.table|e)|raw }}
            </td>
            {%- if row.result_count > 0 -%}
                {%- set url_params = {
                    'db': db,
                    'table': row.table,
                    'goto': url('/database/sql'),
                    'pos': 0,
                    'is_js_confirmed': 0
                } -%}
                <td><button
                        class=\"btn btn-link p-0 ajax browse_results\"
                        data-href=\"{{ url('/sql', url_params) }}\"
                        data-browse-sql=\"{{ row.new_search_sqls.select_columns }}\"
                        data-table-name=\"{{ row.table }}\">{{ t('Browse') }}</button>
                </td>
                <td><button
                        class=\"btn btn-link p-0 ajax delete_results\"
                        data-href=\"{{ url('/sql', url_params) }}\"
                        data-delete-sql=\"{{ row.new_search_sqls.delete }}\"
                        data-table-name=\"{{ row.table }}\">{{ t('Delete') }}</button>
                </td>
            {%- else -%}
                <td></td>
                <td></td>
            {%- endif -%}
        </tr>
    {% endfor %}
</table>

{% if criteria_tables|length > 1 %}
    <p>
        {{ t('<strong>Total:</strong> <em>%s</em> match', '<strong>Total:</strong> <em>%s</em> matches', result_total)|format(result_total)|raw }}
    </p>
{% endif %}
", "database/search/results.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/search/results.twig");
    }
}
