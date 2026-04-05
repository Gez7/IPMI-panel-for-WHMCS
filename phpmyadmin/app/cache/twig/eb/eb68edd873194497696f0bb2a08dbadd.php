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

/* table/tracking/structure_snapshot_columns.twig */
class __TwigTemplate_9804994a033ea34376de0461b7ff9a78 extends Template
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
        yield "<h3>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
        yield "</h3>
<table id=\"tablestructure\" class=\"table table-striped table-hover w-auto\">
    <thead>
        <tr>
            <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Number", "#"), "html", null, true);
        yield "</th>
            <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
            <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
            <th>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
            <th>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "</th>
            <th>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "</th>
            <th>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Extra"), "html", null, true);
        yield "</th>
            <th>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
        yield "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context["index"] = 1;
        // line 17
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            yield "            <tr class=\"noclick\">
                <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "</td>
                ";
            // line 20
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 20, $this->source); })()) + 1);
            // line 21
            yield "                <td>
                    <strong>
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Field", [], "array", false, false, false, 23), "html", null, true);
            yield "
                        ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Key", [], "array", false, false, false, 24) == "PRI")) {
                // line 25
                yield "                            ";
                yield PhpMyAdmin\Html\Generator::getImage("b_primary", \_gettext("Primary"));
                yield "
                        ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["field"], "Key", [], "array", false, false, false, 26))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                            ";
                yield PhpMyAdmin\Html\Generator::getImage("bd_primary", \_gettext("Index"));
                yield "
                        ";
            }
            // line 29
            yield "                    </strong>
                </td>
                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Type", [], "array", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Collation", [], "array", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Null", [], "array", false, false, false, 33) == "YES")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
                <td>
                    ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Default", [], "array", true, true, false, 35)) {
                // line 36
                yield "                        ";
                $context["extracted_columnspec"] = PhpMyAdmin\Util::extractColumnSpec(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Type", [], "array", false, false, false, 36));
                // line 37
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 37, $this->source); })()), "type", [], "array", false, false, false, 37) == "bit")) {
                    // line 38
                    yield "                            ";
                    // line 39
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::convertBitDefaultValue(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Default", [], "array", false, false, false, 39)), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 41
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Default", [], "array", false, false, false, 41), "html", null, true);
                    yield "
                        ";
                }
                // line 43
                yield "                    ";
            } else {
                // line 44
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Null", [], "array", false, false, false, 44) == "YES")) {
                    // line 45
                    yield "                            <em>NULL</em>
                        ";
                } else {
                    // line 47
                    yield "                            <em>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None for default", "None"), "html", null, true);
                    yield "</em>
                        ";
                }
                // line 49
                yield "                    ";
            }
            // line 50
            yield "                </td>
                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Extra", [], "array", false, false, false, 51), "html", null, true);
            yield "</td>
                <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Comment", [], "array", false, false, false, 52), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "    </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/tracking/structure_snapshot_columns.twig";
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
        return array (  198 => 55,  189 => 52,  185 => 51,  182 => 50,  179 => 49,  173 => 47,  169 => 45,  166 => 44,  163 => 43,  157 => 41,  151 => 39,  149 => 38,  146 => 37,  143 => 36,  141 => 35,  136 => 33,  132 => 32,  128 => 31,  124 => 29,  118 => 27,  116 => 26,  111 => 25,  109 => 24,  105 => 23,  101 => 21,  99 => 20,  95 => 19,  92 => 18,  87 => 17,  85 => 16,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3>{{ t('Structure') }}</h3>
<table id=\"tablestructure\" class=\"table table-striped table-hover w-auto\">
    <thead>
        <tr>
            <th>{{ t('#', context = 'Number') }}</th>
            <th>{{ t('Column') }}</th>
            <th>{{ t('Type') }}</th>
            <th>{{ t('Collation') }}</th>
            <th>{{ t('Null') }}</th>
            <th>{{ t('Default') }}</th>
            <th>{{ t('Extra') }}</th>
            <th>{{ t('Comment') }}</th>
        </tr>
    </thead>
    <tbody>
        {% set index = 1 %}
        {% for field in columns %}
            <tr class=\"noclick\">
                <td>{{ index }}</td>
                {% set index = index + 1 %}
                <td>
                    <strong>
                        {{ field['Field'] }}
                        {% if field['Key'] == 'PRI' %}
                            {{ get_image('b_primary', t('Primary')) }}
                        {% elseif field['Key'] is not empty %}
                            {{ get_image('bd_primary', t('Index')) }}
                        {% endif %}
                    </strong>
                </td>
                <td>{{ field['Type'] }}</td>
                <td>{{ field['Collation'] }}</td>
                <td>{{ field['Null'] == 'YES' ? t('Yes') : t('No') }}</td>
                <td>
                    {% if field['Default'] is defined %}
                        {% set extracted_columnspec = extract_column_spec(field['Type']) %}
                        {% if extracted_columnspec['type'] == 'bit' %}
                            {# here, \$field['Default'] contains something like b'010' #}
                            {{ field['Default']|convert_bit_default_value }}
                        {% else %}
                            {{ field['Default'] }}
                        {% endif %}
                    {% else %}
                        {% if field['Null'] == 'YES' %}
                            <em>NULL</em>
                        {% else %}
                            <em>{{ t('None', context = 'None for default') }}</em>
                        {% endif %}
                    {% endif %}
                </td>
                <td>{{ field['Extra'] }}</td>
                <td>{{ field['Comment'] }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "table/tracking/structure_snapshot_columns.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/structure_snapshot_columns.twig");
    }
}
