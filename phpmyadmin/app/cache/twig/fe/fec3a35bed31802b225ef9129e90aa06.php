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

/* table/tracking/structure_snapshot_indexes.twig */
class __TwigTemplate_e8989215cd3b85773dd55611316ef12a extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Indexes"), "html", null, true);
        yield "</h3>
<table id=\"tablestructure_indexes\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Keyname"), "html", null, true);
        yield "</th>
            <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
            <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
        yield "</th>
            <th>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Packed"), "html", null, true);
        yield "</th>
            <th>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
            <th>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cardinality"), "html", null, true);
        yield "</th>
            <th>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
            <th>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "</th>
            <th>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
        yield "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 18
            yield "            <tr class=\"noclick\">
                <td>
                    <strong>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Key_name", [], "array", false, false, false, 20), "html", null, true);
            yield "</strong>
                </td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Index_type", [], "array", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Non_unique", [], "array", false, false, false, 23) == 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
                <td>";
            // line 24
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Packed", [], "array", false, false, false, 24) != "")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Column_name", [], "array", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Cardinality", [], "array", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Collation", [], "array", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Null", [], "array", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "Comment", [], "array", false, false, false, 29), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return "table/tracking/structure_snapshot_indexes.twig";
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
        return array (  139 => 32,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  97 => 20,  93 => 18,  89 => 17,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3>{{ t('Indexes') }}</h3>
<table id=\"tablestructure_indexes\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>{{ t('Keyname') }}</th>
            <th>{{ t('Type') }}</th>
            <th>{{ t('Unique') }}</th>
            <th>{{ t('Packed') }}</th>
            <th>{{ t('Column') }}</th>
            <th>{{ t('Cardinality') }}</th>
            <th>{{ t('Collation') }}</th>
            <th>{{ t('Null') }}</th>
            <th>{{ t('Comment') }}</th>
        </tr>
    </thead>
    <tbody>
        {% for index in indexes %}
            <tr class=\"noclick\">
                <td>
                    <strong>{{ index['Key_name'] }}</strong>
                </td>
                <td>{{ index['Index_type'] }}</td>
                <td>{{ index['Non_unique'] == 0 ? t('Yes') : t('No') }}</td>
                <td>{{ index['Packed'] != '' ? t('Yes') : t('No') }}</td>
                <td>{{ index['Column_name'] }}</td>
                <td>{{ index['Cardinality'] }}</td>
                <td>{{ index['Collation'] }}</td>
                <td>{{ index['Null'] }}</td>
                <td>{{ index['Comment'] }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "table/tracking/structure_snapshot_indexes.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/structure_snapshot_indexes.twig");
    }
}
