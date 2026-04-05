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

/* database/structure/structure_table_row.twig */
class __TwigTemplate_0d28810096e0f7c10420d2488e19e0be extends Template
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
        yield "<tr id=\"row_tbl_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["curr"]) || array_key_exists("curr", $context) ? $context["curr"] : (function () { throw new RuntimeError('Variable "curr" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\"";
        yield (((($tmp = (isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"is_view\"") : (""));
        yield " data-filter-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 1, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 1)), "html", null, true);
        yield "\">
    <td class=\"text-center d-print-none\">
        <input type=\"checkbox\"
            name=\"selected_tbl[]\"
            class=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\"
            value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 6, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 6), "html", null, true);
        yield "\"
            id=\"checkbox_tbl_";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["curr"]) || array_key_exists("curr", $context) ? $context["curr"] : (function () { throw new RuntimeError('Variable "curr" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">
    </td>
    <th>
        <a class=\"disableAjax\" href=\"";
        // line 10
        yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 10, $this->source); })()), ["pos" => 0]));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["browse_table_label_title"]) || array_key_exists("browse_table_label_title", $context) ? $context["browse_table_label_title"] : (function () { throw new RuntimeError('Variable "browse_table_label_title" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["browse_table_label_truename"]) || array_key_exists("browse_table_label_truename", $context) ? $context["browse_table_label_truename"] : (function () { throw new RuntimeError('Variable "browse_table_label_truename" does not exist.', 11, $this->source); })()), "html", null, true);
        // line 12
        yield "</a>
        ";
        // line 13
        yield (isset($context["tracking_icon"]) || array_key_exists("tracking_icon", $context) ? $context["tracking_icon"] : (function () { throw new RuntimeError('Variable "tracking_icon" does not exist.', 13, $this->source); })());
        yield "
    </th>
    ";
        // line 15
        if ((($tmp = (isset($context["server_replica_status"]) || array_key_exists("server_replica_status", $context) ? $context["server_replica_status"] : (function () { throw new RuntimeError('Variable "server_replica_status" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "        <td class=\"text-center\">
            ";
            // line 17
            yield (((($tmp = (isset($context["ignored"]) || array_key_exists("ignored", $context) ? $context["ignored"] : (function () { throw new RuntimeError('Variable "ignored" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getImage("s_cancel", \_gettext("Not replicated"))) : (""));
            yield "
            ";
            // line 18
            yield (((($tmp = (isset($context["do"]) || array_key_exists("do", $context) ? $context["do"] : (function () { throw new RuntimeError('Variable "do" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getImage("s_success", \_gettext("Replicated"))) : (""));
            yield "
        </td>
    ";
        }
        // line 21
        yield "
    ";
        // line 23
        yield "    ";
        if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 23, $this->source); })()) > 0)) {
            // line 24
            yield "        <td class=\"text-center d-print-none\">
            ";
            // line 26
            yield "            ";
            $context["fav_params"] = ["db" =>             // line 27
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 27, $this->source); })()), "ajax_request" => true, "favorite_table" => CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 29, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 29), ((((($tmp =             // line 30
(isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("remove") : ("add")) . "_favorite") => true];
            // line 32
            yield "            ";
            yield from $this->load("database/structure/favorite_anchor.twig", 32)->unwrap()->yield(CoreExtension::toArray(["table_name_hash" =>             // line 33
(isset($context["table_name_hash"]) || array_key_exists("table_name_hash", $context) ? $context["table_name_hash"] : (function () { throw new RuntimeError('Variable "table_name_hash" does not exist.', 33, $this->source); })()), "db_table_name_hash" =>             // line 34
(isset($context["db_table_name_hash"]) || array_key_exists("db_table_name_hash", $context) ? $context["db_table_name_hash"] : (function () { throw new RuntimeError('Variable "db_table_name_hash" does not exist.', 34, $this->source); })()), "fav_params" =>             // line 35
(isset($context["fav_params"]) || array_key_exists("fav_params", $context) ? $context["fav_params"] : (function () { throw new RuntimeError('Variable "fav_params" does not exist.', 35, $this->source); })()), "already_favorite" =>             // line 36
(isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 36, $this->source); })())]));
            // line 38
            yield "        </td>
    ";
        }
        // line 40
        yield "
    <td class=\"text-center d-print-none\">
        <a class=\"disableAjax\" href=\"";
        // line 42
        yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 42, $this->source); })()), ["pos" => 0]));
        yield "\">
          ";
        // line 43
        yield (((($tmp = (isset($context["may_have_rows"]) || array_key_exists("may_have_rows", $context) ? $context["may_have_rows"] : (function () { throw new RuntimeError('Variable "may_have_rows" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Browse"))) : (PhpMyAdmin\Html\Generator::getIcon("bd_browse", \_gettext("Browse"))));
        yield "
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a class=\"disableAjax\" href=\"";
        // line 47
        yield PhpMyAdmin\Url::getFromRoute("/table/structure", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 47, $this->source); })()));
        yield "\">
          ";
        // line 48
        yield PhpMyAdmin\Html\Generator::getIcon("b_props", \_gettext("Structure"));
        yield "
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a class=\"disableAjax\" href=\"";
        // line 52
        yield PhpMyAdmin\Url::getFromRoute("/table/search", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 52, $this->source); })()));
        yield "\">
          ";
        // line 53
        yield (((($tmp = (isset($context["may_have_rows"]) || array_key_exists("may_have_rows", $context) ? $context["may_have_rows"] : (function () { throw new RuntimeError('Variable "may_have_rows" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getIcon("b_select", \_gettext("Search"))) : (PhpMyAdmin\Html\Generator::getIcon("bd_select", \_gettext("Search"))));
        yield "
        </a>
    </td>

    ";
        // line 57
        if ((($tmp =  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "        <td class=\"text-center d-print-none\">
            <a class=\"disableAjax\" href=\"";
            // line 59
            yield PhpMyAdmin\Url::getFromRoute("/table/change", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 59, $this->source); })()));
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("b_insrow", \_gettext("Insert"));
            yield "</a>
        </td>
        ";
            // line 61
            if ((($tmp = (isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "            <td class=\"text-center d-print-none\">
                <a href=\"";
                // line 63
                yield PhpMyAdmin\Url::getFromRoute("/view/create", ["db" =>                 // line 64
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 64, $this->source); })()), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 65
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 65, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 65)]);
                // line 66
                yield "\">";
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
                yield "</a>
            </td>
        ";
            } else {
                // line 69
                yield "          <td class=\"text-center d-print-none\">
                <a class=\"truncate_table_anchor ajax\" href=\"";
                // line 70
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 70, $this->source); })()), ["sql_query" =>                 // line 71
(isset($context["empty_table_sql_query"]) || array_key_exists("empty_table_sql_query", $context) ? $context["empty_table_sql_query"] : (function () { throw new RuntimeError('Variable "empty_table_sql_query" does not exist.', 71, $this->source); })()), "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."), CoreExtension::getAttribute($this->env, $this->source,                 // line 72
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 72, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 72))]), "");
                // line 73
                yield "\">
                  ";
                // line 74
                yield (((($tmp = (isset($context["may_have_rows"]) || array_key_exists("may_have_rows", $context) ? $context["may_have_rows"] : (function () { throw new RuntimeError('Variable "may_have_rows" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getIcon("b_empty", \_gettext("Empty"))) : (PhpMyAdmin\Html\Generator::getIcon("bd_empty", \_gettext("Empty"))));
                yield "
                </a>
          </td>
        ";
            }
            // line 78
            yield "        <td class=\"text-center d-print-none\">
            <a class=\"ajax drop_table_anchor";
            // line 80
            yield (((($tmp = (isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 80, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" view") : (""));
            yield "\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" data-post=\"";
            // line 81
            yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 81, $this->source); })()), ["reload" => 1, "purge" => 1, "sql_query" =>             // line 84
(isset($context["drop_query"]) || array_key_exists("drop_query", $context) ? $context["drop_query"] : (function () { throw new RuntimeError('Variable "drop_query" does not exist.', 84, $this->source); })()), "message_to_show" =>             // line 85
(isset($context["drop_message"]) || array_key_exists("drop_message", $context) ? $context["drop_message"] : (function () { throw new RuntimeError('Variable "drop_message" does not exist.', 85, $this->source); })())]), "");
            // line 86
            yield "\">
                ";
            // line 87
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop"));
            yield "
            </a>
        </td>
    ";
        }
        // line 91
        yield "
    ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_table"] ?? null), "TABLE_ROWS", [], "array", true, true, false, 92) && ((CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 93, $this->source); })()), "ENGINE", [], "array", false, false, false, 93) != null) || (isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 93, $this->source); })())))) {
            // line 94
            yield "        ";
            // line 95
            yield "        ";
            $context["row_count"] = PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 95, $this->source); })()), "TABLE_ROWS", [], "array", false, false, false, 95), 0);
            // line 96
            yield "
        ";
            // line 99
            yield "        <td class=\"value tbl_rows font-monospace text-end\"
            data-table=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 100, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 100), "html", null, true);
            yield "\">
            ";
            // line 101
            if ((($tmp = (isset($context["approx_rows"]) || array_key_exists("approx_rows", $context) ? $context["approx_rows"] : (function () { throw new RuntimeError('Variable "approx_rows" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "                <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/structure/real-row-count", ["ajax_request" => true, "db" =>                 // line 104
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 104, $this->source); })()), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 105
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 105, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 105)]);
                // line 106
                yield "\" class=\"ajax real_row_count\">
                    <bdi>
                        ~";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new RuntimeError('Variable "row_count" does not exist.', 108, $this->source); })()), "html", null, true);
                yield "
                    </bdi>
                </a>
            ";
            } else {
                // line 112
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new RuntimeError('Variable "row_count" does not exist.', 112, $this->source); })()), "html", null, true);
                yield "
            ";
            }
            // line 114
            yield "            ";
            yield (isset($context["show_superscript"]) || array_key_exists("show_superscript", $context) ? $context["show_superscript"] : (function () { throw new RuntimeError('Variable "show_superscript" does not exist.', 114, $this->source); })());
            yield "
        </td>

        ";
            // line 117
            if ((($tmp =  !((isset($context["properties_num_columns"]) || array_key_exists("properties_num_columns", $context) ? $context["properties_num_columns"] : (function () { throw new RuntimeError('Variable "properties_num_columns" does not exist.', 117, $this->source); })()) > 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "            <td class=\"text-nowrap\">
                ";
                // line 119
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 119, $this->source); })()), "ENGINE", [], "array", false, false, false, 119))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 120
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 120, $this->source); })()), "ENGINE", [], "array", false, false, false, 120), "html", null, true);
                    yield "
                ";
                } elseif ((($tmp =                 // line 121
(isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 121, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View"), "html", null, true);
                    yield "
                ";
                }
                // line 124
                yield "            </td>
            ";
                // line 125
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 125, $this->source); })())) > 0)) {
                    // line 126
                    yield "                <td class=\"text-nowrap\">
                    ";
                    // line 127
                    yield (isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 127, $this->source); })());
                    yield "
                </td>
            ";
                }
                // line 130
                yield "        ";
            }
            // line 131
            yield "
        ";
            // line 132
            if ((($tmp = (isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 132, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "            <td class=\"value tbl_size font-monospace text-end\">
                <a class=\"disableAjax\" href=\"";
                // line 134
                yield PhpMyAdmin\Url::getFromRoute("/table/structure", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 134, $this->source); })()));
                yield "#showusage\">
                    <span>";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_size"]) || array_key_exists("formatted_size", $context) ? $context["formatted_size"] : (function () { throw new RuntimeError('Variable "formatted_size" does not exist.', 135, $this->source); })()), "html", null, true);
                yield "</span>&nbsp;<span class=\"unit\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 135, $this->source); })()), "html", null, true);
                yield "</span>
                </a>
            </td>
            <td class=\"value tbl_overhead font-monospace text-end\">
                ";
                // line 139
                yield (isset($context["overhead"]) || array_key_exists("overhead", $context) ? $context["overhead"] : (function () { throw new RuntimeError('Variable "overhead" does not exist.', 139, $this->source); })());
                yield "
            </td>
        ";
            }
            // line 142
            yield "
        ";
            // line 143
            if ((($tmp = (isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 143, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "            <td class=\"text-nowrap\">
                ";
                // line 145
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 145, $this->source); })())) > 0)) {
                    // line 146
                    yield "                    ";
                    yield (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 146, $this->source); })());
                    yield "
                ";
                }
                // line 148
                yield "            </td>
        ";
            }
            // line 150
            yield "
        ";
            // line 151
            if ((($tmp = (isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 151, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "            ";
                $context["comment"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 152, $this->source); })()), "Comment", [], "array", false, false, false, 152);
                // line 153
                yield "            <td>
                ";
                // line 154
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 154, $this->source); })())) > (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 154, $this->source); })()))) {
                    // line 155
                    yield "                    <abbr title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 155, $this->source); })()), "html", null, true);
                    yield "\">
                        ";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 156, $this->source); })()), 0, (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 156, $this->source); })())), "html", null, true);
                    yield "
                        ...
                    </abbr>
                ";
                } else {
                    // line 160
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 160, $this->source); })()), "html", null, true);
                    yield "
                ";
                }
                // line 162
                yield "            </td>
        ";
            }
            // line 164
            yield "
        ";
            // line 165
            if ((($tmp = (isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 165, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 166
                yield "            <td class=\"value tbl_creation font-monospace text-end\">
                ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["create_time"]) || array_key_exists("create_time", $context) ? $context["create_time"] : (function () { throw new RuntimeError('Variable "create_time" does not exist.', 167, $this->source); })()), "html", null, true);
                yield "
            </td>
        ";
            }
            // line 170
            yield "
        ";
            // line 171
            if ((($tmp = (isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 171, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 172
                yield "            <td class=\"value tbl_last_update font-monospace text-end\">
                ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["update_time"]) || array_key_exists("update_time", $context) ? $context["update_time"] : (function () { throw new RuntimeError('Variable "update_time" does not exist.', 173, $this->source); })()), "html", null, true);
                yield "
            </td>
        ";
            }
            // line 176
            yield "
        ";
            // line 177
            if ((($tmp = (isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 177, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "            <td class=\"value tbl_last_check font-monospace text-end\">
                ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["check_time"]) || array_key_exists("check_time", $context) ? $context["check_time"] : (function () { throw new RuntimeError('Variable "check_time" does not exist.', 179, $this->source); })()), "html", null, true);
                yield "
            </td>
        ";
            }
            // line 182
            yield "
    ";
        } elseif ((($tmp =         // line 183
(isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 183, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "        <td class=\"value tbl_rows font-monospace text-end\">-</td>
        <td class=\"text-nowrap\">
            ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View"), "html", null, true);
            yield "
        </td>
        <td class=\"text-nowrap\">---</td>
        ";
            // line 189
            if ((($tmp = (isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 190
                yield "            <td class=\"value tbl_size font-monospace text-end\">-</td>
            <td class=\"value tbl_overhead font-monospace text-end\">-</td>
        ";
            }
            // line 193
            yield "        ";
            if ((($tmp = (isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 194
                yield "            <td></td>
        ";
            }
            // line 196
            yield "        ";
            if ((($tmp = (isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 196, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 197
                yield "            <td></td>
        ";
            }
            // line 199
            yield "        ";
            if ((($tmp = (isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 199, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 200
                yield "            <td class=\"value tbl_creation font-monospace text-end\">-</td>
        ";
            }
            // line 202
            yield "        ";
            if ((($tmp = (isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 203
                yield "            <td class=\"value tbl_last_update font-monospace text-end\">-</td>
        ";
            }
            // line 205
            yield "        ";
            if ((($tmp = (isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 205, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 206
                yield "            <td class=\"value tbl_last_check font-monospace text-end\">-</td>
        ";
            }
            // line 208
            yield "
    ";
        } else {
            // line 210
            yield "
        ";
            // line 211
            if ((($tmp = (isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 211, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 212
                yield "            ";
                $context["action_colspan"] = 2;
                // line 213
                yield "        ";
            } else {
                // line 214
                yield "            ";
                $context["action_colspan"] = 4;
                // line 215
                yield "        ";
            }
            // line 216
            yield "        ";
            if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 216, $this->source); })()) > 0)) {
                // line 217
                yield "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 217, $this->source); })()) + 1);
                // line 218
                yield "        ";
            }
            // line 219
            yield "        ";
            if ((($tmp = (isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 220
                yield "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 220, $this->source); })()) + 1);
                // line 221
                yield "        ";
            }
            // line 222
            yield "        ";
            if ((($tmp = (isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 223, $this->source); })()) + 1);
                // line 224
                yield "        ";
            }
            // line 225
            yield "        ";
            if ((($tmp = (isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 226
                yield "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 226, $this->source); })()) + 1);
                // line 227
                yield "        ";
            }
            // line 228
            yield "        ";
            if ((($tmp = (isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 228, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 229
                yield "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 229, $this->source); })()) + 1);
                // line 230
                yield "        ";
            }
            // line 231
            yield "        ";
            if ((($tmp = (isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 231, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 232
                yield "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 232, $this->source); })()) + 1);
                // line 233
                yield "        ";
            }
            // line 234
            yield "
        <td colspan=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 235, $this->source); })()), "html", null, true);
            yield "\"
            class=\"text-center\">
            ";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("in use"), "html", null, true);
            yield "
        </td>
    ";
        }
        // line 240
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/structure_table_row.twig";
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
        return array (  589 => 240,  583 => 237,  578 => 235,  575 => 234,  572 => 233,  569 => 232,  566 => 231,  563 => 230,  560 => 229,  557 => 228,  554 => 227,  551 => 226,  548 => 225,  545 => 224,  542 => 223,  539 => 222,  536 => 221,  533 => 220,  530 => 219,  527 => 218,  524 => 217,  521 => 216,  518 => 215,  515 => 214,  512 => 213,  509 => 212,  507 => 211,  504 => 210,  500 => 208,  496 => 206,  493 => 205,  489 => 203,  486 => 202,  482 => 200,  479 => 199,  475 => 197,  472 => 196,  468 => 194,  465 => 193,  460 => 190,  458 => 189,  452 => 186,  448 => 184,  446 => 183,  443 => 182,  437 => 179,  434 => 178,  432 => 177,  429 => 176,  423 => 173,  420 => 172,  418 => 171,  415 => 170,  409 => 167,  406 => 166,  404 => 165,  401 => 164,  397 => 162,  391 => 160,  384 => 156,  379 => 155,  377 => 154,  374 => 153,  371 => 152,  369 => 151,  366 => 150,  362 => 148,  356 => 146,  354 => 145,  351 => 144,  349 => 143,  346 => 142,  340 => 139,  331 => 135,  327 => 134,  324 => 133,  322 => 132,  319 => 131,  316 => 130,  310 => 127,  307 => 126,  305 => 125,  302 => 124,  296 => 122,  294 => 121,  289 => 120,  287 => 119,  284 => 118,  282 => 117,  275 => 114,  269 => 112,  262 => 108,  258 => 106,  256 => 105,  255 => 104,  253 => 102,  251 => 101,  247 => 100,  244 => 99,  241 => 96,  238 => 95,  236 => 94,  234 => 93,  233 => 92,  230 => 91,  223 => 87,  220 => 86,  218 => 85,  217 => 84,  216 => 81,  211 => 80,  208 => 78,  201 => 74,  198 => 73,  196 => 72,  195 => 71,  192 => 70,  189 => 69,  182 => 66,  180 => 65,  179 => 64,  178 => 63,  175 => 62,  173 => 61,  166 => 59,  163 => 58,  161 => 57,  154 => 53,  150 => 52,  143 => 48,  139 => 47,  132 => 43,  128 => 42,  124 => 40,  120 => 38,  118 => 36,  117 => 35,  116 => 34,  115 => 33,  113 => 32,  111 => 30,  110 => 29,  109 => 27,  107 => 26,  104 => 24,  101 => 23,  98 => 21,  92 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 13,  75 => 12,  73 => 11,  68 => 10,  62 => 7,  58 => 6,  54 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr id=\"row_tbl_{{ curr }}\"{{ table_is_view ? ' class=\"is_view\"' }} data-filter-row=\"{{ current_table['TABLE_NAME']|upper }}\">
    <td class=\"text-center d-print-none\">
        <input type=\"checkbox\"
            name=\"selected_tbl[]\"
            class=\"{{ input_class }}\"
            value=\"{{ current_table['TABLE_NAME'] }}\"
            id=\"checkbox_tbl_{{ curr }}\">
    </td>
    <th>
        <a class=\"disableAjax\" href=\"{{ url('/sql', table_url_params|merge({'pos': 0})) }}\" title=\"{{ browse_table_label_title }}\">
            {{- browse_table_label_truename -}}
        </a>
        {{ tracking_icon|raw }}
    </th>
    {% if server_replica_status %}
        <td class=\"text-center\">
            {{ ignored ? get_image('s_cancel', t('Not replicated')) }}
            {{ do ? get_image('s_success', t('Replicated')) }}
        </td>
    {% endif %}

    {# Favorite table anchor #}
    {% if num_favorite_tables > 0 %}
        <td class=\"text-center d-print-none\">
            {# Check if current table is already in favorite list #}
            {% set fav_params = {
                'db': db,
                'ajax_request': true,
                'favorite_table': current_table['TABLE_NAME'],
                ((already_favorite ? 'remove' : 'add') ~ '_favorite'): true
            } %}
            {% include 'database/structure/favorite_anchor.twig' with {
                'table_name_hash': table_name_hash,
                'db_table_name_hash': db_table_name_hash,
                'fav_params': fav_params,
                'already_favorite': already_favorite,
            } only %}
        </td>
    {% endif %}

    <td class=\"text-center d-print-none\">
        <a class=\"disableAjax\" href=\"{{ url('/sql', table_url_params|merge({'pos': 0})) }}\">
          {{ may_have_rows ? get_icon('b_browse', t('Browse')) : get_icon('bd_browse', t('Browse')) }}
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a class=\"disableAjax\" href=\"{{ url('/table/structure', table_url_params) }}\">
          {{ get_icon('b_props', t('Structure')) }}
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a class=\"disableAjax\" href=\"{{ url('/table/search', table_url_params) }}\">
          {{ may_have_rows ? get_icon('b_select', t('Search')) : get_icon('bd_select', t('Search')) }}
        </a>
    </td>

    {% if not db_is_system_schema %}
        <td class=\"text-center d-print-none\">
            <a class=\"disableAjax\" href=\"{{ url('/table/change', table_url_params) }}\">{{ get_icon('b_insrow', t('Insert')) }}</a>
        </td>
        {% if table_is_view %}
            <td class=\"text-center d-print-none\">
                <a href=\"{{ url('/view/create', {
                    'db': db,
                    'table': current_table['TABLE_NAME']
                }) }}\">{{ get_icon('b_edit', t('Edit')) }}</a>
            </td>
        {% else %}
          <td class=\"text-center d-print-none\">
                <a class=\"truncate_table_anchor ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(table_url_params|merge({
                  'sql_query': empty_table_sql_query,
                  'message_to_show': t('Table %s has been emptied.')|format(current_table['TABLE_NAME']),
                }), '') }}\">
                  {{ may_have_rows ? get_icon('b_empty', t('Empty')) : get_icon('bd_empty', t('Empty')) }}
                </a>
          </td>
        {% endif %}
        <td class=\"text-center d-print-none\">
            <a class=\"ajax drop_table_anchor
                {{- table_is_view ? ' view' }}\" href=\"{{ url('/sql') }}\" data-post=\"
                {{- get_common(table_url_params|merge({
                  'reload': 1,
                  'purge': 1,
                  'sql_query': drop_query,
                  'message_to_show': drop_message
                }), '') }}\">
                {{ get_icon('b_drop', t('Drop')) }}
            </a>
        </td>
    {% endif %}

    {% if current_table['TABLE_ROWS'] is defined
        and (current_table['ENGINE'] != null or table_is_view) %}
        {# Get the row count #}
        {% set row_count = format_number(current_table['TABLE_ROWS'], 0) %}

        {# Content to be appended into 'tbl_rows' cell.
        If row count is approximate, display it as an anchor to get real count. #}
        <td class=\"value tbl_rows font-monospace text-end\"
            data-table=\"{{ current_table['TABLE_NAME'] }}\">
            {% if approx_rows %}
                <a href=\"{{ url('/database/structure/real-row-count', {
                    'ajax_request': true,
                    'db': db,
                    'table': current_table['TABLE_NAME']
                }) }}\" class=\"ajax real_row_count\">
                    <bdi>
                        ~{{ row_count }}
                    </bdi>
                </a>
            {% else %}
                {{ row_count }}
            {% endif %}
            {{ show_superscript|raw }}
        </td>

        {% if not (properties_num_columns > 1) %}
            <td class=\"text-nowrap\">
                {% if current_table['ENGINE'] is not empty %}
                    {{ current_table['ENGINE'] }}
                {% elseif table_is_view %}
                    {{ t('View') }}
                {% endif %}
            </td>
            {% if collation|length > 0 %}
                <td class=\"text-nowrap\">
                    {{ collation|raw }}
                </td>
            {% endif %}
        {% endif %}

        {% if is_show_stats %}
            <td class=\"value tbl_size font-monospace text-end\">
                <a class=\"disableAjax\" href=\"{{ url('/table/structure', table_url_params) }}#showusage\">
                    <span>{{ formatted_size }}</span>&nbsp;<span class=\"unit\">{{ unit }}</span>
                </a>
            </td>
            <td class=\"value tbl_overhead font-monospace text-end\">
                {{ overhead|raw }}
            </td>
        {% endif %}

        {% if show_charset %}
            <td class=\"text-nowrap\">
                {% if charset|length > 0 %}
                    {{ charset|raw }}
                {% endif %}
            </td>
        {% endif %}

        {% if show_comment %}
            {% set comment = current_table['Comment'] %}
            <td>
                {% if comment|length > limit_chars %}
                    <abbr title=\"{{ comment }}\">
                        {{ comment|slice(0, limit_chars) }}
                        ...
                    </abbr>
                {% else %}
                    {{ comment }}
                {% endif %}
            </td>
        {% endif %}

        {% if show_creation %}
            <td class=\"value tbl_creation font-monospace text-end\">
                {{ create_time }}
            </td>
        {% endif %}

        {% if show_last_update %}
            <td class=\"value tbl_last_update font-monospace text-end\">
                {{ update_time }}
            </td>
        {% endif %}

        {% if show_last_check %}
            <td class=\"value tbl_last_check font-monospace text-end\">
                {{ check_time }}
            </td>
        {% endif %}

    {% elseif table_is_view %}
        <td class=\"value tbl_rows font-monospace text-end\">-</td>
        <td class=\"text-nowrap\">
            {{ t('View') }}
        </td>
        <td class=\"text-nowrap\">---</td>
        {% if is_show_stats %}
            <td class=\"value tbl_size font-monospace text-end\">-</td>
            <td class=\"value tbl_overhead font-monospace text-end\">-</td>
        {% endif %}
        {% if show_charset %}
            <td></td>
        {% endif %}
        {% if show_comment %}
            <td></td>
        {% endif %}
        {% if show_creation %}
            <td class=\"value tbl_creation font-monospace text-end\">-</td>
        {% endif %}
        {% if show_last_update %}
            <td class=\"value tbl_last_update font-monospace text-end\">-</td>
        {% endif %}
        {% if show_last_check %}
            <td class=\"value tbl_last_check font-monospace text-end\">-</td>
        {% endif %}

    {% else %}

        {% if db_is_system_schema %}
            {% set action_colspan = 2 %}
        {% else %}
            {% set action_colspan = 4 %}
        {% endif %}
        {% if num_favorite_tables > 0 %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_charset %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_comment %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_creation %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_last_update %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_last_check %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}

        <td colspan=\"{{ action_colspan }}\"
            class=\"text-center\">
            {{ t('in use') }}
        </td>
    {% endif %}
</tr>
", "database/structure/structure_table_row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/structure_table_row.twig");
    }
}
