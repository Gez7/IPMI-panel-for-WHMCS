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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_5f0c43bbec8aaf940d853afd179b5074 extends Template
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
        yield "<div class=\"responsivetable\">
<template id=\"collation_select_options\">
  <option value=\"\"></option>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 5
            yield "    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 5), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 5), "html", null, true);
            yield "\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 7
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 7), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 7), "html", null, true);
                yield "\">";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 8), "html", null, true);
                // line 9
                yield "</option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "    </optgroup>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "</template>
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
        yield "
        ";
        // line 17
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_TABLE");
        yield "
    </caption>
    <tr>
        <th>
            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "
            ";
        // line 25
        yield PhpMyAdmin\Html\MySQLDocumentation::show("data-types");
        yield "
        </th>
        <th>
            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Length/Values"), "html", null, true);
        yield "
            ";
        // line 29
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        yield "
        </th>
        <th>
            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "
            ";
        // line 33
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        yield "
        </th>
        <th>
            ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Attributes"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "
        </th>

        ";
        // line 46
        yield "        ";
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 46, $this->source); })())))) {
            // line 47
            yield "            <th>
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
            yield "
                ";
            // line 49
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
            yield "
            </th>
        ";
        }
        // line 52
        yield "
        ";
        // line 56
        yield "        ";
        if ((($tmp =  !(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "            <th>
                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 61
        yield "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comments"), "html", null, true);
        yield "
        </th>

        ";
        // line 69
        if ((($tmp = (isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "            <th>
                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Virtuality"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 74
        yield "
        ";
        // line 75
        if (array_key_exists("fields_meta", $context)) {
            // line 76
            yield "            <th>
                ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move column"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 81, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 81)) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 81, $this->source); })()))) {
            // line 82
            yield "            <th>
                ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Media type"), "html", null, true);
            yield "
            </th>
            <th>
                <a href=\"";
            // line 86
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#transformation\" title=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of available transformations and their options"), "html", null, true);
            // line 88
            yield "\" target=\"_blank\">
                    ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation"), "html", null, true);
            yield "
                </a>
            </th>
            <th>
                ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation options"), "html", null, true);
            yield "
                ";
            // line 94
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
            <th>
                <a href=\"";
            // line 97
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#input_transformation\"
                   title=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of available transformations and their options"), "html", null, true);
            yield "\"
                   target=\"_blank\">
                    ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation"), "html", null, true);
            yield "
                </a>
            </th>
            <th>
                ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation options"), "html", null, true);
            yield "
                ";
            // line 105
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
        ";
        }
        // line 108
        yield "    </tr>
    ";
        // line 109
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 110
        yield "    ";
        if ((($tmp = (isset($context["supports_stored_keyword"]) || array_key_exists("supports_stored_keyword", $context) ? $context["supports_stored_keyword"] : (function () { throw new RuntimeError('Variable "supports_stored_keyword" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 111, $this->source); })()), ["STORED" => "STORED"]);
            // line 112
            yield "    ";
        } else {
            // line 113
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 113, $this->source); })()), ["PERSISTENT" => "PERSISTENT"]);
            // line 114
            yield "    ";
        }
        // line 115
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 116
            yield "        <tr>
            ";
            // line 117
            yield from $this->load("columns_definitions/column_attributes.twig", 117)->unwrap()->yield(CoreExtension::toArray(Twig\Extension\CoreExtension::merge($context["content_row"], ["options" =>             // line 118
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 118, $this->source); })()), "change_column" =>             // line 119
(isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 119, $this->source); })()), "is_virtual_columns_supported" =>             // line 120
(isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 120, $this->source); })()), "browse_mime" =>             // line 121
(isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 121, $this->source); })()), "max_rows" =>             // line 122
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 122, $this->source); })()), "char_editing" =>             // line 123
(isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 123, $this->source); })()), "attribute_types" =>             // line 124
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 124, $this->source); })()), "privs_available" =>             // line 125
(isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 125, $this->source); })()), "max_length" =>             // line 126
(isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 126, $this->source); })()), "relation_parameters" =>             // line 127
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 127, $this->source); })())])));
            // line 129
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['content_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "</table>
<script>
  function populate_collation_select() {
    const select = this;
    const selectOptions = document.getElementById('collation_select_options').content.cloneNode(true);
    select.appendChild(selectOptions);
    const selectedValue = select.dataset.selected;
    if (selectedValue) {
      select.value = selectedValue;
    }
    \$(select).off('focus', populate_collation_select);
  }

  \$('.collation-select').on('focus', populate_collation_select);
  \$('.collation-select[data-selected]').each(populate_collation_select);
</script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/table_fields_definitions.twig";
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
        return array (  335 => 131,  328 => 129,  326 => 127,  325 => 126,  324 => 125,  323 => 124,  322 => 123,  321 => 122,  320 => 121,  319 => 120,  318 => 119,  317 => 118,  316 => 117,  313 => 116,  308 => 115,  305 => 114,  302 => 113,  299 => 112,  296 => 111,  293 => 110,  291 => 109,  288 => 108,  282 => 105,  278 => 104,  271 => 100,  266 => 98,  262 => 97,  256 => 94,  252 => 93,  245 => 89,  242 => 88,  240 => 87,  237 => 86,  231 => 83,  228 => 82,  226 => 81,  223 => 80,  217 => 77,  214 => 76,  212 => 75,  209 => 74,  203 => 71,  200 => 70,  198 => 69,  192 => 66,  185 => 61,  179 => 58,  176 => 57,  173 => 56,  170 => 52,  164 => 49,  160 => 48,  157 => 47,  154 => 46,  148 => 42,  142 => 39,  136 => 36,  130 => 33,  126 => 32,  120 => 29,  116 => 28,  110 => 25,  106 => 24,  100 => 21,  93 => 17,  89 => 16,  84 => 13,  77 => 11,  70 => 9,  68 => 8,  62 => 7,  58 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"responsivetable\">
<template id=\"collation_select_options\">
  <option value=\"\"></option>
  {% for charset in charsets %}
    <optgroup label=\"{{ charset.name }}\" title=\"{{ charset.description }}\">
      {% for collation in charset.collations %}
        <option value=\"{{ collation.name }}\" title=\"{{ collation.description }}\">
          {{- collation.name -}}
        </option>
      {% endfor %}
    </optgroup>
  {% endfor %}
</template>
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        {{ t('Structure') }}
        {{ show_mysql_docu('CREATE_TABLE') }}
    </caption>
    <tr>
        <th>
            {{ t('Name') }}
        </th>
        <th>
            {{ t('Type') }}
            {{ show_mysql_docu('data-types') }}
        </th>
        <th>
            {{ t('Length/Values') }}
            {{ show_hint(t('If column type is \"enum\" or \"set\", please enter the values using this format: \\'a\\',\\'b\\',\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').')) }}
        </th>
        <th>
            {{ t('Default') }}
            {{ show_hint(t('For default values, please enter just a single value, without backslash escaping or quotes, using this format: a')) }}
        </th>
        <th>
            {{ t('Collation') }}
        </th>
        <th>
            {{ t('Attributes') }}
        </th>
        <th>
            {{ t('Null') }}
        </th>

        {# Only for 'Edit' Column(s) #}
        {% if change_column is defined and change_column is not empty %}
            <th>
                {{ t('Adjust privileges') }}
                {{ show_docu('faq', 'faq6-39') }}
            </th>
        {% endif %}

        {# We could remove this 'if' and let the key information be shown and
           editable. However, for this to work, structure.lib.php must be
           modified to use the key fields, as tbl_addfield does. #}
        {% if not is_backup %}
            <th>
                {{ t('Index') }}
            </th>
        {% endif %}

        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            {{ t('Comments') }}
        </th>

        {% if is_virtual_columns_supported %}
            <th>
                {{ t('Virtuality') }}
            </th>
        {% endif %}

        {% if fields_meta is defined %}
            <th>
                {{ t('Move column') }}
            </th>
        {% endif %}

        {% if relation_parameters.browserTransformationFeature is not null and browse_mime %}
            <th>
                {{ t('Media type') }}
            </th>
            <th>
                <a href=\"{{ url('/transformation/overview') }}#transformation\" title=\"
                    {{- t('List of available transformations and their options') -}}
                    \" target=\"_blank\">
                    {{ t('Browser display transformation') }}
                </a>
            </th>
            <th>
                {{ t('Browser display transformation options') }}
                {{ show_hint(t('Please enter the values for transformation options using this format: \\'a\\', 100, b,\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').')) }}
            </th>
            <th>
                <a href=\"{{ url('/transformation/overview') }}#input_transformation\"
                   title=\"{{ t('List of available transformations and their options') }}\"
                   target=\"_blank\">
                    {{ t('Input transformation') }}
                </a>
            </th>
            <th>
                {{ t('Input transformation options') }}
                {{ show_hint(t('Please enter the values for transformation options using this format: \\'a\\', 100, b,\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').')) }}
            </th>
        {% endif %}
    </tr>
    {% set options = {'': '', 'VIRTUAL': 'VIRTUAL'} %}
    {% if supports_stored_keyword %}
        {% set options = options|merge({'STORED': 'STORED'}) %}
    {% else %}
        {% set options = options|merge({'PERSISTENT': 'PERSISTENT'}) %}
    {% endif %}
    {% for content_row in content_cells %}
        <tr>
            {% include 'columns_definitions/column_attributes.twig' with content_row|merge({
                'options': options,
                'change_column': change_column,
                'is_virtual_columns_supported': is_virtual_columns_supported,
                'browse_mime': browse_mime,
                'max_rows': max_rows,
                'char_editing': char_editing,
                'attribute_types': attribute_types,
                'privs_available': privs_available,
                'max_length': max_length,
                'relation_parameters': relation_parameters
            }) only %}
        </tr>
    {% endfor %}
</table>
<script>
  function populate_collation_select() {
    const select = this;
    const selectOptions = document.getElementById('collation_select_options').content.cloneNode(true);
    select.appendChild(selectOptions);
    const selectedValue = select.dataset.selected;
    if (selectedValue) {
      select.value = selectedValue;
    }
    \$(select).off('focus', populate_collation_select);
  }

  \$('.collation-select').on('focus', populate_collation_select);
  \$('.collation-select[data-selected]').each(populate_collation_select);
</script>
</div>
", "columns_definitions/table_fields_definitions.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/table_fields_definitions.twig");
    }
}
