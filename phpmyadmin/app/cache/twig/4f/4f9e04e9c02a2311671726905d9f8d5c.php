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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_86dc10425a5c6833bf1baeb952968fdc extends Template
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
        // line 2
        $context["ci"] = 0;
        // line 3
        yield "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        yield "
<td class=\"text-center\">
    ";
        // line 10
        yield "    ";
        yield from $this->load("columns_definitions/column_name.twig", 10)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 11
(isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 11, $this->source); })()), "ci" =>         // line 12
(isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 12, $this->source); })()), "ci_offset" =>         // line 13
(isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 13, $this->source); })()), "column_meta" =>         // line 14
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 14, $this->source); })()), "has_central_columns_feature" =>  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 15, $this->source); })()), "centralColumnsFeature", [], "any", false, false, false, 15)), "max_rows" =>         // line 16
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 16, $this->source); })())]));
        // line 18
        yield "    ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 18, $this->source); })()) + 1);
        // line 19
        yield "</td>
<td class=\"text-center\">
  <select class=\"column_type form-select\" name=\"field_type[";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 21, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "\"";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 22) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 22, $this->source); })()), "column_status", [], "array", false, false, false, 22), "isEditable", [], "array", false, false, false, 22))) ? (" disabled") : (""));
        yield ">
    ";
        // line 23
        yield PhpMyAdmin\Html\Generator::getSupportedDatatypes((isset($context["type_upper"]) || array_key_exists("type_upper", $context) ? $context["type_upper"] : (function () { throw new RuntimeError('Variable "type_upper" does not exist.', 23, $this->source); })()));
        yield "
  </select>
  ";
        // line 25
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 25, $this->source); })()) + 1);
        // line 26
        yield "</td>
<td class=\"text-center\">
  <input id=\"field_";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 28, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "\" type=\"text\" name=\"field_length[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "]\" size=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length_values_input_size"]) || array_key_exists("length_values_input_size", $context) ? $context["length_values_input_size"] : (function () { throw new RuntimeError('Variable "length_values_input_size" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" class=\"textfield form-control\">
  <p class=\"enum_notice\" id=\"enum_notice_";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 30, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 30, $this->source); })())), "html", null, true);
        yield "\">
    <a href=\"#\" class=\"open_enum_editor\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
        yield "</a>
  </p>
  ";
        // line 33
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 33, $this->source); })()) + 1);
        // line 34
        yield "</td>
<td class=\"text-center\">
  <select name=\"field_default_type[";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 36, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 36, $this->source); })())), "html", null, true);
        yield "\" class=\"default_type form-select\">
    <option value=\"NONE\"";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 37) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 37, $this->source); })()), "DefaultType", [], "array", false, false, false, 37) == "NONE"))) ? (" selected") : (""));
        yield ">
      ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
        yield "
    </option>
    <option value=\"USER_DEFINED\"";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 40, $this->source); })()), "DefaultType", [], "array", false, false, false, 40) == "USER_DEFINED"))) ? (" selected") : (""));
        yield ">
      ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
        yield "
    </option>
    <option value=\"NULL\"";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 43) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 43, $this->source); })()), "DefaultType", [], "array", false, false, false, 43) == "NULL"))) ? (" selected") : (""));
        yield ">
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 46) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 46, $this->source); })()), "DefaultType", [], "array", false, false, false, 46) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        yield ">
      CURRENT_TIMESTAMP
    </option>
    ";
        // line 49
        if ((($tmp = PhpMyAdmin\Util::isUUIDSupported()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "    <option value=\"UUID\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 50) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 50, $this->source); })()), "DefaultType", [], "array", false, false, false, 50) == "UUID"))) ? (" selected") : (""));
            yield ">
      UUID
    </option>
    ";
        }
        // line 54
        yield "  </select>
  ";
        // line 55
        if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 55, $this->source); })()) == "textarea")) {
            // line 56
            yield "    <textarea name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "]\" cols=\"15\" class=\"textfield default_value form-control\" style=\"resize: both;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["default_value"]) || array_key_exists("default_value", $context) ? $context["default_value"] : (function () { throw new RuntimeError('Variable "default_value" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "</textarea>
  ";
        } else {
            // line 58
            yield "    <input type=\"text\" name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "]\" size=\"12\" value=\"";
            yield (((array_key_exists("default_value", $context) &&  !(null === $context["default_value"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["default_value"], "html", null, true)) : (""));
            yield "\" class=\"textfield default_value form-control\">
  ";
        }
        // line 60
        yield "  ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 60, $this->source); })()) + 1);
        // line 61
        yield "</td>
<td class=\"text-center\">
  ";
        // line 64
        yield "  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 64, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 64, $this->source); })())), "html", null, true);
        yield "\" class=\"form-select collation-select\"";
        // line 65
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Collation", [], "array", true, true, false, 65)) ? ((("data-selected=\"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 65, $this->source); })()), "Collation", [], "array", false, false, false, 65)) . "\"")) : (""));
        yield "></select>
  ";
        // line 66
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 66, $this->source); })()) + 1);
        // line 67
        yield "</td>
<td class=\"text-center\">
    ";
        // line 70
        yield "    ";
        yield from $this->load("columns_definitions/column_attribute.twig", 70)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 71
(isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 71, $this->source); })()), "ci" =>         // line 72
(isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 72, $this->source); })()), "ci_offset" =>         // line 73
(isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 73, $this->source); })()), "column_meta" =>         // line 74
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 74, $this->source); })()), "extracted_columnspec" =>         // line 75
(isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 75, $this->source); })()), "submit_attribute" =>         // line 76
(isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 76, $this->source); })()), "attribute_types" =>         // line 77
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 77, $this->source); })())]));
        // line 79
        yield "    ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 79, $this->source); })()) + 1);
        // line 80
        yield "</td>
<td class=\"text-center\">
    <input name=\"field_null[";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 82, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 82, $this->source); })())), "html", null, true);
        yield "\" type=\"checkbox\" value=\"YES\" class=\"allow_null form-check-input\"";
        // line 83
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Null", [], "array", true, true, false, 83) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 83, $this->source); })()), "Null", [], "array", false, false, false, 83))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 83, $this->source); })()), "Null", [], "array", false, false, false, 83) != "NO")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 83, $this->source); })()), "Null", [], "array", false, false, false, 83) != "NOT NULL"))) ? (" checked") : (""));
        yield ">
    ";
        // line 84
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 84, $this->source); })()) + 1);
        // line 85
        yield "</td>
";
        // line 86
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 86, $this->source); })())))) {
            // line 87
            yield "    ";
            // line 88
            yield "    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 89, $this->source); })()), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 89, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 89, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 89, $this->source); })())), "html", null, true);
            yield "\" type=\"checkbox\" value=\"NULL\" class=\"allow_null form-check-input\"";
            // line 90
            if ((($tmp = (isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked>";
            } else {
                // line 91
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details"), "html", null, true);
                yield "\" disabled>";
            }
            // line 93
            yield "      ";
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 93, $this->source); })()) + 1);
            // line 94
            yield "    </td>
";
        }
        // line 96
        if ((($tmp =  !(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "    ";
            // line 98
            yield "    <td class=\"text-center\">
      <select name=\"field_key[";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 99, $this->source); })()), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 99, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 99, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 99, $this->source); })())), "html", null, true);
            yield "\" class=\"form-select\" data-index=\"\">
        <option value=\"none_";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "\">---</option>
        <option value=\"primary_";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary"), "html", null, true);
            yield "\"";
            // line 102
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 102) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 102, $this->source); })()), "Key", [], "array", false, false, false, 102) == "PRI"))) ? (" selected") : (""));
            yield ">
          PRIMARY
        </option>
        <option value=\"unique_";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 105, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
            yield "\"";
            // line 106
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 106) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 106, $this->source); })()), "Key", [], "array", false, false, false, 106) == "UNI"))) ? (" selected") : (""));
            yield ">
          UNIQUE
        </option>
        <option value=\"index_";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 109, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index"), "html", null, true);
            yield "\"";
            // line 110
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 110) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 110, $this->source); })()), "Key", [], "array", false, false, false, 110) == "MUL"))) ? (" selected") : (""));
            yield ">
          INDEX
        </option>
        <option value=\"fulltext_";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Fulltext"), "html", null, true);
            yield "\"";
            // line 114
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 114) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 114, $this->source); })()), "Key", [], "array", false, false, false, 114) == "FULLTEXT"))) ? (" selected") : (""));
            yield ">
          FULLTEXT
        </option>
        <option value=\"spatial_";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 117, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Spatial"), "html", null, true);
            yield "\"";
            // line 118
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 118) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 118, $this->source); })()), "Key", [], "array", false, false, false, 118) == "SPATIAL"))) ? (" selected") : (""));
            yield ">
          SPATIAL
        </option>
      </select>
      ";
            // line 122
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 122, $this->source); })()) + 1);
            // line 123
            yield "    </td>
";
        }
        // line 125
        yield "<td class=\"text-center\">
  <input name=\"field_extra[";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 126, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 126, $this->source); })())), "html", null, true);
        yield "\" type=\"checkbox\" value=\"AUTO_INCREMENT\" class=\"form-check-input\"";
        // line 127
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 127) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 127, $this->source); })()), "Extra", [], "array", false, false, false, 127)) == "auto_increment"))) ? (" checked") : (""));
        yield ">
  ";
        // line 128
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 128, $this->source); })()) + 1);
        // line 129
        yield "</td>
<td class=\"text-center\">
  <textarea id=\"field_";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 131, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 131, $this->source); })())), "html", null, true);
        yield "\" rows=\"1\" name=\"field_comments[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "]\" maxlength=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" style=\"resize: both;\">";
        // line 132
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 132) && is_iterable((isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 132, $this->source); })()))) && CoreExtension::getAttribute($this->env, $this->source, ($context["comments_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 132, $this->source); })()), "Field", [], "array", false, false, false, 132), [], "array", true, true, false, 132))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 132, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 132, $this->source); })()), "Field", [], "array", false, false, false, 132), [], "array", false, false, false, 132), "html", null, true)) : (""));
        // line 133
        yield "</textarea>
  ";
        // line 134
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 134, $this->source); })()) + 1);
        // line 135
        yield "</td>
 ";
        // line 137
        if ((($tmp = (isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 137, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "    <td class=\"text-center\">
      <select name=\"field_virtuality[";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 139, $this->source); })()), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 139, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 139, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 139, $this->source); })())), "html", null, true);
            yield "\" class=\"virtuality form-select\">
        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 141
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 141)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 141, $this->source); })()), "Extra", [], "array", false, false, false, 141)) : (null));
                // line 142
                yield "          ";
                // line 143
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Virtuality", [], "array", true, true, false, 143)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 143, $this->source); })()), "Virtuality", [], "array", false, false, false, 143)) : ((isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 143, $this->source); })())));
                // line 144
                yield "
          <option value=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield (((( !(null === (isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 145, $this->source); })())) && ($context["key"] != "")) && (Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 145, $this->source); })()), 0, Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["key"])) === $context["key"]))) ? (" selected") : (""));
                yield ">
            ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "      </select>

      ";
            // line 151
            if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 151, $this->source); })()) == "textarea")) {
                // line 152
                yield "        <textarea name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 152, $this->source); })()), "html", null, true);
                yield "]\" cols=\"15\" class=\"textfield expression form-control\" style=\"resize: both;\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 152)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 152, $this->source); })()), "Expression", [], "array", false, false, false, 152), "html", null, true)) : (""));
                yield "</textarea>
      ";
            } else {
                // line 154
                yield "        <input type=\"text\" name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 154, $this->source); })()), "html", null, true);
                yield "]\" size=\"12\" value=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 154)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 154, $this->source); })()), "Expression", [], "array", false, false, false, 154), "html", null, true)) : (""));
                yield "\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression"), "html", null, true);
                yield "\" class=\"textfield expression form-control\">
      ";
            }
            // line 156
            yield "      ";
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 156, $this->source); })()) + 1);
            // line 157
            yield "    </td>
";
        }
        // line 160
        if (array_key_exists("fields_meta", $context)) {
            // line 161
            yield "    ";
            $context["current_index"] = 0;
            // line 162
            yield "    ";
            $context["break"] = false;
            // line 163
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["move_columns"]) || array_key_exists("move_columns", $context) ? $context["move_columns"] : (function () { throw new RuntimeError('Variable "move_columns" does not exist.', 163, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 164
                yield "      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 164) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 164, $this->source); })()), "Field", [], "array", false, false, false, 164)) &&  !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 164, $this->source); })()))) {
                    // line 165
                    yield "        ";
                    $context["current_index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 165);
                    // line 166
                    yield "        ";
                    $context["break"] = true;
                    // line 167
                    yield "      ";
                }
                // line 168
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "
    <td class=\"text-center\">
      <select id=\"field_";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 171, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 171, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 171, $this->source); })())), "html", null, true);
            yield "\" name=\"field_move_to[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 171, $this->source); })()), "html", null, true);
            yield "]\" size=\"1\" class=\"form-select\">
        <option value=\"\" selected>&nbsp;</option>
        <option value=\"-first\"";
            // line 173
            yield ((((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 173, $this->source); })()) == 0)) ? (" disabled") : (""));
            yield ">
          ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("first"), "html", null, true);
            yield "
        </option>
        ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["move_columns"]) || array_key_exists("move_columns", $context) ? $context["move_columns"] : (function () { throw new RuntimeError('Variable "move_columns" does not exist.', 176, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 177
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 177), "html", null, true);
                yield "\"";
                // line 178
                yield (((((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 178, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 178)) || ((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 178, $this->source); })()) == (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 178) + 1)))) ? (" disabled") : (""));
                yield ">
            ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("after %s"), PhpMyAdmin\Util::backquote($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 179)))), "html", null, true);
                yield "
          </option>
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
            unset($context['_seq'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "      </select>
      ";
            // line 183
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 183, $this->source); })()) + 1);
            // line 184
            yield "    </td>
";
        }
        // line 186
        yield "
";
        // line 187
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 187, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 187)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 187, $this->source); })()), "columnCommentsFeature", [], "any", false, false, false, 187))) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 187, $this->source); })()))) {
            // line 188
            yield "    <td class=\"text-center\">
      <select id=\"field_";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 189, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 189, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 189, $this->source); })())), "html", null, true);
            yield "\" size=\"1\" name=\"field_mimetype[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 189, $this->source); })()), "html", null, true);
            yield "]\" class=\"form-select\">
        <option value=\"\">&nbsp;</option>
        ";
            // line 191
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "mimetype", [], "array", true, true, false, 191) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 191, $this->source); })()), "mimetype", [], "array", false, false, false, 191)))) {
                // line 192
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 192, $this->source); })()), "mimetype", [], "array", false, false, false, 192));
                foreach ($context['_seq'] as $context["_key"] => $context["media_type"]) {
                    // line 193
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"]), "html", null, true);
                    yield "\"";
                    // line 194
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 194) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 194, $this->source); })()), "Field", [], "array", false, false, false, 194), [], "array", false, true, false, 194), "mimetype", [], "array", true, true, false, 194)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 195
(isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 195, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 195, $this->source); })()), "Field", [], "array", false, false, false, 195), [], "array", false, false, false, 195), "mimetype", [], "array", false, false, false, 195) == Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"])))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["media_type"]), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['media_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                yield "        ";
            }
            // line 200
            yield "      </select>
      ";
            // line 201
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 201, $this->source); })()) + 1);
            // line 202
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 204, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 204, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 204, $this->source); })())), "html", null, true);
            yield "\" size=\"1\" name=\"field_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 204, $this->source); })()), "html", null, true);
            yield "]\" class=\"form-select\">
        <option value=\"\" title=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "\"></option>
        ";
            // line 206
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "transformation", [], "array", true, true, false, 206) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 206, $this->source); })()), "transformation", [], "array", false, false, false, 206)))) {
                // line 207
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 207, $this->source); })()), "transformation", [], "array", false, false, false, 207));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 208
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 209
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 209, $this->source); })()), "transformation_file", [], "array", false, false, false, 209), $context["mimekey"], [], "array", false, false, false, 209), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Transformations')->getDescription(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 209, $this->source); })()), "transformation_file", [], "array", false, false, false, 209), $context["mimekey"], [], "array", false, false, false, 209)), "html", null, true);
                    yield "\"";
                    // line 210
                    yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 210) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 211
($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 211, $this->source); })()), "Field", [], "array", false, false, false, 211), [], "array", false, true, false, 211), "transformation", [], "array", true, true, false, 211)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 212
(isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 212, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 212, $this->source); })()), "Field", [], "array", false, false, false, 212), [], "array", false, false, false, 212), "transformation", [], "array", false, false, false, 212))) && CoreExtension::matches((("@" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 213
(isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 213, $this->source); })()), "transformation_file_quoted", [], "array", false, false, false, 213), $context["mimekey"], [], "array", false, false, false, 213)) . "3?@i"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 213, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 213, $this->source); })()), "Field", [], "array", false, false, false, 213), [], "array", false, false, false, 213), "transformation", [], "array", false, false, false, 213)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getRuntime('PhpMyAdmin\Transformations')->getName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 214, $this->source); })()), "transformation_file", [], "array", false, false, false, 214), $context["mimekey"], [], "array", false, false, false, 214)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 214, $this->source); })()), 0, [], "array", false, false, false, 214))) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 214, $this->source); })()), 1, [], "array", false, false, false, 214)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                yield "        ";
            }
            // line 218
            yield "      </select>
      ";
            // line 219
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 219, $this->source); })()) + 1);
            // line 220
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 222, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 222, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 222, $this->source); })())), "html", null, true);
            yield "\" type=\"text\" name=\"field_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 222, $this->source); })()), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield form-control\" value=\"";
            // line 223
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 223) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 223, $this->source); })()), "Field", [], "array", false, false, false, 223), [], "array", false, true, false, 223), "transformation_options", [], "array", true, true, false, 223))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 223, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 223, $this->source); })()), "Field", [], "array", false, false, false, 223), [], "array", false, false, false, 223), "transformation_options", [], "array", false, false, false, 223), "html", null, true)) : (""));
            yield "\">
      ";
            // line 224
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 224, $this->source); })()) + 1);
            // line 225
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 227, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 227, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 227, $this->source); })())), "html", null, true);
            yield "\" size=\"1\" name=\"field_input_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 227, $this->source); })()), "html", null, true);
            yield "]\" class=\"form-select\">
        <option value=\"\" title=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "\"></option>
        ";
            // line 229
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "input_transformation", [], "array", true, true, false, 229) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 229, $this->source); })()), "input_transformation", [], "array", false, false, false, 229)))) {
                // line 230
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 230, $this->source); })()), "input_transformation", [], "array", false, false, false, 230));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 231
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 232
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 232, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 232), $context["mimekey"], [], "array", false, false, false, 232), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Transformations')->getDescription(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 232, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 232), $context["mimekey"], [], "array", false, false, false, 232)), "html", null, true);
                    yield "\"";
                    // line 233
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 233) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 233, $this->source); })()), "Field", [], "array", false, false, false, 233), [], "array", false, true, false, 233), "input_transformation", [], "array", true, true, false, 233)) && CoreExtension::matches((("@" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 234
(isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 234, $this->source); })()), "input_transformation_file_quoted", [], "array", false, false, false, 234), $context["mimekey"], [], "array", false, false, false, 234)) . "3?@i"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 234, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 234, $this->source); })()), "Field", [], "array", false, false, false, 234), [], "array", false, false, false, 234), "input_transformation", [], "array", false, false, false, 234)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getRuntime('PhpMyAdmin\Transformations')->getName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 235, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 235), $context["mimekey"], [], "array", false, false, false, 235)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 235, $this->source); })()), 0, [], "array", false, false, false, 235))) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 235, $this->source); })()), 1, [], "array", false, false, false, 235)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                yield "        ";
            }
            // line 239
            yield "      </select>
      ";
            // line 240
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 240, $this->source); })()) + 1);
            // line 241
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 243, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 243, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 243, $this->source); })())), "html", null, true);
            yield "\" type=\"text\" name=\"field_input_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 243, $this->source); })()), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield form-control\" value=\"";
            // line 244
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 244) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 244, $this->source); })()), "Field", [], "array", false, false, false, 244), [], "array", false, true, false, 244), "input_transformation_options", [], "array", true, true, false, 244))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 244, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 244, $this->source); })()), "Field", [], "array", false, false, false, 244), [], "array", false, false, false, 244), "input_transformation_options", [], "array", false, false, false, 244), "html", null, true)) : (""));
            yield "\">
      ";
            // line 245
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 245, $this->source); })()) + 1);
            // line 246
            yield "    </td>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_attributes.twig";
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
        return array (  791 => 246,  789 => 245,  785 => 244,  778 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  757 => 235,  753 => 234,  752 => 233,  746 => 232,  743 => 231,  738 => 230,  736 => 229,  732 => 228,  724 => 227,  720 => 225,  718 => 224,  714 => 223,  707 => 222,  703 => 220,  701 => 219,  698 => 218,  695 => 217,  686 => 214,  682 => 213,  681 => 212,  680 => 211,  679 => 210,  673 => 209,  670 => 208,  665 => 207,  663 => 206,  659 => 205,  651 => 204,  647 => 202,  645 => 201,  642 => 200,  639 => 199,  630 => 196,  626 => 195,  625 => 194,  621 => 193,  616 => 192,  614 => 191,  605 => 189,  602 => 188,  600 => 187,  597 => 186,  593 => 184,  591 => 183,  588 => 182,  571 => 179,  567 => 178,  563 => 177,  546 => 176,  541 => 174,  537 => 173,  528 => 171,  524 => 169,  510 => 168,  507 => 167,  504 => 166,  501 => 165,  498 => 164,  480 => 163,  477 => 162,  474 => 161,  472 => 160,  468 => 157,  465 => 156,  455 => 154,  447 => 152,  445 => 151,  441 => 149,  432 => 146,  426 => 145,  423 => 144,  420 => 143,  418 => 142,  415 => 141,  411 => 140,  403 => 139,  400 => 138,  398 => 137,  395 => 135,  393 => 134,  390 => 133,  388 => 132,  379 => 131,  375 => 129,  373 => 128,  369 => 127,  362 => 126,  359 => 125,  355 => 123,  353 => 122,  346 => 118,  341 => 117,  335 => 114,  330 => 113,  324 => 110,  319 => 109,  313 => 106,  308 => 105,  302 => 102,  297 => 101,  293 => 100,  285 => 99,  282 => 98,  280 => 97,  278 => 96,  274 => 94,  271 => 93,  266 => 91,  262 => 90,  255 => 89,  252 => 88,  250 => 87,  248 => 86,  245 => 85,  243 => 84,  239 => 83,  232 => 82,  228 => 80,  225 => 79,  223 => 77,  222 => 76,  221 => 75,  220 => 74,  219 => 73,  218 => 72,  217 => 71,  215 => 70,  211 => 67,  209 => 66,  205 => 65,  197 => 64,  193 => 61,  190 => 60,  182 => 58,  174 => 56,  172 => 55,  169 => 54,  161 => 50,  159 => 49,  153 => 46,  147 => 43,  142 => 41,  138 => 40,  133 => 38,  129 => 37,  121 => 36,  117 => 34,  115 => 33,  110 => 31,  104 => 30,  98 => 29,  91 => 28,  87 => 26,  85 => 25,  80 => 23,  76 => 22,  69 => 21,  65 => 19,  62 => 18,  60 => 16,  59 => 15,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  53 => 10,  49 => 7,  47 => 6,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Cell index: If certain fields get left out, the counter shouldn't change. #}
{% set ci = 0 %}

{# Every time a cell shall be left out the STRG-jumping feature, \$ci_offset has
   to be incremented (\$ci_offset++) #}
{% set ci_offset = -1 %}

<td class=\"text-center\">
    {# column name #}
    {% include 'columns_definitions/column_name.twig' with {
        'column_number': column_number,
        'ci': ci,
        'ci_offset': ci_offset,
        'column_meta': column_meta,
        'has_central_columns_feature': relation_parameters.centralColumnsFeature is not null,
        'max_rows': max_rows
    } only %}
    {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <select class=\"column_type form-select\" name=\"field_type[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\"
    {{- column_meta['column_status'] is defined and not column_meta['column_status']['isEditable'] ? ' disabled' }}>
    {{ get_supported_datatypes(type_upper) }}
  </select>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_length[{{ column_number }}]\" size=\"
    {{- length_values_input_size }}\" value=\"{{ length }}\" class=\"textfield form-control\">
  <p class=\"enum_notice\" id=\"enum_notice_{{ column_number }}_{{ ci - ci_offset }}\">
    <a href=\"#\" class=\"open_enum_editor\">{{ t('Edit ENUM/SET values') }}</a>
  </p>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <select name=\"field_default_type[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"default_type form-select\">
    <option value=\"NONE\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'NONE' ? ' selected' }}>
      {{ t('None', context = 'for default') }}
    </option>
    <option value=\"USER_DEFINED\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'USER_DEFINED' ? ' selected' }}>
      {{ t('As defined:') }}
    </option>
    <option value=\"NULL\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'NULL' ? ' selected' }}>
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'CURRENT_TIMESTAMP' ? ' selected' }}>
      CURRENT_TIMESTAMP
    </option>
    {% if is_uuid_supported() %}
    <option value=\"UUID\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'UUID' ? ' selected' }}>
      UUID
    </option>
    {% endif %}
  </select>
  {% if char_editing == 'textarea' %}
    <textarea name=\"field_default_value[{{ column_number }}]\" cols=\"15\" class=\"textfield default_value form-control\" style=\"resize: both;\">{{ default_value }}</textarea>
  {% else %}
    <input type=\"text\" name=\"field_default_value[{{ column_number }}]\" size=\"12\" value=\"{{ default_value ?? '' }}\" class=\"textfield default_value form-control\">
  {% endif %}
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  {# column collation #}
  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"form-select collation-select\"
  {{- column_meta['Collation'] is defined ? ('data-selected=\"' ~ column_meta['Collation'] ~ '\"')|raw : '' }}></select>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
    {# column attribute #}
    {% include 'columns_definitions/column_attribute.twig' with {
        'column_number': column_number,
        'ci': ci,
        'ci_offset': ci_offset,
        'column_meta': column_meta,
        'extracted_columnspec': extracted_columnspec,
        'submit_attribute': submit_attribute,
        'attribute_types': attribute_types
    } only %}
    {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
    <input name=\"field_null[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"YES\" class=\"allow_null form-check-input\"
      {{- column_meta['Null'] is defined and column_meta['Null'] is not empty and column_meta['Null'] != 'NO' and column_meta['Null'] != 'NOT NULL' ? ' checked' }}>
    {% set ci = ci + 1 %}
</td>
{% if change_column is defined and change_column is not empty %}
    {# column Adjust privileges, Only for 'Edit' Column(s) #}
    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"NULL\" class=\"allow_null form-check-input\"
        {%- if privs_available %} checked>
        {%- else %} title=\"{{ t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details\") }}\" disabled>
        {%- endif %}
      {% set ci = ci + 1 %}
    </td>
{% endif %}
{% if not is_backup %}
    {# column indexes, See my other comment about  this 'if'. #}
    <td class=\"text-center\">
      <select name=\"field_key[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"form-select\" data-index=\"\">
        <option value=\"none_{{ column_number }}\">---</option>
        <option value=\"primary_{{ column_number }}\" title=\"{{ t('Primary') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'PRI' ? ' selected' }}>
          PRIMARY
        </option>
        <option value=\"unique_{{ column_number }}\" title=\"{{ t('Unique') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'UNI' ? ' selected' }}>
          UNIQUE
        </option>
        <option value=\"index_{{ column_number }}\" title=\"{{ t('Index') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'MUL' ? ' selected' }}>
          INDEX
        </option>
        <option value=\"fulltext_{{ column_number }}\" title=\"{{ t('Fulltext') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'FULLTEXT' ? ' selected' }}>
          FULLTEXT
        </option>
        <option value=\"spatial_{{ column_number }}\" title=\"{{ t('Spatial') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'SPATIAL' ? ' selected' }}>
          SPATIAL
        </option>
      </select>
      {% set ci = ci + 1 %}
    </td>
{% endif %}
<td class=\"text-center\">
  <input name=\"field_extra[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"AUTO_INCREMENT\" class=\"form-check-input\"
    {{- column_meta['Extra'] is defined and column_meta['Extra']|lower == 'auto_increment' ? ' checked' }}>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <textarea id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" rows=\"1\" name=\"field_comments[{{ column_number }}]\" maxlength=\"{{ max_length }}\" class=\"form-control\" style=\"resize: both;\">
    {{- column_meta['Field'] is defined and comments_map is iterable and comments_map[column_meta['Field']] is defined ? comments_map[column_meta['Field']] -}}
  </textarea>
  {% set ci = ci + 1 %}
</td>
 {# column virtuality #}
{% if is_virtual_columns_supported %}
    <td class=\"text-center\">
      <select name=\"field_virtuality[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"virtuality form-select\">
        {% for key, value in options %}
          {% set virtuality = column_meta['Extra'] is defined ? column_meta['Extra'] : null %}
          {# Creating a new row on create table sends a Virtuality field #}
          {% set virtuality = column_meta['Virtuality'] is defined ? column_meta['Virtuality'] : virtuality %}

          <option value=\"{{ key }}\"{{ virtuality is not null and key != '' and virtuality|slice(0, key|length) is same as (key) ? ' selected' }}>
            {{ value }}
          </option>
        {% endfor %}
      </select>

      {% if char_editing == 'textarea' %}
        <textarea name=\"field_expression[{{ column_number }}]\" cols=\"15\" class=\"textfield expression form-control\" style=\"resize: both;\">{{ column_meta['Expression'] is defined ? column_meta['Expression'] }}</textarea>
      {% else %}
        <input type=\"text\" name=\"field_expression[{{ column_number }}]\" size=\"12\" value=\"{{ column_meta['Expression'] is defined ? column_meta['Expression'] }}\" placeholder=\"{{ t('Expression') }}\" class=\"textfield expression form-control\">
      {% endif %}
      {% set ci = ci + 1 %}
    </td>
{% endif %}
{# move column #}
{% if fields_meta is defined %}
    {% set current_index = 0 %}
    {% set break = false %}
    {% for move_column in move_columns %}
      {% if move_column.name == column_meta['Field'] and not break %}
        {% set current_index = loop.index0 %}
        {% set break = true %}
      {% endif %}
    {% endfor %}

    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" name=\"field_move_to[{{ column_number }}]\" size=\"1\" class=\"form-select\">
        <option value=\"\" selected>&nbsp;</option>
        <option value=\"-first\"{{ current_index == 0 ? ' disabled' }}>
          {{ t('first') }}
        </option>
        {% for move_column in move_columns %}
          <option value=\"{{ move_column.name }}\"
            {{- current_index == loop.index0 or current_index == loop.index0 + 1 ? ' disabled' }}>
            {{ t('after %s')|format(backquote(move_column.name|e)) }}
          </option>
        {% endfor %}
      </select>
      {% set ci = ci + 1 %}
    </td>
{% endif %}

{% if relation_parameters.browserTransformationFeature is not null and relation_parameters.columnCommentsFeature is not null and browse_mime %}
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_mimetype[{{ column_number }}]\" class=\"form-select\">
        <option value=\"\">&nbsp;</option>
        {% if available_mime['mimetype'] is defined and available_mime['mimetype'] is iterable %}
          {% for media_type in available_mime['mimetype'] %}
            <option value=\"{{ media_type|replace({'/': '_'}) }}\"
              {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['mimetype'] is defined
                and mime_map[column_meta['Field']]['mimetype'] == media_type|replace({'/': '_'}) ? ' selected' }}>
              {{ media_type|lower }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_transformation[{{ column_number }}]\" class=\"form-select\">
        <option value=\"\" title=\"{{ t('None') }}\"></option>
        {% if available_mime['transformation'] is defined and available_mime['transformation'] is iterable %}
          {% for mimekey, transform in available_mime['transformation'] %}
            {% set parts = transform|split(':') %}
            <option value=\"{{ available_mime['transformation_file'][mimekey] }}\" title=\"{{ get_description(available_mime['transformation_file'][mimekey]) }}\"
              {{- column_meta['Field'] is defined
                and mime_map[column_meta['Field']]['transformation'] is defined
                and mime_map[column_meta['Field']]['transformation'] is not null
                and mime_map[column_meta['Field']]['transformation'] matches '@' ~ available_mime['transformation_file_quoted'][mimekey] ~ '3?@i' ? ' selected' }}>
              {{ get_name(available_mime['transformation_file'][mimekey]) ~ ' (' ~ parts[0]|lower ~ ':' ~ parts[1] ~ ')' }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_transformation_options[{{ column_number }}]\" size=\"16\" class=\"textfield form-control\" value=\"
        {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['transformation_options'] is defined ? mime_map[column_meta['Field']]['transformation_options'] }}\">
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_input_transformation[{{ column_number }}]\" class=\"form-select\">
        <option value=\"\" title=\"{{ t('None') }}\"></option>
        {% if available_mime['input_transformation'] is defined and available_mime['input_transformation'] is iterable %}
          {% for mimekey, transform in available_mime['input_transformation'] %}
            {% set parts = transform|split(':') %}
            <option value=\"{{ available_mime['input_transformation_file'][mimekey] }}\" title=\"{{ get_description(available_mime['input_transformation_file'][mimekey]) }}\"
              {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['input_transformation'] is defined
                and mime_map[column_meta['Field']]['input_transformation'] matches '@' ~ available_mime['input_transformation_file_quoted'][mimekey] ~ '3?@i' ? ' selected' }}>
              {{ get_name(available_mime['input_transformation_file'][mimekey]) ~ ' (' ~ parts[0]|lower ~ ':' ~ parts[1] ~ ')' }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_input_transformation_options[{{ column_number }}]\" size=\"16\" class=\"textfield form-control\" value=\"
        {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['input_transformation_options'] is defined ? mime_map[column_meta['Field']]['input_transformation_options'] }}\">
      {% set ci = ci + 1 %}
    </td>
{% endif %}
", "columns_definitions/column_attributes.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_attributes.twig");
    }
}
