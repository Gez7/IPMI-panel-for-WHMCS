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

/* database/central_columns/edit_table_row.twig */
class __TwigTemplate_0146f7b95d02f3445cea55351b935323 extends Template
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
        yield "<tr>
  <input name=\"orig_col_name[";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "]\" type=\"hidden\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })()), "col_name", [], "array", false, false, false, 2), "html", null, true);
        yield "\">
  <td name=\"col_name\" class=\"text-nowrap\">
    ";
        // line 4
        yield from $this->load("columns_definitions/column_name.twig", 4)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 5
(isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 5, $this->source); })()), "ci" => 0, "ci_offset" => 0, "column_meta" => ["Field" => CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 8, $this->source); })()), "col_name", [], "array", false, false, false, 8)], "has_central_columns_feature" => false, "max_rows" =>         // line 10
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 10, $this->source); })())]));
        // line 12
        yield "  </td>

  <td name=\"col_type\" class=\"text-nowrap\">
    <select class=\"column_type\" name=\"field_type[";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "_1\">
      ";
        // line 16
        yield PhpMyAdmin\Html\Generator::getSupportedDatatypes(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 16, $this->source); })()), "col_type", [], "array", false, false, false, 16)));
        yield "
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_length\">
    <input id=\"field_";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "_2\" type=\"text\" name=\"field_length[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "]\" size=\"8\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 21, $this->source); })()), "col_length", [], "array", false, false, false, 21), "html", null, true);
        yield "\" class=\"textfield\">
    <p class=\"enum_notice\" id=\"enum_notice_";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "_2\">
      <a href=\"#\" class=\"open_enum_editor\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
        yield "</a>
    </p>
  </td>

  <td class=\"text-nowrap\" name=\"col_default\">
    <select name=\"field_default_type[";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "_3\" class=\"default_type\">
      <option value=\"NONE\"";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 29) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 29, $this->source); })()), "DefaultType", [], "array", false, false, false, 29) == "NONE"))) ? (" selected") : (""));
        yield ">
        ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
        yield "
      </option>
      <option value=\"USER_DEFINED\"";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 32) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 32, $this->source); })()), "DefaultType", [], "array", false, false, false, 32) == "USER_DEFINED"))) ? (" selected") : (""));
        yield ">
        ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
        yield "
      </option>
      <option value=\"NULL\"";
        // line 35
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 35, $this->source); })()), "DefaultType", [], "array", false, false, false, 35) == "NULL"))) ? (" selected") : (""));
        yield ">
        NULL
      </option>
      <option value=\"CURRENT_TIMESTAMP\"";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 38) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 38, $this->source); })()), "DefaultType", [], "array", false, false, false, 38) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        yield ">
        CURRENT_TIMESTAMP
      </option>
    </select>
    ";
        // line 42
        if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 42, $this->source); })()) == "textarea")) {
            // line 43
            yield "      <textarea name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "]\" cols=\"15\" class=\"textfield default_value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 43, $this->source); })()), "col_default", [], "array", false, false, false, 43), "html", null, true);
            yield "</textarea>
    ";
        } else {
            // line 45
            yield "      <input type=\"text\" name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "]\" size=\"12\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 45, $this->source); })()), "col_default", [], "array", false, false, false, 45), "html", null, true);
            yield "\" class=\"textfield default_value\">
    ";
        }
        // line 47
        yield "  </td>

  <td name=\"collation\" class=\"text-nowrap\">
    <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "_4\">
      <option value=\"\"></option>
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 53
            yield "        <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 53), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
            yield "\">
          ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 54), [], "array", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 55
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 55), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 55), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 55, $this->source); })()), "col_collation", [], "array", false, false, false, 55) == CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 55))) ? (" selected") : (""));
                yield ">
              ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 56), "html", null, true);
                yield "
            </option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "        </optgroup>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_attribute\">
    ";
        // line 65
        yield from $this->load("columns_definitions/column_attribute.twig", 65)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 66
(isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 66, $this->source); })()), "ci" => 5, "ci_offset" => 0, "column_meta" => [], "extracted_columnspec" => ["attribute" => CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 70, $this->source); })()), "col_attribute", [], "array", false, false, false, 70)], "submit_attribute" => false, "attribute_types" =>         // line 72
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 72, $this->source); })())]));
        // line 74
        yield "  </td>

  <td class=\"text-nowrap\" name=\"col_isNull\">
    <input name=\"field_null[";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 78
        yield ((((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78) != "NO")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78) != "NOT NULL")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78) != 0))) ? (" checked") : (""));
        yield ">
  </td>

  <td class=\"text-nowrap\" name=\"col_extra\">
    <input name=\"col_extra[";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "_7\" type=\"checkbox\" value=\"auto_increment\"";
        // line 83
        yield ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 83, $this->source); })()), "col_extra", [], "array", false, false, false, 83)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 83, $this->source); })()), "col_extra", [], "array", false, false, false, 83) == "auto_increment"))) ? (" checked") : (""));
        yield ">
  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/central_columns/edit_table_row.twig";
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
        return array (  236 => 83,  231 => 82,  224 => 78,  219 => 77,  214 => 74,  212 => 72,  211 => 70,  210 => 66,  209 => 65,  203 => 61,  196 => 59,  187 => 56,  178 => 55,  174 => 54,  167 => 53,  163 => 52,  156 => 50,  151 => 47,  143 => 45,  135 => 43,  133 => 42,  126 => 38,  120 => 35,  115 => 33,  111 => 32,  106 => 30,  102 => 29,  96 => 28,  88 => 23,  84 => 22,  76 => 21,  68 => 16,  62 => 15,  57 => 12,  55 => 10,  54 => 8,  53 => 5,  52 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr>
  <input name=\"orig_col_name[{{ row_num }}]\" type=\"hidden\" value=\"{{ row['col_name'] }}\">
  <td name=\"col_name\" class=\"text-nowrap\">
    {% include 'columns_definitions/column_name.twig' with {
      'column_number': row_num,
      'ci': 0,
      'ci_offset': 0,
      'column_meta': {'Field': row['col_name']},
      'has_central_columns_feature': false,
      'max_rows': max_rows
    } only %}
  </td>

  <td name=\"col_type\" class=\"text-nowrap\">
    <select class=\"column_type\" name=\"field_type[{{ row_num }}]\" id=\"field_{{ row_num }}_1\">
      {{ get_supported_datatypes(row['col_type']|upper) }}
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_length\">
    <input id=\"field_{{ row_num }}_2\" type=\"text\" name=\"field_length[{{ row_num }}]\" size=\"8\" value=\"{{ row['col_length'] }}\" class=\"textfield\">
    <p class=\"enum_notice\" id=\"enum_notice_{{ row_num }}_2\">
      <a href=\"#\" class=\"open_enum_editor\">{{ t('Edit ENUM/SET values') }}</a>
    </p>
  </td>

  <td class=\"text-nowrap\" name=\"col_default\">
    <select name=\"field_default_type[{{ row_num }}]\" id=\"field_{{ row_num }}_3\" class=\"default_type\">
      <option value=\"NONE\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'NONE' ? ' selected' }}>
        {{ t('None', context = 'for default') }}
      </option>
      <option value=\"USER_DEFINED\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'USER_DEFINED' ? ' selected' }}>
        {{ t('As defined:') }}
      </option>
      <option value=\"NULL\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'NULL' ? ' selected' }}>
        NULL
      </option>
      <option value=\"CURRENT_TIMESTAMP\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'CURRENT_TIMESTAMP' ? ' selected' }}>
        CURRENT_TIMESTAMP
      </option>
    </select>
    {% if char_editing == 'textarea' %}
      <textarea name=\"field_default_value[{{ row_num }}]\" cols=\"15\" class=\"textfield default_value\">{{ row['col_default'] }}</textarea>
    {% else %}
      <input type=\"text\" name=\"field_default_value[{{ row_num }}]\" size=\"12\" value=\"{{ row['col_default'] }}\" class=\"textfield default_value\">
    {% endif %}
  </td>

  <td name=\"collation\" class=\"text-nowrap\">
    <select lang=\"en\" dir=\"ltr\" name=\"field_collation[{{ row_num }}]\" id=\"field_{{ row_num }}_4\">
      <option value=\"\"></option>
      {% for charset in charsets %}
        <optgroup label=\"{{ charset.getName() }}\" title=\"{{ charset.getDescription() }}\">
          {% for collation in collations[charset.getName()] %}
            <option value=\"{{ collation.getName() }}\" title=\"{{ collation.getDescription() }}\"{{ row['col_collation'] == collation.getName() ? ' selected' }}>
              {{ collation.getName() }}
            </option>
          {% endfor %}
        </optgroup>
      {% endfor %}
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_attribute\">
    {% include 'columns_definitions/column_attribute.twig' with {
      'column_number': row_num,
      'ci': 5,
      'ci_offset': 0,
      'column_meta': [],
      'extracted_columnspec': {'attribute': row['col_attribute']},
      'submit_attribute': false,
      'attribute_types': attribute_types
    } only %}
  </td>

  <td class=\"text-nowrap\" name=\"col_isNull\">
    <input name=\"field_null[{{ row_num }}]\" id=\"field_{{ row_num }}_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"
      {{- row['col_isNull'] is not empty and row['col_isNull'] != 'NO' and row['col_isNull'] != 'NOT NULL' and row['col_isNull'] != 0 ? ' checked' }}>
  </td>

  <td class=\"text-nowrap\" name=\"col_extra\">
    <input name=\"col_extra[{{ row_num }}]\" id=\"field_{{ row_num }}_7\" type=\"checkbox\" value=\"auto_increment\"
      {{- row['col_extra'] is not empty and row['col_extra'] == 'auto_increment' ? ' checked' }}>
  </td>
</tr>
", "database/central_columns/edit_table_row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/central_columns/edit_table_row.twig");
    }
}
