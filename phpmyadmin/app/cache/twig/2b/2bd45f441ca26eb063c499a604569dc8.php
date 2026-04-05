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

/* database/structure/table_header.twig */
class __TwigTemplate_d28f823fcf1d18c8a2c3191651942e2d extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/structure");
        yield "\" name=\"tablesForm\" id=\"tablesForm\">
";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        yield "
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover table-sm w-auto data\">
    <thead>
        <tr>
            <th class=\"d-print-none\"></th>
            <th>";
        // line 8
        yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Table"), "table");
        yield "</th>
            ";
        // line 9
        if ((($tmp = (isset($context["replication"]) || array_key_exists("replication", $context) ? $context["replication"] : (function () { throw new RuntimeError('Variable "replication" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replication"), "html", null, true);
            yield "</th>
            ";
        }
        // line 12
        yield "
            ";
        // line 13
        if ((($tmp = (isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                ";
            $context["action_colspan"] = 3;
            // line 15
            yield "            ";
        } else {
            // line 16
            yield "                ";
            $context["action_colspan"] = 6;
            // line 17
            yield "            ";
        }
        // line 18
        yield "            ";
        if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 18, $this->source); })()) > 0)) {
            // line 19
            yield "                ";
            $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 19, $this->source); })()) + 1);
            // line 20
            yield "            ";
        }
        // line 21
        yield "            <th colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" class=\"d-print-none\">
                ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "
            </th>
            ";
        // line 25
        yield "            <th>
                ";
        // line 26
        yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Rows"), "records", "DESC");
        yield "
                ";
        // line 27
        yield PhpMyAdmin\Html\Generator::showHint(PhpMyAdmin\Sanitize::convertBBCode(\_gettext("May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].")));
        yield "
            </th>
            ";
        // line 29
        if ((($tmp =  !((isset($context["properties_num_columns"]) || array_key_exists("properties_num_columns", $context) ? $context["properties_num_columns"] : (function () { throw new RuntimeError('Variable "properties_num_columns" does not exist.', 29, $this->source); })()) > 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Type"), "type");
            yield "</th>
                <th>";
            // line 31
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Collation"), "collation");
            yield "</th>
            ";
        }
        // line 33
        yield "
            ";
        // line 34
        if ((($tmp = (isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                ";
            // line 36
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Size"), "size", "DESC");
            yield "</th>
                ";
            // line 38
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Overhead"), "overhead", "DESC");
            yield "</th>
            ";
        }
        // line 40
        yield "
            ";
        // line 41
        if ((($tmp = (isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Charset"), "charset");
            yield "</th>
            ";
        }
        // line 44
        yield "
            ";
        // line 45
        if ((($tmp = (isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Comment"), "comment");
            yield "</th>
            ";
        }
        // line 48
        yield "
            ";
        // line 49
        if ((($tmp = (isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                ";
            // line 51
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Creation"), "creation", "DESC");
            yield "</th>
            ";
        }
        // line 53
        yield "
            ";
        // line 54
        if ((($tmp = (isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                ";
            // line 56
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Last update"), "last_update", "DESC");
            yield "</th>
            ";
        }
        // line 58
        yield "
            ";
        // line 59
        if ((($tmp = (isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                ";
            // line 61
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Last check"), "last_check", "DESC");
            yield "</th>
            ";
        }
        // line 63
        yield "        </tr>
    </thead>
    <tbody>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["structure_table_rows"]) || array_key_exists("structure_table_rows", $context) ? $context["structure_table_rows"] : (function () { throw new RuntimeError('Variable "structure_table_rows" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["structure_table_row"]) {
            // line 67
            yield "        ";
            yield from $this->load("database/structure/structure_table_row.twig", 67)->unwrap()->yield(CoreExtension::toArray($context["structure_table_row"]));
            // line 68
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['structure_table_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    </tbody>
    ";
        // line 70
        if ((($tmp = (isset($context["body_for_table_summary"]) || array_key_exists("body_for_table_summary", $context) ? $context["body_for_table_summary"] : (function () { throw new RuntimeError('Variable "body_for_table_summary" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "        ";
            yield from $this->load("database/structure/body_for_table_summary.twig", 71)->unwrap()->yield(CoreExtension::toArray((isset($context["body_for_table_summary"]) || array_key_exists("body_for_table_summary", $context) ? $context["body_for_table_summary"] : (function () { throw new RuntimeError('Variable "body_for_table_summary" does not exist.', 71, $this->source); })())));
            // line 72
            yield "    ";
        }
        // line 73
        yield "</table>
</div>
";
        // line 75
        if ((($tmp = (isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "  ";
            yield from $this->load("database/structure/check_all_tables.twig", 76)->unwrap()->yield(CoreExtension::toArray((isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 76, $this->source); })())));
        }
        // line 78
        yield "</form>
";
        // line 79
        if ((($tmp = (isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "  ";
            yield from $this->load("database/structure/bulk_action_modal.twig", 80)->unwrap()->yield(CoreExtension::toArray((isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 80, $this->source); })())));
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/table_header.twig";
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
        return array (  251 => 80,  249 => 79,  246 => 78,  242 => 76,  240 => 75,  236 => 73,  233 => 72,  230 => 71,  228 => 70,  225 => 69,  219 => 68,  216 => 67,  212 => 66,  207 => 63,  201 => 61,  199 => 60,  197 => 59,  194 => 58,  188 => 56,  186 => 55,  184 => 54,  181 => 53,  175 => 51,  173 => 50,  171 => 49,  168 => 48,  162 => 46,  160 => 45,  157 => 44,  151 => 42,  149 => 41,  146 => 40,  140 => 38,  135 => 36,  133 => 35,  131 => 34,  128 => 33,  123 => 31,  118 => 30,  116 => 29,  111 => 27,  107 => 26,  104 => 25,  99 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  62 => 10,  60 => 9,  56 => 8,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ url('/database/structure') }}\" name=\"tablesForm\" id=\"tablesForm\">
{{ get_hidden_inputs(db) }}
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover table-sm w-auto data\">
    <thead>
        <tr>
            <th class=\"d-print-none\"></th>
            <th>{{ sortable_table_header(t('Table'), 'table') }}</th>
            {% if replication %}
                <th>{{ t('Replication') }}</th>
            {% endif %}

            {% if db_is_system_schema %}
                {% set action_colspan = 3 %}
            {% else %}
                {% set action_colspan = 6 %}
            {% endif %}
            {% if num_favorite_tables > 0 %}
                {% set action_colspan = action_colspan + 1 %}
            {% endif %}
            <th colspan=\"{{ action_colspan }}\" class=\"d-print-none\">
                {{ t('Action') }}
            </th>
            {# larger values are more interesting so default sort order is DESC #}
            <th>
                {{ sortable_table_header(t('Rows'), 'records', 'DESC') }}
                {{ show_hint(t('May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].')|sanitize) }}
            </th>
            {% if not (properties_num_columns > 1) %}
                <th>{{ sortable_table_header(t('Type'), 'type') }}</th>
                <th>{{ sortable_table_header(t('Collation'), 'collation') }}</th>
            {% endif %}

            {% if is_show_stats %}
                {# larger values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header(t('Size'), 'size', 'DESC') }}</th>
                {# larger values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header(t('Overhead'), 'overhead', 'DESC') }}</th>
            {% endif %}

            {% if show_charset %}
                <th>{{ sortable_table_header(t('Charset'), 'charset') }}</th>
            {% endif %}

            {% if show_comment %}
                <th>{{ sortable_table_header(t('Comment'), 'comment') }}</th>
            {% endif %}

            {% if show_creation %}
                {# newer values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header(t('Creation'), 'creation', 'DESC') }}</th>
            {% endif %}

            {% if show_last_update %}
                {# newer values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header(t('Last update'), 'last_update', 'DESC') }}</th>
            {% endif %}

            {% if show_last_check %}
                {# newer values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header(t('Last check'), 'last_check', 'DESC') }}</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
    {% for structure_table_row in structure_table_rows %}
        {% include 'database/structure/structure_table_row.twig' with structure_table_row only %}
    {% endfor %}
    </tbody>
    {% if body_for_table_summary %}
        {% include 'database/structure/body_for_table_summary.twig' with body_for_table_summary only %}
    {% endif %}
</table>
</div>
{% if check_all_tables %}
  {% include 'database/structure/check_all_tables.twig' with check_all_tables only %}
{% endif %}
</form>
{% if check_all_tables %}
  {% include 'database/structure/bulk_action_modal.twig' with check_all_tables only %}
{% endif %}
", "database/structure/table_header.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/table_header.twig");
    }
}
