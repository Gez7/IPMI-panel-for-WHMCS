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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_54d281ac15996916fca2b26f15ce58c0 extends Template
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
        yield PhpMyAdmin\Url::getFromRoute((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()));
        yield "\" class=\"";
        // line 2
        yield ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()) == "/table/create")) ? ("create_table_form") : ("append_fields_form"));
        yield " ajax lock-page\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 3, $this->source); })()));
        yield "
    ";
        // line 5
        yield "    ";
        // line 6
        yield "    ";
        // line 7
        yield "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 8
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["primary_indexes"]) || array_key_exists("primary_indexes", $context) ? $context["primary_indexes"] : (function () { throw new RuntimeError('Variable "primary_indexes" does not exist.', 8, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primary_indexes"]) || array_key_exists("primary_indexes", $context) ? $context["primary_indexes"] : (function () { throw new RuntimeError('Variable "primary_indexes" does not exist.', 8, $this->source); })()), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 10
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["unique_indexes"]) || array_key_exists("unique_indexes", $context) ? $context["unique_indexes"] : (function () { throw new RuntimeError('Variable "unique_indexes" does not exist.', 10, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_indexes"]) || array_key_exists("unique_indexes", $context) ? $context["unique_indexes"] : (function () { throw new RuntimeError('Variable "unique_indexes" does not exist.', 10, $this->source); })()), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 12
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 12, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 12, $this->source); })()), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 14
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["fulltext_indexes"]) || array_key_exists("fulltext_indexes", $context) ? $context["fulltext_indexes"] : (function () { throw new RuntimeError('Variable "fulltext_indexes" does not exist.', 14, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fulltext_indexes"]) || array_key_exists("fulltext_indexes", $context) ? $context["fulltext_indexes"] : (function () { throw new RuntimeError('Variable "fulltext_indexes" does not exist.', 14, $this->source); })()), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 16
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["spatial_indexes"]) || array_key_exists("spatial_indexes", $context) ? $context["spatial_indexes"] : (function () { throw new RuntimeError('Variable "spatial_indexes" does not exist.', 16, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["spatial_indexes"]) || array_key_exists("spatial_indexes", $context) ? $context["spatial_indexes"] : (function () { throw new RuntimeError('Variable "spatial_indexes" does not exist.', 16, $this->source); })()), "html", null, true)) : ("[]"));
        yield "\">

    ";
        // line 18
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()) == "/table/create")) {
            // line 19
            yield "        <div id=\"table_name_col_no_outer\">
            <span>
                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table name"), "html", null, true);
            yield ":
                <input type=\"text\"
                    name=\"table\"
                    size=\"40\"
                    maxlength=\"64\"
                    value=\"";
            // line 26
            yield ((array_key_exists("table", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 26, $this->source); })()), "html", null, true)) : (""));
            yield "\"
                    class=\"textfield\" autofocus required>
            </span>
            <span>
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
            yield "
                <input type=\"number\"
                    id=\"added_fields\"
                    name=\"added_fields\"
                    size=\"2\"
                    value=\"1\"
                    min=\"1\"
                    onfocus=\"this.select()\">
                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("column(s)"), "html", null, true);
            yield "
                <input class=\"btn btn-secondary\" type=\"button\"
                    name=\"submit_num_fields\"
                    value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
            </span>
        </div>
    ";
        }
        // line 45
        yield "    ";
        if (is_iterable((isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 45, $this->source); })()))) {
            // line 46
            yield "        ";
            yield from $this->load("columns_definitions/table_fields_definitions.twig", 46)->unwrap()->yield(CoreExtension::toArray(["is_backup" =>             // line 47
(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 47, $this->source); })()), "fields_meta" =>             // line 48
(isset($context["fields_meta"]) || array_key_exists("fields_meta", $context) ? $context["fields_meta"] : (function () { throw new RuntimeError('Variable "fields_meta" does not exist.', 48, $this->source); })()), "relation_parameters" =>             // line 49
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 49, $this->source); })()), "content_cells" =>             // line 50
(isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 50, $this->source); })()), "change_column" =>             // line 51
(isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 51, $this->source); })()), "is_virtual_columns_supported" =>             // line 52
(isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 52, $this->source); })()), "server_version" =>             // line 53
(isset($context["server_version"]) || array_key_exists("server_version", $context) ? $context["server_version"] : (function () { throw new RuntimeError('Variable "server_version" does not exist.', 53, $this->source); })()), "browse_mime" =>             // line 54
(isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 54, $this->source); })()), "supports_stored_keyword" =>             // line 55
(isset($context["supports_stored_keyword"]) || array_key_exists("supports_stored_keyword", $context) ? $context["supports_stored_keyword"] : (function () { throw new RuntimeError('Variable "supports_stored_keyword" does not exist.', 55, $this->source); })()), "max_rows" =>             // line 56
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 56, $this->source); })()), "char_editing" =>             // line 57
(isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 57, $this->source); })()), "attribute_types" =>             // line 58
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 58, $this->source); })()), "privs_available" =>             // line 59
(isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 59, $this->source); })()), "max_length" =>             // line 60
(isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 60, $this->source); })()), "charsets" =>             // line 61
(isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 61, $this->source); })())]));
            // line 63
            yield "    ";
        }
        // line 64
        yield "    ";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 64, $this->source); })()) == "/table/create")) {
            // line 65
            yield "        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table comments:"), "html", null, true);
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation:"), "html", null, true);
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage Engine:"), "html", null, true);
            yield "
                    ";
            // line 74
            yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
            yield "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Connection:"), "html", null, true);
            yield "
                    ";
            // line 79
            yield PhpMyAdmin\Html\MySQLDocumentation::show("federated-create-connection");
            yield "
                </th>
            </tr>
            <tr>
                <td>
                  <textarea 
                    name=\"comment\" 
                    maxlength=\"2048\" 
                    class=\"textfield\" 
                    rows=\"1\"
                    cols=\"30\">";
            // line 89
            yield ((array_key_exists("comment", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 89, $this->source); })()), "html", null, true)) : (""));
            yield "</textarea>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 96
                yield "                      <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 96), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 96), "html", null, true);
                yield "\">
                        ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                    // line 98
                    yield "                          <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 98), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 98), "html", null, true);
                    yield "\"";
                    // line 99
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 99) == (isset($context["tbl_collation"]) || array_key_exists("tbl_collation", $context) ? $context["tbl_collation"] : (function () { throw new RuntimeError('Variable "tbl_collation" does not exist.', 99, $this->source); })()))) ? (" selected") : (""));
                    yield ">";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 100), "html", null, true);
                    // line 101
                    yield "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "                      </optgroup>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
            yield "\">
                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                // line 111
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 111), "html", null, true);
                yield "\"";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 111))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 111), "html", null, true);
                    yield "\"";
                }
                // line 112
                yield ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 112)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 112, $this->source); })()))) || (Twig\Extension\CoreExtension::testEmpty((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 112, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 112)))) ? (" selected") : (""));
                yield ">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 113), "html", null, true);
                // line 114
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 123
            yield ((array_key_exists("connection", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["connection"]) || array_key_exists("connection", $context) ? $context["connection"] : (function () { throw new RuntimeError('Variable "connection" does not exist.', 123, $this->source); })()), "html", null, true)) : (""));
            yield "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required>
                </td>
            </tr>
            ";
            // line 129
            if ((($tmp = (isset($context["have_partitioning"]) || array_key_exists("have_partitioning", $context) ? $context["have_partitioning"] : (function () { throw new RuntimeError('Variable "have_partitioning" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("PARTITION definition:"), "html", null, true);
                yield "
                        ";
                // line 133
                yield PhpMyAdmin\Html\MySQLDocumentation::show("Partitioning");
                yield "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 138
                yield from $this->load("columns_definitions/partitions.twig", 138)->unwrap()->yield(CoreExtension::toArray(["partition_details" =>                 // line 139
(isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 139, $this->source); })()), "storage_engines" =>                 // line 140
(isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 140, $this->source); })())]));
                // line 142
                yield "                    </td>
                </tr>
            ";
            }
            // line 145
            yield "        </table>
        </div>
    ";
        }
        // line 148
        yield "    <div class=\"card mt-3\">
      <div class=\"card-body\">
        ";
        // line 150
        if ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 150, $this->source); })()) == "/table/add-field") || ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 150, $this->source); })()) == "/table/structure/save"))) {
            // line 151
            yield "            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Online transaction part of the SQL DDL for InnoDB", "Online transaction"), "html", null, true);
            yield PhpMyAdmin\Html\MySQLDocumentation::show("innodb-online-ddl");
            yield "
        ";
        }
        // line 153
        yield "        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save"), "html", null, true);
        yield "\">
      </div>
    </div>
    <div id=\"properties_message\"></div>
     ";
        // line 161
        if ((($tmp = (isset($context["is_integers_length_restricted"]) || array_key_exists("is_integers_length_restricted", $context) ? $context["is_integers_length_restricted"] : (function () { throw new RuntimeError('Variable "is_integers_length_restricted" does not exist.', 161, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            ";
            // line 163
            yield PhpMyAdmin\Html\Generator::getImage("s_notice");
            yield "
            ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column"), "html", null, true);
            yield "
            ";
            // line 165
            yield PhpMyAdmin\Html\MySQLDocumentation::show("", false, "https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html");
            yield "
        </div>
     ";
        }
        // line 168
        yield "</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 186
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_definitions_form.twig";
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
        return array (  407 => 186,  398 => 179,  390 => 174,  386 => 173,  379 => 168,  373 => 165,  369 => 164,  365 => 163,  362 => 162,  360 => 161,  353 => 157,  347 => 154,  344 => 153,  337 => 151,  335 => 150,  331 => 148,  326 => 145,  321 => 142,  319 => 140,  318 => 139,  317 => 138,  309 => 133,  305 => 132,  301 => 130,  299 => 129,  290 => 123,  281 => 116,  274 => 114,  272 => 113,  269 => 112,  260 => 111,  256 => 110,  252 => 109,  246 => 105,  239 => 103,  232 => 101,  230 => 100,  227 => 99,  221 => 98,  217 => 97,  210 => 96,  206 => 95,  197 => 89,  184 => 79,  180 => 78,  173 => 74,  169 => 73,  163 => 70,  158 => 68,  153 => 65,  150 => 64,  147 => 63,  145 => 61,  144 => 60,  143 => 59,  142 => 58,  141 => 57,  140 => 56,  139 => 55,  138 => 54,  137 => 53,  136 => 52,  135 => 51,  134 => 50,  133 => 49,  132 => 48,  131 => 47,  129 => 46,  126 => 45,  119 => 41,  113 => 38,  102 => 30,  95 => 26,  87 => 21,  83 => 19,  81 => 18,  76 => 16,  72 => 14,  68 => 12,  64 => 10,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ url(action) }}\" class=\"
    {{- action == '/table/create' ? 'create_table_form' : 'append_fields_form' }} ajax lock-page\">
    {{ get_hidden_inputs(form_params) }}
    {# happens when an index has been set on a column #}
    {# and a column is added to the table creation dialog #}
    {# This contains a JSON-encoded string #}
    <input type=\"hidden\" name=\"primary_indexes\" value=\"
        {{- primary_indexes is not empty ? primary_indexes : '[]' }}\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"
        {{- unique_indexes is not empty ? unique_indexes : '[]' }}\">
    <input type=\"hidden\" name=\"indexes\" value=\"
        {{- indexes is not empty ? indexes : '[]' }}\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"
        {{- fulltext_indexes is not empty ? fulltext_indexes : '[]' }}\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"
        {{- spatial_indexes is not empty ? spatial_indexes : '[]' }}\">

    {% if action == '/table/create' %}
        <div id=\"table_name_col_no_outer\">
            <span>
                {{ t('Table name') }}:
                <input type=\"text\"
                    name=\"table\"
                    size=\"40\"
                    maxlength=\"64\"
                    value=\"{{ table is defined ? table }}\"
                    class=\"textfield\" autofocus required>
            </span>
            <span>
                {{ t('Add') }}
                <input type=\"number\"
                    id=\"added_fields\"
                    name=\"added_fields\"
                    size=\"2\"
                    value=\"1\"
                    min=\"1\"
                    onfocus=\"this.select()\">
                {{ t('column(s)') }}
                <input class=\"btn btn-secondary\" type=\"button\"
                    name=\"submit_num_fields\"
                    value=\"{{ t('Go') }}\">
            </span>
        </div>
    {% endif %}
    {% if content_cells is iterable %}
        {% include 'columns_definitions/table_fields_definitions.twig' with {
            'is_backup': is_backup,
            'fields_meta': fields_meta,
            'relation_parameters': relation_parameters,
            'content_cells': content_cells,
            'change_column': change_column,
            'is_virtual_columns_supported': is_virtual_columns_supported,
            'server_version': server_version,
            'browse_mime': browse_mime,
            'supports_stored_keyword': supports_stored_keyword,
            'max_rows': max_rows,
            'char_editing': char_editing,
            'attribute_types': attribute_types,
            'privs_available': privs_available,
            'max_length': max_length,
            'charsets': charsets
        } only %}
    {% endif %}
    {% if action == '/table/create' %}
        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>{{ t('Table comments:') }}</th>
                <td width=\"25\">&nbsp;</td>
                <th>{{ t('Collation:') }}</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    {{ t('Storage Engine:') }}
                    {{ show_mysql_docu('Storage_engines') }}
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    {{ t('Connection:') }}
                    {{ show_mysql_docu('federated-create-connection') }}
                </th>
            </tr>
            <tr>
                <td>
                  <textarea 
                    name=\"comment\" 
                    maxlength=\"2048\" 
                    class=\"textfield\" 
                    rows=\"1\"
                    cols=\"30\">{{ comment is defined ? comment }}</textarea>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    {% for charset in charsets %}
                      <optgroup label=\"{{ charset.name }}\" title=\"{{ charset.description }}\">
                        {% for collation in charset.collations %}
                          <option value=\"{{ collation.name }}\" title=\"{{ collation.description }}\"
                            {{- collation.name == tbl_collation ? ' selected' }}>
                            {{- collation.name -}}
                          </option>
                        {% endfor %}
                      </optgroup>
                    {% endfor %}
                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"{{ t('Storage engine') }}\">
                    {% for engine in storage_engines %}
                      <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                        {{- engine.name|lower == tbl_storage_engine|lower or (tbl_storage_engine is empty and engine.is_default) ? ' selected' }}>
                        {{- engine.name -}}
                      </option>
                    {% endfor %}
                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"{{ connection is defined ? connection }}\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required>
                </td>
            </tr>
            {% if have_partitioning %}
                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        {{ t('PARTITION definition:') }}
                        {{ show_mysql_docu('Partitioning') }}
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        {% include 'columns_definitions/partitions.twig' with {
                          'partition_details': partition_details,
                          'storage_engines': storage_engines
                        } only %}
                    </td>
                </tr>
            {% endif %}
        </table>
        </div>
    {% endif %}
    <div class=\"card mt-3\">
      <div class=\"card-body\">
        {% if action == '/table/add-field' or action == '/table/structure/save' %}
            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />{{ t('Online transaction', context = 'Online transaction part of the SQL DDL for InnoDB') }}{{ show_mysql_docu('innodb-online-ddl') }}
        {% endif %}
        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"{{ t('Preview SQL') }}\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"{{ t('Save') }}\">
      </div>
    </div>
    <div id=\"properties_message\"></div>
     {% if is_integers_length_restricted %}
        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            {{ get_image('s_notice') }}
            {{ t('The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column') }}
            {{ show_mysql_docu('', false, 'https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html') }}
        </div>
     {% endif %}
</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">{{ t('Loading') }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
      </div>
    </div>
  </div>
</div>

{# Used by add new column of type ENUM/SET #}
{{ include('modals/enum_set_editor.twig') }}
", "columns_definitions/column_definitions_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_definitions_form.twig");
    }
}
