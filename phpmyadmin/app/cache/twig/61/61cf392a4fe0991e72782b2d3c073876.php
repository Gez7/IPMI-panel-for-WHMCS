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

/* table/insert/column_row.twig */
class __TwigTemplate_f7df95f9e834e66f5fd2cdd848f79060 extends Template
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
        yield "<tr class=\"noclick\">
  <td class=\"text-center\">
    ";
        // line 3
        yield (isset($context["field_title"]) || array_key_exists("field_title", $context) ? $context["field_title"] : (function () { throw new RuntimeError('Variable "field_title" does not exist.', 3, $this->source); })());
        yield "
    <input type=\"hidden\" name=\"fields_name[multi_edit][";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "][";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "md5", [], "any", false, false, false, 4), "html", null, true);
        yield "]\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "field", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
  </td>

  ";
        // line 7
        if ((($tmp = (isset($context["show_field_types_in_data_edit_view"]) || array_key_exists("show_field_types_in_data_edit_view", $context) ? $context["show_field_types_in_data_edit_view"] : (function () { throw new RuntimeError('Variable "show_field_types_in_data_edit_view" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <td class=\"text-center";
            yield ((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 8, $this->source); })()), "trueType", [], "any", false, false, false, 8), ["set", "enum"])) ? (" text-nowrap") : (""));
            yield "\">
      <span class=\"column_type\" dir=\"ltr\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayType"]) || array_key_exists("displayType", $context) ? $context["displayType"] : (function () { throw new RuntimeError('Variable "displayType" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "</span>
    </td>
  ";
        }
        // line 12
        yield "
  ";
        // line 13
        if ((($tmp = (isset($context["show_function_fields"]) || array_key_exists("show_function_fields", $context) ? $context["show_function_fields"] : (function () { throw new RuntimeError('Variable "show_function_fields" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "    ";
            if ((($tmp = (isset($context["is_column_binary"]) || array_key_exists("is_column_binary", $context) ? $context["is_column_binary"] : (function () { throw new RuntimeError('Variable "is_column_binary" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "      <td class=\"text-center\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Binary"), "html", null, true);
                yield "</td>
    ";
            } elseif ((CoreExtension::inFilter("enum", CoreExtension::getAttribute($this->env, $this->source,             // line 16
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 16, $this->source); })()), "trueType", [], "any", false, false, false, 16)) || CoreExtension::inFilter("set", CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 16, $this->source); })()), "trueType", [], "any", false, false, false, 16)))) {
                // line 17
                yield "      <td class=\"text-center\">--</td>
    ";
            } else {
                // line 19
                yield "      <td>
        <select name=\"funcs[multi_edit][";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "md5", [], "any", false, false, false, 20), "html", null, true);
                yield "]\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "md5", [], "any", false, false, false, 20), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 20, $this->source); })()), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "trueType", [], "any", false, false, false, 20), "html", null, true);
                yield "')\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "_1\">
          ";
                // line 21
                yield (isset($context["function_options"]) || array_key_exists("function_options", $context) ? $context["function_options"] : (function () { throw new RuntimeError('Variable "function_options" does not exist.', 21, $this->source); })());
                yield "
        </select>
      </td>
    ";
            }
            // line 25
            yield "  ";
        }
        // line 26
        yield "
  <td>
    ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })()), "isNull", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "      <input type=\"hidden\" name=\"fields_null_prev[multi_edit][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "md5", [], "any", false, false, false, 29), "html", null, true);
            yield "]\"";
            yield ((((isset($context["real_null_value"]) || array_key_exists("real_null_value", $context) ? $context["real_null_value"] : (function () { throw new RuntimeError('Variable "real_null_value" does not exist.', 29, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "firstTimestamp", [], "any", false, false, false, 29))) ? (" value=\"on\"") : (""));
            yield ">
      <input type=\"checkbox\" class=\"checkbox_null\" name=\"fields_null[multi_edit][";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 30, $this->source); })()), "md5", [], "any", false, false, false, 30), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "_2\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use the NULL value for this column."), "html", null, true);
            yield "\"";
            yield (((($tmp = (isset($context["real_null_value"]) || array_key_exists("real_null_value", $context) ? $context["real_null_value"] : (function () { throw new RuntimeError('Variable "real_null_value" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
      <input type=\"hidden\" class=\"nullify_code\" name=\"nullify_code[multi_edit][";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })()), "md5", [], "any", false, false, false, 31), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nullify_code"]) || array_key_exists("nullify_code", $context) ? $context["nullify_code"] : (function () { throw new RuntimeError('Variable "nullify_code" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "\">
      <input type=\"hidden\" class=\"hashed_field\" name=\"hashed_field[multi_edit][";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()), "md5", [], "any", false, false, false, 32), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()), "md5", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
      <input type=\"hidden\" class=\"multi_edit\" name=\"multi_edit[multi_edit][";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 33, $this->source); })()), "md5", [], "any", false, false, false, 33), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("[multi_edit][" . (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 33, $this->source); })())) . "]"), "html", null, true);
            yield "\">
    ";
        }
        // line 35
        yield "  </td>

  <td data-type=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["decimals"]) || array_key_exists("decimals", $context) ? $context["decimals"] : (function () { throw new RuntimeError('Variable "decimals" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 39
        yield "    <span class=\"default_value hide\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</span>

    ";
        // line 41
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["transformed_value"]) || array_key_exists("transformed_value", $context) ? $context["transformed_value"] : (function () { throw new RuntimeError('Variable "transformed_value" does not exist.', 41, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "      ";
            yield (isset($context["transformed_value"]) || array_key_exists("transformed_value", $context) ? $context["transformed_value"] : (function () { throw new RuntimeError('Variable "transformed_value" does not exist.', 42, $this->source); })());
            yield "
    ";
        } else {
            // line 44
            yield "      ";
            if ((($tmp = (isset($context["is_value_foreign_link"]) || array_key_exists("is_value_foreign_link", $context) ? $context["is_value_foreign_link"] : (function () { throw new RuntimeError('Variable "is_value_foreign_link" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "        ";
                yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 45, $this->source); })());
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 46, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 46, $this->source); })()), "md5", [], "any", false, false, false, 46), "html", null, true);
                yield "]\" value=\"foreign\">
        <input type=\"text\" name=\"fields[multi_edit][";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "md5", [], "any", false, false, false, 47), "html", null, true);
                yield "]\" class=\"textfield\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "md5", [], "any", false, false, false, 47), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 47, $this->source); })()), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "trueType", [], "any", false, false, false, 47), "html", null, true);
                yield "')\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "_3\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "\">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 48
                yield PhpMyAdmin\Url::getFromRoute("/browse-foreigners");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 48, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()), "field" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 48, $this->source); })()), "field", [], "any", false, false, false, 48), "rownumber" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 48, $this->source); })()), "data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })())]);
                yield "\">";
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Browse foreign values"));
                yield "</a>
      ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(            // line 49
(isset($context["foreign_dropdown"]) || array_key_exists("foreign_dropdown", $context) ? $context["foreign_dropdown"] : (function () { throw new RuntimeError('Variable "foreign_dropdown" does not exist.', 49, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        ";
                yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 50, $this->source); })());
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 51, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 51, $this->source); })()), "md5", [], "any", false, false, false, 51), "html", null, true);
                yield "]\" value=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 51, $this->source); })()), "isBinary", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hex") : ("foreign"));
                yield "\">
        <select name=\"fields[multi_edit][";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "md5", [], "any", false, false, false, 52), "html", null, true);
                yield "]\" class=\"textfield\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "_3\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "md5", [], "any", false, false, false, 52), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 52, $this->source); })()), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "trueType", [], "any", false, false, false, 52), "html", null, true);
                yield "')\">
          ";
                // line 53
                yield (isset($context["foreign_dropdown"]) || array_key_exists("foreign_dropdown", $context) ? $context["foreign_dropdown"] : (function () { throw new RuntimeError('Variable "foreign_dropdown" does not exist.', 53, $this->source); })());
                yield "
        </select>
      ";
            } elseif ((((            // line 55
(isset($context["longtext_double_textarea"]) || array_key_exists("longtext_double_textarea", $context) ? $context["longtext_double_textarea"] : (function () { throw new RuntimeError('Variable "longtext_double_textarea" does not exist.', 55, $this->source); })()) && CoreExtension::inFilter("longtext", CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 55, $this->source); })()), "trueType", [], "any", false, false, false, 55))) || CoreExtension::inFilter("json", CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 55, $this->source); })()), "trueType", [], "any", false, false, false, 55))) || CoreExtension::inFilter("text", CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 55, $this->source); })()), "trueType", [], "any", false, false, false, 55)))) {
                // line 56
                yield "        ";
                yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 56, $this->source); })());
                yield "
        <textarea name=\"fields[multi_edit][";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 57, $this->source); })()), "md5", [], "any", false, false, false, 57), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "_3\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_type"]) || array_key_exists("data_type", $context) ? $context["data_type"] : (function () { throw new RuntimeError('Variable "data_type" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "\" dir=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 57, $this->source); })()), "text_dir", [], "any", false, false, false, 57), "html", null, true);
                yield "\" rows=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "\" cols=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_cols"]) || array_key_exists("textarea_cols", $context) ? $context["textarea_cols"] : (function () { throw new RuntimeError('Variable "textarea_cols" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "\"";
                // line 58
                yield (((($tmp = (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-maxlength=\"" . (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 58, $this->source); })())) . "\""), "html", null, true)) : (""));
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "isChar", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"charField\"") : (""));
                yield " onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "md5", [], "any", false, false, false, 58), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 58, $this->source); })()), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "trueType", [], "any", false, false, false, 58), "html", null, true);
                yield "')\">";
                // line 60
                yield (((is_string($_v0 = (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 60, $this->source); })())) && is_string($_v1 = "
") && str_starts_with($_v0, $_v1))) ? ("
") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 60, $this->source); })()), "html", null, true);
                // line 61
                yield "</textarea>
        ";
                // line 62
                if ((CoreExtension::inFilter("text", CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 62, $this->source); })()), "trueType", [], "any", false, false, false, 62)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 62, $this->source); })())) > 32000))) {
                    // line 63
                    yield "          </td>
          <td>
          ";
                    // line 65
                    yield \_gettext("Because of its length,<br> this column might not be editable.");
                    yield "
        ";
                }
                // line 67
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 67, $this->source); })()), "trueType", [], "any", false, false, false, 67) == "enum")) {
                // line 68
                yield "        ";
                yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 68, $this->source); })());
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 69, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 69, $this->source); })()), "md5", [], "any", false, false, false, 69), "html", null, true);
                yield "]\" value=\"enum\">
        ";
                // line 70
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70)) > 20)) {
                    // line 71
                    yield "          <select name=\"fields[multi_edit][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 71, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 71, $this->source); })()), "md5", [], "any", false, false, false, 71), "html", null, true);
                    yield "]\" class=\"textfield\" tabindex=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 71, $this->source); })()), "html", null, true);
                    yield "\" id=\"field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 71, $this->source); })()), "html", null, true);
                    yield "_3\" onchange=\"return verificationsAfterFieldChange('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 71, $this->source); })()), "md5", [], "any", false, false, false, 71), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 71, $this->source); })()), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 71, $this->source); })()), "trueType", [], "any", false, false, false, 71), "html", null, true);
                    yield "')\">
            <option value=\"\"></option>
            ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enum_values"]) || array_key_exists("enum_values", $context) ? $context["enum_values"] : (function () { throw new RuntimeError('Variable "enum_values" does not exist.', 73, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 74
                        yield "              <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "\"";
                        yield ((($context["enum_value"] == (isset($context["enum_selected_value"]) || array_key_exists("enum_selected_value", $context) ? $context["enum_selected_value"] : (function () { throw new RuntimeError('Variable "enum_selected_value" does not exist.', 74, $this->source); })()))) ? (" selected") : (""));
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['enum_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    yield "          </select>
        ";
                } else {
                    // line 78
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enum_values"]) || array_key_exists("enum_values", $context) ? $context["enum_values"] : (function () { throw new RuntimeError('Variable "enum_values" does not exist.', 78, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 79
                        yield "            <input type=\"radio\" name=\"fields[multi_edit][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 79, $this->source); })()), "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 79, $this->source); })()), "md5", [], "any", false, false, false, 79), "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "\" class=\"textfield\" tabindex=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 79, $this->source); })()), "html", null, true);
                        yield "\" id=\"field_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 79, $this->source); })()), "html", null, true);
                        yield "_3_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), "html", null, true);
                        yield "\" onchange=\"return verificationsAfterFieldChange('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 79, $this->source); })()), "md5", [], "any", false, false, false, 79), "js"), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 79, $this->source); })()), "js"), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 79, $this->source); })()), "trueType", [], "any", false, false, false, 79), "html", null, true);
                        yield "')\"";
                        yield ((($context["enum_value"] == (isset($context["enum_selected_value"]) || array_key_exists("enum_selected_value", $context) ? $context["enum_selected_value"] : (function () { throw new RuntimeError('Variable "enum_selected_value" does not exist.', 79, $this->source); })()))) ? (" checked") : (""));
                        yield ">
            <label for=\"field_";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 80, $this->source); })()), "html", null, true);
                        yield "_3_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "</label>
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
                    unset($context['_seq'], $context['_key'], $context['enum_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    yield "        ";
                }
                // line 83
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 83, $this->source); })()), "trueType", [], "any", false, false, false, 83) == "set")) {
                // line 84
                yield "        ";
                yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 84, $this->source); })());
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 85, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 85, $this->source); })()), "md5", [], "any", false, false, false, 85), "html", null, true);
                yield "]\" value=\"set\">
        <select name=\"fields[multi_edit][";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 86, $this->source); })()), "md5", [], "any", false, false, false, 86), "html", null, true);
                yield "][]\" class=\"textfield\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "\" size=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["set_select_size"]) || array_key_exists("set_select_size", $context) ? $context["set_select_size"] : (function () { throw new RuntimeError('Variable "set_select_size" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "_3\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 86, $this->source); })()), "md5", [], "any", false, false, false, 86), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 86, $this->source); })()), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 86, $this->source); })()), "trueType", [], "any", false, false, false, 86), "html", null, true);
                yield "')\" multiple>
          ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["set_values"]) || array_key_exists("set_values", $context) ? $context["set_values"] : (function () { throw new RuntimeError('Variable "set_values" does not exist.', 87, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["set_value"]) {
                    // line 88
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["set_value"], "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::inFilter($context["set_value"], Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), ","))) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["set_value"], "html", null, true);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['set_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                yield "        </select>
      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 91, $this->source); })()), "isBinary", [], "any", false, false, false, 91) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 91, $this->source); })()), "isBlob", [], "any", false, false, false, 91))) {
                // line 92
                yield "        ";
                if ((($tmp = (isset($context["is_column_protected_blob"]) || array_key_exists("is_column_protected_blob", $context) ? $context["is_column_protected_blob"] : (function () { throw new RuntimeError('Variable "is_column_protected_blob" does not exist.', 92, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Binary - do not edit"), "html", null, true);
                    yield "
          (";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blob_value"]) || array_key_exists("blob_value", $context) ? $context["blob_value"] : (function () { throw new RuntimeError('Variable "blob_value" does not exist.', 94, $this->source); })()), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blob_value_unit"]) || array_key_exists("blob_value_unit", $context) ? $context["blob_value_unit"] : (function () { throw new RuntimeError('Variable "blob_value_unit" does not exist.', 94, $this->source); })()), "html", null, true);
                    yield ")
          <input type=\"hidden\" name=\"fields[multi_edit][";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 95, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 95, $this->source); })()), "md5", [], "any", false, false, false, 95), "html", null, true);
                    yield "]\" value=\"\">
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 96, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 96, $this->source); })()), "md5", [], "any", false, false, false, 96), "html", null, true);
                    yield "]\" value=\"protected\">
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 97
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 97, $this->source); })()), "isBlob", [], "any", false, false, false, 97) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 97, $this->source); })()), "length", [], "any", false, false, false, 97) > (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 97, $this->source); })())))) {
                    // line 98
                    yield "          ";
                    yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 98, $this->source); })());
                    yield "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 99, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 99, $this->source); })()), "md5", [], "any", false, false, false, 99), "html", null, true);
                    yield "]\" value=\"hex\">
          <textarea name=\"fields[multi_edit][";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 100, $this->source); })()), "md5", [], "any", false, false, false, 100), "html", null, true);
                    yield "]\" id=\"field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "_3\" data-type=\"HEX\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 100, $this->source); })()), "text_dir", [], "any", false, false, false, 100), "html", null, true);
                    yield "\" rows=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "\" cols=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textarea_cols"]) || array_key_exists("textarea_cols", $context) ? $context["textarea_cols"] : (function () { throw new RuntimeError('Variable "textarea_cols" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "\" tabindex=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 100, $this->source); })()), "html", null, true);
                    yield "\"";
                    // line 101
                    yield (((($tmp = (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-maxlength=\"" . (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 101, $this->source); })())) . "\""), "html", null, true)) : (""));
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()), "isChar", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"charField\"") : (""));
                    yield " onchange=\"return verificationsAfterFieldChange('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()), "md5", [], "any", false, false, false, 101), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 101, $this->source); })()), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()), "trueType", [], "any", false, false, false, 101), "html", null, true);
                    yield "')\">";
                    // line 103
                    yield (((is_string($_v2 = (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 103, $this->source); })())) && is_string($_v3 = "
") && str_starts_with($_v2, $_v3))) ? ("
") : (""));
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 103, $this->source); })()), "html", null, true);
                    // line 104
                    yield "</textarea>
        ";
                } else {
                    // line 106
                    yield "          ";
                    yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 106, $this->source); })());
                    yield "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 107, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 107, $this->source); })()), "md5", [], "any", false, false, false, 107), "html", null, true);
                    yield "]\" value=\"hex\">
          <input type=\"text\" name=\"fields[multi_edit][";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 108, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 108, $this->source); })()), "md5", [], "any", false, false, false, 108), "html", null, true);
                    yield "]\"
            value=\"";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 109, $this->source); })()), "html", null, true);
                    yield "\" size=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hex_input_size"]) || array_key_exists("hex_input_size", $context) ? $context["hex_input_size"] : (function () { throw new RuntimeError('Variable "hex_input_size" does not exist.', 109, $this->source); })()), "html", null, true);
                    yield "\" data-type=\"HEX\" class=\"textfield\"
            onchange=\"return verificationsAfterFieldChange('";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 110, $this->source); })()), "md5", [], "any", false, false, false, 110), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 110, $this->source); })()), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 110, $this->source); })()), "trueType", [], "any", false, false, false, 110), "html", null, true);
                    yield "')\"
            id=\"field_";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 111, $this->source); })()), "html", null, true);
                    yield "_3\">
        ";
                }
                // line 113
                yield "        ";
                if (((isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 113, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 113, $this->source); })()), "isBlob", [], "any", false, false, false, 113))) {
                    // line 114
                    yield "          <br>
          ";
                    // line 116
                    yield "          <input type=\"file\" name=\"fields_upload[multi_edit][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 116, $this->source); })()), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 116, $this->source); })()), "md5", [], "any", false, false, false, 116), "html", null, true);
                    yield "]\" class=\"textfield noDragDrop\" id=\"field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 116, $this->source); })()), "html", null, true);
                    yield "_3\" size=\"10\" onchange=\"return verificationsAfterFieldChange('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 116, $this->source); })()), "md5", [], "any", false, false, false, 116), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 116, $this->source); })()), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 116, $this->source); })()), "trueType", [], "any", false, false, false, 116), "html", null, true);
                    yield "')\">
          ";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_upload_size"]) || array_key_exists("max_upload_size", $context) ? $context["max_upload_size"] : (function () { throw new RuntimeError('Variable "max_upload_size" does not exist.', 117, $this->source); })()), "html", null, true);
                    yield "
        ";
                }
                // line 119
                yield "        ";
                yield (isset($context["select_option_for_upload"]) || array_key_exists("select_option_for_upload", $context) ? $context["select_option_for_upload"] : (function () { throw new RuntimeError('Variable "select_option_for_upload" does not exist.', 119, $this->source); })());
                yield "
      ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 120
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 120, $this->source); })()), "trueType", [], "any", false, false, false, 120), (isset($context["gis_data_types"]) || array_key_exists("gis_data_types", $context) ? $context["gis_data_types"] : (function () { throw new RuntimeError('Variable "gis_data_types" does not exist.', 120, $this->source); })()))) {
                // line 121
                yield "        ";
                yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 121, $this->source); })());
                yield "
        <button type=\"button\" class=\"btn btn-link open_gis_editor\" data-bs-toggle=\"modal\" data-bs-target=\"#gisEditorModal\" data-row-id=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 122, $this->source); })()), "html", null, true);
                yield "\">
          ";
                // line 123
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit/Insert"));
                yield "
        </button>
      ";
            } else {
                // line 126
                yield "        ";
                yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 126, $this->source); })());
                yield "
      ";
            }
            // line 128
            yield "    ";
        }
        // line 129
        yield "  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/column_row.twig";
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
        return array (  663 => 129,  660 => 128,  654 => 126,  648 => 123,  644 => 122,  639 => 121,  637 => 120,  632 => 119,  627 => 117,  612 => 116,  609 => 114,  606 => 113,  601 => 111,  593 => 110,  587 => 109,  581 => 108,  575 => 107,  570 => 106,  566 => 104,  561 => 103,  551 => 101,  536 => 100,  530 => 99,  525 => 98,  523 => 97,  517 => 96,  511 => 95,  505 => 94,  500 => 93,  497 => 92,  495 => 91,  492 => 90,  479 => 88,  475 => 87,  457 => 86,  451 => 85,  446 => 84,  443 => 83,  440 => 82,  420 => 80,  397 => 79,  379 => 78,  375 => 76,  362 => 74,  358 => 73,  340 => 71,  338 => 70,  332 => 69,  327 => 68,  324 => 67,  319 => 65,  315 => 63,  313 => 62,  310 => 61,  305 => 60,  295 => 58,  278 => 57,  273 => 56,  271 => 55,  266 => 53,  250 => 52,  242 => 51,  237 => 50,  235 => 49,  227 => 48,  209 => 47,  203 => 46,  198 => 45,  195 => 44,  189 => 42,  187 => 41,  181 => 39,  175 => 37,  171 => 35,  162 => 33,  154 => 32,  146 => 31,  134 => 30,  125 => 29,  123 => 28,  119 => 26,  116 => 25,  109 => 21,  95 => 20,  92 => 19,  88 => 17,  86 => 16,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  67 => 9,  62 => 8,  60 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr class=\"noclick\">
  <td class=\"text-center\">
    {{ field_title|raw }}
    <input type=\"hidden\" name=\"fields_name[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ column.field }}\">
  </td>

  {% if show_field_types_in_data_edit_view %}
    <td class=\"text-center{{ column.trueType not in ['set', 'enum'] ? ' text-nowrap' }}\">
      <span class=\"column_type\" dir=\"ltr\">{{ displayType }}</span>
    </td>
  {% endif %}

  {% if show_function_fields %}
    {% if is_column_binary %}
      <td class=\"text-center\">{{ t('Binary') }}</td>
    {% elseif 'enum' in column.trueType or 'set' in column.trueType %}
      <td class=\"text-center\">--</td>
    {% else %}
      <td>
        <select name=\"funcs[multi_edit][{{ row_id }}][{{ column.md5 }}]\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\" id=\"field_{{ id_index }}_1\">
          {{ function_options|raw }}
        </select>
      </td>
    {% endif %}
  {% endif %}

  <td>
    {% if column.isNull %}
      <input type=\"hidden\" name=\"fields_null_prev[multi_edit][{{ row_id }}][{{ column.md5 }}]\"{{ real_null_value and not column.firstTimestamp ? ' value=\"on\"' }}>
      <input type=\"checkbox\" class=\"checkbox_null\" name=\"fields_null[multi_edit][{{ row_id }}][{{ column.md5 }}]\" id=\"field_{{ id_index }}_2\" aria-label=\"{{ t('Use the NULL value for this column.') }}\"{{ real_null_value ? ' checked' }}>
      <input type=\"hidden\" class=\"nullify_code\" name=\"nullify_code[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ nullify_code }}\">
      <input type=\"hidden\" class=\"hashed_field\" name=\"hashed_field[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ column.md5 }}\">
      <input type=\"hidden\" class=\"multi_edit\" name=\"multi_edit[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ ('[multi_edit][' ~ row_id ~ ']') }}\">
    {% endif %}
  </td>

  <td data-type=\"{{ type }}\" data-decimals=\"{{ decimals }}\">
    {# Will be used by table/change.js to set the default value for the \"Continue insertion\" feature. #}
    <span class=\"default_value hide\">{{ special_chars }}</span>

    {% if transformed_value is not empty %}
      {{ transformed_value|raw }}
    {% else %}
      {% if is_value_foreign_link %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"foreign\">
        <input type=\"text\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield\" tabindex=\"{{ id_index }}\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\" id=\"field_{{ id_index }}_3\" value=\"{{ data }}\">
        <a class=\"ajax browse_foreign\" href=\"{{ url('/browse-foreigners') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'field': column.field, 'rownumber': row_id, 'data': data}) }}\">{{ get_icon('b_browse', t('Browse foreign values')) }}</a>
      {% elseif foreign_dropdown is not empty %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ column.isBinary ? 'hex' : 'foreign' }}\">
        <select name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield\" tabindex=\"{{ id_index }}\" id=\"field_{{ id_index }}_3\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\">
          {{ foreign_dropdown|raw }}
        </select>
      {% elseif (longtext_double_textarea and 'longtext' in column.trueType) or 'json' in column.trueType or 'text' in column.trueType %}
        {{ backup_field|raw }}
        <textarea name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" id=\"field_{{ id_index }}_3\" data-type=\"{{ data_type }}\" dir=\"{{ pma.text_dir }}\" rows=\"{{ textarea_rows }}\" cols=\"{{ textarea_cols }}\" tabindex=\"{{ id_index }}\"
          {{- max_length ? ' data-maxlength=\"' ~ max_length ~ '\"' }}{{ column.isChar ? ' class=\"charField\"' }} onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\">
          {#- We need to duplicate the first \\n or otherwise we will lose the first newline entered in a VARCHAR or TEXT column -#}
          {{- special_chars starts with \"\\r\\n\" ? \"\\n\" }}{{ special_chars -}}
        </textarea>
        {% if 'text' in column.trueType and special_chars|length > 32000 %}
          </td>
          <td>
          {{ t('Because of its length,<br> this column might not be editable.')|raw }}
        {% endif %}
      {% elseif column.trueType == 'enum' %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"enum\">
        {% if column.type|length > 20 %}
          <select name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield\" tabindex=\"{{ id_index }}\" id=\"field_{{ id_index }}_3\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\">
            <option value=\"\"></option>
            {% for enum_value in enum_values %}
              <option value=\"{{ enum_value }}\"{{ enum_value == enum_selected_value ? ' selected' }}>{{ enum_value }}</option>
            {% endfor %}
          </select>
        {% else %}
          {% for enum_value in enum_values %}
            <input type=\"radio\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ enum_value }}\" class=\"textfield\" tabindex=\"{{ id_index }}\" id=\"field_{{ id_index }}_3_{{ loop.index0 }}\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\"{{ enum_value == enum_selected_value ? ' checked' }}>
            <label for=\"field_{{ id_index }}_3_{{ loop.index0 }}\">{{ enum_value }}</label>
          {% endfor %}
        {% endif %}
      {% elseif column.trueType == 'set' %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"set\">
        <select name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}][]\" class=\"textfield\" tabindex=\"{{ id_index }}\" size=\"{{ set_select_size }}\" id=\"field_{{ id_index }}_3\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\" multiple>
          {% for set_value in set_values %}
            <option value=\"{{ set_value }}\"{{ set_value in data|split(',') ? ' selected' }}>{{ set_value }}</option>
          {% endfor %}
        </select>
      {% elseif column.isBinary or column.isBlob %}
        {% if is_column_protected_blob %}
          {{ t('Binary - do not edit') }}
          ({{ blob_value }} {{ blob_value_unit }})
          <input type=\"hidden\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"\">
          <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"protected\">
        {% elseif column.isBlob or (column.length > limit_chars) %}
          {{ backup_field|raw }}
          <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"hex\">
          <textarea name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" id=\"field_{{ id_index }}_3\" data-type=\"HEX\" dir=\"{{ pma.text_dir }}\" rows=\"{{ textarea_rows }}\" cols=\"{{ textarea_cols }}\" tabindex=\"{{ id_index }}\"
            {{- max_length ? ' data-maxlength=\"' ~ max_length ~ '\"' }}{{ column.isChar ? ' class=\"charField\"' }} onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\">
            {#- We need to duplicate the first \\n or otherwise we will lose the first newline entered in a VARCHAR or TEXT column -#}
            {{- special_chars starts with \"\\r\\n\" ? \"\\n\" }}{{ special_chars -}}
          </textarea>
        {% else %}
          {{ backup_field|raw }}
          <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"hex\">
          <input type=\"text\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\"
            value=\"{{ special_chars }}\" size=\"{{ hex_input_size }}\" data-type=\"HEX\" class=\"textfield\"
            onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\"
            id=\"field_{{ id_index }}_3\">
        {% endif %}
        {% if is_upload and column.isBlob %}
          <br>
          {# We don't want to prevent users from using browser's default drag-drop feature on some page(s), so we add noDragDrop class to the input #}
          <input type=\"file\" name=\"fields_upload[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield noDragDrop\" id=\"field_{{ id_index }}_3\" size=\"10\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.trueType }}')\">
          {{ max_upload_size }}
        {% endif %}
        {{ select_option_for_upload|raw }}
      {% elseif column.trueType in gis_data_types %}
        {{ value|raw }}
        <button type=\"button\" class=\"btn btn-link open_gis_editor\" data-bs-toggle=\"modal\" data-bs-target=\"#gisEditorModal\" data-row-id=\"{{ row_id }}\">
          {{ get_icon('b_edit', t('Edit/Insert')) }}
        </button>
      {% else %}
        {{ value|raw }}
      {% endif %}
    {% endif %}
  </td>
</tr>
", "table/insert/column_row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/column_row.twig");
    }
}
