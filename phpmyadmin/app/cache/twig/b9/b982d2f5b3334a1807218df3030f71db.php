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

/* database/structure/body_for_table_summary.twig */
class __TwigTemplate_249a8e96b3f93e9c8c9b68204c9959a8 extends Template
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
        yield "<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%s table", "%s tables", (isset($context["num_tables"]) || array_key_exists("num_tables", $context) ? $context["num_tables"] : (function () { throw new RuntimeError('Variable "num_tables" does not exist.', 5, $this->source); })())), PhpMyAdmin\Util::formatNumber((isset($context["num_tables"]) || array_key_exists("num_tables", $context) ? $context["num_tables"] : (function () { throw new RuntimeError('Variable "num_tables" does not exist.', 5, $this->source); })()), 0)), "html", null, true);
        yield "
    </th>
    ";
        // line 7
        if ((($tmp = (isset($context["server_replica_status"]) || array_key_exists("server_replica_status", $context) ? $context["server_replica_status"] : (function () { throw new RuntimeError('Variable "server_replica_status" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replication"), "html", null, true);
            yield "</th>
    ";
        }
        // line 10
        yield "    ";
        $context["sum_colspan"] = (((($tmp = (isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (4) : (7));
        // line 11
        yield "    ";
        if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 11, $this->source); })()) == 0)) {
            // line 12
            yield "        ";
            $context["sum_colspan"] = ((isset($context["sum_colspan"]) || array_key_exists("sum_colspan", $context) ? $context["sum_colspan"] : (function () { throw new RuntimeError('Variable "sum_colspan" does not exist.', 12, $this->source); })()) - 1);
            // line 13
            yield "    ";
        }
        // line 14
        yield "    <th colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sum_colspan"]) || array_key_exists("sum_colspan", $context) ? $context["sum_colspan"] : (function () { throw new RuntimeError('Variable "sum_colspan" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" class=\"d-print-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Sum"), "html", null, true);
        yield "</th>
    ";
        // line 15
        $context["row_count_sum"] = PhpMyAdmin\Util::formatNumber((isset($context["sum_entries"]) || array_key_exists("sum_entries", $context) ? $context["sum_entries"] : (function () { throw new RuntimeError('Variable "sum_entries" does not exist.', 15, $this->source); })()), 0);
        // line 16
        yield "    ";
        // line 17
        yield "    ";
        $context["row_sum_url"] = [];
        // line 18
        yield "    ";
        if (array_key_exists("approx_rows", $context)) {
            // line 19
            yield "        ";
            $context["row_sum_url"] = ["ajax_request" => true, "db" =>             // line 21
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 21, $this->source); })()), "real_row_count_all" => "true"];
            // line 24
            yield "    ";
        }
        // line 25
        yield "    ";
        if ((($tmp = (isset($context["approx_rows"]) || array_key_exists("approx_rows", $context) ? $context["approx_rows"] : (function () { throw new RuntimeError('Variable "approx_rows" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        ";
            $context["cell_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 27
                yield "<a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/structure/real-row-count", (isset($context["row_sum_url"]) || array_key_exists("row_sum_url", $context) ? $context["row_sum_url"] : (function () { throw new RuntimeError('Variable "row_sum_url" does not exist.', 27, $this->source); })()));
                yield "\" class=\"ajax row_count_sum\">~";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_count_sum"]) || array_key_exists("row_count_sum", $context) ? $context["row_count_sum"] : (function () { throw new RuntimeError('Variable "row_count_sum" does not exist.', 28, $this->source); })()), "html", null, true);
                // line 29
                yield "</a>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            yield "    ";
        } else {
            // line 32
            yield "        ";
            $context["cell_text"] = (isset($context["row_count_sum"]) || array_key_exists("row_count_sum", $context) ? $context["row_count_sum"] : (function () { throw new RuntimeError('Variable "row_count_sum" does not exist.', 32, $this->source); })());
            // line 33
            yield "    ";
        }
        // line 34
        yield "    <th class=\"value tbl_rows font-monospace text-end\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cell_text"]) || array_key_exists("cell_text", $context) ? $context["cell_text"] : (function () { throw new RuntimeError('Variable "cell_text" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</th>
    ";
        // line 35
        if ((($tmp =  !((isset($context["properties_num_columns"]) || array_key_exists("properties_num_columns", $context) ? $context["properties_num_columns"] : (function () { throw new RuntimeError('Variable "properties_num_columns" does not exist.', 35, $this->source); })()) > 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        <th class=\"text-center\">
            <dfn title=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("%s is the default storage engine on this MySQL server."), (isset($context["default_storage_engine"]) || array_key_exists("default_storage_engine", $context) ? $context["default_storage_engine"] : (function () { throw new RuntimeError('Variable "default_storage_engine" does not exist.', 37, $this->source); })())), "html", null, true);
            yield "\">
                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["default_storage_engine"]) || array_key_exists("default_storage_engine", $context) ? $context["default_storage_engine"] : (function () { throw new RuntimeError('Variable "default_storage_engine" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "
            </dfn>
        </th>
        <th>
            ";
            // line 42
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["database_collation"]) || array_key_exists("database_collation", $context) ? $context["database_collation"] : (function () { throw new RuntimeError('Variable "database_collation" does not exist.', 42, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                <dfn title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["database_collation"]) || array_key_exists("database_collation", $context) ? $context["database_collation"] : (function () { throw new RuntimeError('Variable "database_collation" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
                yield ")\">
                    ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["database_collation"]) || array_key_exists("database_collation", $context) ? $context["database_collation"] : (function () { throw new RuntimeError('Variable "database_collation" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
                yield "
                </dfn>
            ";
            }
            // line 47
            yield "        </th>
    ";
        }
        // line 49
        yield "
    ";
        // line 50
        if ((($tmp = (isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        ";
            $context["sum"] = PhpMyAdmin\Util::formatByteDown((isset($context["sum_size"]) || array_key_exists("sum_size", $context) ? $context["sum_size"] : (function () { throw new RuntimeError('Variable "sum_size" does not exist.', 51, $this->source); })()), 3, 1);
            // line 52
            yield "        ";
            $context["sum_formatted"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 52, $this->source); })()), 0, [], "array", false, false, false, 52);
            // line 53
            yield "        ";
            $context["sum_unit"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 53, $this->source); })()), 1, [], "array", false, false, false, 53);
            // line 54
            yield "        <th class=\"value tbl_size font-monospace text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sum_formatted"]) || array_key_exists("sum_formatted", $context) ? $context["sum_formatted"] : (function () { throw new RuntimeError('Variable "sum_formatted" does not exist.', 54, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sum_unit"]) || array_key_exists("sum_unit", $context) ? $context["sum_unit"] : (function () { throw new RuntimeError('Variable "sum_unit" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "</th>

        ";
            // line 56
            $context["overhead"] = PhpMyAdmin\Util::formatByteDown((isset($context["overhead_size"]) || array_key_exists("overhead_size", $context) ? $context["overhead_size"] : (function () { throw new RuntimeError('Variable "overhead_size" does not exist.', 56, $this->source); })()), 3, 1);
            // line 57
            yield "        ";
            $context["overhead_formatted"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["overhead"]) || array_key_exists("overhead", $context) ? $context["overhead"] : (function () { throw new RuntimeError('Variable "overhead" does not exist.', 57, $this->source); })()), 0, [], "array", false, false, false, 57);
            // line 58
            yield "        ";
            $context["overhead_unit"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["overhead"]) || array_key_exists("overhead", $context) ? $context["overhead"] : (function () { throw new RuntimeError('Variable "overhead" does not exist.', 58, $this->source); })()), 1, [], "array", false, false, false, 58);
            // line 59
            yield "        <th class=\"value tbl_overhead font-monospace text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overhead_formatted"]) || array_key_exists("overhead_formatted", $context) ? $context["overhead_formatted"] : (function () { throw new RuntimeError('Variable "overhead_formatted" does not exist.', 59, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overhead_unit"]) || array_key_exists("overhead_unit", $context) ? $context["overhead_unit"] : (function () { throw new RuntimeError('Variable "overhead_unit" does not exist.', 59, $this->source); })()), "html", null, true);
            yield "</th>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if ((($tmp = (isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["database_charset"]) || array_key_exists("database_charset", $context) ? $context["database_charset"] : (function () { throw new RuntimeError('Variable "database_charset" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "</th>
    ";
        }
        // line 65
        yield "    ";
        if ((($tmp = (isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "        <th></th>
    ";
        }
        // line 68
        yield "    ";
        if ((($tmp = (isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "        <th class=\"value tbl_creation font-monospace text-end\">
            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["create_time_all"]) || array_key_exists("create_time_all", $context) ? $context["create_time_all"] : (function () { throw new RuntimeError('Variable "create_time_all" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 73
        yield "    ";
        if ((($tmp = (isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 73, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "        <th class=\"value tbl_last_update font-monospace text-end\">
            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["update_time_all"]) || array_key_exists("update_time_all", $context) ? $context["update_time_all"] : (function () { throw new RuntimeError('Variable "update_time_all" does not exist.', 75, $this->source); })()), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 78
        yield "    ";
        if ((($tmp = (isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "        <th class=\"value tbl_last_check font-monospace text-end\">
            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["check_time_all"]) || array_key_exists("check_time_all", $context) ? $context["check_time_all"] : (function () { throw new RuntimeError('Variable "check_time_all" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 83
        yield "</tr>
</tfoot>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/body_for_table_summary.twig";
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
        return array (  254 => 83,  248 => 80,  245 => 79,  242 => 78,  236 => 75,  233 => 74,  230 => 73,  224 => 70,  221 => 69,  218 => 68,  214 => 66,  211 => 65,  205 => 63,  203 => 62,  200 => 61,  192 => 59,  189 => 58,  186 => 57,  184 => 56,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  165 => 50,  162 => 49,  158 => 47,  152 => 44,  145 => 43,  143 => 42,  136 => 38,  132 => 37,  129 => 36,  127 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  109 => 29,  107 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  92 => 21,  90 => 19,  87 => 18,  84 => 17,  82 => 16,  80 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  55 => 8,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        {{ t('%s table', '%s tables', num_tables)|format(format_number(num_tables, 0)) }}
    </th>
    {% if server_replica_status %}
        <th>{{ t('Replication') }}</th>
    {% endif %}
    {% set sum_colspan = db_is_system_schema ? 4 : 7 %}
    {% if num_favorite_tables == 0 %}
        {% set sum_colspan = sum_colspan - 1 %}
    {% endif %}
    <th colspan=\"{{ sum_colspan }}\" class=\"d-print-none\">{{ t('Sum') }}</th>
    {% set row_count_sum = format_number(sum_entries, 0) %}
    {# If a table shows approximate rows count, display update-all-real-count anchor. #}
    {% set row_sum_url = [] %}
    {% if approx_rows is defined %}
        {% set row_sum_url = {
            'ajax_request': true,
            'db': db,
            'real_row_count_all': 'true'
        } %}
    {% endif %}
    {% if approx_rows %}
        {% set cell_text -%}
            <a href=\"{{ url('/database/structure/real-row-count', row_sum_url) }}\" class=\"ajax row_count_sum\">~
                {{- row_count_sum -}}
            </a>
        {%- endset %}
    {% else %}
        {% set cell_text = row_count_sum %}
    {% endif %}
    <th class=\"value tbl_rows font-monospace text-end\">{{ cell_text }}</th>
    {% if not (properties_num_columns > 1) %}
        <th class=\"text-center\">
            <dfn title=\"{{ t('%s is the default storage engine on this MySQL server.')|format(default_storage_engine) }}\">
                {{ default_storage_engine }}
            </dfn>
        </th>
        <th>
            {% if database_collation is not empty %}
                <dfn title=\"{{ database_collation.description }} ({{ t('Default') }})\">
                    {{ database_collation.name }}
                </dfn>
            {% endif %}
        </th>
    {% endif %}

    {% if is_show_stats %}
        {% set sum = format_byte_down(sum_size, 3, 1) %}
        {% set sum_formatted = sum[0] %}
        {% set sum_unit = sum[1] %}
        <th class=\"value tbl_size font-monospace text-end\">{{ sum_formatted }} {{ sum_unit }}</th>

        {% set overhead = format_byte_down(overhead_size, 3, 1) %}
        {% set overhead_formatted = overhead[0] %}
        {% set overhead_unit = overhead[1] %}
        <th class=\"value tbl_overhead font-monospace text-end\">{{ overhead_formatted }} {{ overhead_unit }}</th>
    {% endif %}

    {% if show_charset %}
        <th>{{ database_charset }}</th>
    {% endif %}
    {% if show_comment %}
        <th></th>
    {% endif %}
    {% if show_creation %}
        <th class=\"value tbl_creation font-monospace text-end\">
            {{ create_time_all }}
        </th>
    {% endif %}
    {% if show_last_update %}
        <th class=\"value tbl_last_update font-monospace text-end\">
            {{ update_time_all }}
        </th>
    {% endif %}
    {% if show_last_check %}
        <th class=\"value tbl_last_check font-monospace text-end\">
            {{ check_time_all }}
        </th>
    {% endif %}
</tr>
</tfoot>
", "database/structure/body_for_table_summary.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/body_for_table_summary.twig");
    }
}
