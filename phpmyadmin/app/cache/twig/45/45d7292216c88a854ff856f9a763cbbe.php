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

/* table/operations/index.twig */
class __TwigTemplate_8a706e2bb3fe63c7ef534849af6ddd62 extends Template
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
        yield "<div class=\"container my-3\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table operations"), "html", null, true);
        yield "</h2>

";
        // line 4
        if ((($tmp =  !(isset($context["hide_order_table"]) || array_key_exists("hide_order_table", $context) ? $context["hide_order_table"] : (function () { throw new RuntimeError('Variable "hide_order_table" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 6
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 6, $this->source); })()));
            yield "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Alter table order by"), "html", null, true);
            yield "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
            yield "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 17
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alter table order by a single field.", "(singly)"), "html", null, true);
            yield "
            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ascending"), "html", null, true);
            yield "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Descending"), "html", null, true);
            yield "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 44
        yield "
<form method=\"post\" action=\"";
        // line 45
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  ";
        // line 46
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 46, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 46, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move table to (database.table)"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 56
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 56, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 59
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "              </select>
            ";
        } else {
            // line 63
            yield "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
            ";
        }
        // line 65
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required name=\"new_name\" maxlength=\"64\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
        yield "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO_INCREMENT value"), "html", null, true);
        yield "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 77
        if ((($tmp = (isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
          ";
        // line 81
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 92
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 93
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 93, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 93, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_comment"]) || array_key_exists("table_comment", $context) ? $context["table_comment"] : (function () { throw new RuntimeError('Variable "table_comment" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "\">
  ";
        // line 97
        if ((($tmp = (isset($context["has_auto_increment"]) || array_key_exists("has_auto_increment", $context) ? $context["has_auto_increment"] : (function () { throw new RuntimeError('Variable "has_auto_increment" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["auto_increment"]) || array_key_exists("auto_increment", $context) ? $context["auto_increment"] : (function () { throw new RuntimeError('Variable "auto_increment" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "\">
  ";
        }
        // line 100
        yield "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table options"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename table to"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 113
        if ((($tmp = (isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 113, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
            ";
        // line 117
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table comments"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <textarea
            id=\"tableCommentsInput\"
            class=\"form-control\"
            name=\"comment\"
            maxlength=\"2048\"
            class=\"textfield\"
            rows=\"1\"
            cols=\"30\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_comment"]) || array_key_exists("table_comment", $context) ? $context["table_comment"] : (function () { throw new RuntimeError('Variable "table_comment" does not exist.', 134, $this->source); })()), "html", null, true);
        yield "</textarea>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
        yield "
            ";
        // line 142
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
        yield "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 148
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 148), "html", null, true);
            yield "\"";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 148))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 148), "html", null, true);
                yield "\"";
            }
            // line 149
            yield ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 149)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 149, $this->source); })()))) || (Twig\Extension\CoreExtension::testEmpty((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 149, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 149)))) ? (" selected") : (""));
            yield ">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 150), "html", null, true);
            // line 151
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 165
            yield "              <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 165), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 165), "html", null, true);
            yield "\">
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 166, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 166), [], "array", false, false, false, 166));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 167
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 167), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 167), "html", null, true);
                yield "\"";
                yield ((((isset($context["tbl_collation"]) || array_key_exists("tbl_collation", $context) ? $context["tbl_collation"] : (function () { throw new RuntimeError('Variable "tbl_collation" does not exist.', 167, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 167))) ? (" selected") : (""));
                yield ">
                    ";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 168), "html", null, true);
                yield "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change all column collations"), "html", null, true);
        yield "</label>
        </div>
      </div>

      ";
        // line 182
        if ((($tmp = (isset($context["has_pack_keys"]) || array_key_exists("has_pack_keys", $context) ? $context["has_pack_keys"] : (function () { throw new RuntimeError('Variable "has_pack_keys" does not exist.', 182, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 183
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 189
            yield ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 189, $this->source); })()) == "DEFAULT")) ? (" selected") : (""));
            yield ">DEFAULT</option>
              <option value=\"0\"";
            // line 190
            yield ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 190, $this->source); })()) == "0")) ? (" selected") : (""));
            yield ">0</option>
              <option value=\"1\"";
            // line 191
            yield ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 191, $this->source); })()) == "1")) ? (" selected") : (""));
            yield ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 196
        yield "
      ";
        // line 197
        if ((($tmp = (isset($context["has_checksum_and_delay_key_write"]) || array_key_exists("has_checksum_and_delay_key_write", $context) ? $context["has_checksum_and_delay_key_write"] : (function () { throw new RuntimeError('Variable "has_checksum_and_delay_key_write" does not exist.', 197, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 199
            yield ((((isset($context["checksum"]) || array_key_exists("checksum", $context) ? $context["checksum"] : (function () { throw new RuntimeError('Variable "checksum" does not exist.', 199, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 204
            yield ((((isset($context["delay_key_write"]) || array_key_exists("delay_key_write", $context) ? $context["delay_key_write"] : (function () { throw new RuntimeError('Variable "delay_key_write" does not exist.', 204, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 208
        yield "
      ";
        // line 209
        if ((($tmp = (isset($context["has_transactional_and_page_checksum"]) || array_key_exists("has_transactional_and_page_checksum", $context) ? $context["has_transactional_and_page_checksum"] : (function () { throw new RuntimeError('Variable "has_transactional_and_page_checksum" does not exist.', 209, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 210
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 211
            yield ((((isset($context["transactional"]) || array_key_exists("transactional", $context) ? $context["transactional"] : (function () { throw new RuntimeError('Variable "transactional" does not exist.', 211, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 216
            yield ((((isset($context["page_checksum"]) || array_key_exists("page_checksum", $context) ? $context["page_checksum"] : (function () { throw new RuntimeError('Variable "page_checksum" does not exist.', 216, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 220
        yield "
      ";
        // line 221
        if ((($tmp = (isset($context["has_auto_increment"]) || array_key_exists("has_auto_increment", $context) ? $context["has_auto_increment"] : (function () { throw new RuntimeError('Variable "has_auto_increment" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["auto_increment"]) || array_key_exists("auto_increment", $context) ? $context["auto_increment"] : (function () { throw new RuntimeError('Variable "auto_increment" does not exist.', 227, $this->source); })()), "html", null, true);
            yield "\">
          </div>
        </div>
      ";
        }
        // line 231
        yield "
      ";
        // line 232
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["row_formats"]) || array_key_exists("row_formats", $context) ? $context["row_formats"] : (function () { throw new RuntimeError('Variable "row_formats" does not exist.', 232, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 233
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["row_formats"]) || array_key_exists("row_formats", $context) ? $context["row_formats"] : (function () { throw new RuntimeError('Variable "row_formats" does not exist.', 239, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 240
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "\"";
                yield ((($context["row_format"] == Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["row_format_current"]) || array_key_exists("row_format_current", $context) ? $context["row_format_current"] : (function () { throw new RuntimeError('Variable "row_format_current" does not exist.', 240, $this->source); })())))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row_format'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            yield "            </select>
          </div>
        </div>
      ";
        }
        // line 246
        yield "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 254
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  ";
        // line 255
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 255, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 255, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table to (database.table)"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 264
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 264, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 265
            yield "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
                ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 266, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 267
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 267), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 267), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            yield "              </select>
            ";
        } else {
            // line 271
            yield "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 271, $this->source); })()), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
            ";
        }
        // line 273
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 274, $this->source); })()), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
        yield "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure only"), "html", null, true);
        yield "
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure and data"), "html", null, true);
        yield "
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data only"), "html", null, true);
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        yield "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO_INCREMENT value"), "html", null, true);
        yield "</label>
        </div>

        ";
        // line 311
        if ((($tmp = (isset($context["has_foreign_keys"]) || array_key_exists("has_foreign_keys", $context) ? $context["has_foreign_keys"] : (function () { throw new RuntimeError('Variable "has_foreign_keys" does not exist.', 311, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 312
            yield "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add constraints"), "html", null, true);
            yield "</label>
          </div>
        ";
        }
        // line 317
        yield "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 320
        if ((($tmp = (isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 320, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
            ";
        // line 324
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 329
        yield (((($tmp = (isset($context["switch_to_new"]) || array_key_exists("switch_to_new", $context) ? $context["switch_to_new"] : (function () { throw new RuntimeError('Variable "switch_to_new" does not exist.', 329, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Switch to copied table"), "html", null, true);
        yield "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table maintenance"), "html", null, true);
        yield "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 344
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 344, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 345
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 346
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/analyze");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 346, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 346, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 346, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analyze table"), "html", null, true);
            yield "
        </a>
        ";
            // line 349
            yield PhpMyAdmin\Html\MySQLDocumentation::show("ANALYZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 352
        yield "
    ";
        // line 353
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 353, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 354
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 355
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/check");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 355, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 355, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 355, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check table"), "html", null, true);
            yield "
        </a>
        ";
            // line 358
            yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECK_TABLE");
            yield "
      </li>
    ";
        }
        // line 361
        yield "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 363
        yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/checksum");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 363, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 363, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 363, $this->source); })())]], "", false);
        yield "\">
        ";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Checksum table"), "html", null, true);
        yield "
      </a>
      ";
        // line 366
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECKSUM_TABLE");
        yield "
    </li>

    ";
        // line 369
        if (((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 369, $this->source); })()) == "INNODB")) {
            // line 370
            yield "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 371
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 371, $this->source); })()), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 371, $this->source); })()))) . " ENGINE = InnoDB;")]), "", false);
            yield "\">
          ";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Defragment table"), "html", null, true);
            yield "
        </a>
        ";
            // line 374
            yield PhpMyAdmin\Html\MySQLDocumentation::show("InnoDB_File_Defragmenting");
            yield "
      </li>
    ";
        }
        // line 377
        yield "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 379
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 379, $this->source); })()), ["sql_query" => ("FLUSH TABLE " . PhpMyAdmin\Util::backquote(        // line 380
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 380, $this->source); })()))), "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been flushed."),         // line 381
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 381, $this->source); })())), "reload" => true]), "", false);
        // line 383
        yield "\">
        ";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Flush the table (FLUSH)"), "html", null, true);
        yield "
      </a>
      ";
        // line 386
        yield PhpMyAdmin\Html\MySQLDocumentation::show("FLUSH");
        yield "
    </li>

    ";
        // line 389
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 389, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 390
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 391
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/optimize");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 391, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 391, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 391, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Optimize table"), "html", null, true);
            yield "
        </a>
        ";
            // line 394
            yield PhpMyAdmin\Html\MySQLDocumentation::show("OPTIMIZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 397
        yield "
    ";
        // line 398
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 398, $this->source); })()), ["MYISAM", "ARIA"])) {
            // line 399
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 400
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/repair");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 400, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 400, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 400, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Repair table"), "html", null, true);
            yield "
        </a>
        ";
            // line 403
            yield PhpMyAdmin\Html\MySQLDocumentation::show("REPAIR_TABLE");
            yield "
      </li>
    ";
        }
        // line 406
        yield "  </ul>
</div>

";
        // line 409
        if ((($tmp =  !(isset($context["is_system_schema"]) || array_key_exists("is_system_schema", $context) ? $context["is_system_schema"] : (function () { throw new RuntimeError('Variable "is_system_schema" does not exist.', 409, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete data or table"), "html", null, true);
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 413
            if ((($tmp =  !(isset($context["is_view"]) || array_key_exists("is_view", $context) ? $context["is_view"] : (function () { throw new RuntimeError('Variable "is_view" does not exist.', 413, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 414
                yield "        <li class=\"list-group-item\">
          ";
                // line 415
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 417
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 417, $this->source); })()), ["sql_query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 418
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 418, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 418, $this->source); })()))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."),                 // line 421
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 421, $this->source); })()))]), \_gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 427
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 427, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 427, $this->source); })())))]);
                // line 429
                yield "
          ";
                // line 430
                yield PhpMyAdmin\Html\MySQLDocumentation::show("TRUNCATE_TABLE");
                yield "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 433
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 435
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 435, $this->source); })()), ["sql_query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 436
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 436, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 436, $this->source); })()))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."),                 // line 439
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 439, $this->source); })()))]), \_gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 445
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 445, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 445, $this->source); })())))]);
                // line 447
                yield "
          ";
                // line 448
                yield PhpMyAdmin\Html\MySQLDocumentation::show("DELETE");
                yield "
        </li>
      ";
            }
            // line 451
            yield "      <li class=\"list-group-item\">
        ";
            // line 452
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(            // line 454
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 454, $this->source); })()), ["sql_query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 455
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 455, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 455, $this->source); })()))), "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => (((($tmp =             // line 459
(isset($context["is_view"]) || array_key_exists("is_view", $context) ? $context["is_view"] : (function () { throw new RuntimeError('Variable "is_view" does not exist.', 459, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf(\_gettext("View %s has been dropped."), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 459, $this->source); })()))) : (Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been dropped."), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 459, $this->source); })())))), "table" =>             // line 460
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 460, $this->source); })())]), \_gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 466
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 466, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 466, $this->source); })())))]);
            // line 468
            yield "
        ";
            // line 469
            yield PhpMyAdmin\Html\MySQLDocumentation::show("DROP_TABLE");
            yield "
      </li>
    </ul>
  </div>
";
        }
        // line 474
        yield "
";
        // line 475
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 475, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 476
            yield "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 477
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 477, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 477, $this->source); })()));
            yield "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition maintenance"), "html", null, true);
            yield "
        ";
            // line 483
            yield PhpMyAdmin\Html\MySQLDocumentation::show("partitioning_maintenance");
            yield "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition"), "html", null, true);
            yield "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 490, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 491
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "</option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            yield "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 497
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partitions_choices"]) || array_key_exists("partitions_choices", $context) ? $context["partitions_choices"] : (function () { throw new RuntimeError('Variable "partitions_choices" does not exist.', 497, $this->source); })()));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 498
                yield "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"";
                yield ((($context["value"] == "ANALYZE")) ? (" checked") : (""));
                yield ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["description"], "html", null, true);
                yield "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            yield "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 506
            yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 506, $this->source); })()), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 507
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 507, $this->source); })()))) . " REMOVE PARTITIONING;")]));
            // line 508
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove partitioning"), "html", null, true);
            yield "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 518
        yield "
";
        // line 519
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 519, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 520
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check referential integrity"), "html", null, true);
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 523, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 524
                yield "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 525
                yield PhpMyAdmin\Url::getFromRoute("/sql", CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 525));
                yield "\">
            ";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 526), "html", null, true);
                yield " -> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 526), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 526), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 526), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['foreign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 530
            yield "    </ul>
  </div>
";
        }
        // line 533
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/operations/index.twig";
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
        return array (  1173 => 533,  1168 => 530,  1152 => 526,  1148 => 525,  1145 => 524,  1141 => 523,  1136 => 521,  1133 => 520,  1131 => 519,  1128 => 518,  1120 => 513,  1111 => 508,  1109 => 507,  1108 => 506,  1103 => 503,  1092 => 500,  1084 => 499,  1081 => 498,  1077 => 497,  1071 => 493,  1050 => 491,  1033 => 490,  1028 => 488,  1020 => 483,  1016 => 482,  1008 => 477,  1003 => 476,  1001 => 475,  998 => 474,  990 => 469,  987 => 468,  985 => 466,  984 => 460,  983 => 459,  982 => 455,  981 => 454,  980 => 452,  977 => 451,  971 => 448,  968 => 447,  966 => 445,  965 => 439,  964 => 436,  963 => 435,  962 => 433,  956 => 430,  953 => 429,  951 => 427,  950 => 421,  949 => 418,  948 => 417,  947 => 415,  944 => 414,  942 => 413,  937 => 411,  934 => 410,  932 => 409,  927 => 406,  921 => 403,  916 => 401,  910 => 400,  907 => 399,  905 => 398,  902 => 397,  896 => 394,  891 => 392,  885 => 391,  882 => 390,  880 => 389,  874 => 386,  869 => 384,  866 => 383,  864 => 381,  863 => 380,  860 => 379,  856 => 377,  850 => 374,  845 => 372,  839 => 371,  836 => 370,  834 => 369,  828 => 366,  823 => 364,  817 => 363,  813 => 361,  807 => 358,  802 => 356,  796 => 355,  793 => 354,  791 => 353,  788 => 352,  782 => 349,  777 => 347,  771 => 346,  768 => 345,  766 => 344,  761 => 342,  752 => 336,  743 => 330,  739 => 329,  731 => 324,  727 => 323,  720 => 321,  715 => 320,  711 => 317,  705 => 314,  701 => 312,  699 => 311,  693 => 308,  685 => 303,  674 => 295,  665 => 289,  656 => 283,  642 => 274,  639 => 273,  631 => 271,  627 => 269,  614 => 267,  610 => 266,  605 => 265,  603 => 264,  595 => 259,  588 => 255,  584 => 254,  576 => 249,  571 => 246,  565 => 242,  552 => 240,  548 => 239,  540 => 233,  538 => 232,  535 => 231,  528 => 227,  521 => 222,  519 => 221,  516 => 220,  509 => 216,  501 => 211,  498 => 210,  496 => 209,  493 => 208,  486 => 204,  478 => 199,  475 => 198,  473 => 197,  470 => 196,  462 => 191,  458 => 190,  454 => 189,  446 => 183,  444 => 182,  437 => 178,  430 => 173,  423 => 171,  414 => 168,  405 => 167,  401 => 166,  394 => 165,  390 => 164,  382 => 159,  374 => 153,  367 => 151,  365 => 150,  362 => 149,  353 => 148,  349 => 147,  341 => 142,  337 => 141,  327 => 134,  314 => 124,  304 => 117,  300 => 116,  293 => 114,  288 => 113,  282 => 109,  276 => 106,  269 => 102,  265 => 100,  259 => 98,  257 => 97,  253 => 96,  247 => 93,  243 => 92,  235 => 87,  226 => 81,  222 => 80,  215 => 78,  210 => 77,  204 => 73,  192 => 66,  189 => 65,  181 => 63,  177 => 61,  164 => 59,  160 => 58,  155 => 57,  153 => 56,  145 => 51,  137 => 46,  133 => 45,  130 => 44,  122 => 39,  112 => 32,  105 => 28,  95 => 21,  91 => 19,  80 => 17,  76 => 16,  71 => 14,  64 => 10,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container my-3\">
  <h2>{{ t('Table operations') }}</h2>

{% if not hide_order_table %}
  <form method=\"post\" id=\"alterTableOrderby\" action=\"{{ url('/table/operations') }}\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">{{ t('Alter table order by') }}</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">{{ t('Column') }}</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              {% for column in columns %}
                <option value=\"{{ column.field }}\">{{ column.field }}</option>
              {% endfor %}
            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              {{ t('(singly)', context = 'Alter table order by a single field.') }}
            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">{{ t('Ascending') }}</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">{{ t('Descending') }}</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
      </div>
    </div>
  </form>
{% endif %}

<form method=\"post\" action=\"{{ url('/table/operations') }}\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Move table to (database.table)') }}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            {% if database_list is not empty %}
              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"{{ t('Database') }}\">
                {% for each_db in database_list %}
                  <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
                {% endfor %}
              </select>
            {% else %}
              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"{{ db }}\" aria-label=\"{{ t('Database') }}\">
            {% endif %}
            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" aria-label=\"{{ t('Table') }}\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">{{ t('Add AUTO_INCREMENT value') }}</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"
          {%- if has_privileges %} checked{% else %} title=\"
          {{- t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.\") }}\" disabled{% endif %}>
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          {{ t('Adjust privileges') }}
          {{ show_docu('faq', 'faq6-39') }}
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"{{ url('/table/operations') }}\" id=\"tableOptionsForm\" class=\"ajax\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"{{ table_comment }}\">
  {% if has_auto_increment %}
    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"{{ auto_increment }}\">
  {% endif %}

  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Table options') }}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">{{ t('Rename table to') }}</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"
            {%- if has_privileges %} checked{% else %} title=\"
            {{- t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.\") }}\" disabled{% endif %}>
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            {{ t('Adjust privileges') }}
            {{ show_docu('faq', 'faq6-39') }}
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">{{ t('Table comments') }}</label>
        </div>
        <div class=\"col-6\">
          <textarea
            id=\"tableCommentsInput\"
            class=\"form-control\"
            name=\"comment\"
            maxlength=\"2048\"
            class=\"textfield\"
            rows=\"1\"
            cols=\"30\">{{ table_comment }}</textarea>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            {{ t('Storage engine') }}
            {{ show_mysql_docu('Storage_engines') }}
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            {% for engine in storage_engines %}
              <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                {{- engine.name|lower == storage_engine|lower or (storage_engine is empty and engine.is_default) ? ' selected' }}>
                {{- engine.name -}}
              </option>
            {% endfor %}
          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">{{ t('Collation') }}</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            {% for charset in charsets %}
              <optgroup label=\"{{ charset.getName() }}\" title=\"{{ charset.getDescription() }}\">
                {% for collation in collations[charset.getName()] %}
                  <option value=\"{{ collation.getName() }}\" title=\"{{ collation.getDescription() }}\"{{ tbl_collation == collation.getName() ? ' selected' }}>
                    {{ collation.getName() }}
                  </option>
                {% endfor %}
              </optgroup>
            {% endfor %}
          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">{{ t('Change all column collations') }}</label>
        </div>
      </div>

      {% if has_pack_keys %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"{{ pack_keys == 'DEFAULT' ? ' selected' }}>DEFAULT</option>
              <option value=\"0\"{{ pack_keys == '0' ? ' selected' }}>0</option>
              <option value=\"1\"{{ pack_keys == '1' ? ' selected' }}>1</option>
            </select>
          </div>
        </div>
      {% endif %}

      {% if has_checksum_and_delay_key_write %}
        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"{{ checksum == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"{{ delay_key_write == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      {% endif %}

      {% if has_transactional_and_page_checksum %}
        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"{{ transactional == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"{{ page_checksum == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      {% endif %}

      {% if has_auto_increment %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"{{ auto_increment }}\">
          </div>
        </div>
      {% endif %}

      {% if row_formats is not empty %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              {% for row_format in row_formats %}
                <option value=\"{{ row_format }}\"{{ row_format == row_format_current|upper ? ' selected' }}>{{ row_format }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
      {% endif %}
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"{{ url('/table/operations') }}\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Copy table to (database.table)') }}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            {% if database_list is not empty %}
              <select class=\"form-select\" name=\"target_db\" aria-label=\"{{ t('Database') }}\">
                {% for each_db in database_list %}
                  <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
                {% endfor %}
              </select>
            {% else %}
              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"{{ db }}\" aria-label=\"{{ t('Database') }}\">
            {% endif %}
            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" aria-label=\"{{ t('Table') }}\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            {{ t('Structure only') }}
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            {{ t('Structure and data') }}
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            {{ t('Data only') }}
          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">{{ t('Add %s')|format('DROP TABLE') }}</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">{{ t('Add AUTO_INCREMENT value') }}</label>
        </div>

        {% if has_foreign_keys %}
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">{{ t('Add constraints') }}</label>
          </div>
        {% endif %}

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"
            {%- if has_privileges %} checked{% else %} title=\"
          {{- t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.\") }}\" disabled{% endif %}>
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            {{ t('Adjust privileges') }}
            {{ show_docu('faq', 'faq6-39') }}
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"{{ switch_to_new ? ' checked' }}>
          <label class=\"form-check-label\" for=\"checkbox_switch\">{{ t('Switch to copied table') }}</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">{{ t('Table maintenance') }}</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/analyze') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Analyze table') }}
        </a>
        {{ show_mysql_docu('ANALYZE_TABLE') }}
      </li>
    {% endif %}

    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/check') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Check table') }}
        </a>
        {{ show_mysql_docu('CHECK_TABLE') }}
      </li>
    {% endif %}

    <li class=\"list-group-item\">
      <a href=\"{{ url('/table/maintenance/checksum') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
        {{ t('Checksum table') }}
      </a>
      {{ show_mysql_docu('CHECKSUM_TABLE') }}
    </li>

    {% if storage_engine == 'INNODB' %}
      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(url_params|merge({'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ENGINE = InnoDB;'}), '', false) }}\">
          {{ t('Defragment table') }}
        </a>
        {{ show_mysql_docu('InnoDB_File_Defragmenting') }}
      </li>
    {% endif %}

    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(url_params|merge({
        'sql_query': 'FLUSH TABLE ' ~ backquote(table),
        'message_to_show': t('Table %s has been flushed.')|format(table),
        'reload': true
      }), '', false) }}\">
        {{ t('Flush the table (FLUSH)') }}
      </a>
      {{ show_mysql_docu('FLUSH') }}
    </li>

    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/optimize') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Optimize table') }}
        </a>
        {{ show_mysql_docu('OPTIMIZE_TABLE') }}
      </li>
    {% endif %}

    {% if storage_engine in ['MYISAM', 'ARIA'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/repair') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Repair table') }}
        </a>
        {{ show_mysql_docu('REPAIR_TABLE') }}
      </li>
    {% endif %}
  </ul>
</div>

{% if not is_system_schema %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Delete data or table') }}</div>
    <ul class=\"list-group list-group-flush\">
      {% if not is_view %}
        <li class=\"list-group-item\">
          {{ link_or_button(
            url('/sql'),
            url_params|merge({
              'sql_query': 'TRUNCATE TABLE ' ~ backquote(db) ~ '.' ~ backquote(table),
              'goto': url('/table/structure'),
              'reload': true,
              'message_to_show': t('Table %s has been emptied.')|format(table)
            }),
            t('Empty the table (TRUNCATE)'),
            {
              'id': 'truncate_tbl_anchor',
              'class': 'text-danger ajax',
              'data-query': 'TRUNCATE TABLE ' ~ backquote(db) ~ '.' ~ backquote(table)
            }
          ) }}
          {{ show_mysql_docu('TRUNCATE_TABLE') }}
        </li>
        <li class=\"list-group-item\">
          {{ link_or_button(
            url('/sql'),
            url_params|merge({
              'sql_query': 'DELETE FROM ' ~ backquote(db) ~ '.' ~ backquote(table),
              'goto': url('/table/structure'),
              'reload': true,
              'message_to_show': t('Table %s has been emptied.')|format(table)
            }),
            t('Empty the table (DELETE FROM)'),
            {
              'id': 'delete_tbl_anchor',
              'class': 'text-danger ajax',
              'data-query': 'DELETE FROM ' ~ backquote(db) ~ '.' ~ backquote(table)
            }
          ) }}
          {{ show_mysql_docu('DELETE') }}
        </li>
      {% endif %}
      <li class=\"list-group-item\">
        {{ link_or_button(
          url('/sql'),
          url_params|merge({
            'sql_query': 'DROP TABLE ' ~ backquote(db) ~ '.' ~ backquote(table),
            'goto': url('/database/operations'),
            'reload': true,
            'purge': true,
            'message_to_show': is_view ? t('View %s has been dropped.')|format(table) : t('Table %s has been dropped.')|format(table),
            'table': table
          }),
          t('Delete the table (DROP)'),
          {
            'id': 'drop_tbl_anchor',
            'class': 'text-danger ajax',
            'data-query': 'DROP TABLE ' ~ backquote(db) ~ '.' ~ backquote(table)
          }
        ) }}
        {{ show_mysql_docu('DROP_TABLE') }}
      </li>
    </ul>
  </div>
{% endif %}

{% if partitions is not empty %}
  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"{{ url('/table/operations') }}\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        {{ t('Partition maintenance') }}
        {{ show_mysql_docu('partitioning_maintenance') }}
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">{{ t('Partition') }}</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            {% for partition in partitions %}
              <option value=\"{{ partition }}\"{{ loop.first ? ' selected' }}>{{ partition }}</option>
            {% endfor %}
          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          {% for value, description in partitions_choices %}
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio{{ value|capitalize }}\" value=\"{{ value }}\"{{ value == 'ANALYZE' ? ' checked' }}>
              <label class=\"form-check-label\" for=\"partitionOperationRadio{{ value|capitalize }}\">{{ description }}</label>
            </div>
          {% endfor %}
        </div>

        <div class=\"form-text\">
          <a href=\"{{ url('/sql', url_params|merge({
            'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' REMOVE PARTITIONING;'
          })) }}\">{{ t('Remove partitioning') }}</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
      </div>
    </div>
  </form>
{% endif %}

{% if foreigners is not empty %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Check referential integrity') }}</div>
    <ul class=\"list-group list-group-flush\">
      {% for foreign in foreigners %}
        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"{{ url('/sql', foreign.params) }}\">
            {{ foreign.master }} -> {{ foreign.db }}.{{ foreign.table }}.{{ foreign.field }}
          </a>
        </li>
      {% endfor %}
    </ul>
  </div>
{% endif %}

</div>
", "table/operations/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/operations/index.twig");
    }
}
