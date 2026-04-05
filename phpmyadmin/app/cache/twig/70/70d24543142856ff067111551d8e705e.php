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

/* table/tracking/report_table.twig */
class __TwigTemplate_a58ab6404e3c42cdfb8b12c2f64020c8 extends Template
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
        yield "<table id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_id"]) || array_key_exists("table_id", $context) ? $context["table_id"] : (function () { throw new RuntimeError('Variable "table_id" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Number", "#"), "html", null, true);
        yield "</th>
            <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Date"), "html", null, true);
        yield "</th>
            <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Username"), "html", null, true);
        yield "</th>
            <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header_message"]) || array_key_exists("header_message", $context) ? $context["header_message"] : (function () { throw new RuntimeError('Variable "header_message" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</th>
            <th>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 13
            yield "            <tr class=\"noclick\">
                <td class=\"text-end\"><small>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "line_number", [], "any", false, false, false, 14), "html", null, true);
            yield "</small></td>
                <td><small>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "date", [], "any", false, false, false, 15), "html", null, true);
            yield "</small></td>
                <td><small>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "username", [], "any", false, false, false, 16), "html", null, true);
            yield "</small></td>
                <td>";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "formated_statement", [], "any", false, false, false, 17);
            yield "</td>
                <td class=\"text-nowrap\">
                    <a class=\"delete_entry_anchor ajax\" href=\"";
            // line 19
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
            yield "\" data-post=\"";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "url_params", [], "any", false, false, false, 20);
            yield "\">
                        ";
            // line 21
            yield (isset($context["drop_image_or_text"]) || array_key_exists("drop_image_or_text", $context) ? $context["drop_image_or_text"] : (function () { throw new RuntimeError('Variable "drop_image_or_text" does not exist.', 21, $this->source); })());
            yield "
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        return "table/tracking/report_table.twig";
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
        return array (  114 => 26,  103 => 21,  99 => 20,  96 => 19,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  76 => 13,  72 => 12,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table id=\"{{ table_id }}\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>{{ t('#', context = 'Number') }}</th>
            <th>{{ t('Date') }}</th>
            <th>{{ t('Username') }}</th>
            <th>{{ header_message }}</th>
            <th>{{ t('Action') }}</th>
        </tr>
    </thead>
    <tbody>
        {% for entry in entries %}
            <tr class=\"noclick\">
                <td class=\"text-end\"><small>{{ entry.line_number }}</small></td>
                <td><small>{{ entry.date }}</small></td>
                <td><small>{{ entry.username }}</small></td>
                <td>{{ entry.formated_statement|raw }}</td>
                <td class=\"text-nowrap\">
                    <a class=\"delete_entry_anchor ajax\" href=\"{{ url('/table/tracking') }}\" data-post=\"
                        {{- entry.url_params|raw }}\">
                        {{ drop_image_or_text|raw }}
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "table/tracking/report_table.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/report_table.twig");
    }
}
